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

    include ("connect.php");

    if (isset($_POST["btn"])) {

        $firstname = $_POST["fn"];
        $lastname = $_POST["ln"];
        $username = $_POST["un"];
        $gender = $_POST["g"];
        $email = $_POST["e"];
        $pass = $_POST["p"];
        $rpass = $_POST["rp"];


        // Prepare an INSERT statement
        $sql = "INSERT INTO `details` (`firstname`, `lastname`, `username`, `gender` , `email`, `pass` ) 
            VALUES ( '$firstname' , '$lastname' , '$username' , '$gender' , '$email' , '$pass'  )";
        if ($pass == $rpass) {

            $q = mysqli_query($db, $sql);

            if ($q) {
                echo "<script>alert('register compeleted')</script> ";
            } else {
                echo "<script>alert('register failed')</script> ";
            }

        } else {
        
            $x = "Password and Confirm-password are not same";
         
    //         echo "<script>
    //         alert('Password and Confirm-password are not same');
    //  </script>";

        }

        

    }
    
    ?>





<style>
    input::placeholder,
    textarea::placeholder {
        font-size: 11.5px;
        color: #333 !important;
    

    }

    .popup {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #f0f0f0;
            padding: 10px;
            border: 1px solid #ccc;
            opacity: 1;
            transition: opacity 2s ease-in-out;
        }

</style>

<body class="font-poppins">


<div class="popup" id="myPopup"><?php 
                
                if(isset($x)){
                
                    echo $GLOBALS['x'];
                
                } 
                
                ?></div>

    <div style="background-image: url(bg-registration-form-1.jpg); background-position: top; background-size: cover;"
        class="main flex items-center justify-center w-full h-screen">


        <div
            class="inner sm:flex sm:items-center sm:h-fit  w-full  h-full bg-white lg:w-[62%] lg:h-[28.5rem] xl:h-[32rem]">

            <div class="p-5 md:p-0  lg:py-4 lg:pl-4   lg:h-full lg:w-[30rem] ">

                <img src="registration-form-1.jpg" class=" w-full object-cover  h-full " alt="">

            </div>


            <!-- right div -->


            <div class="lg:mr-4 ">

                <h1 class="text-2xl  lg:text-xl font-semibold text-[#333] text-center lg:pt-2 pt-7">REGISTRATION FORM
                </h1>

               

                <form method="POST" class="mx-5 lg:mx-7 mt-10 lg:mt-5  h-full ">


                    <div class="flex justify-center gap-5 ">
                        <input type="text"
                            class="w-full border-b text-sm  text-[13.8px] border-[#333] pb-1 lg:pb-[3.3px] outline-none "
                            required placeholder="First Name" name="fn">
                        <input type="text"
                            class="w-full border-b text-sm border-[#333]  pb-1 lg:pb-[3.3px] outline-none text-[13.8px]"
                            required placeholder="Last Name" name="ln">
                    </div>

                    <div class=" w-full mt-5 lg:mt-[14.5px]  relative flex">

                        <input type="text"
                            class="w-full border-b text-sm border-[#333] pb-1 lg:pb-[3.3px] outline-none text-[13.8px]"
                            required placeholder="Username" name="un">

                        <ion-icon class="absolute right-1 bottom-2 size-3 lg:size-2 text-[#333]"
                            name="person-sharp"></ion-icon>




                    </div>

                    <div class=" w-full mt-5 lg:mt-[14.5px] relative flex">

                        <input type="email"
                            class="w-full border-b text-sm border-[#333] text-[13.8px] pb-1 lg:pb-[3.3px] outline-none "
                            required placeholder="Email Address" name="e">

                        <ion-icon class="absolute right-1 bottom-2 size-3 lg:size-2 text-[#333]"
                            name="mail-sharp"></ion-icon>



                    </div>


                    <div class="w-full mt-5 lg:mt-[14.5px] relative flex">
                        <select id="genderSelect"
                            class="w-full border-b text-sm   border-[#333] text-[#333]  absolute pb-1 lg:pb-[3.3px]  outline-none">
                            <option  class=" " value="Male">Male</option>
                            <option class=" " value="Female">Female</option>
                            <option class=" " value="Custom">Custom</option>
                            gender
                        </select>

                        <input type="text" id="genderInput"
                            class="w-full outline-none border-b text-sm border-[#333] text-[12px] text-[#333]  pb-1 lg:pb-[3.3px]"
                            required placeholder="Gender" name="g">
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
                            name="rp" placeholder="Repeat Password">

                        <ion-icon class="absolute right-1 bottom-2 size-3 lg:size-2 text-[#333]"
                            name="lock-closed-sharp"></ion-icon>

                    </div>

                    <div class="flex items-center  group  justify-center mt-8 pb-7 ">

                        <input
                            class="bg-[#333]  cursor-pointer py-3  px-10 lg:px-9 lg:py-3 lg:text-xs   text-[#efefef] text-base"
                            type="submit" name="btn" value="Register">
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