<?php
    header("Content-Type: text/html;charset=UTF-8");
    $conn=mysqli_connect("localhost","root","","dbterm");
    $data_stream = "'".$_GET['Id']."','".$_GET['Password']."','".$_GET['Name']."','".$_GET['Email']."'";
    $query = "insert into student(`studID`, `studPASSWORD`, `studNAME`, `studEMAIL`) values (".$data_stream.")";
    $result = mysqli_query($conn, $query);
     
    if($result)
      echo "1";
    else
      echo "-1";
     
    mysqli_close($conn);
?>
