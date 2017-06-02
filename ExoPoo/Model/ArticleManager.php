<?php

namespace Model;

/**
 * Description of ArticleManager
 *
 * @author Human Booster
 */
class ArticleManager extends \Lib\EntityManager {

    protected $name = "article";

    /**
     * 
     * @param int $number
     * @return \Model\ArticleManager
     */
    public function getLastArticle(int $number = 3) {
        $pdo = $this->factory;
        $sqlGetArticles = "SELECT * FROM " . $this->name . " ORDER BY date DESC LIMIT " . $number; //:number";
        $sth = $pdo->prepare($sqlGetArticles);

        $sth->execute(); //array(':number' => $number));
        return $sth->fetchAll(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, Article::class);
    }

}
