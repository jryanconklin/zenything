<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once __DIR__."/../inc/ConnectionTest.php";
    require_once __DIR__."/../src/FirstClass.php";
    require_once __DIR__."/../src/SecondClass.php";

    class RiderTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            // Rider::deleteAll();
            // ::deleteAll();
        }
        function test_getRiderName()
        {
            //Arrange
            $name = "Tom Hanks";
            $id = 1;
            $test_rider = new Rider($name, $id);

            //Act
            $result = $test_rider->getName();

            //Assert
            $this->assertEquals($name, $result);
        }
?>
