<? php
        $name =$_POST['name'];
        $visitor_email=$_POST['email'];
        $phone=$_POST['phone'];
        $message=$_POST['message'];


        $email_from = mkssharma08@gmail.com;

        $email_subject = 'New Form Submission';

        $email_body = "User name: $name.\n";
                        "User email: $visitor_email.\n";
                            "User phone: $phone.\n";
                              "User mesage: $message.\n";

        $to ="mkssharma08@gmail.com";
        
        $headers = "From: $email_from \r\n";
        $headers = "Reply-To: $visitor_email \r\n";
        mail($to,$email_subject,$email_body,$headers);
        

?>
