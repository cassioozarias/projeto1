<?php

namespace SONUser\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

use SONUser\Form\User as UserForm;
use SONUser\Entity\User as UserEntity;
use SONUser\Service\User as UserService;


class UsersController extends AbstractActionController {

    /**
     * @var $em \Doctrine\ORM\EntityManager
     */
    private $em;
    private $form;

    public function __construct() {
//        $this->entity = "SONUser\Entity\User";
        $this->form = new UserForm();
//        $this->service = "SONUser\Service\User";
//        $this->controller = "users";
//        $this->route = "sonuser-admin";
    }

    public function jsonAction() {
        return new JsonModel(
                array(
            'teste' => 'teste'
                )
        );
    }

    public function indexAction() {
        $list = $this->getEm()
                ->getRepository('SONUser\Entity\User')
                ->findAll();

        return new ViewModel(Array('data' => $list));
    }

    public function newAction() {
        $form = $this->form;

        $request = $this->getRequest();

        if ($request->isPost()) {
            $form->setData($request->getPost());
            if ($form->isValid()) {
                $data = $form->getData();
                
                /** @var $userService \SONUser\Service\User */
                $userService = $this->getServiceLocator()->get('SONUser\Service\User');
                $userService->insert($form->getData());

                return $this->redirect()->toRoute('sonuser-admin', array('controller' => 'users'));
            }
        }

        return new ViewModel(array('form'=>$form));
    }

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    private function getEm() {
        return $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
//        return $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
    }
}