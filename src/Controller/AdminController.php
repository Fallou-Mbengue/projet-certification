<?php

namespace App\Controller;

use App\Entity\Patient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminPatientController extends AbstractController
{
    /**
     * @Route("/admin/patient", name="admin_patient")
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
    public function editPatient(Request $request, $id)
    {
        $patient = $this->getDoctrine()->getRepository(Patient::class);
        $patient = $patient->find($id);

        if(!$patient)
        {
            throw $this->createNotFoundException(
                ' Aucune patient avec identifiant id'.$id
            );
        }
        
        $patient = new Patient();
        $form = $this->createForm(RegistrationFormType::class, $patient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($patient);
            $em->flush();
            return $this->redirectToRoute('home');
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
}
