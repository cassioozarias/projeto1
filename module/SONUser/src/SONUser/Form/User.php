<?php

namespace SONUser\form;

use Zend\Form\Form;

class User extends Form
{
    public function __construct($name = null)
{
        parent::__construct('user');
        
        $this->setAttribute('method', 'post');
        
        $id = \Zend\Form\Element\Text('id');
        $this->add($id);
                
        $nome = \Zend\Form\Element\Text('nome');
        $nome->setLabel("Nome: ");
        $this->add($nome);
        
        $email = \Zend\Form\Element\Text('email');
        $email->setLabel("Email: ");
        $this->add($email);
        
        $password = \Zend\Form\Element\Text('password');
        $password->setLabel("Senha: ");
        $this->add($password);
        
        $csrf = \Zend\Form\Element(\Csrf("security"));
        $this -> add($csrf);        
        
        $this->add(array(
            'name' => 'submit',
            'type' => 'zend\Form\Element\Submit',
            'attribute' => array(
                'value' => 'Salvar',
                'class' => 'btn btn-sucess'     
            )
        ));
    }
}