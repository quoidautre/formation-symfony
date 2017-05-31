<?php

namespace Controller;

/**
 * Description of BlogController
 *
 * @author Human Booster
 */
class BlogController {

    /**
     * summary
     *
     * description
     *
     * 
     * @return type
     */
    public function indexAction() {
        $article = new \Model\Article();
        $articleManager = new \Model\ArticleManager();

        $allArticles = $articleManager->getArticles();
        // var_dump($allArticles);

        /*  $article->setContent($allArticles['title'])
          ->setTitle($allArticles['content'])
          ->setDate($allArticles['date']);
         */
        include __DIR__ . '/../View/article.index.html.php';
    }

}
