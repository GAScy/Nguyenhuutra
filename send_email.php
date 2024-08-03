<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nhận dữ liệu từ biểu mẫu
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Địa chỉ email nhận
    $to = "example@example.com"; // Thay thế bằng địa chỉ email của bạn
    $subject = "Tin nhắn từ $name";
    
    // Nội dung email
    $email_message = "Tên: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Tin nhắn:\n$message\n";
    
    // Tiêu đề email
    $headers = "From: $email";
    
    // Gửi email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Email đã được gửi thành công!";
    } else {
        echo "Có lỗi xảy ra khi gửi email.";
    }
}
?>
