<?php
include'conn_db.php'; // แนบไฟล์เชื่อมต่อฐานข้อมูล
?>

<?php

// นำค่าที่ถูกส่งจากฟอร์มในหน้า signin.html ผ่าน method=post เข้ามาและเก็บไว้ในตัวแปรที่สร้างใหม่
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$name = $_POST['name'];
$address = $_POST['address'];
$tel = $_POST['tel'];

// สร้างตัวแปร check เพื่อเก็บค่าการเปรียบเทียบ $username กับค่า username ในฐานข้อมูล
$check = $conn->prepare('SELECT ID FROM user_login WHERE nt_username = ?');
$check->bind_param('s', $username);
$check->execute();
$check->store_result();


if($check->num_rows > 0){ // หากค่า $username ตรงกับ username ในฐานข้อมูลจะหมายความว่า username ซ้ำ
    
    // ยุติการเชื่อมต่อ และไปยังหน้าแสดงผล
    $check->close();
    $conn->close();
    
    header('location:registerfailed.html');
    exit;//ต้องใส่ เพราะลงเว็บจริง ใช้คำสั่งบนไม่ได้

}else{ // หาก username ไม่ซ้ำ ให้ทำการใส่ค่าที่กรอกลงในฟอร์ม ลงฐานข้อมูล
    $stmt = $conn->prepare('INSERT INTO user_login(nt_username, nt_password, email, nt_name, nt_address,tel ) VALUES(?, ?, ?, ?, ?, ?)');
    $stmt->bind_param('sssssi', $username, $password, $email, $name, $address, $tel);
    $stmt->execute();

    // ยุติการเชื่อมต่อ และไปยังหน้าแสดงผล
    $stmt->close();
    $conn->close();

    header('location:registersuccess.html');
    exit;

}

?>



