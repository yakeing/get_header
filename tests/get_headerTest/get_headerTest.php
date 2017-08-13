<?php
class get_headerTest extends PHPUnit_Framework_TestCase{

  public function testGet(){
    //$this->assertTrue(class_exists('get_header'));
    $url = "https://github.com/yakeing/get_header";
    $result = get_header::curlHeader($url);
    $this->assertTrue(is_array($result));
    $this->assertTrue(200, $result['code']);
  }

}
