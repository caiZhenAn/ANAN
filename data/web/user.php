<?php

$user = 'root';
$pass = 'itworks1343';
$dsn = 'mysql:host=mysql.ftqq.com;dbname=fangcv';


$userId = $_POST['userId'];
$nickName = $_POST['nickName'];
$avatarUrl = $_POST['avatarUrl'];

try {
    $dbh = new PDO($dsn,$user,$pass);
    $sql = "REPLACE INTO `user`( `userId`, `nickName`, `avatarUrl`) VALUES (?,?,?)";
    $sth = $dbh->prepare($sql);
    $sth->bindValue(1,$userId);
    $sth->bindValue(2,$nickName);
    $sth->bindValue(3,$avatarUrl);
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