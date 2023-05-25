<?php
namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;
use LaravelDoctrine\ORM\Facades\EntityManager;

/**
 * @ORM\Entity
 * @ORM\Table(name="customers")
 */
class Customers
{
        /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;
     
     /**
     * @ORM\Column(type="string")
     */
    protected $firstname;

     /**
     * @ORM\Column(type="string")
     */
    protected $lastname;

     /**
     * @ORM\Column(type="string")
     */
    protected $email;

     /**
     * @ORM\Column(type="string")
     */
    protected $username;

     /**
     * @ORM\Column(type="string")
     */
    protected $password;

     /**
     * @ORM\Column(type="string")
     */
    protected $gender;

     /**
     * @ORM\Column(type="string")
     */
    protected $country;

     /**
     * @ORM\Column(type="string")
     */
    protected $city;

     /**
     * @ORM\Column(type="string")
     */
    protected $phone;

     /**
     * @ORM\Column(type="string")
     */
    protected $created_at;

     /**
     * @ORM\Column(type="string")
     */
    protected $updated_at;

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setFirstname($firstname){
        $this->firstname = $firstname;
    }

    public function getFirstname(){
        return $this->firstname;
    }

    public function setLastname($lastname){
        $this->lastname = $lastname;
    }

    public function getLastname(){
        return $this->lastname;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setUsername($username){
        return $this->username = $username;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }

    public function getGender(){
        return $this->gender;
    }

    public function setCountry($country){
        $this->country = $country;
    }

    public function getCountry(){
        return $this->country;
    }

    public function setCity($city){
        $this->city = $city;
    }

    public function getCity(){
        return $this->city;
    }

    public function setPhone($phone){
        $this->phone = $phone;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function setCreated($created_at){
        $this->created_at = $created_at;
    }

    public function setUpdated($updated_at){
        $this->updated_at = $updated_at;
    }



}