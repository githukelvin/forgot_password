<?php include "./partials/header.php";

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require "./PHPMailer/src/PHPMailer.php";
require "./PHPMailer/src/Exception.php";
require "./PHPMailer/src/SMTP.php";

#This  below are Google gmail password to allow third partiess to end emails

$pass = "fzolwzxarlqpfuee";
$mail = "kelvingithu019@gmail.com";

#check if the send button exists to send  our clients message to us

if(isset($_POST['send'])){
  //Now we first take all our fields values
  $subject = $_POST['subject'];
  $email= $_POST['email'];
  $message= $_POST['message'];

#To use the phpmailer we must first intiate a new class like below

  $mail = new PHPMailer(true);

  #we use try n catch for error handling

  try{
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username ="kelvingithu019@gmail.com";
    $mail->Password ="fzolwzxarlqpfuee";
    $mail->Port = "465";
    $mail->SMTPSecure = "ssl";
    
    #Sender Settings

    $mail->setFrom( $email);
    
    
    //Recepients emails

    $mail->addAddress($mail);

    $mail->Subject = "$subject";
    $mail->Body = "$message";

    $mail->send();
    
  }
  catch(Exception $e){
    echo "Message was not sent:{$mail->ErrorInfo}";
  }
  

  
}


?>

<div class="container">
        <h1>Welcome Contact Us Module</h1>

        <div class="forms">
          <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" autocomplete="off" method="post">
            <div class="form-groups">
              <p>Enter Email :</p>
              <div class="inputs mail">
                <input
                  type="email"
                  placeholder="Enter Email or Username"
                  name="email"
              
                />
              </div>
            </div>
            <div class="form-groups">
              <p>Enter Subject :</p>
              <div class="inputs mail">
                <input
                  type="text"
                  placeholder="Enter Subject"
                  name="subject"
                  
                />
              </div>
            </div>
        
            <div class="form-groups">
              <p>Enter Message :</p>
              <div class="inputs mail">
                  <textarea placeholder="Write Your Message Here" name="message" cols="30" rows="10"></textarea>
              </div>
            </div>
         
            <input type="submit" name="send" value="Send">
          </form>
        </div>


      </div>


<?php include "./partials/footer.php"?>