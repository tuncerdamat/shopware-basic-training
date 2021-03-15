<?php

/**
 * Class Shopware_Controllers_Frontend_RoutingDemonstration
 */
class Shopware_Controllers_Frontend_RoutingDemonstration extends Enlight_Controller_Action
{
    public function preDispatch()
    {
        $currentAction = $this
            ->request()
            ->getActionName();
        
        // If user is not looged in then user id is set to null
        if (null === $this->get('session')->get('sUserId')
            && 'index' === $currentAction) {
            // Redirect to account controller
            $this->redirect([
               'module' => 'frontend',
               'controller' => 'account',
               'action' => 'login', 
               'sTarget' => 'routing_demonstration', 
               'sTargetAction' => 'index' 
            ]);
        }
        
        $this->view->addTemplateDir(__DIR__ . '/../../Resources/views');

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
