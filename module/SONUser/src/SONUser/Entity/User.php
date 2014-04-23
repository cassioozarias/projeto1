<?php

namespace SONUser\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue 
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $nome;

    /**
     * @ORM\Column(type="string")
     */
    protected $email;

    /**
     * @ORM\Column(type="string")
     */
    protected $password;
//
//    /**
//     * @ORM\Column(type="string")
//     */
//    protected $salt;

    /**
     * @ORM\Column(type="boolean", nullable=True)
     */
    protected $active;

//    /**
//     * @ORM\Column(type="string",name="activation_key")
//     */
//    protected $activationkey;
////
////    /**
////     * @ORM\Column(type="string", name="token)
////     */
////    protected $token;
//
//    /**
//     * @ORM\Column(type="datetime", name="created_at")
//     */
//    protected $createAt;
//
//    /**
//     * @ORM\Column(type="datetime", name="updated_at")
//     */
//    protected $updateAt;

//    public function __construct() {
//        $this->salt = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
//        $this->createAt = new \DataTime("now");
//        $this->updateAt = new \DataTime("now");
//        $this->activationkey = sha1($this->email . $this->salt);
////        $this->token = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
//    }

    /**
     * @param mixed $email
     */
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }
    
    public function getPassword() {
        return $this->password;
    }

//    public function getPassword() {
//        return $this->password;
//    }
//
//    public function getSalt() {
//        return $this->salt;
//    }

    public function getActive() {
        return $this->active;
    }
//
//    public function getActivationkey() {
//        return $this->activationkey;
//    }

//    public function getToken() {
//        return $this->token;
//    }
//
//    public function getCreateAt() {
//        return $this->createAt;
//    }
//
//    public function getUpdateAt() {
//        return $this->updateAt;
//    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    
     public function setPassword($password) { 
     $this->password = $password;
     return $this;
    }

//    public function setPassword($password) {
//        $this->password = $password;
//        return $this;
//    }

//    public function setSalt($salt) {
//        $this->salt = $salt;
//        return $this;
//    }
//
    public function setActive($active) {
        $this->active = $active;
        return $this;
    }
//
//    public function setActivationkey($activationkey) {
//        $this->activationkey = $activationkey;
//        return $this;
//    }

//    public function setToken($token) {
//        $this->token = $token;
//        return $this;
//    }

//    public function setCreateAt($createAt) {
//        $this->createAt = $createAt;
//        return $this;
//    }
//
//    public function setUpdateAt($updateAt) {
//        $this->updateAt = $updateAt;
//        return $this;
//    }
    

}
