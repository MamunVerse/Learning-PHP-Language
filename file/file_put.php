<?php


$fileName = '/home/mamun/Desktop/php/lwh/file/f4.txt';

// file_put_contents() will remove all previus data and write new data (By Default)

file_put_contents($fileName, "\nMars\n", FILE_APPEND | LOCK_EX);
file_put_contents($fileName, "Jupiter\n", FILE_APPEND | LOCK_EX);



