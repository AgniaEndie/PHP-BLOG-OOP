<?php

class BlogNotification
{

    private $search,$type,$tpl_link,$tpl_file;
    /**
     *NotificationsType
     *array(
    "Successful" - ok (0),
    "Error" - failed (1),
    "Warning" - warning (2),
    "System" - system messages (ADMIN VIEW ONLY!) (3)
    );
     *
     */


    public function sendNotification( $content, $title,$type)
    {
        $this->search = array(
            "{title}",
            "{content}"
        );
        $this->replace = array(
            $content,
            $title
        );
        $this->type = $type;
        $this->tpl_link = $_SERVER['DOCUMENT_ROOT']."/template/Notification.tpl";
        $this->tpl_file = file_get_contents($this->tpl_link);
        if(file_exists($this->tpl_link)){
            //Proceed
            $this->tpl_file = str_replace($this->search,$this->replace,$this->tpl_file);
            switch ($this->type){
                case 0:
                    $this->tpl_file = str_replace("{type}","alert alert-success" ,$this->tpl_file);
                    $this->tpl_file = str_replace("{error_content}",null,$this->tpl_file);
                    break;
                case 1:
                    $this->tpl_file = str_replace("{type}","alert alert-danger" ,$this->tpl_file);
                    $this->tpl_file = str_replace("{error_content}",null,$this->tpl_file);
                    break;
                case 2:
                    $this->tpl_file = str_replace("{type}","alert alert-warning" ,$this->tpl_file);
                    $this->tpl_file = str_replace("{error_content}",null,$this->tpl_file);
                    break;
                case 3:
                    $this->tpl_file = str_replace("{type}","alert alert-primary" ,$this->tpl_file);
                    $this->tpl_file = str_replace("{error_content}",null,$this->tpl_file);
                    break;
                default:
                    $this->tpl_file = str_replace("{type}","alert alert-primary error   ", $this->tpl_file);
                    $this->tpl_file = str_replace("{error_content}","TYPE ERROR, Please select in range (0-3)",$this->tpl_file);
                    break;
            }
            return $this->tpl_file;
        }else{
            throw new Exception("File not found! ".$this->tpl_link);
        }





    }


}