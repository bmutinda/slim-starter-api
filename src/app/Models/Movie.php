<?php


namespace MyAppNamespace\Models;


/**
 * Class Movie
 * @package MyAppNamespace\Models
 */
class Movie extends BaseModel
{

    private $id;
    private $title;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }


    public function toJson()
    {
        return [
            "id" => $this->getId(),
            "title" => $this->getTitle()
        ];
    }
}