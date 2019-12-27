# Email Notification Library using phpMailer

This library has the function to send email using phpmailer library. Doing this uncomplicated action is essential for any system.

To install the library, run the following command:

`` `sh
composer require gustavoweb / composer_test
`` `

To make use of the library, simply require composer autoload, invoke the class, and call the method:

`` `sh
<? php

require __DIR__. '/vendor/autoload.php';

USE Notification \ Email;

$ email = new Email (2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls / ssl)", "port (587)",
    "from@email.com", "From Name");

$ email-> sendEmail ("SUbject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
`` `

Note that all email sending setup is using the magic builder method! Once you invoke the builder method within your application, your system will be able to perform the triggers.

### Developers
* [Leonardo G. França] - Developer
* [phpMailer] - Lib to send Email

License
----

MIT

** Another UpInside Training course, make good use! **

[//]: #
[Leonardo G. França]: <mailto: leoprofissional@live.com>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>

