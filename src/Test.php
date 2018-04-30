<?php

namespace Travis;

class Test
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $age;

    public function __construct($name)
    {
        $this->name = $name;
        $this->name = $name;
        $this->age = "30";
        $this->gender = 'male';
    }

    /**
     * @return int
     */
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
