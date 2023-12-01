<?php

    require_once "User.php";
    
    trait editable
    {
        public function edit()
        {
        
        }
    }
    trait publishable 
    {
        public function publish()
        {
        
        }
    }
    class Content{
        public User $author;
        public string $content;
    }
    
    // Open Close principle
    // Open for extension
    // Close For Modification
    
    class BlogPost extends Content{
        use editable;
        use publishable;
       
        public string $title;
        
        public function getContent(InterfaceFormatter $contentFormatted) //loosely couple
        {
            return $contentFormatted->getContent($this->content);
        }
    }
    // Dependency Inversion Principle
    // class ContentFormatted{
    //     public function getContent(string $content,string $type='html')
    //     {   
    //         if ($type==='html') {
    //             // convert content to 'html' and return
    //         }else if($type==='json'){
    //             // convert content to 'json' and return
    //         }
    //         // return ""
    //     }
    // }
    interface InterfaceFormatter{
        public function getContent(string $content);
    }
    class HTMLFormatter implements InterfaceFormatter{
        public function getContent(string $content){
            // return html
        }
    }
    class JSONFormatter implements InterfaceFormatter{
        public function getContent(string $content){
            // return html
        }
    }
    class MarkdownFormatter implements InterfaceFormatter{
        public function getContent(string $content){
            // return html
        }
    }
    Class Comment
    {
        use editable;
        use publishable;
        public User $author;
        public string $content;
        
       
    }
    
    // class EmailContent {
        
    // }
    
    class CMS{
        public function getPostContent(BlogPost $post){
            return $post->getContent(new HTMLFormatter());
        }
    }
    class API{
        public function getPostContent(BlogPost $post){
            return $post->getContent(new JSONFormatter());
        }
    }

?>