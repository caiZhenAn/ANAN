<?php

$user = 'root';
$pass = 'itworks1343';
$dsn = 'mysql:host=mysql.ftqq.com;dbname=fangcv';

$name = $_GET['name'];

try {
    $dbh = new PDO($dsn,$user,$pass);
    $sql = "SELECT * FROM `user` WHERE `nickName` LIKE  ? order by `date` desc";
    $sth = $dbh->prepare($sql);
    $sth->execute(["%$name%",]);
    if($sth){
        $info = $sth->fetchAll(PDO::FETCH_ASSOC);
        $a = array();
        $a['success'] = "1";
        $a['code'] = 0;
        $a['data'] = $info;
        $arr = json_encode($a);
        echo $arr;
    }

}catch(PDOException $e){
    print "Error!: ".$e->getMessage()."<br/>" ;
    echo $json_encode($e);

    die();
}

finally{
    $dbh = null;
}