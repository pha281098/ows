<!DOCTYPE html>
<html>
<head>
    <title>Trang danh bạ</title>
    <meta charset="utf-8">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('assets/css/contact_list.css'); ?>">

</head>
<body>
<div id="container" >
    <div id="header">
        <h1>Danh bạ</h1>
    </div>
    <div  id="body">
        <table cellpadding="1">
            <tr id="info">
                <th>#</th>
                <th>Tên</th>
                <th id="number">Số điện thoại</th>
                <th></th>
            </tr>
            <?php foreach ($contacts as $idx => $item): ?>
                <tr class="<?= ($idx % 2) ? 'odd' : 'even' ?>" >
                    <td class="center"><?= $idx+1 ?></td>
                    <td><?= $item->name ?></td>
                    <td><?= $item->phone1 ?></td>
                    <td class="center">
                        <a href="<?= site_url('Contact/edit/'.$item->id);?>">Chi tiết</a>
                        |
                        <a href="javascript: void();" onclick="remove(<?php echo $item->id; ?>);">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
        <a id="add" href="<?= site_url('Contact/add');?>">Thêm mới</a>
    <div id="footer">
        <p class="footers">Website được thiết kế bởi OWS Việt Nam</p>
    </div>
</div>
<script
        src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
<script>
    function remove(id)
    {
        var isConfirm = confirm("Bạn có chắc muốn xóa không?");
        if (isConfirm)
        {
            $.get('<?php echo base_url('contact/del/'); ?>/'+id).then(function(data) {
                if (data == "success")
                    window.location = '<?php echo base_url(); ?>';
                else
                    alert('Có lỗi xảy ra.');
            })
        }
    }
</script>
</body>
</html>
