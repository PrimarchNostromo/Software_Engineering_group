<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class loginTest extends TestCase
{
   public function testlogin(): void
   {
	   //@test
	   //create mock object
	   $mockLogin = $this->getMock('login');
	   $mockLogin->username = "testUsername";
	   $mockLogin->password = "testPassword";
	   
	   $this->assertEquals("testUsername",$mockLogin->username);
	   $this->assertEquals("testPassword",$mockLogin->password);
   }
  
}