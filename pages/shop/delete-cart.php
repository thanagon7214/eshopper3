<?php
session_start();

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $product_id = $_POST['id'];
//     $product_name = $_POST['name'];
//     $product_price = $_POST['price'];
//     $product_image = $_POST['image'];
//     // ตรวจสอบว่ามีตัวแปรตะกร้าสินค้าในเซสชันหรือไม่
//     if (!isset($_SESSION['cart'])) {
//         $_SESSION['cart'] = array();
//     }

//     // เพิ่มสินค้าในตะกร้า
//     $_SESSION['cart'][] = array(
//         'id' => $product_id,
//         'name' => $product_name,
//         'price' => $product_price,
//         'image' => $product_image
//     );

//     // ส่งคำตอบกลับไปยังฝั่งไคลเอนต์
//     echo json_encode($_SESSION['cart']);
// }
// ตรวจสอบว่ามีการส่ง ID มาหรือไม่
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // ลบรายการที่มี ID ตรงกันจาก session
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['id'] == $id) {
                unset($_SESSION['cart'][$key]);
                // เรียงลำดับคีย์ใหม่เพื่อไม่ให้มีช่องว่างใน array
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                break;
            }
        }
    }
    echo json_encode($_SESSION['cart']);
} else {
    echo json_encode($_SESSION['cart']);
}

?>
