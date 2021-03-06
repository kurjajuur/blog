<?php

class posts extends Controller{


	function index(){
		$this->posts = get_all("SELECT * FROM post");

        //prepare tags array
        $_tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag");
        foreach ($_tags as $tag) {
            $this->tags[$tag['post_id']][] = $tag['tag_name'];
          }

    }

    function index_ajax(){
		echo "\$_POST:<br>";
        var_dump($_POST);
    }



    function view() {
        $post_id = $this->params[0];
        $sql="SELECT * FROM post NATURAL JOIN  user
                                 WHERE post_id='$post_id'";
        $this->post = get_first($sql);
        $this->tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag
                                 WHERE post_id='$post_id'");
        $this->comments = get_all("SELECT * FROM comment NATURAL JOIN
                                    post WHERE post_id='$post_id'");

    }
    function view_post() {
        $author = isset($this->auth->username)?$this->auth->username:'anonymous';
        $data = $_POST['data'];
        $data['post_id'] = $this->params[0];
        $data['comment_author'] = $author;
        insert('comment', $data);
    }
    function index_post(){
        $data = $_POST['data'];
        $data['post_id'] = $this->params[0];
        $data['user_id'] = $this->auth->user_id;
        //var_dump($data);
        insert('post', $data);
    }
}