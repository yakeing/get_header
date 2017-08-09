# GET HTTP HEADER
----------

[![travis-ci](https://api.travis-ci.org/yakeing/get_header.svg)](https://travis-ci.org/yakeing/get_header/caches) Travis CI

This function is similar to the get_headers function

Author [yakeing](http://weibo.com/yakeing)

[![image](https://oauth.applinzi.com/SvgLabel/4D4D4D/License/F66000/MPL2.0/image.svg)](https://github.com/yakeing/get_header/blob/master/LICENSE)

[![image](https://oauth.applinzi.com/SvgLabel/4D4D4D/Language/007EC6/PHP/image.svg)](https://github.com/yakeing/get_header/tree/master/src/get_header)

[![image](https://oauth.applinzi.com/SvgLabel/4D4D4D/Version/97CA00/1.2/image.svg)](https://github.com/yakeing/get_header)

### test
- [x] example
--------
```php
      include('get_header.php');
      $url = "https://github.com/yakeing/get_header";
      $GetHeader = get_header::curlHeader($url);
      var_dump($GetHeader);
```

### outcome
- [x] example
--------
```php
    Array
    (
            [code] = 606
            [Server] = nginx/1.4.1
            [Date] = Tue, 15 Sep 2015 20:17:27 GMT
            [Content-Type] = text/html
            [Content-Length] = 464
            [Connection] = close
            [ETag] = "55b07eb9-1d0"
    )

    Array
    (
            [code] = 200
            [Server] = nginx/1.4.1
            [Date] = Tue, 15 Sep 2015 20:17:28 GMT
            [Content-Type] = text/html; charset=utf-8
            [Connection] = close
            [Set-Cookie] = expires=Wed, 16-Sep-2015 20:17:28 GMT; path=/; domain=.sinacloud.com
            [Expires] = Thu, 19 Nov 1981 08:52:00 GMT
            [Cache-Control] = private
            [Pragma] = no-cache
            [Via] = 10.67.15.158
            [Vary] = Accept-Encoding
    )

    Array
    (
            [code] = 200
            [Server] = nginx/1.4.1
            [Date] = Tue, 15 Sep 2015 20:17:28 GMT
            [Content-Type] = image/jpeg
            [Content-Length] = 40836
            [Connection] = close
            [Accept-Ranges] = bytes
            [Access-Control-Allow-Origin] = *
            [Access-Control-Max-Age] = 2592000
            [Cache-Control] = public, max-age=31536000
            [Content-Disposition] = inline; filename="weixin.jpg"
            [Content-Transfer-Encoding] = binary
            [ETag] = "FnDvgIWd1W48UL3WzKYwB7UfrS9w"
            [Last-Modified] = Thu, 20 Aug 2015 04:01:43 GMT
            [X-Log] = mc.g;IO:2
            [X-Reqid] = FGAAAMR9NAAXQAQU
            [X-Qiniu-Zone] = 0
            [X-Via] = 1.1 ych69:80 (Cdn Cache Server V2.0), 1.1 xdx20:5 (Cdn Cache Server V2.0)
    )
```

Donate
---
Your donation makes CODE better.

 WeChat (微信)
 
 ![WeChat](https://oauth.applinzi.com/QrCode/180/WeChat/H/0/FFFFFF/000000/wxp%3a%7C%7Cf2f0SOGAUjQ1ALzigoyN7nW8tK68D2oeU3YO/image.png)

 Alipay (支付宝)

 ![Alipay](https://oauth.applinzi.com/QrCode/180/Alipay/H/0/FFFFFF/000000/HTTPS%3a%7C%7CQR.ALIPAY.COM%7CTSX082709YGHVXYUQCWKD6/image.png)
 
