<?php

$user = 'root';
$pass = 'itworks1343';
$dsn = 'mysql:host=mysql.ftqq.com;dbname=fangcv';


$discoverId = $_POST['discoverId'];
$userId = $_POST['userId'];
$nickName = $_POST['nickName'];
$avatarUrl = $_POST['avatarUrl'];
$content= $_POST['content'];

try {
    $dbh = new PDO($dsn,$user,$pass);
    $sql = "INSERT INTO `comment`( `discoverId`, `userId`, `nickName`, `content`, `avatarUrl`) VALUES (?,?,?,?,?)";
    $sth = $dbh->prepare($sql);
    $sth->bindValue(1,$discoverId);
    $sth->bindValue(2,$userId);
    $sth->bindValue(3,$nickName);
    $sth->bindValue(4,$content);
    $sth->bindValue(5,$avatarUrl);
    $sth->execute();
    if($sth){
        $a = array();
        $a['success'] = "1";
        $a['code'] = 0;
        $arr = json_encode($a);
        echo $arr;
    }

} catch (PDOException $e) {
    print "Error!: ".$e->getMessage()."<br/>" ;
    echo $json_encode($e);

    die();
}finally{
    $dbh = null;
}