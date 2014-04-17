<?php

namespace SONUser\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UsersController extends AbstractActionController {

    /**
     * @var $em \Doctrine\ORM\EntityManager
     */
    private $em;
    private $form;

    public function __construct()
  {
        $this->form = new UserForm;
    }
    public function indexAction() 
   {
        $list = $this->getEm()
                ->getRepository('SONUser\Entity\User')
                ->findAll();
        
        return new ViewModel(Array('data'=>$list));
    }
    
    public newaction()
    {
        $form = $this->form;
        
        $request 
    }        
    /**
     * @return \Doctrine\ORM\EntityManager
     */
    private function getEm() {
        return $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
//        return $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
    }
}