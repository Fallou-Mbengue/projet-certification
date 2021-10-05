<?php

namespace App\Controller;

use App\Entity\Patient;
use App\Form\RegistrationFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\PatientRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminPatientController extends AbstractController
{
    /**
     * @Route("/admin_projet", name="app_admin")
     */
    public function index(): Response
    {
        $patients = $this->getDoctrine()->getRepository(Patient::class);
        $patients = $patients->findAll();

        return $this->render('admin_patient/index.html.twig',
        array('patients' => $patients)
        );
    }

    /**
     * @Route("/edit/{id}", name="edit_patient")
     */
    public function editPatient(Request $request, Patient $patient)
    {  
        $form = $this->createForm(RegistrationFormType::class, $patient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($patient);
            $em->flush();
            return $this->redirectToRoute('app_login');
        }

        return $this->render('admin_patient/edit.html.twig',[
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete_patient")
     */
    public function deletePatient($id)
    {
        $em = $this->getDoctrine()->getManager();
        $patient = $this->getDoctrine()->getRepository(Patient::class);
        $patient = $patient->find($id);

        if(!$patient)
        {
            throw $this->createNotFoundException(
                'Il y a pas annonce avec identifiant :'.$id
            );
        }
        
        $em->remove($patient);
        $em->flush();
        
        $this->addFlash('success', 'Patient supprimer!');
        return $this->redirectToRoute('admin_patient');
    }

    /**
     * @Route("/admin/patient", name="admin_patient")
     */
    public function indexPatient(PatientRepository $patientRepository): Response
    {
        $id = $this->getUser('id');
        $patient = $patientRepository->find($id);
        return $this->render('home/view.html.twig',[
            'patient' => $patient

        ]);
    }
}
