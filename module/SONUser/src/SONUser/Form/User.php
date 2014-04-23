<?php

namespace SONUser\Form;

use Zend\Form\Form;

class User extends Form
{
    public function __construct($name = null) {       
        parent::__construct('user');
        
        $this->setAttribute('method', 'post');
        
        $id = new \Zend\Form\Element\Hidden('id');
        $this->add($id);
                
        $nome = new \Zend\Form\Element\Text('nome');
        $nome->setLabel("Nome: ");
        $this->add($nome);
        
        $email = new \Zend\Form\Element\Text('email');
        $email->setLabel("Email: ");
        $this->add($email);
        
        $password = new \Zend\Form\Element\Password("password");
        $password->setLabel("Senha: ");
        $this->add($password);
        
//<<<<<<< HEAD
//        $csrf = new \Zend\Form\Element\Csrf("security");
//=======
       $csrf = new \Zend\Form\Element\Csrf('security');
//>>>>>>> [ADD] adicionando new e o index.
        $this->add($csrf);

        $this->add(array(
            'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
//<<<<<<< HEAD
//            'attribute' => array(
//=======
            'attributes' => array(
//>>>>>>> [ADD] adicionando new e o index.
                'value' => 'Salvar',
                'class' => 'btn-success'
            )
        ));
    }

}