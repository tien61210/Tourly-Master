<!-- Trang quản trị thông tin -->
<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travelbooking";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Xử lý hành động thêm mới Destination
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET["action"]) && $_GET["action"] == "add_destination") {
    // Lấy dữ liệu từ form thêm mới
    $country = $_POST["country"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $link = $_POST["link"];

    // Thực hiện truy vấn để thêm dữ liệu vào bảng "destinations"
    $sql = "INSERT INTO destinations (country, title, description, link) VALUES ('$country', '$title', '$description', '$link')";

    if ($conn->query($sql) === TRUE) {
        // Thêm thành công, chuyển hướng về trang admin.php để hiển thị lại dữ liệu
        header("Location: admin.php");
        exit();
    } else {
        // Có lỗi xảy ra
        echo "Error adding record: " . $conn->error;
    }
}

// Xử lý hành động sửa Destination
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET["action"]) && $_GET["action"] == "edit_destination") {
    // Lấy dữ liệu từ form sửa
    $destination_id = $_POST["destination_id"];
    $country = $_POST["country"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $link = $_POST["link"];

    // Thực hiện truy vấn để cập nhật dữ liệu vào bảng "destinations"
    $sql = "UPDATE destinations SET country='$country', title='$title', description='$description', link='$link' WHERE id='$destination_id'";

    if ($conn->query($sql) === TRUE) {
        // Sửa thành công, chuyển hướng về trang admin.php để hiển thị lại dữ liệu
        header("Location: admin.php");
        exit();
    } else {
        // Có lỗi xảy ra
        echo "Error updating record: " . $conn->error;
    }
}

// Xử lý hành động xóa Destination
if (isset($_GET["action"]) && $_GET["action"] == "delete_destination" && isset($_GET["destination_id"])) {
    $destination_id = $_GET["destination_id"];

    // Thực hiện truy vấn để xóa dữ liệu từ bảng "destinations"
    $sql = "DELETE FROM destinations WHERE id='$destination_id'";

    if ($conn->query($sql) === TRUE) {
        // Xóa thành công, chuyển hướng về trang admin.php để hiển thị lại dữ liệu
        header("Location: admin.php");
        exit();
    } else {
        // Có lỗi xảy ra
        echo "Error deleting record: " . $conn->error;
    }
}

// Xử lý hành động thêm mới Destination Detail
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET["action"]) && $_GET["action"] == "add_destination_detail") {
    // Lấy dữ liệu từ form thêm mới
    $destination = $_POST["destination"];
    $image_link = $_POST["image_link"];
    $image_link2 = $_POST["image_link2"];
    $image_link3 = $_POST["image_link3"];
    $image_link4 = $_POST["image_link4"];
    $image_link5 = $_POST["image_link5"];
    $short_description = $_POST["short_description"];
    $long_description = $_POST["long_description"];

    // Thực hiện truy vấn để thêm dữ liệu vào bảng "destination_details"
    $sql = "INSERT INTO destination_details (destination, image_link, image_link2, image_link3, image_link4, image_link5, short_description, long_description) 
            VALUES ('$destination', '$image_link', '$image_link2', '$image_link3', '$image_link4', '$image_link5', '$short_description', '$long_description')";

    if ($conn->query($sql) === TRUE) {
        // Thêm thành công, chuyển hướng về trang admin.php để hiển thị lại dữ liệu
        header("Location: admin.php");
        exit();
    } else {
        // Có lỗi xảy ra
        echo "Error adding record: " . $conn->error;
    }
}

