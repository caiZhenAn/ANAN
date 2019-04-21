<?php

$user = 'root';
$pass = 'itworks1343';
$dsn = 'mysql:host=mysql.ftqq.com;dbname=fangcv';

$discoverId = $_GET['discoverId'];

try {
    $dbh = new PDO($dsn,$user,$pass);
    $sql = "SELECT * FROM `comment` WHERE `discoverId` = ? order by `date` desc";
    $sth = $dbh->prepare($sql);
    $sth->bindValue(1,$discoverId);
    $sth->execute();
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