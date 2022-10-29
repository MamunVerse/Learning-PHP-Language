<?php

namespace CloudStorage\FileSystem\Files\Images;
use CloudStorage\FileSystem\Files\Contracts\ImageContract;
use CloudStorage\Mail\Mailer;

class Jpeg implements ImageContract{
    function  getDimension(){
        echo "100X1000\n";

        $mailer = new Mailer();
        $mailer->sendMail();
    }
}