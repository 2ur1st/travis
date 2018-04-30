<?php

namespace Travis;

class Test
{

    private $name;
    
    private $age;

    public function __construct($name)
    {
        $this->name = $name;
        $this->ages = 30;
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
