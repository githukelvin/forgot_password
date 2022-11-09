<?php include "./partials/header.php"?>

<div class="container">
        <h1>Welcome To Verification Module</h1>
        <div class="forms">
          <form action="" autocomplete="off" method="post">
         <p>We have  Emailed you an <strong>OTP</strong> to your Emailed</p>
           
          <div class="form-groups">
              <p>Enter OTP :</p>
              <div class="inputs mail">
                <input
                  type="text"
                  placeholder="Enter OTP "
                  name="otp"
                  id=""
                />
              </div>
            </div>
            <p>Didn't Receive The OTP ?  <a href="send">Resend OTP</a></p>
            <input type="submit" name="verify" value="Verify">
          </form>
        </div>


      </div>


<?php include "./partials/footer.php"?>