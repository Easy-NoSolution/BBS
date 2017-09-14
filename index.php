<html>
<head>
    <meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
    <title>查看留言</title>
</head>
<body>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0" class="tb">
    <tr>
        <td align="center" valign="center"><b>查看留言</b></td>
    </tr> <tr>
        <td align="right"><a href="add.php">发表留言</a> </td>
    </tr> <tr>
        <td>
            <?php
            require ('conn.php');
            $result = mysqli_query("select * from bbs_info order by id DESC", MYSQLI_STORE_RESULT);
            while ($row = mysqli_fetch_array($result, MYSQLI_BOTH))
            {
            ?>
                <br/>
                <table width="700" border="1" cellspacing="0" cellpadding="0" class="tb">
                    <tr>
                        <td>留言者: [
                            <?php echo htmlentities($row['name'], ENT_COMPAT, 'utf-8') ?>]</td>
                        <td align="right">发表于:
                            <?php echo htmlentities($row['time'], ENT_COMPAT, 'utf-8') ?></td>
                    </tr> <tr>
                        <td colspan="2" align="center">留言内容: </td>
                    </tr> <tr>
                        <td colspan="2">
                            <?php echo htmlentities($row['content'], ENT_COMPAT, 'utf-8') ?>
                        </td>
                    </tr> <tr>
                        <td colspan="2" align="right">
                            <a href="edit.php?id=<?php echo $row['id']?>">修改</a>
                            <a href="delete.php?id=<?php echo $row['id']?>">删除</a>
                        </td>
                    </tr>
                </table>
            <?php
            }
            mysqli_free_result($result);
            ?>
        </td>
    </tr>
</table>
</body>
</html>