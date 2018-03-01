<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Travis\Test;

class TravisTest extends TestCase
{

    public function testGetName()
    {
        $travis = new Test('Artem');
        $this->assertEquals('Artem', $travis->getName());
    }

}