<?php include "./partials/header.php"?>

<div class="container">
        <h1>Welcome Contact Us Module</h1>

        <div class="forms">
          <form action="" autocomplete="off" method="post">
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
         
            <input type="submit" name="login" value="Send">
          </form>
        </div>


      </div>


<?php include "./partials/footer.php"?>