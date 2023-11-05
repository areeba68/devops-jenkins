<?php
session_start();
$db = mysqli_connect('db', 'root', 'password', 'transport_system');
$errors = array();
function console_log($output, $with_script_tags = true)
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
        ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}
if (isset($_POST['user-signup'])) {
    $usertype = mysqli_real_escape_string($db, $_POST['userType']);
    $regno = mysqli_real_escape_string($db, $_POST['regno']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $password = md5($password);

    $query = "INSERT INTO users (regno, name, phone, password, userType)
    VALUES('$regno' ,'$name', '$phone', '$password', '$usertype')";

    try {
        mysqli_query($db, $query);
        $_SESSION['name'] = $name;
        $_SESSION['regno'] = $regno;
        $_SESSION['phone'] = $phone;
        $_SESSION['userType'] = $usertype;
        header('location: signIn.php');
    } catch (mysqli_sql_exception $e) {
        if ($e->getCode() == 1062) {
            console_log("Registration number already exists");
        } else {
            console_log("Register error");
        }
    }
}
$wrongInput = false;
if (isset($_POST['user-signin'])) {
    $regno = mysqli_real_escape_string($db, $_POST['regno']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $password = md5($password);
    $query = "SELECT * FROM users WHERE regno=
    '$regno' AND password='$password'";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) {
        while ($row = $results->fetch_assoc()) {
            $_SESSION['regno'] = $row['regno'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['userType'] = $row['userType'];
        }

        if ($_SESSION['userType'] == "student") {
            header('location: Dashboard.php');
        } else {
            header('location: Dashboard.php');
        }
    } else {

        // If the username and password doesn't match
        $wrongInput = true;
    }
}
$students = array();
function getStudents()
{
    global $db, $students;
    $query = "SELECT * FROM `users` where userType='student'";
    $res = mysqli_query($db, $query);
    // console_log($res->fetch_assoc());
    while ($row = $res->fetch_assoc()) {
        array_push($students, $row);
    }
    console_log($students);
}
if (isset($_POST['remove-std'])) {
    $stdID = $_POST['std-id'];
    $query = "DELETE FROM `users` WHERE regno = '$stdID'";
    $res = mysqli_query($db, $query);
}
