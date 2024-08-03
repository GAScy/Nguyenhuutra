<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = htmlspecialchars($_POST["title"]);
    $content = htmlspecialchars($_POST["content"]);

    // Đọc nội dung của tệp JSON hiện tại
    $json_data = file_get_contents('posts.json');
    $posts = json_decode($json_data, true);

    // Thêm bài viết mới vào mảng
    $new_post = array(
        "title" => $title,
        "content" => $content,
        "created_at" => date("Y-m-d H:i:s")
    );
    $posts[] = $new_post;

    // Ghi lại nội dung mới vào tệp JSON
    file_put_contents('posts.json', json_encode($posts));

    // Chuyển hướng trở lại trang quản lý bài viết
    header("Location: admin.html");
    exit();
}
?>
