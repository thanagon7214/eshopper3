<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['id'];
    $product_name = $_POST['name'];
    $product_price = $_POST['price'];
    $product_image = $_POST['image'];
    $quantity = $_POST['quantity'];
    // ตรวจสอบว่ามีตัวแปรตะกร้าสินค้าในเซสชันหรือไม่
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    $found = false;

    // ตรวจสอบว่ามีสินค้าในตะกร้าที่มี ID เดียวกันหรือไม่
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $product_id) {
            // ถ้ามีให้เพิ่มจำนวนสินค้า
            $_SESSION['cart'][$key]['quantity'] += 1;
            $found = true;
            break;
        }
    }

    // เพิ่มสินค้าในตะกร้า
    if (!$found) {
        $_SESSION['cart'][] = array(
            'id' => $product_id,
            'name' => $product_name,
            'price' => $product_price,
            'image' => $product_image,
            'quantity' => $quantity
        );
    }

    // ส่งคำตอบกลับไปยังฝั่งไคลเอนต์
    echo json_encode($_SESSION['cart']);
}
?>
