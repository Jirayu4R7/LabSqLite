<?php  
	include_once('connection.php'); 

	$id = $_POST['id'];
	$name = $_POST['name'];

	$getdata = mysqli_query($conn,"SELECT * FROM tb_student WHERE id ='$id'"); 
	$rows = mysqli_num_rows($getdata);	

	$respose = array();

	if($rows > 0 )
	{
		$query = "UPDATE tb_student SET name='$name' WHERE id='$id'";
		$exequery = mysqli_query($conn,$query);
		if($exequery)
		{
				$respose['code'] =1;
				$respose['message'] = "Update Success";
		}
		else
		{
				$respose['code'] =0;
				$respose['message'] = "Failed Update";
		}
	}
	else
	{
				$respose['code'] =0;
				$respose['message'] = "Failed Update ";
	}
	

	echo json_encode($respose);
?>

