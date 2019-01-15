<?php
    if((isset($_POST['name'])&&$_POST['name']!="")){

        

        $to         = 'padilo300@gmail.com' ;
        $subject    = 'Отзыв на вакансию'   ;
        $name       = trim(urldecode(htmlspecialchars($_POST['name'])))     ;
        $email      = trim(urldecode(htmlspecialchars($_POST['email'])))    ;
        $section    = trim(urldecode(htmlspecialchars($_POST['postiton']))) ;


        if(isset($_POST['phone'])){
            $name  = trim(urldecode(htmlspecialchars($_POST['name'])));    
        }else{
            $subject    = 'Подписка на вакансии';
        }

        if(isset($_POST['phone'])){
            $phone  = trim(urldecode(htmlspecialchars($_POST['phone'])));    
        }else{
            $phone  = "Не указан"           ;
        }

        $message='
            <html>
                <head>
                    <title>'.$subject.'</title>
                </head>
                <body>
                    <p>Имя: '.$name.'</p>
                    <p>email: '.$email.'</p>
                    <p>Телефон: '.$phone.'</p>
                    <p>Вакансия: '.$section.'</p>
                </body>
            </html>';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: mail@accelerometr.zzz.com.ua\r\n";

        if (mail($to, $subject, $message, $headers)){ 
            return true;
        } else { 
            return $message  ;
            
        }
    }        