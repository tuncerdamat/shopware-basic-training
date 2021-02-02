<?php

/**
 * Class Shopware_Controllers_Frontend_RoutingDemonstration
 */
class Shopware_Controllers_Frontend_RoutingDemonstration extends Enlight_Controller_Action
{
    public function preDispatch()
    {
        $this->view->addTemplateDir(__DIR__ . '/../../Resources/views');

        $currentAction = $this
            ->request()
            ->getActionName();

        $this->view
            ->assign('currentAction', $currentAction);
    }

    public function indexAction()
    {
        $this->view->assign('nextPage', 'foo');
    }

    public function fooAction()
    {
        $this->view->assign('nextPage', 'index');
    }
}
