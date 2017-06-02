<?php

namespace Controller\FrontEnd;

/**
 * Description of CatalogueController
 *
 * @author Human Booster
 */
class CatalogController extends \Lib\Controller {

    /**
     * 
     */
    public function indexAction() {

        $em = new \Model\CategoryManager();
        $category = $em->get();
        //var_dump($article);
        $this->render(
                'category/index.html.php', ['category' => $category]
        );
    }

    /**
     * 
     */
    public function listcategoryAction() {

        $em = new \Model\ProductManager();
        $category = $em->getByCategory((int) $_GET['id']);

        $this->render(
                'product/index.html.php', ['category' => $category]
        );
    }

}
