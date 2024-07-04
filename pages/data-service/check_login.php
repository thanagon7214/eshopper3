<?php
include("connect_database.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $sql = "select top(1) * from userlogin where user_name = '".$user."' AND user_pass = '".$password."'";
    // $query = sqlsrv_query($conn,$sql,array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));

    // ใช้ฟังก์ชัน sqlsrv_prepare เพื่อเตรียมคำสั่ง SQL. ในการป้องกัน SQL Injection
    $query = sqlsrv_prepare($conn,$sql,array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));
    if ($query === false) {
        $answer = 'null';
        $response = [  
            'user' => htmlspecialchars($user),
            'password' => htmlspecialchars($password),
            'answer' => htmlspecialchars($answer),
            'err' => htmlspecialchars( print_r(sqlsrv_errors(), true))
        ];
        header('Content-Type: application/json');
        echo json_encode($response);
       
    }
    else{
        // ใช้ฟังก์ชัน sqlsrv_execute เพื่อประมวลผลคำสั่ง SQL. ในการป้องกัน SQL Injection
        $result = sqlsrv_execute($query);

            if(sqlsrv_num_rows($query) > 0){
            $answer = 'y';
            $response = [  
                'user' => htmlspecialchars($user),
                'password' => htmlspecialchars($password),
                'answer' => htmlspecialchars($answer),
                
            ];
            }
            else{
                $answer = 'n';
                $response = [  
                    'user' => htmlspecialchars($user),
                    'password' => htmlspecialchars($password),
                    'answer' => htmlspecialchars($answer),
                    
                ];
            }
        
        // ตั้งค่าหัวข้อของ HTTP เพื่อแจ้งว่า response เป็น JSON
        header('Content-Type: application/json');
        echo json_encode($response);
    }
 
    
 
}else{
    $answer = 'null';
    $response = [  
        'user' => htmlspecialchars($user),
        'password' => htmlspecialchars($password),
        'answer' => htmlspecialchars($answer),
        
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
}

?>