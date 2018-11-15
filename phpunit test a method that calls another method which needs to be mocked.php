<?php

namespace Tests\Feature;

use Tests\TestCase;

class exampleTest extends TestCase
{
    public function testExample()
    {
        $myClassMocked = $this->getMockBuilder(MyAwesomeClass::class)
            ->setMethods(array('outsideWorld'))
            ->getMock();

        $myClassMocked->expects($this->any())
            ->method('outsideWorld')
            ->willReturn(1);

        $this->assertEquals(6, $myClassMocked->add5());
    }
}

class MyAwesomeClass
{
    public function add5()
    {
        return $this->outsideWorld() + 5;
    }

    public function outsideWorld()
    {
        sleep(10);
        return 9999;
    }
}
