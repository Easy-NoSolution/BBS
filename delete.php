<html>
<head>
    <meta http-equiv="Content-Type" content="text/html";charset="utf-8"/>
    <title>删除留言</title>
</head>
<body>
<?php
require ('conn.php');
$sql = 'delete from bbs_info where id='.intval($_GET['id']);
if (!mysqli_query($conn, $sql)) {
    echo "<P>删除留言出错!</P>";
    exit();
}
echo '删除留言成功!<br/><a href="index.php">查看留言</a>';
?>
</body>
</html>