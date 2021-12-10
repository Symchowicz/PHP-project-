<?php

namespace App\entity;

class Post{

    public $post_id;
    public $date;
    public string $title;
    public string $content;
    public int $user_id;

    //Getters//
    public function getPost_Id(){
        return($this->post_id);
    }

    public function getDate(){
        return($this->date);
    }

    public function getTitle(){
        return($this->title);
    }

    public function getContent(){
        return($this->content);
    }
    public function getUser_Id(){
        return($this->user_id);
    }

    public function getAuthor(): User
    {
        return (new UserManager())->getUserById($this->user_id);
    }


    //Setter//
    public function setPost_Id($newPost_Id){
        $this->post_id = $newPost_Id;
    }
    public function setDate($newDate){
        $this->date = $newDate;
    }
    public function setTitle($newTitle){
        $this->title = $newTitle;
    }
    public function setContent($newContent){
        $this->content = $newContent;
    }

    public function setUser_id($newUser_Id){
        $this->user_id = $newUser_Id;
    }
    


}

?>