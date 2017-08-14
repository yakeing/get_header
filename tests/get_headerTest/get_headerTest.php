<?php
//class get_headerTest extends PHPUnit_Framework_TestCase{
namespace get_headerTest;

use get_header;
use get_header\GetHeader;
use PHPUnit\Framework\TestCase;

class get_headerTest extends TestCase{

  public function testGet(){
    $url = "https://github.com/yakeing/get_header";
    $GetHeader = new GetHeader();
    $Header = $GetHeader->curlHeader($url);
    $this->assertTrue(is_array($Header));
    $this->assertEquals(200, $Header['code']);
  }

}
