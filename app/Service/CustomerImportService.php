<?php

namespace App\Service;
 
use App\Interface\CustomerServiceInterface;
use LaravelDoctrine\ORM\Facades\EntityManager;
use App\Entities\Customers;

class CustomerImportService implements CustomerServiceInterface
{
    public function query($parameter=array())
    {
        $customer = new Customers;
        $customer->setFirstname($parameter['firstname']);
        $customer->setLastname($parameter['lastname']);
        $customer->setEmail($parameter['email']);
        $customer->setUsername($parameter['username']);
        $customer->setPassword($parameter['password']);
        $customer->setGender($parameter['gender']);
        $customer->setCountry($parameter['country']);
        $customer->setCity($parameter['city']);
        $customer->setPhone($parameter['phone']);
        $customer->setCreated($parameter['created_at']);
        $customer->setUpdated($parameter['updated_at']);
        EntityManager::persist($customer);
        EntityManager::flush();
    }
    
}