<!DOCTYPE html>
<html>
<head>
    <title>Trang danh bạ</title>
    <meta charset="utf-8">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('assets/css/contact_edit.css'); ?>">
</head>
<body>
<div id="body">
    <form method="post" action="<?php echo base_url('contact/save/' . $contact_item->id); ?>">
        <div id="header">
        <h1>Cập nhập danh bạ</h1>
        </div>
        <div id="container">
        <div id="name" class="input">
            <label for="">Tên</label>
            <input class="one" type="text" name="name" value="<?php echo $contact_item->name ?>">
        </div>
        <div class="input">
            <label for="">Số điện thoại 1</label>
            <input class="two" type="text" name="phone1" value="<?php echo $contact_item->phone1 ?>">
        </div>
        <div class="input">
            <label for="">Số điện thoại 2</label>
            <input class="two" type="text" name="phone2" value="<?php echo $contact_item->phone2 ?>">
        </div>
        <div class="input">
            <label for="">Email</label>
            <input class="three" type="text" name="email" value="<?php echo $contact_item->email ?>">
        </div>
        <div class="input">
            <label for="">Facebook</label>
            <input class="four" type="text" name="fb" value="<?php echo $contact_item->fb ?>">
        </div>
        <div class="input">
            <label for="">Company</label>
            <input class="five" type="text" name="company" value="<?php echo $contact_item->company ?>">
        </div>
        </div>
        <div id="all">
        <input id="update" type="submit" value="Cập nhật" />
        <button type="button" onclick='location.href = "<?php echo base_url(); ?>"'>Quay lại</button>
        </div>
        <div id="footer">
        <p class="footers">Website được thiết kế bởi OWS Việt Nam</p>
        </div>
    </form>
</div>

</body>
</html>