<?php


		$host='localhost';
		$dbusername='root';
		$dbpassword='';
		$dbname='connection';

		//creat connection
		$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		if ($conn == false)
		 {
		 	echo "not connected";
		 	die("connection failed:".mysqli_connect_error());
		 }
		else
		{
			$id=mysqli_real_escape_string($conn,$_REQUEST['id']);
			$username=mysqli_real_escape_string($conn,$_REQUEST['username']);
			$password=mysqli_real_escape_string($conn,$_REQUEST['password']);

			$sql="INSERT INTO connection(id,username,password) VALUES('$id','$username','$password')";
			if (mysqli_query($conn,$sql)) 
			{
				echo "new record create sucessfully";

			}
			else
			{
				echo "error:".$sql."<br>".$mysqli_error($conn);
			}

		}
		mysqli_close($conn);
  ?>