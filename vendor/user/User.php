<?php
class User{
    public $name,$status,$avatar;
    private $pass,$age,$secret,$friends;

    function __construct($name){
        $this->name = $name;
    }


    function getName(){
        return $this->name;
    }

    function getAvatar(){
        return $this->avatar;
    }

    function changePass($pass, $secret){
        $old_pass = $this->pass;
        if($secret == $this->secret && $old_pass == $pass) {
            return $this->pass = $pass;
        }
        else{
            echo "error";
        }
    }

    function changeName($new_name){
        //$old_name = $this->name;
        return $this->name = $new_name;
    }

    function changeStatus($new_status){
        //$new_status -> $this.$status;
        $old_status = $this->status;
        return $old_status = $new_status;
    }
    function changeAge($new_age){
        $age = $this->age;
        return $age = $new_age;
    }

    /**
     * @param mixed $friends
     */
    public function getFriends()
    {
        return $this->friends;
    }

}