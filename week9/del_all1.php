<?php
session_start();
$i=$_GET['i'];
if(isset($_SESSION["cart"])){
    $_SESSION["cart"] = null;
}
?>
<script>
    window.alert("ลบรายการสินค้าทั้งหมดเรียบร้อยแล้ว");
    window.location.replace("show_product1.php");
</script>