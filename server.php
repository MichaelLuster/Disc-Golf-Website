<?php
session_start();
unset($_SESSION['username']);

//intialize error variable
$errors = array();

// Create connection
$conn = mysqli_connect("localhost", "moluster", "loh8geiM", "moluster") or die("could not connect to db");

// register users
$username = mysqli_real_escape_string($conn,$_POST['username']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$Confirmpassword = mysqli_real_escape_string($conn,$_POST['Confirmpassword']);

//form validation
if($Confirmpassword != "")
    if($password != $Confirmpassword)
        array_push($errors, "Passwords do not match");

//check databse for same username or emails
$user_check_query = "SELECT * FROM CUSTOMER where username = '".$username."' or email = '".$email."' LIMIT 1";
$result = mysqli_query($conn, $user_check_query);
$num_rows = mysqli_num_rows($result);
$user = mysqli_fetch_assoc($result);

//register user
if(isset($_POST['sign_up'])){

    //Check for existing usernames and emails
    if ($num_rows > 0) {
        if($user['USERNAME'] == $username){array_push($errors, "Username already exists");}
        if($user['EMAIL'] == $email){array_push($errors, "This email is already being used");}
    }

    //If no errors sign up the user and go to MainMenu passing the users email
    if(count($errors) == 0){
        $password = md5($password_1);
        // Get the next id
        $sql = "SELECT id FROM CUSTOMER order by id desc LIMIT 1";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $row["id"]++;

        $query = "INSERT INTO CUSTOMER (id, username, email, password) VALUES ('".$row["id"]."', '".$username."', '".$email."', '".$password."')";
        mysqli_query($conn, $query);

        $_SESSION['username'] = $email;

        header('location: MainMenu.php');
    }
}

//Customer Login user
if(isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //Check to see if the username/email and password match the same as ones in the database, with the password being hashed
    $password = md5($password);
    $query = "SELECT * FROM CUSTOMER WHERE (username = '$username' AND password = '$password') OR (email = '$username' AND password = '$password')";
    $results = mysqli_query($conn, $query);
    $num_rows = mysqli_num_rows($results);

    //If there is a match, then send the username/email to MainMenu else print "Wrong Username or password"
    if($num_rows > 0){
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Logged in succesfully";
        header('location: MainMenu.php');
    }
    else{
        array_push($errors, "Wrong username/password");
    }
}

//Admin Login user
if(isset($_POST['Admin_login_user'])) {
    $manager = mysqli_real_escape_string($conn, $_POST['manager']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //Check to see if the username/email and password match the same as ones in the database, with the password being hashed
    $password = md5($password);
    $query = "SELECT * FROM ADMIN WHERE username = '$manager' AND password = '$password'";
    $results = mysqli_query($conn, $query);
    $num_rows = mysqli_num_rows($results);

    //If there is a match, then send the username to AdminMainMenu else print "Wrong Username or password"
    if($num_rows > 0){
        $_SESSION['manager'] = $manager;
        $_SESSION['success'] = "Logged in succesfully";
        header('location: AdminMainMenu.php');
    }
    else{
        array_push($errors, "Wrong username/password");
    }
}
//Add Inventory option, for admins only
if(isset($_POST['Add_Inventory'])){
    $disctourseries = mysqli_real_escape_string($conn, $_POST['disctourseries']);
    $discname = mysqli_real_escape_string($conn, $_POST['discname']);
    $discmanufacturer = mysqli_real_escape_string($conn, $_POST['discmanufacturer']);
    $discplastic = mysqli_real_escape_string($conn, $_POST['discplastic']);

    $query = "SELECT * FROM INVENTORY WHERE disctourseries = '$disctourseries' AND discname = '$discname' AND discmanufacturer = '$discmanufacturer' AND discplastic = '$discplastic'";
    $results = mysqli_query($conn, $query);
    $num_rows = mysqli_num_rows($results);

    //If there is a match, then print duplicate entry
    if($num_rows > 0){
        array_push($errors, "Entry already exists");
    }
    else{
        $results = "INSERT INTO INVENTORY (disctourseries, discname, discmanufacturer, discplastic) VALUES ('".$disctourseries."','".$discname."', '".$discmanufacturer."', '".$discplastic."')";
        mysqli_query($conn, $results);
        header('location: Inventory_List.php');
    }
}

?>