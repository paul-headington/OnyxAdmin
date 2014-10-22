<?php


namespace OnyxAdmin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Session\Container;

class AdminController extends AbstractActionController
{
    protected $eventIdentifier = 'Onyx\Service\EventManger';
    
    public function onDispatch( \Zend\Mvc\MvcEvent $e ){        
        $this->layout('layout/onyxadmin');
        return parent::onDispatch($e);
    }
    
    public function __construct(){
        
    }
    
    public function indexAction()
    {
        
        $return = array();        
        return new ViewModel($return);
    }
    
      
  
}
