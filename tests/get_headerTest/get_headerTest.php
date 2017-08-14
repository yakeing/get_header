<?php
//class get_headerTest extends PHPUnit_Framework_TestCase{
use PHPUnit\Framework\TestCase;
class get_headerTest extends TestCase{

  public function testGet(){
    $url = "https://github.com/yakeing/get_header";
    $Header = get_header::curlHeader($url);
    $this->assertTrue(is_array($Header));
    $this->assertEquals(200, $Header['code']);
  }

}
