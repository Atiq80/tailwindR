<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
    <?php
include ('connect.php');

if (isset($_POST["btn"])) {
    $firstname = $_POST["fn"];
    $lastname = $_POST["ln"];
    $username = $_POST["un"];
    $gender = $_POST["g"];
    $email = $_POST["e"];
    $pass = $_POST["p"];
    $rpass = $_POST["rp"];

    // Check if username already exists
    $usercheck = "SELECT * FROM `details` WHERE `username` = '$username'";
    $result_usercheck = mysqli_query($db, $usercheck);
    
    // Check if email already exists
    $emailcheck = "SELECT * FROM `details` WHERE `email` = '$email'";
    $result_emailcheck = mysqli_query($db, $emailcheck);

    // Check if username or email already exist
    if (mysqli_num_rows($result_usercheck) > 0) {
        $x = "Username must be unique";
    } elseif (mysqli_num_rows($result_emailcheck) > 0) {
        $x = "Your email is already taken";
    } elseif ($pass != $rpass) {
        $x = "Password and confirm password doesn't match";
    } else {
        // Insert user details into the database
        $sql = "INSERT INTO `details` (`firstname`, `lastname`, `username`, `gender`, `email`, `pass`) 
        VALUES ('$firstname', '$lastname', '$username', '$gender', '$email', '$pass')";
        $check = mysqli_query($db, $sql);

        if ($check) {
            echo "<script>alert('Registration completed')</script>";
        } else {
            echo "<script>alert('Registration failed')</script>";
        }
    }
}
?>


<style>



    input::placeholder,
    textarea::placeholder {
        font-size: 14px;
        line-height: 1.25rem;
        color: #333 !important;


    }
    #cutelem {
    border-radius: 0px 10px 10px 0px;
    position: absolute;
    width: auto;
    background: #333;
    opacity: 0.9; /* Initial opacity */
    left: 0px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    top: 6px;
    transition: all ease-in-out .6s;
}
#cutelem button {
    margin-left: 2px;
    padding-top: 6px;
    padding-bottom: 5px;
    padding-left: 6px;
    padding-right: 6px;  
    background-color: #ffce00;
    border-radius: 10px;
}
#cutelem p {
    padding: 10px;
    padding-right: 5px;
    color: #efefef;
    
    
}

</style>


<body class="font-poppins relative">


 
 


    <div style=" background-image: url(bg-registration-form-1.jpg); background-position: top; background-size: cover;"
        class="main   relative  flex items-center justify-center w-full h-screen">

        <div id="cutelem">
    <p><?php if (isset($x)) { echo $GLOBALS['x'];  echo "<button  onclick='cut()'><ion-icon name='chevron-forward-sharp'></ion-icon></button>"; } ?> </p>
    
    

    
       </div>

<script>
function cut() {
    var cuteElem = document.getElementById('cutelem');
    cuteElem.style.opacity = '0'; // Changing opacity to 0
}
</script>




        <div
            class="inner sm:flex sm:items-center sm:h-fit  w-full  h-full bg-white lg:w-[62%] lg:h-[28.5rem] xl:h-[32rem]">

            <div class="p-5 md:p-0  lg:py-4 lg:pl-4   lg:h-full lg:w-[30rem] ">

                <img src="registration-form-1.jpg" class=" w-full object-cover  h-full " alt="">

            </div>


            <!-- right div -->


            <div class="lg:mr-4">

                <h1 class="text-2xl  lg:text-xl font-semibold text-[#333] text-center lg:pt-2 pt-7">REGISTRATION FORM
                </h1>

                <form method="POST" class="mx-5 lg:mx-7 mt-10 lg:mt-5  h-full ">


                    <div class="flex justify-center gap-5 ">
                        <input type="text"
                            class="w-full border-b text-sm border-[#333] pb-1 lg:pb-[3.3px] outline-none " required
                            placeholder="First Name" name="fn">
                        <input type="text"
                            class="w-full border-b text-sm border-[#333]  pb-1 lg:pb-[3.3px] outline-none " required
                            placeholder="Last Name" name="ln">
                    </div>

                    <div class=" w-full mt-5 lg:mt-[14.5px]  relative flex">

                        <input type="text"
                            class="w-full border-b text-sm border-[#333] pb-1 lg:pb-[3.3px] outline-none " required
                            placeholder="Username" name="un">

                        <ion-icon class="absolute right-1 bottom-2 size-3 lg:size-2 text-[#333]"
                            name="person-sharp"></ion-icon>




                    </div>

                    <div class=" w-full mt-5 lg:mt-[14.5px] relative flex">

                        <input type="email"
                            class="w-full border-b text-sm border-[#333] pb-1 lg:pb-[3.3px] outline-none " required
                            placeholder="Email Address" name="e">

                        <ion-icon class="absolute right-1 bottom-2 size-3 lg:size-2 text-[#333]"
                            name="mail-sharp"></ion-icon>



                    </div>


                    <div class="w-full mt-5 lg:mt-[14.5px] relative flex">
                        <select id="genderSelect" 
                            class="w-full border-b text-sm   border-[#333] text-[#333] absolute pb-1 lg:pb-[3.3px] outline-none">
                            <option  value="Male">Male</option>
                            <option  value="Female">Female</option>
                            <option  value="Custom">Custom</option>
                        </select>

                        <input type="text" id="genderInput"
                            class="w-full outline-none border-b text-sm border-[#333] text-[12px] text-[#333]  pb-1 lg:pb-[3.3px]"
                            required maxlength="6" placeholder="Gender" name="g">
                    </div>

                    <!-- javascript -->



                    <div class=" w-full mt-5 lg:mt-[14.5px] relative flex">

                        <input type="password"
                            class="w-full border-b text-sm border-[#333] pb-1 lg:pb-[3.3px] outline-none " required
                            placeholder="Password" name="p">

                        <ion-icon class="absolute right-1 bottom-2 size-3 lg:size-2 text-[#333]"
                            name="lock-closed-sharp"></ion-icon>

                    </div>


                    <div class=" w-full mt-5 lg:mt-[14.5px] relative flex">

                        <input type="password"
                            class="w-full border-b text-sm border-[#333] pb-1 lg:pb-[3.3px] outline-none " required
                            placeholder="Confirm Password" name="rp">

                        <ion-icon class="absolute right-1 bottom-2 size-3 lg:size-2 text-[#333]"
                            name="lock-closed-sharp"></ion-icon>

                    </div>

                    <div class="flex items-center  group  justify-center mt-8 pb-7 ">

                        <input
                            class="bg-[#333]  cursor-pointer py-3  px-10 lg:px-9 lg:py-3 lg:text-xs   text-[#efefef] text-base"
                            type="submit" name="btn" value="Register ">
                        <span
                            class="  lg:text-[10.5px] text-sm  cursor-pointer ease-in-out duration-200  text-[#efefef] group-hover:-translate-x-6 group-hover:-rotate-45 -translate-x-8 ">&#129122</span>


                    </div>



                </form>

            </div>

        </div>





    </div>

   

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>