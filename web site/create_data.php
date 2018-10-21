<?php 
	include_once('connection.php'); 

	$id =$_POST['id'];
	$name=$_POST['name'];

	$insert = "INSERT INTO tb_student(id,name) VALUES ('$id','$name')";

	$exeinsert = mysqli_query($conn,$insert);

	$response = array();

	if($exeinsert)
	{
		$response['code'] =1;
		$response['message'] = "Success ! Data di tambahkan";
	}
	else
	{
		$response['code'] =0;
		$response['message'] = "Failed ! Data Gagal di tambahkan";
	}

		echo json_encode($response);

 ?>