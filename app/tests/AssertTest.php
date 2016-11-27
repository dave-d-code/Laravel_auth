<?php 

/**
* PHPUNIT testing using commong testing protocols
*/
class AssertTest extends TestCase
{
	
	public function testAssert()
	{
		$theString = 'Roux Academy of Art and Science';
		$this->assertContains('and', $theString);
	}

	public function testAssert2()
	{
		$testBool = false;
		$this->assertFalse($testBool);
	}

	public function testAssert3()
	{
		$this->assertArrayHasKey('mykey', array('mykey'=>'myArray'));
	}


} // end of class AssertTest

/* End of file AssertTest.php */
/* Location: .//D/2015 programming/Coding/laravel projects/authapp/app/tests/AssertTest.php */






