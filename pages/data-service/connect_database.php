<?php
	$serverName = 'PC-BENZ'; //ชื่อ IP ของฐานข้อมูล
	$databaseName = "Ecommerce"; //ฐานข้อมูลใหญ่
	$connectionInfo = array("Database"=>$databaseName,"MultipleActiveResultSets"=>true,"CharacterSet"  => 'UTF-8');
	$conn = sqlsrv_connect($serverName, $connectionInfo);
	
	if( $conn === false )
	{
		//  echo "Connection could not be established.\n";
		//  die( print_r( sqlsrv_errors(), true));
	}
    else{
        // echo "Connect\n";
    }



?>