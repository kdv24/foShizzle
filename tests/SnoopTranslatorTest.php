<?php
    require_once "src/SnoopTranslator.php";

    class SnoopTranslatorTest extends PHPUnit_Framework_TestCase
    {
        function test_translate()
        //show user input
        {
            //Arrange
            $test_SnoopTranslator = new SnoopTranslator;
            $input = "Hi";

            //Act
            $result = $test_SnoopTranslator->translate($input);

            //Assert
            $output = array("Hi");
            $this->assertEquals($output, $result);
        }
    }
?>
