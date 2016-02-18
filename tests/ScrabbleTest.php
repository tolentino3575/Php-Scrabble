<?php

	require_once 'src/Scrabble.php';

	class ScrabbleTest extends PHPUnit_Framework_TestCase
	{

		function test_input_word()
		{
		//Arrange
		$input = 'beowulf';
		$test_Scrabble = new Scrabble($input);

		//Act
		$result = $test_Scrabble->getWord();

		//Assert
		$this->assertEquals('beowulf', $result);
		}

		function test_count_word_ones()
		{
		//Arrange
		$input = 'A';
		$test_Scrabble = new Scrabble($input);

		//Act
		$result = $test_Scrabble->wordCount();

		//Assert
		$this->assertEquals('1', $result);
		}

		function test_count_word_includetwos()
		{
		//Arrange
		$input = 'DOG';
		$test_Scrabble = new Scrabble($input);

		//Act
		$result = $test_Scrabble->wordCount();

		//Assert
		$this->assertEquals('5', $result);
		}

		function test_count_word_includethrees()
		{
		//Arrange
		$input = 'CAMP';
		$test_Scrabble = new Scrabble($input);

		//Act
		$result = $test_Scrabble->wordCount();

		//Assert
		$this->assertEquals('10', $result);
		}

		function test_count_word_includefours()
		{
		//Arrange
		$input = 'CHAMP';
		$test_Scrabble = new Scrabble($input);

		//Act
		$result = $test_Scrabble->wordCount();

		//Assert
		$this->assertEquals('14', $result);
		}

		function test_count_word_includefives()
		{
		//Arrange
		$input = 'MILK';
		$test_Scrabble = new Scrabble($input);

		//Act
		$result = $test_Scrabble->wordCount();

		//Assert
		$this->assertEquals('10', $result);
		}

		function test_count_word_includeeights()
		{
		//Arrange
		$input = 'JAX';
		$test_Scrabble = new Scrabble($input);

		//Act
		$result = $test_Scrabble->wordCount();

		//Assert
		$this->assertEquals('17', $result);
		}

		function test_count_word_includetens()
		{
		//Arrange
		$input = 'ZAQ';
		$test_Scrabble = new Scrabble($input);

		//Act
		$result = $test_Scrabble->wordCount();

		//Assert
		$this->assertEquals('21', $result);
		}

	}

?>
