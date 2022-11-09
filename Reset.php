<?php include "./partials/header.php"?>

<div class="container">
        <h1>Welcome To  Reset Password Module</h1>
        <div class="forms">
          <form action="" autocomplete="off" method="post">
         <p>Enter New Password to <strong>Reset</strong> your password</p>
           
         <div class="form-groups">
                <p>Enter Password :</p>
            <div class="inputs ">
             <div class="pass">
              <input class="passI"
              type="password"
              placeholder="Enter Password"
              name="pass"
               
            />
            <div class="eye closed" data-visible="true"></div>
             </div>
            </div>
          </div>
          
          <div class="form-groups">
            <p>Confirm Password :</p>
            <div class="inputs ">
             <div class="pass">
              <input class="passI"
              type="password"
              placeholder="Confirm Password"
              name="pass"
               
            />
            <div class="eye closed" data-visible="true"></div>
             </div>
            </div>
          </div>
            <input type="submit" name="reset" value="Reset">
          </form>
        </div>


      </div>


<?php include "./partials/footer.php"?>