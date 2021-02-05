<?php
ignore_user_abort(true);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data = json_decode(file_get_contents("php://input"));
  print_r($data);
    // Mysql DB credentials
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "tsdata";

    $con = mysqli_connect($host, $user, $password, $database);
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // Perform queries
    $qry = "INSERT INTO tos (tos_id, tos_session_key, tos_user_id, url, title, entry_time, exit_time, timeonpage, timeonpage_by_duration, timeonpage_tracked_by, timeonsite, timeonsite_by_duration, tracking_type) VALUES (".$data->TOSId.", '".$data->TOSSessionKey."', '".$data->TOSUserId."', '".$data->URL."', '".$data->title."', '".$data->entryTime."', '".$data->exitTime."', ".$data->timeOnPage.", '".$data->timeOnPageByDuration."', '".$data->timeOnPageTrackedBy."', ".$data->timeOnSite.", '".$data->timeOnSiteByDuration."', '".$data->trackingType."')";
    //echo $qry;
    $res = mysqli_query($con, $qry);

    mysqli_close($con);
    if ($res) {
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'TS data not received. Please check your endpoint URL and POST data from client-side!';
}
?>
