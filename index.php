<?php
require_once "vendor/autoload.php";
function fibonacci(int $n): int
{
    if ($n === 0 || $n === 1) {
        return $n;
    }

    if ($n > 50) {
        throw new \Exception('Not supported');
    }

    return fibonacci($n - 1) + fibonacci($n - 2);
}
echo "Please input a number fibonacci : ";
$handle = fopen("php://stdin","r");
$line = fgets($handle);
if(preg_match("/\d?/",$line)){
    $num  = (int)trim($line);
    if($num >= 50) die;
    $start = microtime(true);
    echo fibonacci($line) . "\n";
    $end = microtime(true) - $start;
    echo "Total execute time : ".$end." s\n";
}else{
	echo "Please input only number!";
	exit(1);
}
fclose($handle);
?>
