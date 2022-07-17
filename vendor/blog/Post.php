<?php

class Post
{

    private $title,$category,$id,$author,$icon,$pictures,$content,$adult,$filename,$tpl_file;
    private $_tpl;


    public function createPost($title,$category,$id,$author,$icon,$pictures,$content,bool $adult){
        $this->title = $title;
        $this->category=$category;
        $this->id = $id;
        $this->author = $author;
        $this->icon = $icon;
        $this->pictures = $pictures;
        $this->content = $content;
        $this->adult = $adult;
        $this->filename = "Post";
        $this->_tpl = $_SERVER['DOCUMENT_ROOT'].'/template/'.$this->filename.'.tpl';
        $this->tpl_file = file_get_contents($this->_tpl);
        if(file_exists($this->_tpl)){
            //$this->tpl_file->str_replace("");

            $this->tpl_file = str_replace("{title}" ,$this->title,$this->tpl_file);
            return $this->tpl_file;
        }


    }





}