<?php

namespace SONUser\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UsersController extends AbstractActionController

{
 /**
  * @var $em \Doctrine\ORM\EntityManager
  */
  private $em;

 public function indexAction()
 {
     $list =   $this->getEm()
       ->getRpository('SONUser\entity\User')
       ->findAll();
     
       return new ViewModel(Array('data=>$list'));
         
        }
/**
 * @return \Doctrine\ORM\EntityManager
 */      
private function getEm()
{
return $this->getServicerLocator()->get('Doctrine\ORM\Manager');  
   }
}