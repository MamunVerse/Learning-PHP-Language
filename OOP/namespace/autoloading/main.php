<?php

namespace CloudStorage;
//include "mail/mailer.php";

spl_autoload_register(function ($className){
   $path = strtolower(str_replace("CloudStorage\\","", $className)).".php";
   $path = str_replace("\\","/", $path);
   include_once($path);

});

use \CloudStorage\Mail\Mailer as Mailer;
class Main{
    public function __construct()
    {
        $mailer = new Mailer();
        $mailer->sendMail();
    }
}

new Main();