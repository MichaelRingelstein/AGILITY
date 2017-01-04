<?php

namespace Agility\DAO;

use Doctrine\DBAL\Connection;
use Agility\Domain\Offer;

class ArticleDAO
{
    /**
     * Database connection
     *
     * @var \Doctrine\DBAL\Connection
     */
    private $db;

    /**
     * Constructor
     *
     * @param \Doctrine\DBAL\Connection The database connection object
     */
    public function __construct(Connection $db) {
        $this->db = $db;
    }

    /**
     * Return a list of all articles, sorted by date (most recent first).
     *
     * @return array A list of all articles.
     */
    public function findAll() {
        $sql = "select * from t_offers order by id desc";
        $result = $this->db->fetchAll($sql);

        // Convert query result to an array of domain objects
        $offers = array();
        foreach ($result as $row) {
            $offerId = $row['id'];
            $offers[$offerId] = $this->buildArticle($row);
        }
        return $offers;
    }

    /**
     * Creates an Article object based on a DB row.
     *
     * @param array $row The DB row containing Article data.
     * @return \MicroCMS\Domain\Article
     */
    private function buildOffer(array $row) {
        $offer = new Offer();
        $offer->setId($row['id']);
        $offer->setTitle($row['title']);
        $offer->setContent($row['content']);
        return $offer;
    }
}
