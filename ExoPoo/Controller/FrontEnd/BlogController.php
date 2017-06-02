<?php

namespace Controller\FrontEnd;

/**
 * Description of BlogController
 *
 * @author Human Booster
 */
class BlogController extends \Lib\Controller {

    /**
     * summary
     *
     * description
     *
     * @param string $myArgument *description* 
     * 
     * @return type
     */
    public function indexAction() {

        $em = new \Model\ArticleManager();
        $article = $em->getLastArticle();
        //var_dump($article);
        $this->render(
                'blog/index.html.php', ['article' => $article]
        );
    }

    /**
     * 
     */
    public function detailAction() {
        if ((int) $_GET['id']) {
            $em = new \Model\ArticleManager();
            $article = $em->getById((int) $_GET['id']);

            $this->render(
                    'blog/detail.html.php', ['article' => $article]
            );
        } else {
            throw new \Exception("ERROR : You must specify an id");
        }
    }

}
