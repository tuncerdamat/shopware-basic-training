<?php

/**
 * Class Shopware_Controllers_Frontend_RoutingDemonstration
 */
class Shopware_Controllers_Frontend_RoutingDemonstration extends Enlight_Controller_Action
{
    public function preDispatch()
    {
        $this->view->addTemplateDir(__DIR__ . '/../../Resources/views');
    }

    public function indexAction()
    {
        
    }
}