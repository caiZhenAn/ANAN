<?php echo "Hello world 对对对 对对对  十点多";


$best_language = 'PHP';
// unset($best_language);


$GLOBALS['best_language'] ='PHp';


function show_best_language(){
    echo "最好的语言是".@$best_language . "\r\n";
}



show_best_language();

function show_best_language2(){
    global $best_language;
    echo "最好的语言是".@$best_language . "\r\n";
    $best_language = "PHP99";
}

show_best_language2();

function show_best_language3(){
    global $best_language;
    echo "最好的语言是".@$best_language . "\r\n";

}

show_best_language3();

function up(){
    static $item = 0;
    echo ++$item."\r\n";
}

up();

up();


up();


$type = 'best_language';
echo($$type);
echo(${$type});

$city = ["beijing","shanghai","chognqing" ];
$city2 = ["beijing","shanghai"];

// echo($city);ec

$cars=["porsche","BMW","Volvo"];
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
// echo($cars);

$feel_good = false;
$product_expired = true;

if($feel_good)
    $price = 200;
else
    if($product_expired)
        $price = 201;
    else
        $price = 300;
echo($price);

if($feel_good)
    $price = 200;
elseif($product_expired)
    $price = 333;
else
    $price = 22222;
echo($price);


$hehe = ["I","Love","You"];
foreach ($hehe as $key => $value) {
    

    echo "key = $key,value = $value \r\n";
}

$jump = 0;

back:
    echo "time";
    if(++$jump<5) goto back;


function salary_chongqing()
{
    return 999;
}

function salary_beijing(){
    return 10000;
}

function salary_shangtou(){
    return 999999;
}


$_REQUEST['city']=$_REQUEST['city']??'beijing';

if(function_exists('salary_'.$_REQUEST['city']))
    echo(call_user_func('salary_'.$_REQUEST['city']));



$salary_Data = new stdClass();
$salary_Data->city = 'beijing';
$salary_Data->position = 'php';
$salary_Data->salary_min = '111';
$salary_Data->salary_max = '99999';

function salary_increase(&$data){
    $data->salary_min +=100;
    $data->salary_max +=100;
}

salary_increase($salary_Data);
echo($salary_Data->salary_min);

$data = ["猫","狗","猪"];
$ccc = array_map(function($item){
    $item[0]="人";
    return $item;
},$data);

print_r ($ccc);


