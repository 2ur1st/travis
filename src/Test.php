<?php

namespace Travis;

class Test
{

    private $name;

    /**
     * @var int
     */
    private $age;

    public function __construct($name)
    {
        $this->name = $name;
        $this->age = "30";
        $this->gender = 'male';
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
