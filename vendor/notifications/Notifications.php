<?php

class Notifications
{

    public function sendNormalMessage( $content,  $title)
    {
        //$page = file_get_contents( '/templates/Notification.template');
        //$page->str_replace(array('%title%','%content%'), array($title,$content), '$page');
        //return $page;
        //return "a";
        //echo $page;
        //echo $page;
        //return $page;

        /*$replace = array('{title}', '{content}');
        $with = array($title,$content);
        $theme = __DIR__.'/templates/Notification.template';
        $content = file_get_contents($theme);
        str_replace($replace,$with,$content);
        return $content;*/
        //$notification = '/vendor/notifications/templates/Notification.template';
        $notification = file_get_contents( );
        $notification = str_replace("{title}", $title,$notification);
        return $notification;
    }
    public function getNotification(){
        echo $this->sendNormalMessage("test","1");
    }
}