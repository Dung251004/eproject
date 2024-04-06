// JavaScript logic for Đăng ký
document.getElementById("registerForm").onsubmit = function(event) {
    event.preventDefault(); // Prevent form submission
    var username = document.getElementById("registerUsername").value;
    var id = document.getElementById("registerID").value;
    var password = document.getElementById("registerPassword").value;
    var confirmPassword = document.getElementById("registerConfirmPassword").value;

    if (password !== confirmPassword) {
        document.getElementById("registerError").innerText = "Mật khẩu và xác nhận mật khẩu không khớp";
        return;
    }

    // Gửi dữ liệu đăng ký đến máy chủ để xử lý
    // Cần triển khai logic phía máy chủ tại đây để xử lý việc đăng ký
    console.log("Tên người dùng: " + username);
    console.log("ID: " + id);
    console.log("Mật khẩu: " + password);
};
