<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\UserController;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true,"Basic result");
    }

    ///function to first unit test UserController
    public function testUserController(){
        $object= new UserController();
        $objecbool=true;
        $this->assertEquals(is_bool(true),$objecbool,"test initial");
    }
}
