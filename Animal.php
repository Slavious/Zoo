<?php
class Animal
{

    private $catName;

    public function setName($name)
    {
        $this->catName = $name;
    }

    public function getName()
    {
        return $this->catName;
    }
}
