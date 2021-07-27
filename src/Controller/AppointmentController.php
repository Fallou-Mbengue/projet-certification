<?php

namespace App\Controller;

use App\Entity\Appointment;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

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
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('date_de_naissance', DateType::class)
            ->add('email', EmailType::class)
            ->add('numero_de_telephone', NumberType::class)
            ->add('adresse', TextType::class)
            ->add('date_rendez_vous', DateType::class)
            ->add('examen', TextType::class)
            ->add('medecin', TextType::class)
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
                $appointment->setNom($data['nom']);
                $appointment->setPrenom($data['prenom']);
                $appointment->setDateNaiss($data['date_de_naissance']);
                $appointment->setEmail($data['email']);
                $appointment->setNumero($data['numero_de_telephone']);
                $appointment->setAdresse($data['adresse']);
                $appointment->setDateRv($data['date_rendez_vous']);
                $appointment->setExamen($data['examen']);
                $appointment->setMedecin($data['medecin']);
                $appointment->setMessage($data['message']);

                // Persistance dans la base de donnée
                $em = $this->getDoctrine()->getManager();
                $em->persist($appointment);
                $em->flush();
                return $this->redirectToRoute('home');
            }
            return $this->render('appointment/new.html.twig', [
                'form' => $form->createView()
            ]);
    }
}
