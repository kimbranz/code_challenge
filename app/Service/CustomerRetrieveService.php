<?php

namespace App\Service;
 
use App\Interface\CustomerServiceInterface;
use LaravelDoctrine\ORM\Facades\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;
use App\Entities\Customers;

class CustomerRetrieveService implements CustomerServiceInterface
{
    public function query($para=array())
    {
        $repository = EntityManager::getRepository(Customers::class);
        if($para['by'] == 'all'){
            $data = $repository->findAll();
        }
        else
            $data = $repository->findBy([$para['by'] => $para['value']]);;

        return $data;        
        
    }
    
}