function logOut(){
    $.ajax({
                    url: 'pages/data-service/logout/logout.php', // URL ของไฟล์ PHP ที่จะจัดการข้อมูล
                    type: 'POST', // วิธีการส่งข้อมูล
                
                    dataType : 'html', // คาดหวัง response เป็น JSON
                    success: function(response) {
                        window.location="index.php";
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr);
                        console.log(error);
                        
                    }
            });
}

$('#click-basket-cart').on('click', function () {
    $('#cart-detail').toggleClass('active');
   
  
});
function goToCart(){
    window.location="pages/shop-cart/shop-cart.php";
}
function removeToCart(productId){
    console.log(productId);
    $.ajax({
        url: 'pages/shop/delete-cart.php',
        type: 'POST',
        data: {
            id: productId,
            
        },
        success: function(response) {
            alert('สินค้าที่เลือกได้ลบออกจากตะกร้าแล้ว');
            let cart=JSON.parse(response)
            console.log(cart);
            let table = '<table class="table" id="table-cart"> <thead id="thead-cart"> <tr> <th scope="col">ลำดับ</th> <th class="text-center" scope="col" colspan="2">รายละเอียด</th><th class="text-center" scope="col" >ราคา</th>  <th class="text-center" scope="col">จำนวน</th><th class="text-center" scope="col"></th> </tr> </thead> <tbody>';

            // วนลูปข้อมูลและเพิ่มแถวในตาราง
            let count_cart= cart.length; 
            
            document.getElementById('count-cart').innerHTML = count_cart;
            let order_num=1;
            cart.forEach(item => {
              
                table += `<tr>
                            <td class="align-middle" scope="row">${order_num}</td>
                            <td class="align-middle"><img class="img-fluid img-cart" src="../../vendor/upload/product_image/${item.image}" alt=""></td>
                            <td class="align-middle">${item.name}</td>
                            <td class="align-middle">฿${item.price}</td>
                            <td class="align-middle">
                                    <div class="input-group quantity mr-3" style="width: 130px;">
                                        <div class="input-group-btn">
                                            <button onclick="updateToCart(${item.id})" class="btn btn-primary btn-minus btn-cart-1">
                                            <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" id="quantity-cart" class="form-control bg-secondary text-center" value="1">
                                        <div class="input-group-btn">
                                            <button onclick="updateToCart(${item.id})" class="btn btn-primary btn-plus btn-cart-1">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>

                            </td>
                            <td class="align-middle">
                            <button onclick="removeToCart(${item.id})" class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button>
                            </td>
                          </tr>`;
                // <td>${item.price}</td>
                order_num=order_num+1;
            });

            table += '</table><button onClick="goToCart()" class="btn btn-block btn-primary my-3 py-3">To Cart</button>';

            // แทรกตารางใน div ที่กำหนด
            document.getElementById('cart-detail').innerHTML = table;
        }
    });

}
function updateQuantityToCart(productId,quantity,type){
    console.log(productId);
    let quantity_pro = quantity;
    if(type=="plus"){
        quantity_pro=quantity_pro+1;
    }else if(type=="minus"){
        quantity_pro=quantity_pro-1;
    }

    $.ajax({
        url: 'pages/shop/update-quantity-cart.php',
        type: 'POST',
        data: {
            id: productId,
            quantity:quantity_pro
        },
        success: function(response) {
            alert('เปลี่ยนจำนวนสินค้าในตระกร้า');
            let cart=JSON.parse(response)
            console.log(cart);
            let table = '<table class="table" id="table-cart"> <thead id="thead-cart"> <tr> <th scope="col">ลำดับ</th> <th class="text-center" scope="col" colspan="2">รายละเอียด</th><th class="text-center" scope="col" >ราคา</th>  <th class="text-center" scope="col">จำนวน</th><th class="text-center" scope="col"></th> </tr> </thead> <tbody>';

            // วนลูปข้อมูลและเพิ่มแถวในตาราง
            let count_cart= cart.length; 
            
            document.getElementById('count-cart').innerHTML = count_cart;
            let order_num=1;
            cart.forEach(item => {
              
                table += `<tr>
                            <td class="align-middle" scope="row">${order_num}</td>
                            <td class="align-middle"><img class="img-fluid img-cart" src="vendor/upload/product_image/${item.image}" alt=""></td>
                            <td class="align-middle">${item.name}</td>
                            <td class="align-middle">฿${item.price}</td>
                            <td class="align-middle">
                                    <div class="input-group quantity mr-3" style="width: 130px;">
                                        <div class="input-group-btn">
                                            <button onclick="updateQuantityToCart(${item.id},${item.quantity},'minus')" class="btn btn-primary btn-minus btn-cart-1">
                                            <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" id="quantity-cart" class="form-control bg-secondary text-center" value="${item.quantity}">
                                        <div class="input-group-btn">
                                            <button onclick="updateQuantityToCart(${item.id},${item.quantity},'plus')" class="btn btn-primary btn-plus btn-cart-1">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>

                            </td>
                            <td class="align-middle">
                            <button onclick="removeToCart(${item.id})" class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button>
                            </td>
                          </tr>`;
                // <td>${item.price}</td>
                order_num=order_num+1;
            });

            table += '</table><button onClick="goToCart()" class="btn btn-block btn-primary my-3 py-3">To Cart</button>';

            // แทรกตารางใน div ที่กำหนด
            document.getElementById('cart-detail').innerHTML = table;
        }
    });

}