// Xử lý hành động sửa Destination Detail
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET["action"]) && $_GET["action"] == "edit_destination_detail") {
    // Lấy dữ liệu từ form sửa
    $detail_id = $_POST["detail_id"];
    $destination = $_POST["destination"];
    $image_link = $_POST["image_link"];
    $image_link2 = $_POST["image_link2"];
    $image_link3 = $_POST["image_link3"];
    $image_link4 = $_POST["image_link4"];
    $image_link5 = $_POST["image_link5"];
    $short_description = $_POST["short_description"];
    $long_description = $_POST["long_description"];

    // Thực hiện truy vấn để cập nhật dữ liệu vào bảng "destination_details"
    $sql = "UPDATE destination_details SET destination='$destination', image_link='$image_link', image_link2='$image_link2', image_link3='$image_link3', image_link4='$image_link4', image_link5='$image_link5', short_description='$short_description', long_description='$long_description' WHERE id='$detail_id'";

    if ($conn->query($sql) === TRUE) {
        // Sửa thành công, chuyển hướng về trang admin.php để hiển thị lại dữ liệu
        header("Location: admin.php");
        exit();
    } else {
        // Có lỗi xảy ra
        echo "Error updating record: " . $conn->error;
    }
}

// Xử lý hành động xóa Destination Detail
if (isset($_GET["action"]) && $_GET["action"] == "delete_destination_detail" && isset($_GET["detail_id"])) {
    $detail_id = $_GET["detail_id"];

    // Thực hiện truy vấn để xóa dữ liệu từ bảng "destination_details"
    $sql = "DELETE FROM destination_details WHERE id='$detail_id'";

    if ($conn->query($sql) === TRUE) {
        // Xóa thành công, chuyển hướng về trang admin.php để hiển thị lại dữ liệu
        header("Location: admin.php");
        exit();
    } else {
        // Có lỗi xảy ra
        echo "Error deleting record: " . $conn->error;
    }
}

// Xử lý hành động thêm mới Flight
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET["action"]) && $_GET["action"] == "add_flight") {
    // Lấy dữ liệu từ form thêm mới
    $flightNumber = $_POST["flightNumber"];
    $departure = $_POST["departure"];
    $destination = $_POST["destination"];
    $departureDate = $_POST["departureDate"];
    $departureTime = $_POST["departureTime"];

    // Thực hiện truy vấn để thêm dữ liệu vào bảng "flights"
    $sql = "INSERT INTO flights (flightNumber, departure, destination, departureDate, departureTime) 
            VALUES ('$flightNumber', '$departure', '$destination', '$departureDate', '$departureTime')";

    if ($conn->query($sql) === TRUE) {
        // Thêm thành công, chuyển hướng về trang admin.php để hiển thị lại dữ liệu
        header("Location: admin.php");
        exit();
    } else {
        // Có lỗi xảy ra
        echo "Error adding record: " . $conn->error;
    }
}

// Xử lý hành động sửa Flight
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET["action"]) && $_GET["action"] == "edit_flight") {
    // Lấy dữ liệu từ form sửa
    $flight_id = $_POST["flight_id"];
    $flightNumber = $_POST["flightNumber"];
    $departure = $_POST["departure"];
    $destination = $_POST["destination"];
    $departureDate = $_POST["departureDate"];
    $departureTime = $_POST["departureTime"];

    // Thực hiện truy vấn để cập nhật dữ liệu vào bảng "flights"
    $sql = "UPDATE flights SET flightNumber='$flightNumber', departure='$departure', destination='$destination', departureDate='$departureDate', departureTime='$departureTime' WHERE id='$flight_id'";

    if ($conn->query($sql) === TRUE) {
        // Sửa thành công, chuyển hướng về trang admin.php để hiển thị lại dữ liệu
        header("Location: admin.php");
        exit();
    } else {
        // Có lỗi xảy ra
        echo "Error updating record: " . $conn->error;
    }
}

// Xử lý hành động xóa Flight
if (isset($_GET["action"]) && $_GET["action"] == "delete_flight" && isset($_GET["flight_id"])) {
    $flight_id = $_GET["flight_id"];

    // Thực hiện truy vấn để xóa dữ liệu từ bảng "flights"
    $sql = "DELETE FROM flights WHERE id='$flight_id'";

    if ($conn->query($sql) === TRUE) {
        // Xóa thành công, chuyển hướng về trang admin.php để hiển thị lại dữ liệu
        header("Location: admin.php");
        exit();
    } else {
        // Có lỗi xảy ra
        echo "Error deleting record: " . $conn->error;
    }
}

