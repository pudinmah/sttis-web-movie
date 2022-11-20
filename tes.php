

<?php




// require("../config.php");

// date_default_timezone_set("Asia/Jakarta");




// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require_once "../library/Exception.php";
// require_once "../library/PHPMailer.php";
// require_once "../library/SMTP.php";

// $fullname = $_POST['fullname'];
// $username = $_POST['username'];
// $date_of_brith = $_POST['date_of_birth'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $password = $_POST['password'];
// $account_status = $_POST['account_status'];
// $address = $_POST['address'];
// $role_name = $_POST['role_name'];
// $date_of_birth = $_POST['date_of_birth'];

// $status = "not_active";

// $created_date = date('Y-m-d-H:i:s');

// $code = md5($email . date("Y-m-d"));






// $query = mysqli_query($con,"SELECT * FROM users WHERE email='$email'");

// if (mysqli_num_rows($query) > 0) {

//     echo "<script>alert('Email already registered');</script>";

// } else {
//     mysqli_query($con,"INSERT INTO users VALUES('','$fullname','$phone','$email','$address','$username','$password','$status','$account_status','$date_of_birth','$role_name','$created_date','$code','')");


//     $mail = new PHPMailer(true);


//     //Enable SMTP debugging. 
//     // $mail->SMTPDebug = 2;
//     //Set PHPMailer to use SMTP.
//     $mail->isSMTP();
//     //Set SMTP host name                          
//     $mail->Host = "tls://smtp.gmail.com"; //host mail server
//     //Set this to true if SMTP host requires authentication to send email
//     $mail->SMTPAuth = true;
//     //Provide username and password     
//     $mail->Username = "pudinmah4@gmail.com";   //nama-email smtp          
//     $mail->Password = "vecxkoyfcrkfadgz";           //password email smtp
//     //If SMTP requires TLS encryption then set it
//     $mail->SMTPSecure = "tls";
//     //Set TCP port to connect to 
//     $mail->Port = 587;

//     // pengirim
//     $mail->From = "pudinmah4@gmail.com"; //email pengirim
//     $mail->FromName = "Mahpudin dari phpmailer"; //nama pengirim

//     // penerima
//     $mail->addAddress($_POST['email'], $_POST['username']); //email penerima

//     $mail->isHTML(true);

//     $mail->Subject = "verification Account - nama website"; //subject

//     $body = "Hi, " . $username . "<br>Plase verif your before access our website : <br> http://localhost/VIDOE/proses/confirmEmail.php?code=" . $code;
//     $mail->Body    = $body; //isi email
//     $mail->AltBody = "PHP mailer"; //body email (optional)



//     if (!$mail->send()) {
//         echo "Mailer Error: " . $mail->ErrorInfo;
//     } else {
//         echo "Register successfully, please login !";
//     }
// }