<?php

namespace SocialogInstall\Form;

use Zend\Form\Element\Select;
use Zend\Form\Form;
use Zend\Stdlib\Hydrator\ClassMethods;


class InstallForm extends Form
{
    public function __construct()
    {
        parent::__construct('install');
        
        $this->setAttribute('method', 'post');
        $this->setAttribute('class', 'form-horizontal');
        

        $status = new Select('type');
        $status->setValueOptions(array(
           'Pdo_Mysql' => 'MySQL',
           'Pdo_MSSQL' => 'Microsoft SQL Server',
        ));

        $this->add($status);
        
        $this->add(array(
            'name' => 'server',
            'attributes' => array(
                'value' => 'localhost',
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Server',
            ),
        ));
        
        $this->add(array(
            'name' => 'port',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Port',
            ),
        ));
 
        $this->add(array(
            'name' => 'username',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Username',
            ),
        ));

        $this->add(array(
            'name' => 'password',
            'attributes' => array(
                'type'          => 'text',
                'placeholder'   => ''
            ),
            'options' => array(
                'label' => 'Password',
            ),
        ));

        $this->add(array(
            'name' => 'database',
            'attributes' => array(
                'type'          => 'text',
                'placeholder'   => ''
            ),
            'options' => array(
                'label' => 'Database',
            ),
        ));
        
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Install',
                'id' => 'submitbtn',
                'class' => 'btn btn-primary',
            ),
        ));


        $this->setHydrator(new ClassMethods(false));
    }
}