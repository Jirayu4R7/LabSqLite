<?php 
	include_once('connection.php');

	$id = $_POST['id']; 

	$getdata = mysqli_query($conn,"SELECT * FROM tb_student WHERE id ='$id'");
	$rows = mysqli_num_rows($getdata);

	$delete = "DELETE FROM tb_student WHERE id ='$id'";
	$exedelete = mysqli_query($conn,$delete);

	$respose = array();

	if($rows > 0)
	{
		if($exedelete)
		{
			$respose['code'] =1;
			$respose['message'] = "Delete Success";
		}
		else
		{
		$respose['code'] =0;
		$respose['message'] = "Failed Delete";
		}
	}
	else
	{
		$respose['code'] =0;
		$respose['message'] = "Failed Delete, data not found";
	}
	


	echo json_encode($respose);

 ?>