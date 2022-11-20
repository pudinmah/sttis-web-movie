<?php
// forgot password

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "../assets/library/Exception.php";
require_once "../assets/library/PHPMailer.php";
require_once "../assets/library/SMTP.php";







  include('../config.php');
  $email = $_POST['email'];




  $select = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
  $jumlah = mysqli_num_rows($select);

  echo $jumlah;
  
  if ($jumlah > 0) {
    while ($row = mysqli_fetch_array($select)) {
      $id = $row['id'];
      $email = $row['email'];
    }



    $mail = new PHPMailer(true);



    //Enable SMTP debugging. 
    // $mail->SMTPDebug = 2;
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();
    //Set SMTP host name                          
    $mail->Host = "tls://smtp.gmail.com"; //host mail server
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
    //Provide username and password     
    $mail->Username = "pudinmah4@gmail.com";   //nama-email smtp          
    $mail->Password = "vecxkoyfcrkfadgz";           //password email smtp
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "tls";
    //Set TCP port to connect to 
    $mail->Port = 587;

    // pengirim
    $mail->From = "pudinmah4@gmail.com"; //email pengirim
    $mail->FromName = "CAMPUS CINEMA"; //nama pengirim

    $email = $_POST['email'];

    // penerima
    $mail->addAddress($email, 'User Sistem'); //email penerima

    $mail->isHTML(true);
    $mail->MsgHTML($body);


    $mail->Subject = "Reset Password"; //subject

    $body      = "Klik link berikut untuk reset Password, <a href='http://localhost/VIDOE/change_password.php?id=$id'>Klik disini </a>"; //isi dari email


    $mail->Body    = $body; //isi email
    $mail->AltBody = "CAMPUS CINEMA"; //body email (optional)



    if ($mail->send()) {
      echo "<script> alert('Link reset password telah dikirim ke email anda, Cek email untuk melakukan reset'); window.location = '../login.php?pesan=please_login'; </script>";//jika pesan terkirim
    } else {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  } else {
    echo "<script> alert('Email anda tidak terdaftar di sistem'); window.location = '../forgot_password.php'; </script>";//jika pesan terkirim

  }
