<?php

namespace SocialogInstall\Service;

use Socialog\Service\AbstractService;
use SocialogInstall\Model\InstallConfig;
use Zend\Stdlib\ArrayUtils;

class Installer extends AbstractService
{
    /**
     * Configure the database by putting a configuration file
     * in the autoload directory
     * 
     * @param \SocialogInstall\Service\InstallConfig $installConfiguration
     */
    public function configureDatabase(InstallConfig $installConfiguration)
    {
        $sm = $this->getServiceLocator();
        $config = $sm->get('Config');

        $configTemplate = $config['socialog-install']['templates']['database'];
        
        $configTemplate = ArrayUtils::merge($configTemplate, array(
            'doctrine' => array(
                'connection' => array(
                    'orm_default' => array(
                        'params' => array(
                            'host'      => $installConfiguration->getServer(),
                            'port'      => $installConfiguration->getPort(),
                            'dbname'    => $installConfiguration->getDatabase(),
                            'user'      => $installConfiguration->getUsername(),
                            'password'  => $installConfiguration->getPassword(),
                        )
                    )
                ),
            ),
        ));

        $dump = '<?php' . PHP_EOL . 'return ' . var_export($configTemplate, true) . ';';
        file_put_contents('config/autoload/database.local.php', $dump);
    }

    /**
     * Populate the database with data
     */
    public function populateDatabase()
    {
        $sm = $this->getServiceLocator();
        $config = $sm->get('Config');
        $config = $config['socialog-install'];
        
        /* @var $db \Doctrine\DBAL\Connection */
        $db = $sm->get('socialog_dbal');

        $dump_file = $config['data'][$db->getDatabasePlatform()->getName()];
 
        $db->executeQuery(file_get_contents($dump_file));
    }
}
