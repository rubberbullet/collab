<?php

namespace Collab\CollabBundle\Services;

use Collab\CollabBundle\Dao\Pdo\ArticleDao;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * @DI\Service("article.collab.manager")
 * 
 * @author krishna.acharjee
 */
class ArticleManager {

    private $article;

    /**
     * @DI\InjectParams({
     *  "article" = @DI\Inject("article.collab.dao")
     * })
     */
    public function __construct(ArticleDao $article) {
        $this->article = $article;
    }

    public function getArticleById($id) {
        return $this->article->getArticleById($id);
    }

}
