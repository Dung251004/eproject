// JavaScript logic for Đăng nhập
document.getElementById("loginForm").onsubmit = function(event) {
    event.preventDefault(); // Prevent form submission
    var username = document.getElementById("loginUsername").value;
    var password = document.getElementById("loginPassword").value;

    // Send login data to server for processing
    // You'll need to implement server-side logic here to handle login
    console.log("Tên người dùng: " + username);
    console.log("Mật khẩu: " + password);
};
