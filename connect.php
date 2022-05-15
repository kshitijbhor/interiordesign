<?php
    // Database Connection 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, "srushti");
    
    // echo "Server connected";

    // if(!$conn){
    //     die("Error found".mysqli_connect_error());
    // }




    // if(isset($_POST['send'])){

    //     $name = $_POST['name'];
    //     $mail = $_POST['mail'];
    //     $message = $_POST['message'];


    //     $sql_query = "INSERT INTO 'contact'('name', 'mail', 'message')
    //     VALUES ('$name','$mail','$message')";

    //     if(mysqli_query($conn, $sql_query)){
    //         echo "New Details Inserted";
    //     }
    //     else{
    //         echo "Error: " . $sql . "" . mysqli_error($conn);
    //     }
    //     mysqli_close($conn);

    // }

    
    $sname = $_POST['name'];
    $smail = $_POST['mail'];
    $smessage = $_POST['message'];
    
    

    $sql = "INSERT INTO contact(`name`, `mail`, `message`) VALUES ('$sname', '$smail', '$smessage')";

    if(mysqli_query($conn, $sql)){
        echo " Congratulations!! \nData Uploaded ";
    }else{
        echo ' err ',
        mysqli_error($conn);
    }

    mysqli_close($conn);
?>