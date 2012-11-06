<?php

namespace SocialogInstall\Controller;

use SocialogInstall\Form\InstallForm;
use SocialogInstall\Model\InstallConfig;
use Zend\ModuleManager\Listener\ConfigListener;
use Zend\ModuleManager\ModuleManager;
use Zend\Mvc\Controller\AbstractActionController;

/**
 * Installer
 */
class InstallController extends AbstractActionController
{
    /**
     * Installation
     */
    public function indexAction()
    {
        $this->layout('socialog-install/layout');

        $sm = $this->getServiceLocator();
        $request = $this->getRequest();

        $installConfiguration = new InstallConfig;

        $installForm = new InstallForm;
        $installForm->bind($installConfiguration);
        $installForm->setInputFilter($installConfiguration->getInputFilter());

        if ($request->isPost()) {
            $post = $this->params()->fromPost();
            $installForm->setData($post);

            if ($installForm->isValid()) {
                /* @var $installer Installer */
                $installer = $sm->get('socialoginstall_service_installer');
                $installer->configureDatabase($installConfiguration);
                return $this->redirect()->toRoute('socialog-install', array(
                    'action' => 'data',
                ));
            }
        }

        return array(
            'installForm' => $installForm,
        );
    }

    /**
     * Populate the database with data
     */
    public function dataAction()
    {
        $this->layout('socialog-install/layout');
        
        $sm = $this->getServiceLocator();

        /* @var $installer Installer */
        $installer = $sm->get('socialoginstall_service_installer');
        $installer->populateDatabase();
        
        return array();
    }
 
    /**
     * Manages which modules should be activated
     */
    public function moduleAction()
    {
        $this->layout('socialog-install/layout');
        
        $sm = $this->getServiceLocator();
        
        $appConfig = $sm->get('ApplicationConfig');
        
        $module_paths = $appConfig['module_listener_options']['module_paths'];
       
        $modules = array();
        foreach ($module_paths as $module_path)
        {
            foreach (glob($module_path . "/Socialog*") as $filename) 
            {
                $modules[] = basename($filename);
            }
        }
    }
}
