<?php

namespace Collab\CollabBundle\Dao\Pdo;

use Collab\CollabBundle\Util\ConverterUtil;
use Collab\CollabBundle\Util\ClassNameConstant;
use NGBundle\Services\DRStatus\DrStatusManager;
use Collab\CollabBundle\Dao\Pdo\BaseDaoPdo;
use PDO;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * Description of DrStatusDao
 *
 * @DI\Service("article.collab.dao")
 * 
 * @author krishna.acharjee
 */
class ArticleDao extends BaseDaoPdo {

    /**
     * @DI\InjectParams({ "dbTag"=@DI\Inject("%collab.db.tag%")} )
     */
    public function __construct($dbTag) {
        parent::__construct($dbTag);
    }

    public function getArticleById($id) {
        $dbConn = $this->getConnection();
        $sql = 'select ID, NAME, DESCRIPTION from ARTICLE where ID = :id';
        $pdoStmt = $dbConn->prepare($sql);
        $pdoStmt->bindValue(':id', $id, PDO::PARAM_INT);
        $pdoStmt->execute();
        $article = ConverterUtil::convertArraytoObject($pdoStmt->fetch(PDO::FETCH_ASSOC), ClassNameConstant::MODEL_ARTICLE);
        $pdoStmt->closeCursor();
        return $article;
    }

}
