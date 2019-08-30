<!DOCTYPE html>
<html>
<head>
	<title>upload Php</title>
</head>
<body>



<?php


$ftp_username = "Naruto.1093";
$ftp_userpass = "Tanja";


// connect and login to FTP server
$ftp_server = "mc10.pandaserv.net";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

$file = $_POST["upload"];

// upload file
if (ftp_put($ftp_conn, "logg.txt", $file, FTP_ASCII))
  {
  echo "Successfully uploaded $file.";
  }
else
  {
  echo "Error uploading $file.";
  }

// close connection
ftp_close($ftp_conn);




?>

</body>
</html>