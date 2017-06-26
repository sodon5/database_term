<?php
	$con=mysqli_connect("localhost","root","","") or die ("MySQL 접속 실패!");
//db연결		
	$sql="
	//query 적는 곳
	";
	
	
	$ret = mysqli_query($con,$sql);
	
	if($ret){
		echo "table이 성공적으로 생성됨.";
	}
	else{
		echo "table 생성 실패!!"."<br>";
		echo "실패 원인 : ".mysqli_error($con);
	}

	mysqli_close($con);
?>
