<?php
    if((isset($_POST['inputPhone'])&&$_POST['product']!="")){

        

        $to         = 'padilo300@gmail.com' ;
        $subject    = 'Заказ на сайте'   ;
        $phone      = trim(urldecode(htmlspecialchars($_POST['inputPhone']))) ;
        $product    = trim(urldecode(htmlspecialchars($_POST['product'])))    ;
        $name       = trim(urldecode(htmlspecialchars($_POST['inputName'])))  ;

        $message='
            <html>
                <head>
                    <title>'.$subject.'</title>
                </head>
                <body>
                    <p>Имя: '.$name.'</p>
                    <p>Телефон: '.$phone.'</p>
                    <p>Товар: '.$product.'</p>
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