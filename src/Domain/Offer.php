<?php

namespace Agility\Domain;

class Offer
{

    private $id;
    private $title;
    private $content;
    private $date_publication;
    private $region;


    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    public function getDate_publication()
    {
        return $this->date_publication;
    }

    public function setDate_publication($date_publication)
    {
        $this->date_publication = $date_publication;
        return $this;
    }

    public function getRegion()
    {
      return $this->region;
    }
    public function setRegion($region)
    {
      $this->region = $region;
      return $this;
    }
}
