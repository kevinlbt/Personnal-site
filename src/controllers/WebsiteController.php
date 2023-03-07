<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class WebsiteController extends AbstractController {

    private static ?array $errors = [];

    private static ?string $success = null;
    
    private static function sanitizing ($data) {
        
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        return $data;
        
    }
    
    //home page
    public static function home () {

        self::$errors = [];
        $success = null;

        if (Errors::checkErrorContact()) {
        
            self::$errors = Errors::checkErrorContact();
        }
        
        else {
        
            if (isset($_POST)) {
                if (isset($_POST['name']) && !empty($_POST['name'])
                && isset($_POST['firstname']) && !empty($_POST['firstname'])
                && isset($_POST['email']) && !empty($_POST['email'])
                && isset($_POST['subject']) && !empty($_POST['subject']) 
                && isset($_POST['message']) && !empty($_POST['message'])) {
            
                    $name = self::sanitizing($_POST['name']);
                    $firstname = self::sanitizing($_POST['firstname']);
                    $email = self::sanitizing($_POST['email']);
                    $subject = self::sanitizing($_POST['subject']);
                    $message = self::sanitizing($_POST['message']);
                    
                    $mail = new PHPMailer(true);
                    
                    try { // php mailer
        
                        $mail->isSMTP(); 
                        $mail->Host = 'smtp.gmail.com';  
                        $mail->SMTPAuth = true;                               
                        $mail->Username = 'kevin.lebot@gmail.com';                 
                        $mail->Password = 'mevggymukfgtgjuc';                          
                        $mail->SMTPSecure = 'tls';                            
                        $mail->Port = 587;                                    
            
                        $mail->setFrom($email, $name, $firstname); // from who is the mail
                        $mail->addReplyTo($email, $name, $firstname); // reply option
                        $mail->addAddress('kevin.lebot@gmail.com', 'Kevin Le Bot'); //box mail where the message is receive
            
            
                        $mail->isHTML(true); 
                        $mail->Subject = $subject; 
                        $mail->Body = "Message de ". $name . " " . $firstname . "<br>" . $message; 
                        $mail->AltBody = $message; 
                        $mail->SMTPDebug = 0; 
            
                        if ($mail->send()) {
                            $success = "Mail envoyé ! Merci pour votre interêt";
                        } else {
                            $success = "Echec dans l'envoi du mail";
                        }
                        
                    }
                    
                    catch (Exception $e) {
                        $erreur = $e;
                    }
                        
                }
        
            }
        }

        self::render('home');
    }
    

}
