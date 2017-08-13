<?php
class get_headerTest extends PHPUnit\Framework\TestCase{

  public function testGet(){
    $url = "https://github.com/yakeing/get_header";
    $result = get_header::curlHeader($url);
    $this->assertInternalType("array", $result);
    //$this->assertEquals(200, $result['code']);
    $this->assertTrue(200, $result['code']);
  }

}
