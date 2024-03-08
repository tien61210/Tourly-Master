<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travelBooking";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Truy vấn dữ liệu từ bảng địa điểm
$destination = "SELECT * FROM `destinations`";
$stmt = $conn->prepare($destination);
$stmt->execute();
$result = $stmt->get_result();

// Lấy dữ liệu thành mảng liên hợp $destinations
$destinations = [];
while ($row = $result->fetch_assoc()) {
    $destinations[] = $row;
}

// Truy vấn dữ liệu từ bảng địa điểm
$travel_packages = "SELECT * FROM `package_cards`";
$stmt = $conn->prepare($travel_packages);
$stmt->execute();
$result = $stmt->get_result();

// Lấy dữ liệu thành mảng liên hợp $travel_packages
$travel_packages = [];
while ($row = $result->fetch_assoc()) {
    $travel_packages[] = $row;
}



// mysqli_close($conn);

?>
