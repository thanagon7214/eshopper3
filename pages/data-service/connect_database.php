<?php
	// $serverName = 'BD-1406\SQLEXPRESS'; //ชื่อ IP ของฐานข้อมูล
	// $databaseName = "Ecommerce"; //ฐานข้อมูลใหญ่
	// $connectionInfo = array("Database"=>$databaseName,"MultipleActiveResultSets"=>true,"CharacterSet"  => 'UTF-8');
	$serverName = 'Ecom_shop.mssql.somee.com';
	$uid = "Host_somee_31469_SQLLogin_1"; //ชื่อ username
	$pwd = "ghyzwz6oms"; // password
	$databaseName = "Ecom_shop"; //ฐานข้อมูลใหญ่
	$connectionInfo = array("Database"=>$databaseName, "UID"=>$uid, "PWD"=>$pwd, "MultipleActiveResultSets"=>true,"CharacterSet"  => 'UTF-8');
	$conn = sqlsrv_connect($serverName, $connectionInfo);
	
	if( $conn === false )
	{
		 echo "Connection could not be established.\n";
		//  die( print_r( sqlsrv_errors(), true));
	}
    else{
        echo "Connect\n";
    }



?>