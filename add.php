<?php include 'config.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("INSERT INTO users (name, email) VALUES ('$name', '$email')");
    header("Location: index.php");
}
?>
<form method="POST" class="add-form">
    <h2>Thêm người dùng</h2>
    <input type="text" name="name" placeholder="Nhập tên..." required>
    <input type="email" name="email" placeholder="Nhập email..." required>
    <button type="submit">Thêm</button>
    <a href="index.php" class="button">Quay lại</a>
</form>


