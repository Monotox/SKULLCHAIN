#!/usr/bin/php -q

<?php

/*
	Color credits: Google Inurl Brasil.
*/

ini_set('display_errors', 0);

$banner = 
"         _,.-------.,_
     ,;~'             '~;, 
   ,;                     ;,
  ;                         ;
 ,'                         ',
,;                           ;,
; ;      .           .      ; ;
| ;   ______       ______   ; | 
|  `/~'     ~'' . ''~     \'  |
|  ~  ,-~~~^~, | ,~^~~~-,    |
 |   |        }:{        |   | 
 |   l       / | \       !   |
 .~  (__,.--' .... '--.,__)  ~. 
 |     ---;' / | \ `;---     |  
  \__.       \/^\/       .__/  
   V| \                 / |V  
    | |T..\___!___!___/..T| |  
    | |`IIII_I_I_I_IIII'| |  
    |  \,III I I I III,/  |  
     \   `~~~~~~~~~~'    /
       \   .       .   /
         \.    ^    ./   
           ^~~~^~~~^ ";

$color = [
	"end" => "\033[0m",
	"white" => "\033[1;37m",
	"yellow" => "\033[1;33m",
	"light-red" => "\033[1;31m",
	"green" => "\033[32m",
	"light-green" => "\033[1;32m",
	"purple" => "\033[0;35m",
	"dark-grey" => "\033[1;30m",
	"blue" => "\033[0;34m",
	"light-grey" => "\033[0;37m",
	"brown" => "\033[0;33m",
	"light-purple" => "\033[1;35m",
	"red" => "\033[0;31m",
	"light-cyan" => "\033[1;36m",
	"cyan" => "\033[0;36m",
	"light-blue" => "\033[1;34m",
	"dark-red" => "\033[02;31m",
];

$arg = isset($argv[1]) ? $argv[1] : null;
$argSecond = isset($argv[2]) ? $argv[2] : null;

if($arg == '' || $arg == NULL)
{
	echo $color['light-red'] . $banner . $color['end'];
	echo "\n\n" . $color['red'] ."SKULLCHAIN: " . $color['end'] . "the second parameter is empty!\n";
	echo "Example of use: php bitcoin.php [-l (latest block), -s [hash] (single transaction)]\n\n\n\n";
	return 0;
}

/*
	https://blockchain.info/api/
*/

else if($arg == '-l')
{
	$url = "https://blockchain.info/latestblock";
	$json = json_decode(file_get_contents($url), true);
	print_r($json);
}
else if($arg == '-s' && (argSecond != '' && $argSecond != NULL))
{
        $url = "https://blockchain.info/rawtx/$argSecond";
        $json = json_decode(file_get_contents($url), true);
        print_r($json);
}



?>
