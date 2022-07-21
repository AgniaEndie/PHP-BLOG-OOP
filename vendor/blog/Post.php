<?php
include_once("vendor/notifications/BlogNotification.php");

class Post
{

    private $title, $category, $id, $author, $icon, $pictures, $content, $adult, $filename, $tpl_file;
    private $_tpl;
    private $search, $replace;
    private $mysql,$result,$notification;

    public function createPost($title, $category, $id, $author, $icon, $pictures, $content, bool $adult)
    {
        $this->mysql = new Database();
        $this->title = $title;
        $this->category = $category;
        $this->id = $id;
        $this->author = $author;
        $this->icon = $icon;
        $this->pictures = $pictures;
        $this->content = $content;
        $this->adult = $adult;
        $this->filename = "Post";
        $this->_tpl = $_SERVER['DOCUMENT_ROOT'] . '/template/' . $this->filename . '.tpl';
        $this->tpl_file = file_get_contents($this->_tpl);
        $this->notification = new BlogNotification();

        $this->result = $this->mysql->queryResult("INSERT INTO `posts` (`post_title`,`post_category`,`post_author`,`post_icon`,`post_pictures`,`post_content`,`post_adult`)  VALUES ('$this->title','$this->category','$this->author','$this->icon','$this->pictures','$this->content','$this->adult')");
        //return $this->notification;
        //$this->result->fetch_array();

        /*$this->search = array(
            "{title}",
            "{category}",
            "{id}",
            "{author}",
            "{icon}",
            "{pictures}",
            "{content}",
            "{adult}"
        );
        $this->replace = array(
            $this->title,
            $this->category,
            $this->id,
            $this->author,
            $this->icon,
            $this->pictures,
            $this->content,
            $this->adult
        );

        if(file_exists($this->_tpl)){
            //$this->tpl_file->str_replace("");


            $this->tpl_file = str_replace($this->search, $this->replace,$this->tpl_file);
           /* $this->tpl_file = str_replace("{title}" ,$this->title,$this->tpl_file);
            $this->tpl_file = str_replace("{category}",$this->category,$this->tpl_file);
            $this->tpl_file = str_replace("{author}",$this->author,$this->tpl_file);
            *?
            *
            *



            return $this->tpl_file;*/
    }








}