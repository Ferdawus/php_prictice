<?php 
    class Post{
        use Shareable;
    }
    class Comment{
    
    }
    trait Shareable{
        public function share(){
            printf('Share to social media');
        }
    }
    
    $obj = new Post();
    $obj->share();
?>