<?php

namespace Collab\CollabBundle\Dao\Pdo;

use PDO;

/**
 * Description of BaseDaoPdo
 *
 * @author krishna.acharjee
 */
abstract class BaseDaoPdo
{

    protected $dbTag;

    public function __construct($dbTag) {
        $this->dbTag = $dbTag;
    }

    /**
     *
     * @return \PDO
     */
    public function getConnection() {
        $conn = \ncDatabaseManager::getInstance()->getDatabase($this->dbTag);
        $connObj = $conn->getConnection();
        $connObj->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connObj;
    }

}
