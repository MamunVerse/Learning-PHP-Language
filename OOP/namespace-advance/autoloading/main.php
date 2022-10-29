<?php

namespace CloudStorage;

include "autoloader.php";

use \CloudStorage\FileSystem\Files\Images\Jpeg;
use \CloudStorage\Mail\Mailer;
use \CloudStorage\FileSystem\Scanner;

class Main{
    public function __construct()
    {
        $mailer = new Mailer();
        $mailer->sendMail();

        $scanner = new Scanner();
        $scanner->scan();

        $jpeg = new Jpeg();
        $jpeg->getDimension();
    }
}

new Main();