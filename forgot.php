<?php include "./partials/header.php"?>

<div class="container">
        <h1>Welcome To Forgot Password Module</h1>
        <div class="forms">
          <form action="" autocomplete="off" method="post">
         <p>Enter Email to <strong>Reset</strong> your password</p>
           
          <div class="form-groups">
              <p>Enter Email :</p>
              <div class="inputs mail">
                <input
                  type="email"
                  placeholder="Enter Email "
                  name="email"
                  id=""
                />
              </div>
            </div>
            <input type="submit" name="forgot" value="Submit">
          </form>
        </div>


      </div>


<?php include "./partials/footer.php"?>