<!DOCTYPE html>
<html>
<head>
    <title>Trang danh bạ</title>
    <meta charset="utf-8">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('assets/css/contact_add.css'); ?>">
</head>
<body>
<form method="post" action="<?php echo base_url('contact/save'); ?>">
    <div id="header">
        <h1>Thêm mới danh bạ</h1>
    </div>
    <div id="container">
    <div id="name" class="input">
        <label for="">Tên</label>
        <input class="one" type="text" name="name">
    </div>
    <div class="input">
        <label for="">Số điện thoại 1</label>
        <input class="two" type="text" name="phone1">
    </div>
    <div class="input">
        <label for="">Số điện thoại 2</label>
        <input class="two" type="text" name="phone2">
    </div>
    <div class="input">
        <label for="">Email</label>
        <input class="three" type="text" name="email">
    </div>
    <div class="input">
        <label for="">Facebook</label>
        <input class="four" type="text" name="fb">
    </div>
    <div class="input">
        <label for="">Company</label>
        <input class="five" type="text" name="company">
    </div >
    <div id="button">
    <button>Thêm mới</button>
    <button type="button" onclick='location.href = "<?php echo base_url(); ?>"'>Quay lại</button>
    </div>
    </div>
    <div id="footer">
    <p class="footers">Website được thiết kế bởi OWS Việt Nam</p>
</form>
</body>
</html>
