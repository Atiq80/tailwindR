<?php 

$db = mysqli_connect("localhost", "root", "", "fitton" );

// if ($db == true){
 
//     echo"connected";
// }


?>


<?php
//     include ('connect.php');


//     if (isset($_POST["btn"])) {

//         $firstname = $_POST["fn"];
//         $lastname = $_POST["ln"];
//         $username = $_POST["un"];
//         $gender = $_POST["g"];
//         $email = $_POST["e"];
//         $pass = $_POST["p"];
//         $rpass = $_POST["rp"];

//         $sql = "INSERT INTO `details` (`firstname`, `lastname`, `username`, `gender` , `email`, `pass` ) 
//         VALUES ( '$firstname' , '$lastname' , '$username' , '$gender' , '$email' , '$pass'  )";
        
//          $usercheck = "SELECT * FROM `details` WHERE  `username` = '$username' ";
//           $refer  = mysqli_query($db,$usercheck);
//           $emailcheck = "SELECT * FROM `details` WHERE  `email` = '$email' ";
//            $Erafer = mysqli_query($db,$emailcheck);
//         if($Erafer){
//             $e = "Your email is already taken      ";
        
//         }
//         else { 

//           if($refer){
//             $y = "Your username must be unique       ";
//         }
//         else {



//         if ($pass == $rpass) {

//             $check = mysqli_query($db, $sql);

//             if ($check) {
//                 echo "<script>alert('register compeleted')</script> ";
//             } else {
//                 echo "<script>alert('register failed')</script> ";
//             }

//         } else {
//             //    echo "<script>alert('Password and confirm password dosn't match')</script>";
//             $x = "Password and confirm password dosn't match ";

//         }


//     }

// }

// }




    ?>
