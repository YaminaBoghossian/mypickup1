<?php

class Users {
    
   private $username;
   private $password;
   private $picture;
   private $email;

   function __construct($username, $password, $email) {
       $this->username = $username;
       $this->password = $password;
       $this->email= $email;
       
   }
   
   function getUsername() {
       return $this->username;
   }

   function getPassword() {
       return $this->password;
   }

   function getPicture() {
       return $this->picture;
   }

   function getEmail() {
       return $this->email;
   }

   function setUsername($username) {
       $this->username = $username;
   }

   function setPassword($password) {
       $this->password = $password;
   }

   function setPicture($picture) {
       $this->picture = $picture;
   }

   function setEmail($email) {
       $this->email = $email;
   }
   
       function asHtml (){
    return '<pre>Username: '. $this->username.'</pre><pre>Email:'.
    $this->email.'</pre>';
    }
}


