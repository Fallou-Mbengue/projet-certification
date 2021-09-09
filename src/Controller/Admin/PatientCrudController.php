<?php

namespace App\Controller\Admin;

use App\Entity\Patient;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PatientCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Patient::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('Prenom'),
            TextField::new('Nom'),
            EmailField::new('Email'),
            NumberField::new('Telephone'),
            TextField::new('Adresse'),
        ];
    }
    */
}
