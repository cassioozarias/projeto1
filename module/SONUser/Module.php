<?php

namespace SONUser;

use  Zend\Mvc\ModuleRouteListener;
use  Zend\Mvc\MvcEvent;

use SONUser\Service\User as UserService;

class Module 
{

    public function onBootstrap(MvcEvent $e)
    {
        $eventManager = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener-> attach($eventManager);
    }        

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
    
    public function getServiceConfig(){
        return array (
            'factories' => array(
               'SONUser\Service\User' => function ($sm) {
                   $em = $sm->get('Doctrine\ORM\EntityManager');
                   return new UserService($em);            
                }
             )
          );
       }
    public function getAutoloaderConfig() 
     {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}   