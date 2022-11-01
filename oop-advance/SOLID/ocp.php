<?php

/*
 * Open for Extension. Close for modification.
 * If a class was created before and you need to add new
 * features don't modify this class.
 * But you can add new features without changing existing  class code.
 */

interface FileInterface{
    function display();
}

class FileDisplay{
    function display(FileInterface $file){
        $file->display();
    }
}

class ImageFile implements FileInterface{
    function display()
    {
        // Take necessary steps to display image
    }
}

class VideoFile implements  FileInterface{
    function display()
    {
        // Take necessary steps to display video
    }
}

class AudioFile implements  FileInterface{
    function display()
    {
        // Take necessary steps to display audio
    }
}


$image = new ImageFile("abcd.jpg");
$video = new VideoFile("abcd.mp4");
$audio = new AudioFile("abcd.mp3");
$fd = new FileDisplay();
$fd->display($image);
$fd->display($video);
$fd->display($audio);
