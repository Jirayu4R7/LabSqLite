<?php 
	include_once('connection.php'); 

	$query = "SELECT * FROM tb_student";
	$result = mysqli_query($conn,$query);

	$arraydata = array();

	while($baris = mysqli_fetch_assoc($result))
	{
		$arraydata[]=$baris;
	}
	echo json_encode($arraydata);

 ?>