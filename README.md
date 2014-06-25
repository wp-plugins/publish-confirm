## Publish Confirm


Accidentally published a WordPress post too early once too often, instead of saving it as a draft? The WordPress plugin “Publish Confirm” implements an extra confirmation dialogue inbetween your click on and the actual processing of the _Publish_ button. Simple and effective.

Once a post has been published, the confirmation dialogue will not appear anymore for that post.


#### Custom message

The message text can be changed any time:

```php
add_filter(
    'publish_confirm_message',
    function($msg) {
        return "You´re ready?\nSure!?";
    }
);
```


#### Memory usage

* Backend: 0,02 MB
* Frontend: 0,01 MB


#### Languages

* English
* Deutsch


#### Requirements

* WordPress 3.9
* PHP 5.2.4


#### Installation

1. Download the ZIP
2. Install the plugin in WordPress:
    1. Either upload the unzipped plugin folder via SFTP
    2. Or upload the ZIP directly via the Plugins page in the WordPress back-end
3. Activate the plugin


#### Changelog

* 0.0.3
    * Code refactoring

* 0.0.2
    * [Internatiolization](https://github.com/sergejmueller/Publish-Confirm/pull/4)
    * [German localization](https://github.com/sergejmueller/Publish-Confirm/issues/3)
    * [Hook for a custom message](https://github.com/sergejmueller/Publish-Confirm/issues/1)
    * [No confirmation for planned posts](https://github.com/sergejmueller/Publish-Confirm/issues/1)

* 0.0.1
    * Init-Version


##### Authors

* [Sergej Müller](http://wpcoder.de)
* [Caspar Hübinger](http://glueckpress.com)


##### Donuts

* [Gittip](https://www.gittip.com/sergejmueller/)
* [Flattr](https://flattr.com/submit/auto?user_id=sergej.mueller&url=https%3A%2F%2Fgithub.com%2Fsergejmueller%2FPublish-Confirm)
* [PayPal](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=5RDDW9FEHGLG6)


##### Profiles

* [Google+](https://plus.google.com/110569673423509816572?rel=author)
* [Twitter](https://twitter.com/wpSEO)
* [Impressum](http://wpcoder.de)