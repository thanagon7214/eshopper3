<?php
	// $serverName = 'BD-1406\SQLEXPRESS'; //ชื่อ IP ของฐานข้อมูล
	// $databaseName = "Ecommerce"; //ฐานข้อมูลใหญ่
	// $connectionInfo = array("Database"=>$databaseName,"MultipleActiveResultSets"=>true,"CharacterSet"  => 'UTF-8');
	// $conn = sqlsrv_connect($serverName, $connectionInfo);
	
	// if( $conn === false )
	// {
	// 	 echo "Connection could not be established.\n";
	// 	//  die( print_r( sqlsrv_errors(), true));
	// }
    // else{
    //     echo "Connect\n";
    // }

	// $servername = "sql107.infinityfree.com";
	// $username = "if0_36926326";
	// $password = "DuIDCDjZ14G5R6U";
	// $dbname = "if0_36926326_Ecommerce";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ecom_shoper";
	
	// สร้างการเชื่อมต่อ
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// ตรวจสอบการเชื่อมต่อ
	if ($conn->connect_error) {
		die("yConnection failed: " . $conn->connect_error);
		
	}
	
	// try {
	// 	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	// 	// ตั้งค่า PDO error mode เป็น exception
	// 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 	echo "yConnected successfully";
	// } catch(PDOException $e) {
	// 	echo "nConnection failed: " . $e->getMessage();
	// }

	// $dsn = "mysql:host=$servername;dbname=$dbname";
	// $options = [
	// 	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	// 	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	// 	PDO::ATTR_EMULATE_PREPARES   => false,
	// ];
	// try {
	// 	$conn = new PDO($dsn, $username, $password, $options); // สร้างการเชื่อมต่อ
	// 	echo "yConnected successfully";
	// } catch (\PDOException $e) {
	// 	throw new \PDOException($e->getMessage(), (int)$e->getCode());
	// 	echo "nConnection failed: " . $e->getMessage();
	// }
	
?>