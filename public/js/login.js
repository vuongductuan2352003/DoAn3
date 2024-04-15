
  // Lấy các phần tử từ DOM
var passwordInput = document.getElementById('password');
var showPasswordCheckbox = document.getElementById('showPassword');

// Đặt sự kiện click cho checkbox
showPasswordCheckbox.addEventListener('click', function () {
    // Nếu checkbox được chọn, hiển thị mật khẩu, ngược lại ẩn mật khẩu
    passwordInput.type = this.checked ? 'text' : 'password';
});

