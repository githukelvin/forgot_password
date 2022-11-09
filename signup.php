<?php include "./partials/header.php"?>

<div class="container">
        <h1>Welcome  Create an Account Here</h1>
        <p>All Fields On  this  Page  are  Required.All Fields  must  be filled</p>

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
              <p>Enter Username :</p>
              <div class="inputs mail">
                <input
                  type="text"
                  placeholder="Enter  Username"
                  name="username"
                   
                />
              </div>
              
            </div>
            <div class="form-groups">
              <p>Enter Full Names :</p>
              <div class="inputs mail">
                <input
                  type="email"
                  placeholder="Enter Full Names"
                  name="Fnames"
                   
                />
              </div>
              
            </div>

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
         <div class="red">
         <p><a href="forgot">Forgot Password ?</a></p>
         <p>Already have an a account ? <a href="login">Login Here.</a></p>
         </div>
            <input type="submit" name="register" value="Sign Up">
          </form>
        </div>


      </div>


<?php include "./partials/footer.php"?>