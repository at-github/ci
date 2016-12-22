<?php
require_once 'app/AppController.php';

/**
 * FakeClassTest
 *
 * @package default
 * @author Tarik
 */
class AppControllerTest extends PHPUnit_Framework_TestCase
{
    public function testPhp7CanDo()
    {
        $result = (new app\AppController())->php7CanDo();
        $this->assertEquals(1, $result);
    }
}
