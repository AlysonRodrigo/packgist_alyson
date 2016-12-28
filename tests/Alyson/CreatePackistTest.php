<?php
/**
 * Created by PhpStorm.
 * User: alyson
 * Date: 27/12/16
 * Time: 17:51
 */

namespace Alyson\App;

class CreatePackistTest extends \PHPUnit_Framework_TestCase
{
    public function testOlaMundo(){
        $hello = new CreatePackist();
        $string = $hello->olaMundo();
        $this->assertNotNull($string);
        $this->assertInternalType('string',$string);
        $this->assertNotEquals(0,strlen($string));
    }


}