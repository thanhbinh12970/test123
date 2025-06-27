<?php include 'config.php'; ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
    header("Location: index.php");
}
?>
<form method="POST" class="edit-form">
    <h2>Sửa người dùng</h2>
    <input type="text" name="name" value="<?= $row['name'] ?>" required>
    <input type="email" name="email" value="<?= $row['email'] ?>" required>
    <button type="submit">Cập nhật</button>
    <a href="index.php" class="button">Quay lại</a>
</form>