// Xử lý hành động thêm mới Package Card
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET["action"]) && $_GET["action"] == "add_package_card") {
    // Lấy dữ liệu từ form thêm mới
    $image_alt_attribute = $_POST["image_alt_attribute"];
    $image_link = $_POST["image_link"];
    $card_title = $_POST["card_title"];
    $card_description = $_POST["card_description"];
    $duration = $_POST["duration"];
    $number_of_guests = $_POST["number_of_guests"];
    $destination = $_POST["destination"];
    $number_of_reviews = $_POST["number_of_reviews"];
    $card_rating = $_POST["card_rating"];
    $price_per_person = $_POST["price_per_person"];

    // Thực hiện truy vấn để thêm dữ liệu vào bảng "package_cards"
    $sql = "INSERT INTO package_cards (image_alt_attribute, image_link, card_title, card_description, duration, number_of_guests, destination, number_of_reviews, card_rating, price_per_person) 
            VALUES ('$image_alt_attribute', '$image_link', '$card_title', '$card_description', '$duration', '$number_of_guests', '$destination', '$number_of_reviews', '$card_rating', '$price_per_person')";

    if ($conn->query($sql) === TRUE) {
        // Thêm thành công, chuyển hướng về trang admin.php để hiển thị lại dữ liệu
        header("Location: admin.php");
        exit();
    } else {
        // Có lỗi xảy ra
        echo "Error adding record: " . $conn->error;
    }
}

// Xử lý hành động sửa Package Card
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET["action"]) && $_GET["action"] == "edit_package_card") {
    // Lấy dữ liệu từ form sửa
    $package_id = $_POST["package_id"];
    $image_alt_attribute = $_POST["image_alt_attribute"];
    $image_link = $_POST["image_link"];
    $card_title = $_POST["card_title"];
    $card_description = $_POST["card_description"];
    $duration = $_POST["duration"];
    $number_of_guests = $_POST["number_of_guests"];
    $destination = $_POST["destination"];
    $number_of_reviews = $_POST["number_of_reviews"];
    $card_rating = $_POST["card_rating"];
    $price_per_person = $_POST["price_per_person"];

    // Thực hiện truy vấn để cập nhật dữ liệu vào bảng "package_cards"
    $sql = "UPDATE package_cards SET image_alt_attribute='$image_alt_attribute', image_link='$image_link', card_title='$card_title', card_description='$card_description', duration='$duration', number_of_guests='$number_of_guests', destination='$destination', number_of_reviews='$number_of_reviews', card_rating='$card_rating', price_per_person='$price_per_person' WHERE id='$package_id'";

    if ($conn->query($sql) === TRUE) {
        // Sửa thành công, chuyển hướng về trang admin.php để hiển thị lại dữ liệu
        header("Location: admin.php");
        exit();
    } else {
        // Có lỗi xảy ra
        echo "Error updating record: " . $conn->error;
    }
}

