
//class get_headerTest extends PHPUnit_Framework_TestCase{
class get_headerTest extends TestCase
  public function testGet(){
    $url = "https://github.com/yakeing/get_header";
    $GetHeader = get_header::curlHeader($url);
    $this->assertEquals(200, $GetHeader['code']);
    //$this->assertTrue(is_int($GetHeader['code']));
  }
}
