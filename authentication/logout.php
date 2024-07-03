<?php

// Xóa session và chuyển hướng đến trang đăng nhập

unset($_SESSION['__user']);
header("Location: ./signin.php");
