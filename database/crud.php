<?php

class crud
{
    //private database object
    private $db;
    //construct to initialize private variable to the database connection
    function __construct($conn)
    {
        $this->db = $conn;
    }

    // function to be used to create  new user on the system

    public function InsertNewUser($Fnames, $Sname, $email, $phone, $pass)
    {
        try {
            $npass = md5($phone.$pass);

        $sql = "INSERT INTO `signup` ( `Fname`, `Sname`, `email`, `phone`, `pass`) VALUES (:Fname, :Sname, :email, :phone, :pass);";

            #prepare the sql statement for execution

            $stmt = $this->db->prepare($sql);

            #binding parameters now

            $stmt->bindparam(":Fname", $Fnames);
            $stmt->bindparam(":Sname", $Sname);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":phone", $phone);
            $stmt->bindparam(":pass", $pass);
            #we execute now.
            $stmt->execute();
            return true;

        }catch(PDOException $e){
                echo $e->getMessage();
                return false;

            }


    }
}

?>