// Xử lý hành động xóa Package Card
if (isset($_GET["action"]) && $_GET["action"] == "delete_package_card" && isset($_GET["package_id"])) {
    $package_id = $_GET["package_id"];

    // Thực hiện truy vấn để xóa dữ liệu từ bảng "package_cards"
    $sql = "DELETE FROM package_cards WHERE id='$package_id'";

    if ($conn->query($sql) === TRUE) {
        // Xóa thành công, chuyển hướng về trang admin.php để hiển thị lại dữ liệu
        header("Location: admin.php");
        exit();
    } else {
        // Có lỗi xảy ra
        echo "Error deleting record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>Admin Page</title>
</head>

<body>
    <div class="admin_container">
        <h2>Trang quản trị thông tin</h2>
        <div class="tabs">
            <div class="sidebar_container">
                <h2>Danh sách các bảng</h2>
                <button class="tab-button" onclick="openTab(event, 'tab1')">Destinations</button>
                <button class="tab-button" onclick="openTab(event, 'tab2')">Destination Detail</button>
                <button class="tab-button" onclick="openTab(event, 'tab3')">Flights</button>
                <button class="tab-button" onclick="openTab(event, 'tab4')">Package Cards</button>
            </div>
            <div class="content_container">
                <!-- Tab 1 - Destinations -->
                <div id="tab1" class="tab-content">
                    <h2>Destinations</h2>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Country</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        // Truy vấn dữ liệu từ bảng "destinations"
                        $sql = "SELECT id, country, title, description, link FROM destinations";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["country"] . "</td>";
                                echo "<td>" . $row["title"] . "</td>";
                                echo "<td>" . $row["description"] . "</td>";
                                echo "<td><a href='" . $row["link"] . "'>Link</a></td>";
                                // Thêm cột Action chứa các nút sửa và xóa
                                echo "<td><a href='javascript:void(0)' onclick='editDestination(" . $row["id"] . ")'>Edit</a> | <a href='admin.php?action=delete_destination&destination_id=" . $row["id"] . "'>Delete</a></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "Không có dữ liệu trong bảng Destination.";
                        }
                        ?>
                    </table>

                    <!-- Form thêm mới Destination -->
                    <h3>Add New Destination</h3>
                    <form id="addDestinationForm" method="post" style="display: none;">
                        <label for="country">Country:</label>
                        <input type="text" name="country" required>
                        <label for="title">Title:</label>
                        <input type="text" name="title" required>
                        <label for="description">Description:</label>
                        <input type="text" name="description" required>
                        <label for="link">Link:</label>
                        <input type="text" name="link" required>
                        <input type="hidden" name="action" value="add_destination">
                        <input type="submit" value="Add">
                    </form>

                    <!-- Form sửa Destination -->
                    <h3>Edit Destination</h3>
                    <form id="editDestinationForm" method="post" style="display: none;">
                        <!-- Các trường dữ liệu cần thiết cho việc sửa Destination -->
                        <input type="hidden" name="destination_id" id="destination_id" required>
                        <label for="country">Country:</label>
                        <input type="text" name="country" id="country" required>
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" required>
                        <label for="description">Description:</label>
                        <input type="text" name="description" id="description" required>
                        <label for="link">Link:</label>
                        <input type="text" name="link" id="link" required>
                        <input type="hidden" name="action" value="edit_destination">
                        <input type="submit" value="Save">
                    </form>

                    <!-- Nút thêm mới và chức năng hiển thị form -->
                    <button onclick="showAddForm()">Add New Destination</button>
                </div>

                <!-- Tab 2 - Destination Details -->
                <div id="tab2" class="tab-content">
                    <h2>Destination Detail</h2>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Destination</th>
                            <th>Image Link</th>
                            <th>Image Link 2</th>
                            <th>Image Link 3</th>
                            <th>Image Link 4</th>
                            <th>Image Link 5</th>
                            <th>Short Description</th>
                            <th>Long Description</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        // Truy vấn dữ liệu từ bảng "destination_details"
                        $sql = "SELECT id, destination, image_link, image_link2, image_link3, image_link4, image_link5, short_description, long_description FROM destination_details";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Đưa dữ liệu vào bảng HTML
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["destination"] . "</td>";
                                echo "<td>" . $row["image_link"] . "</td>";
                                echo "<td>" . $row["image_link2"] . "</td>";
                                echo "<td>" . $row["image_link3"] . "</td>";
                                echo "<td>" . $row["image_link4"] . "</td>";
                                echo "<td>" . $row["image_link5"] . "</td>";
                                echo "<td>" . $row["short_description"] . "</td>";
                                echo "<td>" . $row["long_description"] . "</td>";
                                // Thêm cột Action chứa các nút sửa và xóa
                                echo "<td><a href='javascript:void(0)' onclick='editDestinationDetail(" . $row["id"] . ")'>Edit</a> | <a href='admin.php?action=delete_destination_detail&detail_id=" . $row["id"] . "'>Delete</a></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "Không có dữ liệu trong bảng Destination Detail.";
                        }
                        ?>
                    </table>

                    <!-- Form thêm mới Destination Detail -->
                    <h3>Add New Destination Detail</h3>
                    <form id="addDestinationDetailForm" method="post" style="display: none;">
                        <!-- Các trường dữ liệu cần thiết cho việc thêm mới Destination Detail -->
                        <label for="destination">Destination:</label>
                        <input type="text" name="destination" required>
                        <label for="image_link">Image Link:</label>
                        <input type="text" name="image_link" required>
                        <label for="image_link2">Image Link 2:</label>
                        <input type="text" name="image_link2">
                        <label for="image_link3">Image Link 3:</label>
                        <input type="text" name="image_link3">
                        <label for="image_link4">Image Link 4:</label>
                        <input type="text" name="image_link4">
                        <label for="image_link5">Image Link 5:</label>
                        <input type="text" name="image_link5">
                        <label for="short_description">Short Description:</label>
                        <input type="text" name="short_description" required>
                        <label for="long_description">Long Description:</label>
                        <input type="text" name="long_description" required>
                        <input type="hidden" name="action" value="add_destination_detail">
                        <input type="submit" value="Add">
                    </form>

                    <!-- Form sửa Destination Detail -->
                    <h3>Edit Destination Detail</h3>
                    <form id="editDestinationDetailForm" method="post" style="display: none;">
                        <!-- Các trường dữ liệu cần thiết cho việc sửa Destination Detail -->
                        <input type="hidden" name="detail_id" id="detail_id" required>
                        <label for="destination">Destination:</label>
                        <input type="text" name="destination" id="destination" required>
                        <label for="image_link">Image Link:</label>
                        <input type="text" name="image_link" id="image_link" required>
                        <label for="image_link2">Image Link 2:</label>
                        <input type="text" name="image_link2" id="image_link2">
                        <label for="image_link3">Image Link 3:</label>
                        <input type="text" name="image_link3" id="image_link3">
                        <label for="image_link4">Image Link 4:</label>
                        <input type="text" name="image_link4" id="image_link4">
                        <label for="image_link5">Image Link 5:</label>
                        <input type="text" name="image_link5" id="image_link5">
                        <label for="short_description">Short Description:</label>
                        <input type="text" name="short_description" id="short_description" required>
                        <label for="long_description">Long Description:</label>
                        <input type="text" name="long_description" id="long_description" required>
                        <input type="hidden" name="action" value="edit_destination_detail">
                        <input type="submit" value="Save">
                    </form>

                    <!-- Nút thêm mới và chức năng hiển thị form -->
                    <button onclick="showAddDestinationDetailForm()">Add New Destination Detail</button>
                </div>

                <!-- Tab 3 - Flights -->
                <div id="tab3" class="tab-content">
                    <h2>Flights</h2>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Flight Number</th>
                            <th>Departure</th>
                            <th>Destination</th>
                            <th>Departure Date</th>
                            <th>Departure Time</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        // Truy vấn dữ liệu từ bảng "flights"
                        $sql = "SELECT id, flightNumber, departure, destination, departureDate, departureTime FROM flights";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["flightNumber"] . "</td>";
                                echo "<td>" . $row["departure"] . "</td>";
                                echo "<td>" . $row["destination"] . "</td>";
                                echo "<td>" . $row["departureDate"] . "</td>";
                                echo "<td>" . $row["departureTime"] . "</td>";
                                // Thêm cột Action chứa các nút sửa và xóa
                                echo "<td><a href='javascript:void(0)' onclick='editFlight(" . $row["id"] . ")'>Edit</a> | <a href='admin.php?action=delete_flight&flight_id=" . $row["id"] . "'>Delete</a></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "Không có dữ liệu trong bảng Flights.";
                        }
                        ?>
                    </table>

                    <!-- Form thêm mới Flight -->
                    <h3>Add New Flight</h3>
                    <form id="addFlightForm" method="post" style="display: none;">
                        <!-- Các trường dữ liệu cần thiết cho việc thêm mới Flight -->
                        <label for="flightNumber">Flight Number:</label>
                        <input type="text" name="flightNumber" required>
                        <label for="departure">Departure:</label>
                        <input type="text" name="departure" required>
                        <label for="destination">Destination:</label>
                        <input type="text" name="destination" required>
                        <label for="departureDate">Departure Date:</label>
                        <input type="date" name="departureDate" required>
                        <label for="departureTime">Departure Time:</label>
                        <input type="time" name="departureTime" required>
                        <input type="hidden" name="action" value="add_flight">
                        <input type="submit" value="Add">
                    </form>

                    <!-- Form sửa Flight -->
                    <h3>Edit Flight</h3>
                    <form id="editFlightForm" method="post" style="display: none;">
                        <!-- Các trường dữ liệu cần thiết cho việc sửa Flight -->
                        <input type="hidden" name="flight_id" id="flight_id" required>
                        <label for="flightNumber">Flight Number:</label>
                        <input type="text" name="flightNumber" id="flightNumber" required>
                        <label for="departure">Departure:</label>
                        <input type="text" name="departure" id="departure" required>
                        <label for="destination">Destination:</label>
                        <input type="text" name="destination" id="destination" required>
                        <label for="departureDate">Departure Date:</label>
                        <input type="date" name="departureDate" id="departureDate" required>
                        <label for="departureTime">Departure Time:</label>
                        <input type="time" name="departureTime" id="departureTime" required>
                        <input type="hidden" name="action" value="edit_flight">
                        <input type="submit" value="Save">
                    </form>

                    <!-- Nút thêm mới và chức năng hiển thị form -->
                    <button onclick="showAddFlightForm()">Add New Flight</button>
                </div>

                <!-- Tab 4 - Package Cards -->
                <div id="tab4" class="tab-content">
                    <h2>Package Cards</h2>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Image Alt Attribute</th>
                            <th>Image Link</th>
                            <th>Card Title</th>
                            <th>Card Description</th>
                            <th>Duration</th>
                            <th>Number of Guests</th>
                            <th>Destination</th>
                            <th>Number of Reviews</th>
                            <th>Card Rating</th>
                            <th>Price per Person</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        // Truy vấn dữ liệu từ bảng "package_cards"
                        $sql = "SELECT id, image_alt_attribute, image_link, card_title, card_description, duration, number_of_guests, destination, number_of_reviews, card_rating, price_per_person FROM package_cards";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["image_alt_attribute"] . "</td>";
                                echo "<td>" . $row["image_link"] . "</td>";
                                echo "<td>" . $row["card_title"] . "</td>";
                                echo "<td>" . $row["card_description"] . "</td>";
                                echo "<td>" . $row["duration"] . "</td>";
                                echo "<td>" . $row["number_of_guests"] . "</td>";
                                echo "<td>" . $row["destination"] . "</td>";
                                echo "<td>" . $row["number_of_reviews"] . "</td>";
                                echo "<td>" . $row["card_rating"] . "</td>";
                                echo "<td>" . $row["price_per_person"] . "</td>";
                                // Thêm cột Action chứa các nút sửa và xóa
                                echo "<td><a href='javascript:void(0)' onclick='editPackageCard(" . $row["id"] . ")'>Edit</a> | <a href='admin.php?action=delete_package_card&package_id=" . $row["id"] . "'>Delete</a></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "Không có dữ liệu trong bảng Package Cards.";
                        }
                        ?>
                    </table>

                    <!-- Form thêm mới Package Card -->
                    <h3>Add New Package Card</h3>
                    <form id="addPackageCardForm" method="post" style="display: none;">
                        <!-- Các trường dữ liệu cần thiết cho việc thêm mới Package Card -->
                        <label for="image_alt_attribute">Image Alt Attribute:</label>
                        <input type="text" name="image_alt_attribute" required>
                        <label for="image_link">Image Link:</label>
                        <input type="text" name="image_link" required>
                        <label for="card_title">Card Title:</label>
                        <input type="text" name="card_title" required>
                        <label for="card_description">Card Description:</label>
                        <input type="text" name="card_description" required>
                        <label for="duration">Duration:</label>
                        <input type="text" name="duration" required>
                        <label for="number_of_guests">Number of Guests:</label>
                        <input type="text" name="number_of_guests" required>
                        <label for="destination">Destination:</label>
                        <input type="text" name="destination" required>
                        <label for="number_of_reviews">Number of Reviews:</label>
                        <input type="text" name="number_of_reviews" required>
                        <label for="card_rating">Card Rating:</label>
                        <input type="text" name="card_rating" required>
                        <label for="price_per_person">Price per Person:</label>
                        <input type="text" name="price_per_person" required>
                        <input type="hidden" name="action" value="add_package_card">
                        <input type="submit" value="Add">
                    </form>

                    <!-- Form sửa Package Card -->
                    <h3>Edit Package Card</h3>
                    <form id="editPackageCardForm" method="post" style="display: none;">
                        <!-- Các trường dữ liệu cần thiết cho việc sửa Package Card -->
                        <input type="hidden" name="package_id" id="package_id" required>
                        <label for="image_alt_attribute">Image Alt Attribute:</label>
                        <input type="text" name="image_alt_attribute" id="image_alt_attribute" required>
                        <label for="image_link">Image Link:</label>
                        <input type="text" name="image_link" id="image_link" required>
                        <label for="card_title">Card Title:</label>
                        <input type="text" name="card_title" id="card_title" required>
                        <label for="card_description">Card Description:</label>
                        <input type="text" name="card_description" id="card_description" required>
                        <label for="duration">Duration:</label>
                        <input type="text" name="duration" id="duration" required>
                        <label for="number_of_guests">Number of Guests:</label>
                        <input type="text" name="number_of_guests" id="number_of_guests" required>
                        <label for="destination">Destination:</label>
                        <input type="text" name="destination" id="destination" required>
                        <label for="number_of_reviews">Number of Reviews:</label>
                        <input type="text" name="number_of_reviews" id="number_of_reviews" required>
                        <label for="card_rating">Card Rating:</label>
                        <input type="text" name="card_rating" id="card_rating" required>
                        <label for="price_per_person">Price per Person:</label>
                        <input type="text" name="price_per_person" id="price_per_person" required>
                        <input type="hidden" name="action" value="edit_package_card">
                        <input type="submit" value="Save">
                    </form>

                    <!-- Nút thêm mới và chức năng hiển thị form -->
                    <button onclick="showAddPackageCardForm()">Add New Package Card</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        
        function openTab(evt, tabName) {
            var i, tabContent, tabButtons;

            tabContent = document.getElementsByClassName('tab-content');
            for (i = 0; i < tabContent.length; i++) {
                tabContent[i].style.display = 'none';
            }

            tabButtons = document.getElementsByClassName('tab-button');
            for (i = 0; i < tabButtons.length; i++) {
                tabButtons[i].className = tabButtons[i].className.replace(' active', '');
            }

            document.getElementById(tabName).style.display = 'block';
            evt.currentTarget.className += ' active';
        }

        // Show the default tab on page load
        document.getElementById('tab1').style.display = 'block';
        document.getElementsByClassName('tab-button')[0].className += ' active';
        // Hàm hiển thị form thêm mới Destination
        function showAddForm() {
            document.getElementById("addDestinationForm").style.display = "block";
            document.getElementById("editDestinationForm").style.display = "none";
        }

        // Hàm hiển thị form sửa Destination
        function editDestination(destination_id) {
            document.getElementById("addDestinationForm").style.display = "none";
            document.getElementById("editDestinationForm").style.display = "block";

            // Lấy thông tin Destination cần sửa từ server
            // Sử dụng AJAX hoặc fetch API để gửi yêu cầu lấy dữ liệu về
            // Ví dụ sử dụng fetch API:
            fetch('get_destination.php?id=' + destination_id)
                .then(response => response.json())
                .then(data => {
                    // Đổ dữ liệu lấy được từ server vào form sửa
                    document.getElementById("destination_id").value = data.id;
                    document.getElementById("country").value = data.country;
                    document.getElementById("title").value = data.title;
                    document.getElementById("description").value = data.description;
                    document.getElementById("link").value = data.link;
                })
                .catch(error => console.error('Error:', error));
        }

        // Hàm hiển thị form thêm mới Destination Detail
        function showAddDestinationDetailForm() {
            document.getElementById("addDestinationDetailForm").style.display = "block";
            document.getElementById("editDestinationDetailForm").style.display = "none";
        }

        // Hàm hiển thị form sửa Destination Detail
        function editDestinationDetail(detail_id) {
            document.getElementById("addDestinationDetailForm").style.display = "none";
            document.getElementById("editDestinationDetailForm").style.display = "block";

            // Lấy thông tin Destination Detail cần sửa từ server
            // Sử dụng AJAX hoặc fetch API để gửi yêu cầu lấy dữ liệu về
            // Ví dụ sử dụng fetch API:
            fetch('get_destination_detail.php?id=' + detail_id)
                .then(response => response.json())
                .then(data => {
                    // Đổ dữ liệu lấy được từ server vào form sửa
                    document.getElementById("detail_id").value = data.id;
                    document.getElementById("destination").value = data.destination;
                    document.getElementById("image_link").value = data.image_link;
                    document.getElementById("image_link2").value = data.image_link2;
                    document.getElementById("image_link3").value = data.image_link3;
                    document.getElementById("image_link4").value = data.image_link4;
                    document.getElementById("image_link5").value = data.image_link5;
                    document.getElementById("short_description").value = data.short_description;
                    document.getElementById("long_description").value = data.long_description;
                })
                .catch(error => console.error('Error:', error));
        }

        // Hàm hiển thị form thêm mới Flight
        function showAddFlightForm() {
            document.getElementById("addFlightForm").style.display = "block";
            document.getElementById("editFlightForm").style.display = "none";
        }

        // Hàm hiển thị form sửa Flight
        function editFlight(flight_id) {
            document.getElementById("addFlightForm").style.display = "none";
            document.getElementById("editFlightForm").style.display = "block";

            // Lấy thông tin Flight cần sửa từ server
            // Sử dụng AJAX hoặc fetch API để gửi yêu cầu lấy dữ liệu về
            // Ví dụ sử dụng fetch API:
            fetch('get_flight.php?id=' + flight_id)
                .then(response => response.json())
                .then(data => {
                    // Đổ dữ liệu lấy được từ server vào form sửa
                    document.getElementById("flight_id").value = data.id;
                    document.getElementById("flightNumber").value = data.flightNumber;
                    document.getElementById("departure").value = data.departure;
                    document.getElementById("destination").value = data.destination;
                    document.getElementById("departureDate").value = data.departureDate;
                    document.getElementById("departureTime").value = data.departureTime;
                })
                .catch(error => console.error('Error:', error));
        }

        // Hàm hiển thị form thêm mới Package Card
        function showAddPackageCardForm() {
            document.getElementById("addPackageCardForm").style.display = "block";
            document.getElementById("editPackageCardForm").style.display = "none";
        }

        // Hàm hiển thị form sửa Package Card
        function editPackageCard(package_id) {
            document.getElementById("addPackageCardForm").style.display = "none";
            document.getElementById("editPackageCardForm").style.display = "block";

            // Lấy thông tin Package Card cần sửa từ server
            // Sử dụng AJAX hoặc fetch API để gửi yêu cầu lấy dữ liệu về
            // Ví dụ sử dụng fetch API:
            fetch('get_package_card.php?id=' + package_id)
                .then(response => response.json())
                .then(data => {
                    // Đổ dữ liệu lấy được từ server vào form sửa
                    document.getElementById("package_id").value = data.id;
                    document.getElementById("image_alt_attribute").value = data.image_alt_attribute;
                    document.getElementById("image_link").value = data.image_link;
                    document.getElementById("card_title").value = data.card_title;
                    document.getElementById("card_description").value = data.card_description;
                    document.getElementById("duration").value = data.duration;
                    document.getElementById("number_of_guests").value = data.number_of_guests;
                    document.getElementById("destination").value = data.destination;
                    document.getElementById("number_of_reviews").value = data.number_of_reviews;
                    document.getElementById("card_rating").value = data.card_rating;
                    document.getElementById("price_per_person").value = data.price_per_person;
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
</body>

</html>
