<?php
require_once "src/PHPMailer.php";

$mail = new PHPMailer(true);     
try {
    $mail->SMTPDebug =0;      

    $mail->isSMTP();       
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;                       
    $mail->Username = 'huonghuong08.php@gmail.com';   
    $mail->Password = 'qweasd@@';              
    $mail->SMTPSecure = 'tls';      //ssl:465
    $mail->Port = 587;    
    $mail->CharSet = "UTF-8";       

    $mail->setFrom('huonghuong08.php@gmail.com', 'Admin');
    $mail->addAddress('tienhatrong125@gmail.com', 'Joe User');    
    $mail->addAddress('huongnguyen08.cv@gmail.com');       
    $mail->addReplyTo('huonghuong08.php@gmail.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                               
    $mail->Subject = 'XÁC NHẬN ĐƠN HÀNG ....';
    $mail->Body    = '
        <p>Chào bạn, ...</p>
        <table style="font-family: arial, sans-serif;border-collapse: collapse;width: 100%;">
            <tr>
                <th>Company</th>
                <th>Contact</th>
                <th>Country</th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>Magazzini Alimentari Riuniti</td>
                <td>Giovanni Rovelli</td>
                <td>Italy</td>
            </tr>
        </table>
        <p>Cảm ơn bạn....</p>
        <img src="http://www.kmart.com.au/wcsstore/Kmart/images/ncatalog/f/0/42212690-1-f.jpg">
    ';

    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} 
catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}