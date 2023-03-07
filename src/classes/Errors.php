<?php


class Errors {
    
    private static ?array $errors = [];
    
    public static function getErrors () {
        
        return self::$errors;
    }
    
    
    public static function checkErrorContact () {
        
        self::$errors = [];
        
        if (isset($_POST) && !empty($_POST)) :
            
            if(!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                
                self::$errors[] = "l'email n'est pas valide";
            }
            
            if (isset($_POST['name']) && empty($_POST['name']) || strlen($_POST['name']) < 2) {

                self::$errors[] = "Le nom n'est pas valide ou trop court";
            
            }
            if (isset($_POST['firstname']) && empty($_POST['firstname']) || strlen($_POST['firstname']) < 2) {
                
                self::$errors[] = "Le prénom n'est pas valide ou trop court";
            }
                
            if (isset($_POST['subject']) && empty($_POST['subject'])) {
                
                self::$errors[] = "Il faut préciser le sujet";
            }
            
            if (isset($_POST['message']) && empty($_POST['message']) || strlen($_POST['message']) < 2) {
                
                self::$errors[] = "Le message n'est pas valide ou trop court";
            }
            
            if (count(self::$errors) > 0){
                
                return self::$errors;
            }
            
        endif;
    }

}