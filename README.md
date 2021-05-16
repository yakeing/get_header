# GET HTTP HEADER

This function is similar to the get_headers function.

` get_headers ` is recommended because it is more efficient.

### Travis CI badge

[![Travis-ci](https://api.travis-ci.com/yakeing/get_header.svg?branch=main)](https://travis-ci.com/yakeing/get_header)

### codecov badge

[![codecov](https://codecov.io/gh/yakeing/get_header/branch/main/graph/badge.svg)](https://codecov.io/gh/yakeing/get_header)

### Github badge

[![Downloads](https://badging.vercel.app/github/downloads/yakeing/get_header?icon=github)](../../)
[![Size](https://badging.vercel.app/github/size/yakeing/get_header?icon=github)](src)
[![tag](https://badging.vercel.app/github/tag/yakeing/get_header?icon=github)](../../releases)
[![license](https://badging.vercel.app/static/license/555/MPL-2.0/fe7d37?icon=github)](LICENSE)
[![languages](https://badging.vercel.app/static/language/555/PHP/34abef?icon=github)](../../search?l=php)

### Installation

Use [Composer](https://getcomposer.org) to install the library.
Of course, You can go to [Packagist](https://packagist.org/packages/yakeing/get_header) to view.

```
    $ composer require yakeing/get_header
```

### test

- [x] example
```php
      include('GetHeader.php');
      $url = "https://github.com/yakeing/get_header";
      $GetHeader = new GetHeader();
      $Header = GetHeader->curlHeader($url);
      var_dump($Header);
```

### outcome

- [x] example
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

[Sponsor](https://github.com/yakeing/Documentation/blob/master/Sponsor/README.md)
---
If you've got value from any of the content which I have created, then I would very much appreciate your support by payment donate.

[![Sponsor](https://badging.vercel.app/static/Sponsor/EA4AAA?icon=heart)](https://github.com/yakeing/Documentation/blob/master/Sponsor/README.md)

Author
---

weibo: [yakeing](https://weibo.com/yakeing)

twitter: [yakeing](https://twitter.com/yakeing)
