<?php

namespace Model;

/**
 * Description of ArticleManager
 *
 * @author Human Booster
 */
class ArticleManager {

    private $pdo;

    public function __construct() {
        $this->pdo = new \PDO('mysql:host=localhost;dbname=mvc;', 'root', '');
    }

    private function getPdo() {
        return $this->pdo;
    }

    public function getArticles() {
        $sql = " SELECT * FROM article;";
        $stmt = $this->getPdo()->query($sql);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

}
