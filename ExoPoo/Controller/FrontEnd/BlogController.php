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
        $this->render(
                'blog/index.html.php', ['block1' => 'azerty', 'block2' => 'qwerty']
        );
    }

}
