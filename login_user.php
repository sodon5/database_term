<?php
    header("Content-Type: text/html;charset=UTF-8");

    session_start();
    $id = $_GET["Id"];
    $pwd = $_GET["Password"];

    $conn=mysqli_connect("localhost","root","","dbterm") or die ("MySQL 접속 실패!");
    
    $query = "SELECT * FROM student WHERE studID = '$id' and studPASSWORD = '$pwd'";

    $result = mysqli_query($conn, $query);

    $data =  mysqli_fetch_assoc($result);
    
    if($data["studID"]!= $id)
   {
    echo "-1";
   }

   else if($data["studPASSWORD"]!= $pwd)
   {
    echo "-1";
  }
  else{
    $_SESSION["studID"] = $id;
    $_SESSION["studPASSWOR"] = $pwd;
    $_SESSION["studNAME"] = $data["studNAME"];
    echo "1";
   }
/*        if($result)
          echo "1";
        else
          echo "-1";
  */

    mysqli_close($conn);
?>

