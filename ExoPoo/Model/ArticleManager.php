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
        $sqlGetArticles = "SELECT * FROM " . $this->name . " ORDER BY date DESC LIMIT :number";
        $sth = $this->factory->prepare($sqlGetArticles);

        $sth->bindValue(':number', (int) $number, \PDO::PARAM_INT);
        $sth->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, Article::class);
        $sth->execute();

        return $sth->fetchAll();
    }

    /**
     * 
     * @param type $id
     * @return \Model\ArticleManager
     */
    public function getById($id) {
        $sqlGetArticle = "SELECT * FROM " . $this->name . " WHERE id = :id";      //:number";
        $sth = $this->factory->prepare($sqlGetArticle);

        $sth->bindValue(':id', $id);
        $sth->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, Article::class);
        $sth->execute();

        return $sth->fetch();
    }

}
