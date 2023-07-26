<?php include "./partials/header.php";
//INCLUDE DATABASE FILE
include "./database/database.php";

if(isset($_POST['register'])){
$email=$_POST['email'];
$Sname=$_POST['username'];
$Fnames=$_POST['Fnames'];
$pass=$_POST['pass'];
$phone=$_POST['phone'];
$cpass=$_POST['cpass'];
if($cpass != $pass){
    echo "password does not match";
}
else{
    $results = $crud->InsertNewUser($Fnames, $Sname, $email, $phone, $pass);

    if($results){
      echo "You have successfully created an account with us";
    
      echo "We have emailed you a verification email";
      header("Location:Verify.php");
    }
    else{
      echo "Failed to create an account";
    }
}

}
?>

<div class="container">
        <h1>Welcome  Create an Account Here</h1>
        <p>All Fields On  this  Page  are  Required.All Fields  must  be filled</p>

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
                  type="text"
                  placeholder="Enter Full Names"
                  name="Fnames"
                   
                />
              </div>
              
            </div>
               <div class="form-groups">
              <p>Enter Phone :</p>
              <div class="inputs mail">
                <input
                  type="type"
                  placeholder="Enter phone number"
                  name="phone"
                   
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
              name="cpass"
               
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