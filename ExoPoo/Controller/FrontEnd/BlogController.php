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

}
