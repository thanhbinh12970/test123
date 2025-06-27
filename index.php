<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Danh sách người dùng</h2>

<form method="GET">
    <input type="text" name="search" placeholder="Tìm kiếm theo tên...">
    <button type="submit">Tìm</button>
    <a href="add.php">Thêm mới</a>
</form>

<table>
    <tr>
        <th>ID</th><th>Tên</th><th>Email</th><th>Hành động</th>
    </tr>
    <?php
    $q = "";
    if (!empty($_GET['search'])) {
        $q = $_GET['search'];
        $sql = "SELECT * FROM users WHERE name LIKE '%$q%'";
    } else {
        $sql = "SELECT * FROM users";
    }

    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Sửa</a>
                    <a href='delete.php?id={$row['id']}'>Xóa</a>
                </td>
              </tr>";
    }
    ?>
</table>
</body>
</html>
