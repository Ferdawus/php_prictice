<?php 
    class UserController{
        public function getUserPage(){
            var_dump('hete');
            require_once'user_form.php';      
        }
        public function storeUserData(){
            var_dump($_POST);
        
            $data = [
                'name' => $_POST['name']
            ];
        
            $fileStorage = new FileStorage();
            $fileStorage->save($data);
            
            // Continue with other logic if needed
        
            // Redirect or respond to the client after processing
        }
        
    }


?>