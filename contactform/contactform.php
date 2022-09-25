<?php
$mail_to_send_to = "ahammed.km@gmail.com";
$from_email = "www.ahammedkm.com no-reply@ahammedkm.com";
$sendflag = $_REQUEST['message'];                      
if ( $sendflag )
        {
                $email = $_REQUEST['email'] ;
                $name = $_REQUEST['name'] ;
                $subject = $_REQUEST['subject'] ;
                $message = $_REQUEST['message'] ;
                $headers = "From: $from_email" . "\r\n" . "Reply-To: $email" . "\r\n" ;
                $a = mail( $mail_to_send_to, "www.ahammed.com - ".$subject." - ".$name, $message, $headers );
                if ($a)
                {
                     echo "OK";
                } else {
                     echo "Error";
                }
        }
?>