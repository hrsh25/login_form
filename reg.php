<html>
<head>
<script type="text/javascript">
		function validateImage() {
				var formData = new FormData();
    			var	file = document.getElementById("img").files[0];
    			formData.append("Filedata", file);
    			var t = file.type.split('/').pop().toLowerCase();
    			if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
        				alert('Please select a valid image file');
        				document.getElementById("img").value = '';
        				return false;
    			}
    			if (file.size > 1024000) {
        			alert('Max Upload size is 1MB only');
        			document.getElementById("img").value = '';
    			}
    			else
    			{
    				document.getElementById("demo").innerHTML="<img src=document.getElementById("img11")";
    			}
    			return true;
			}
	</script>
</head>
</html>
<?php
	$user = $_REQUEST['username'];
	$pass=$_REQUEST['pwd'];
	$name=$_REQUEST['name'];
	$gender= $_REQUEST['gender'];
	$con = mysqli_connect("localhost","root","");
	if($con)
		echo "Connection Successful!";
	else
		echo "Connection Unsuccessful!";
	
	mysqli_select_db($con,"form");
	
	//$str = "create table info(name varchar(20), username varchar(20), password varchar(20), gender varchar(10))";
	//mysqli_query($con,$str);

	$str = "insert into info(name,username,password,gender) values ('$name','$user','$pass','$gender')";
	mysqli_query($con,$str);
?>
