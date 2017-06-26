
<?php
	$con=mysqli_connect("localhost","root","","dbterm") or die ("MySQL 접속 실패!");
//db연결		
	$sql="
	select * from student 
	";
	
	
	$ret = mysqli_query($con,$sql);
	
	if($ret){
		echo mysqli_num_rows($ret), "건이 조회됨 <br><br>";
	}
	else{
		echo "table 생성 실패!!"."<br>";
		echo "실패 원인 : ".mysqli_error($con);
	}
	while($row = mysqli_fetch_array($ret)){
		echo $row['studID'], " ", $row['studNAME'], " ", $row['studNUM'],"<br>";
	}
	mysqli_close($con);
?>
