<?php

namespace App\entity;

class User{
    public int $user_id;
    public string $first_name;
    public string $last_name;
    public string $email;
    public bool $is_admin;
    public string $password;

     //Getters//
     public function getUser_Id(){
        return($this->user_id);
    }

    public function getFirstName(){
        return($this->first_name);
    }

    public function getLastName(){
        return($this->last_name);
    }

    public function getEmail(){
        return($this->email);
    }
    public function getIs_Admin(){
        return($this->is_admin);
    }

    public function getPassword()
    {
        return($this->password);
    }
    


    //Setter//
    public function setUser_Id($newUser_Id){
        $this->user_id = $newUser_id;
    }
    public function setFirstName($newFirstName){
        $this->first_name = $newFirstName;
    }
    public function setLastName($newLastName){
        $this->last_name = $newLastName;
    }
    public function setEmail($newEmail){
        $this->email = $newEmail;
    }
    public function setIs_Admin($newIsAdmin){
        $this->is_admin = $newIsAdmin;
    }
    public function setPassword($newPassword){
        $this->paswword = $newPassword;
    }
    
}