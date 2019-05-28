<?php
namespace ClassesTdd\Classes;

/**
 *
 */
class ClassesTest extends \PHPUnit\Framework\TestCase
{

	public function testInverterDataVazio()
	{
		$classes = new Classes;
		$actual = $classes->inverterData('');


		$this->assertFalse($actual);
	}


	public function testInverterData()
	{
		$classes = new Classes;
		$actual = $classes->inverterData('01/01/2019');

		$expected = '2019-01-01';

		$this->assertEquals($expected, $actual);

	}


	public function testInverterDataHora()
	{
		$classes = new Classes;
		$actual = $classes->inverterData('01/01/2018 08:00:00');

		$expected = '2018-01-01 08:00:00';


		$this->assertEquals($expected, $actual);
	}
}