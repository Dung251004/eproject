
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/CSS/styles.css">
    <title>Đăng Nhập</title>
</head>

<body>
    <!-- Đăng nhập Form -->
    <form id="loginForm">
        <h2>Đăng nhập</h2>
        <div id="loginError" class="error"></div>
        <input type="text" id="loginUsername" placeholder="Tên người dùng" required>
        <input type="password" id="loginPassword" placeholder="Mật khẩu" required>
        <input type="submit" value="Đăng nhập">
        <a href="../view/register.php">Chưa có tài khoản? Đăng ký ngay</a>
    </form>

<script src="../JavaS/login.js"></script>
</body>
</html>
