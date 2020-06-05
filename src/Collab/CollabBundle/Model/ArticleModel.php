<?php

namespace Collab\CollabBundle\Model;

use Collab\CollabBundle\Model\AbstractBaseModel;

class ArticleModel extends AbstractBaseModel
{

    private $id;
    private $name;
    private $description;

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDescription($description) {
        $this->description = $description;
    }
    
    public function getConverterMap() {
        return array(
            "ID" => "id",
            "NAME" => "name",
            "DESCRIPTION" => "description"
        );
    }

}
