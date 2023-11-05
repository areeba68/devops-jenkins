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
if (isset($_POST['add-route'])) {
    $drivername = mysqli_real_escape_string($db, $_POST['drivername']);
    $plateno = mysqli_real_escape_string($db, $_POST['plateno']);
    $busno = mysqli_real_escape_string($db, $_POST['busno']);
    $stops = mysqli_real_escape_string($db, $_POST['stops']);

    $query = "INSERT INTO routes (drivername, plateno, busno, stops)
    VALUES('$drivername' ,'$plateno','$busno','$stops')";

    try {
        mysqli_query($db, $query);
    } catch (mysqli_sql_exception $e) {
        console_log("Register error");
    }
}

$routes = array();
function getRoutes()
{
    global $db, $routes;
    $query = "SELECT * FROM `routes` ";
    $res = mysqli_query($db, $query);
    while ($row = $res->fetch_assoc()) {
        array_push($routes, $row);
    }
}
if (isset($_POST['remove-route'])) {
    $routeID = $_POST['route-id'];
    $query = "DELETE FROM `routes` WHERE id = '$routeID'";
    $res = mysqli_query($db, $query);
}