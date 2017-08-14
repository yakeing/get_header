# GET HTTP HEADER
----------

This function is similar to the get_headers function

#### Travis CI

[![travis-ci](https://api.travis-ci.org/yakeing/get_header.svg)](https://travis-ci.org/yakeing/get_header)

#### Packages

[![Version](http://img.shields.io/packagist/v/yakeing/get_header.svg)](https://packagist.org/packages/yakeing/get_header)
[![Downloads](http://img.shields.io/packagist/dt/yakeing/get_header.svg)](https://packagist.org/packages/yakeing/get_header)
[![size](https://img.shields.io/github/size/yakeing/get_header/src/get_header/GetHeader.php.svg)](https://packagist.org/packages/yakeing/get_header)

[![Version](https://oauth.applinzi.com/SvgLabel/4D4D4D/Version/97CA00/1.2/image.svg)](https://packagist.org/packages/yakeing/get_header)
[![Language](https://oauth.applinzi.com/SvgLabel/4D4D4D/Language/F66000/PHP/image.svg)](https://packagist.org/packages/yakeing/get_header)
[![License](https://oauth.applinzi.com/SvgLabel/4D4D4D/Language/007EC6/MPL-2.0/image.svg)](https://packagist.org/packages/yakeing/get_header)

BY: [yakeing](http://weibo.com/yakeing)

### Installation

Use [Composer](https://getcomposer.org) to install the library.

```

    $ composer require yakeing/fsockopen

```

### test
- [x] example
--------
```php
      include('GetHeader.php');
      $url = "https://github.com/yakeing/get_header";
      $GetHeader = new GetHeader();
      $Header = GetHeader->curlHeader($url);
      var_dump($Header);
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

 Bitcoin (比特币赞助)

 1Ff2hTfr4EioWv2ZDLKTedUiF9wBBVYSbU

 ![Bitcoin](https://oauth.applinzi.com/QR/230/bitcoin%3a1Ff2hTfr4EioWv2ZDLKTedUiF9wBBVYSbU/Bitcoin.png)

 WeChat (微信赞助)

 ![WeChat](https://oauth.applinzi.com/QR/230/wxp%3a%7C%7Cf2f0SOGAUjQ1ALzigoyN7nW8tK68D2oeU3YO/WeChat.png)

 Alipay (支付宝赞助)

 ![Alipay](https://oauth.applinzi.com/QR/230/HTTPS%3a%7C%7CQR.ALIPAY.COM%7CTSX082709YGHVXYUQCWKD6/Alipay.png)

