<?php
    include("db.php");
    if ($_SERVER['REQUEST_METHOD'] =='GET') {
        echo json_encode(show_product(),JSON_UNESCAPED_UNICODE);
    }else {
        echo json_encode('{"message":"unknown support soon"}',JSON_UNESCAPED_UNICODE);

    }
    function show_product(){
        $mydb = new db();
        $mydb->connect();
        $sql = "SELECT product_id product_code,product_name,catagory.Cat_name,brand.Brand_name,unit.Unit_name 
        FROM product,catagory,brand,unit 
        WHERE catagory.Cat_id=product.Cat_ID 
        AND brand.Brand_id = product.Brand_ID 
        AND unit.Unit_id = product.Unit_ID ";
        $result = $mydb->query($sql);
        $mydb->closedb();
        return $result;
    }
?>