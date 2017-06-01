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
        $article = [];
        $comment = [];
        $this->render(
                'blog/index.html.php', ['article' => $article, 'comment' => $comment]
        );
    }

}
