<?php

class Notifications
{

    public function sendNormalMessage(string $content, string $title)
    {
        $page = file_get_contents(__DIR__ . '/templates/Notification.html');
        $page = str_replace('%title%',$title,$page);
        $page = str_replace('%content%',$content,$page);
        //return $page;
        //return "a";
        //echo $page;
        return $page;
    }
}