<?php
/**
  * GET HTTP HEADER
  * This function is similar to the get_headers function
  * @Author weibo.com/yakeing
  */
namespace get_header;
class get_header{
    //curl
    public static function curlHeader($url){
        $options = array(
            CURLOPT_HEADER => true,
            CURLOPT_NOBODY => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_AUTOREFERER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTPHEADER => array('Accept: */*', 'User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)', 'Connection: Keep-Alive')
        );
        $ch = curl_init($url);
         curl_setopt_array($ch, $options);
         $header = curl_exec($ch);
         $ret = curl_errno($ch);
         $error = curl_error($ch);
         curl_close($ch);
        return ($ret === 0) ? $this->parseHeader($header) : $error;
    }
    //parse
    private function parseHeader($header){
        $head = array();
        $headarr =explode("\r\n", trim($header));
        $first = array_shift($headarr);
        preg_match("#HTTP/[0-9\.]+\s+([0-9]+)#", $first, $code);
        $head['code'] = intval($code[1]);
        foreach($headarr as $v){
            $arr = explode(':', $v, 2);
            $head[trim($arr[0])] = trim($arr[1]);
        }
        return $head;
    }
}
