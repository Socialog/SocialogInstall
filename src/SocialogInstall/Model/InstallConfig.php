<?php

namespace SocialogInstall\Model;

use Socialog\Model\AbstractModel;

class InstallConfig extends AbstractModel
{

    protected $server = 'localhost';
    protected $port = '3306';
    protected $username;
    protected $password;
    protected $database;
    protected $type;

    protected $inputFilter = array(
        'server' => array(
            'required' => true,
        ),
        'port' => array(
            'required' => true,
            'validators' => array(
                array('name' => 'Digits'),
            )
        ),
        'username' => array(
            'required' => true,
        ),
        'database' => array(
            'required' => true,
        ),
    );

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getServer()
    {
        return $this->server;
    }

    public function setServer($server)
    {
        $this->server = $server;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function setPort($port)
    {
        $this->port = $port;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getDatabase()
    {
        return $this->database;
    }

    public function setDatabase($database)
    {
        $this->database = $database;
    }

}