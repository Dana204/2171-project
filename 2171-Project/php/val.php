<?php
    
    include_once 'db_conn.php';
    // require_once ('../PHPMailer/PHPMailerAutoload.php');

    // VARIABLES
   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $dep = $_POST['dep'];
    $location = $_POST['location'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    // $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    // $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    // $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $dep = mysqli_real_escape_string($conn, $_POST['dep']);
    // $location = mysqli_real_escape_string($conn, $_POST['location']);
    // $category = mysqli_real_escape_string($conn, $_POST['category']);
    // $description = mysqli_real_escape_string($conn, $_POST['description']);
    

    $fname_error = $lname_error = $dep_error = $email_error = $description_error = $category_error = $loc_error = "";
    
    if (isset($_POST['submit'])) {
        
         //First NAME
         if(empty($fname)){
            $fname_error = "Name is Required";
            
            
            $lname_error = "Name is Required";
        } else {
            $lname = test_input($lname);
            if(!preg_match("/^[a-zA-Z]*$/",$lname)){
                $lname_error = "Only letters are allowed"; 
            }
        }

        // EMAIL
        if(empty($email)){
            $email_error = "Email is Required";
        } else {
            $email = test_input($email);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $email_error = "Invalid Email"; 
            }
        }

        // DEPARTMENT
        if(empty($dep)){
            $dep_error = "Department is Required";
        } else {
            $dep = test_input($dep);
            if(!preg_match("/^[a-zA-Z]*$/", $dep)){
                $dep_error = "Only letters are allowed"; 
            }
        }

        // LOCATION
        if(empty($location)){
            $dep_error = "Location is Required";
        } else {
            $location = test_input($location);
            if(!preg_match("/^[a-zA-Z]*$/", $location)){
                $loc_error = "Only letters are allowed"; 
            }
        }

        // CATEGORY
        if(empty($category)){
            $category_error = "Category is Required";
        } else {
            $category = test_input($category);
            if(!preg_match("/^[a-zA-Z]*$/", $category)){
                $category_error = "Only letters are allowed"; 
            }
        }
        // DESCRIPTION
        if(empty($description)){
            $description_error = "A message is Required";
        } 

        // $mail = new PHPMailer();
        // $mail->isSMTP();
        // $mail->SMTPAuth = true;
        // $mail->SMTPSecure = 'ssl';
        // $mail->Host = 'smtp.gmail.com';
        // $mail->Port = 465;
        // $mail->isHTML(true);
        // $mail->Useremp_name = 'danacam28@gmail.com';
        // $mail->Password = 'mygirl204';
        // $mail->setFrom('danacam28@gmail.com');
        // $mail->Subject = 'Query Submission: ';
        // $mail->Body = '$description';
        // $mail->addAddress('danac2810@gmail.com');
    
    if ($fname_error == "" and $lname_error == "" and $dep_error == "" and $email_error == "" and $category_error ="" and $description_error == "" and $loc_error == "") {
        $sql = "INSERT INTO NjlDB (fname,lname,email,dep,department,location,category,description) VALUES ('$fname','$lname','$email','$dep','$location','$category','$description');";
        mysqli_query($conn,$sql);
        // $mail->Send();
        
        // if(!$mail->Send()){
        //     echo 'Failed';
        // }else {
        //     echo "<script type='text/javascript'>alert('Message Sent');</script>";  
        // }
        $fname = $lname = $dep = $location = $email = $category = $description = '';
    }

}
    function test_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?> 