<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>发布页面</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
    <script src="main.js"></script>
</head>
<body>
    <form action="save.php" method="POST">
        <h2>简历发布</h2>
        <p><input type="text" placeholder="请输入简历标题,如对某职位的简历" name="title" /></p>
        <p><textarea name="content" cols="30" rows="10" placeholder="在这里输入简历内容,目前只支持纯文本"></textarea></p>
        <p><input type="submit" value="保存"></p>
    </form>
</body>
</html>