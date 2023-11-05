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
if (isset($_POST['add-bus'])) {
    $drivername = mysqli_real_escape_string($db, $_POST['drivername']);
    $plateno = mysqli_real_escape_string($db, $_POST['plateno']);

    $query = "INSERT INTO buses (drivername, plateno)
    VALUES('$drivername' ,'$plateno')";

    try {
        mysqli_query($db, $query);
    } catch (mysqli_sql_exception $e) {
        console_log("Register error");
    }
}

$buses = array();
function getBuses()
{
    global $db, $buses;
    $query = "SELECT * FROM `buses` ";
    $res = mysqli_query($db, $query);
    while ($row = $res->fetch_assoc()) {
        array_push($buses, $row);
    }
}

if (isset($_POST['remove-bus'])) {
    $busID = $_POST['bus-id'];
    $query = "DELETE FROM `buses` WHERE id = '$busID'";
    $res = mysqli_query($db, $query);
}
