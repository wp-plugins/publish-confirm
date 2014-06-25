=== Publish Confirm ===
Contributors: sergej.mueller
Tags: publish, posts, confirmation
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=5RDDW9FEHGLG6
Requires at least: 3.9
Tested up to: 3.9.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html



Extra confirmation dialogue for the publish button, avoids publishing accidentally.



== Description ==
Accidentally published a WordPress post too early once too often, instead of saving it as a draft? The WordPress plugin *Publish Confirm* implements an extra confirmation dialogue inbetween your click on and the actual processing of the *Publish* button. Simple and effective.

Once a post has been published, the confirmation dialogue will not appear anymore for that post.


= Custom message =
The message text can be changed any time:

`<?php
add_filter(
    'publish_confirm_message',
    function($msg) {
        return "You´re ready?\nSure!?";
    }
);
?>`


= Memory usage =
* On backend: ~0,02 MB
* On frontend: ~0,01 MB


= Available languages =
* English
* Deutsch


= Authors =
* [Sergej Müller](http://wpcoder.de)
* [Caspar Hübinger](http://glueckpress.com)


= Donuts =
* [Gittip](https://www.gittip.com/sergejmueller/)
* [Flattr](https://flattr.com/submit/auto?user_id=sergej.mueller&url=https%3A%2F%2Fgithub.com%2Fsergejmueller%2FPublish-Confirm)
* [PayPal](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=5RDDW9FEHGLG6)


= Profiles =
* [Google+](https://plus.google.com/110569673423509816572?rel=author)
* [Twitter](https://twitter.com/wpSEO)
* [Impressum](http://wpcoder.de)



== Changelog ==

= 0.0.4 =
* Publish confirmation for post drafts


= 0.0.3 =
* *Publish Confirm* goes wordpress.org