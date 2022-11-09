<?php include "./partials/header.php"?>

<div class="container">
        <h1>Welcome Back Login Here</h1>

        <div class="forms">
          <form action="" autocomplete="off" method="post">
            <div class="form-groups">
              <p>Enter Email :</p>
              <div class="inputs mail">
                <input
                  type="email"
                  placeholder="Enter Email or Username"
                  name="email"
                  id=""
                />
              </div>
            </div>
            <div class="form-groups"><p>Enter Password :</p>
            <div class="inputs ">
             <div class="pass">
              <input class="passI"
              type="password"
              placeholder="Enter Password"
              name="pass"
              id=""
            />
            <div class="eye closed" data-visible="true"></div>
             </div>
            </div>
          </div>

         <div class="red">
         <p><a href="forgot">Forgot Password ?</a></p>
         <p>Don't have account ? <a href="signup">Create Account.</a></p>
         </div>
            <input type="submit" name="login" value="Login">
          </form>
        </div>


      </div>


<?php include "./partials/footer.php"?>