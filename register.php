<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="../view/CSS/styles.css">
</head>
<body>

<!-- Đăng ký Form -->
<form id="registerForm">
    <h2>Đăng ký</h2>
    <div id="registerError" class="error"></div>
    <input type="text" id="registerUsername" placeholder="Tên người dùng" required>
    <input type="text" id="registerID" placeholder="Số thẻ sinh viên hoặc số nhân viên" required>
    <input type="password" id="registerPassword" placeholder="Mật khẩu" required>
    <input type="password" id="registerConfirmPassword" placeholder="Xác nhận mật khẩu" required>
    <input type="submit" value="Đăng ký">
    <a href="../view/login.php">Đã có tài khoản? Đăng nhập ngay</a>
</form>

<script src="../JavaS/register.js"></script>

</body>
</html>
