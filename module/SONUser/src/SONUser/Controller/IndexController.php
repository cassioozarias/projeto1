<?php

namespace SONUser\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction() {
        /** @var $em \Doctrine\ORM\EntityManager */
//        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
//        
//        $users = $em
//                ->getRepository('SONUser\Entity\User')
//                ->findByEmail('cassioozarias@gmail.com ');
//        return new ViewModel( array('users'=>$users)); 

        $cassio = json_encode(array('nome' => 'cassio', 'idade' => date("d-m-Y H")));
//        $cassio = array('nome' => 'cassio', 'idade' => 23);
//        $cassio = 123;
        return new ViewModel(array('users' => $cassio));
    }
}
