<?
$file1 = file("uzver.dat");
$dat1 = "uzver.dat";
$count1 = count($file1);
$time = time();
$plus = "\x31";
$s_t = "\x36\x30";
if($ip == "")
{
if (getenv('HTTP_X_FORWARDED_FOR'))
{
$ip = getenv('HTTP_X_FORWARDED_FOR');
}
else
{
$ip = getenv('REMOTE_ADDR');
}
}
$open = fopen("$dat1","a");
fputs($open, "$ip::$time::\r\n");
fclose($open);
for ($scan = 0; $scan <= $count1 - $plus; $scan++)
{
list ($u_ip,$u_t) = explode("::","$file1[$scan]");
if ($u_t + $s_t > $time and $u_ip != $ip)
{
$plus++;
}
}
$online = $plus;
if ($online == "1")
{
$online = "1";
}
if ($online >= "2" and $online <= "4")
{
$online .= " человек";
}
if ($online >= "5")
{
$online .= " человек";
}
?>