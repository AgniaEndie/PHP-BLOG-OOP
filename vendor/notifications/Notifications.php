<?php

class Notifications
{

    public function sendNormalMessage( $content,  $title)
    {
        //$page = file_get_contents( '/templates/Notification.tpl');
        //$page->str_replace(array('%title%','%content%'), array($title,$content), '$page');
        //return $page;
        //return "a";
        //echo $page;
        //echo $page;
        //return $page;

        /*$replace = array('{title}', '{content}');
        $with = array($title,$content);
        $template = __DIR__.'/templates/Notification.tpl';
        $content = file_get_contents($template);
        str_replace($replace,$with,$content);
        return $content;*/
        //$notification = '/vendor/notifications/templates/Notification.tpl';
        $notification = file_get_contents( );
        $notification = str_replace("{title}", $title,$notification);
        return $notification;
    }
    public function getNotification(){
        echo $this->sendNormalMessage("test","1");
    }
}