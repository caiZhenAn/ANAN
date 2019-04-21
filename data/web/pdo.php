<?php

$user = 'root';
$pass = 'itworks1343';
$dsn = 'mysql:host=mysql.ftqq.com;dbname=fangcv';



// try {
//     $dbh = new PDO($dsn,$user,$pass);

//     $sql = "SELECT * FROM `user` WHERE `id` = :id";
//     $sth = $dbh->prepare($sql);

//     $sth->execute([":id"=>1]);
//     $info = $sth->fetchAll();
//     print_r($info);

// } catch (PDOException $e) {
//     print "Error!: ".$e->getMessage()."<br/>" ;
//     die();
// }finally{
//     $dbh = null;
// }


// try {
//     $dbh = new PDO($dsn,$user,$pass);

//     $sql = "SELECT * FROM `user` WHERE `id` = :id";
//     $sth = $dbh->prepare($sql);
//     $sth->bindValue(':id',1,PDO::PARAM_INT);
//     $sth->execute();
//     $info = $sth->fetchAll();
//     print_r($info);

// } catch (PDOException $e) {
//     print "Error!: ".$e->getMessage()."<br/>" ;
//     die();
// }finally{
//     $dbh = null;
// }

// try {
//     $dbh = new PDO($dsn,$user,$pass);

//     $sql = "SELECT * FROM `user` WHERE `id` = ?";
//     $sth = $dbh->prepare($sql);
//     $sth->bindValue(1,1,PDO::PARAM_INT);
//     $sth->execute();
//     $info = $sth->fetchAll();
//     print_r($info);

// } catch (PDOException $e) {
//     print "Error!: ".$e->getMessage()."<br/>" ;
//     die();
// }finally{
//     $dbh = null;
// }

// try {
//     $dbh = new PDO($dsn,$user,$pass);

//     $sql = "SELECT * FROM `user` WHERE `id` = ?";
//     $sth = $dbh->prepare($sql);
//     $a = 1;
//     $sth->bindParam(1,$a,PDO::PARAM_INT);
//     $sth->execute();
//     $info = $sth->fetchAll();
//     print_r($info);

//     $a = 0;
//     $sth->execute();
//     $info=$sth->fetchAll();
//     print_r($info);

// } catch (PDOException $e) {
//     print "Error!: ".$e->getMessage()."<br/>" ;
//     die();
// }finally{
//     $dbh = null;
// }

try {
    $dbh = new PDO($dsn,$user,$pass);
    // $dbh->beginTransaction();

    $sql = "UPDATE `user` SET `name` = 'pig' WHERE 'id'=2";

    $sth = $dbh->exec($sql);

    $sql = "SELECT * FROM `user` WHERE `id` = ?";
    $sth = $dbh->prepare($sql);
    $sth->bindValue(1,2,PDO::PARAM_INT);
    $sth->execute();
    // $info = $sth->fetchAll();
    // print_r($info);

    // $dbh->rollBack();

    // $sql = "SELECT * FROM `user` WHERE `id` = ?";
    // $sth = $dbh->prepare($sql);
    // $sth->bindValue(1,1,PDO::PARAM_INT);
    // $sth->execute();
    // $info = $sth->fetchAll();
    // print_r($info);

} catch (PDOException $e) {
    print "Error!: ".$e->getMessage()."<br/>" ;
    die();
}finally{
    $dbh = null;
}