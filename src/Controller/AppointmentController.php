<?php

namespace App\Controller;

use App\Entity\Appointment;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class AppointmentController extends AbstractController
{
    /**
     * @Route("/appointment", name="appointment")
     */
    public function index(): Response
    {
        return $this->render('appointment/index.html.twig', [
            'controller_name' => 'AppointmentController',
        ]);
    }

    /**
     * @Route("/appointment/new", name="app_appointment")
     */
    public function createAppointment(Request $request): Response 
    {
        // création de formulaire 
        $form = $this->createFormBuilder()
        ->add('date_rendez_vous', DateType::class, [
            'label' => 'Date de Rendez-vous'
        ]
        )
        ->add('service', ChoiceType::class, [
            'label' => 'Services',
            'choices' => [
                'services' => 'service',
                'Radiographie' => 'Radiographie',
                'Mammographie' => 'Mommographie',
                'Echographie Doppler' => 'Echographie Doppler',
                'Panoramique Dentaire' => 'Panoramique Dentaire',
                'Radiologie Interventionnelle' => 'Radiologie Interventionnelle'
            ]
        ]
        )
        ->add('heure',ChoiceType::class, [
            'label' => 'Heure de rendez-vous',
            'choices' => [
                'Sélectionner heure de Rendez-vous' => 'heure',
                '09h:00' => '09h:00',
                '10h:00' => '10h:00',
                '11h:00' => '11h:00',
                '12h:00' => '12h:00',
                '13h:00' => '13h:00',
                '15h:00' => '15h:00',
                '16h:00' => '16h:00'
            ]
        ]
        )
        ->add('examen', ChoiceType::class, [
            'label' => 'Examen',
            'choices' => [
                'Choisir examen' => 'Examen',
                'IRM' => 'IRM',
                'Radio' => 'Radio',
                'Scanner' => 'Scanner'
            ]
        ]
        )
        ->add('type_examen', ChoiceType::class, [
            'label' => 'Type Examen',
            'choices' => [
                'Choisir type examen' => 'Types',
                'type1' => 'type1',
                'type2' => 'type2',
                'type3' => 'type3'
            ]
        ]
        )
        ->add('prescripteur', ChoiceType::class, [
            'label' => 'Prescripteur',
            'choices' => [
                'Choisissez un medecin' => 'medecin',
                'Dr Mbengue' => 'Dr Mbengue',
                'Dr Diop' => 'Dr Diop',
                'Dr Diakhate' => 'Dr Diakhate'
            ]
        ]
        )
        ->add('message', TextareaType::class)
        ->add('save', SubmitType::class, ['label' => 'Prendre rendez-vous'])
        ->getForm();

            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid())
            {
                // Récupération des données du formulaire
                $data = $form->getData();

                // Instanciation de la classe appointment
                $appointment = new Appointment();
                $appointment->setDateRv($data['date_rendez_vous']);
                $appointment->setService($data['service']);
                $appointment->setHeure($data['heure']);
                $appointment->setTypeExamen($data['type_examen']);
                $appointment->setExamen($data['examen']);
                $appointment->setPrescripteur($data['prescripteur']);
                $appointment->setMessage($data['message']);
                $appointment->setPatient($this->getUser());

                // Persistance dans la base de donnée
                $em = $this->getDoctrine()->getManager();
                $em->persist($appointment);
                $em->flush();
                return $this->redirectToRoute('admin_patient');
            }
            return $this->render('appointment/new.html.twig', [
                'form' => $form->createView()
            ]);
    }
}
