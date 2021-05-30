<?
extract($_POST);
extract($_GET);
extract($_ENV);
extract($_COOKIE);

$q[]="";
$q[]="января"; 
$q[]="февраля"; 
$q[]="марта"; 
$q[]="апреля"; 
$q[]="мая";
$q[]="июня"; 
$q[]="июля"; 
$q[]="августа"; 
$q[]="сентября"; 
$q[]="октября"; 
$q[]="ноября";
$q[]="декабря";

$e[0]="воскресенье"; 
$e[1]="понедельник"; 
$e[2]="вторник"; 
$e[3]="среда"; 
$e[4]="четверг";
$e[5]="пятница"; 
$e[6]="суббота"; 

$m=date('m');
if ($m=="01") $m=1; 
if ($m=="02") $m=2;
if ($m=="03") $m=3;
if ($m=="04") $m=4; 
if ($m=="05") $m=5;
if ($m=="06") $m=6;
if ($m=="07") $m=7;
if ($m=="08") $m=8; 
if ($m=="09") $m=9;

$we=date('w');
$chislo=date('d');
$den_nedeli = $e[$we];
$mesyac = $q[$m];
$file=file("tems.txt");
$count=count($file);

        $date = date("d.m.Y",time());
        $date_array = file("data/date.dat");
        $ip = $_SERVER[REMOTE_ADDR];

        if ($date_array[0] == $date)
        {
         $open_today = fopen("data/today.dat","a+");
         fwrite($open_today,"$ip\r\n");
         fclose($open_today);
        }
        
        if ($date_array[0] != $date)
        {
         $today_array = file("data/today.dat");
         $count_today = count($today_array);
         $base_array = file("data/base.dat");   
         $all_temp = $count_today + $base_array[0];

         $open_w_base = fopen("data/base.dat","wb");
         fwrite($open_w_base,$all_temp);
         fclose($open_w_base);

         $open_w_today = fopen("data/today.dat","wb");
         fwrite($open_w_today,"$ip\r\n");
         fclose($open_w_today);

         $open_w_date = fopen("data/date.dat","wb");
         fwrite($open_w_date,$date);
         fclose($open_w_date);
        }

        $today_array = file("data/today.dat");
        $base_array = file("data/base.dat");

        $all = count($today_array) + $base_array[0];
        $all_today = count($today_array);
        $unique = count(array_unique($today_array));

        function get_size_of_string($string)
        {
         $string = "$string";
         return $string;
        }

        $all_today=$all_today;
        $all = get_size_of_string($all);
        $all_today = get_size_of_string($all_today);

?>
