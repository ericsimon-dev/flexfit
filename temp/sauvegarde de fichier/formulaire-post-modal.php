<?php
if (isset($_POST['contactFrmSubmit']) && !empty($_POST['name']) && !empty($_POST['mail']) && (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) === false) && !empty($_POST['phone'])) {
    // Submitted form data
    $name   = $_POST['name'];
    $email  = $_POST['mail'];
    $phone= $_POST['phone'];

    /*
     * Send email to admin
     */
    $to     = 'eric_simon@orange.fr';
    $subject= 'Contact Request Submitted';

    $htmlContent = '
     <h4>Contact request has submitted at tutorial101, details are given below.</h4>
     <table cellspacing="0" style="width: 300px; height: 200px;">
         <tr>
             <th>Name:</th><td>'.$name.'</td>
         </tr>
         <tr style="background-color: #e0e0e0;">
             <th>Email:</th><td>'.$email.'</td>
         </tr>
         <tr>
             <th>Téléphone:</th><td>'.$phone.'</td>
         </tr>
     </table>';

    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: tutorial101<sender@example.com>' . "\r\n";

    // Send email
    if (mail($to, $subject, $htmlContent, $headers)) {
        $status = 'ok';
    } else {
        $status = 'err';
    }

    // Output status
    echo $status;
    die;
}
     ?>