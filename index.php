<?
include ("calculation.php");
include ("admin/config.inc.php");
include ("narod.php");
switch($calculation) :
default :
print "
<html>
<head>
<title>$title</title>
<meta http-equiv=Content-Type content=text/html; charset=windows-1251>
<meta content=$keywords name=keywords>
<meta content=$descr name=description>
<meta content=$author name=author>
<STYLE>A:link {
	COLOR: #006699; TEXT-DECORATION: none
}
A:visited {
	COLOR: #006699; TEXT-DECORATION: none
}
A:active {
	COLOR: #006699; TEXT-DECORATION: none
}
A:hover {
	COLOR: red; TEXT-DECORATION: none
}
.8pt {
	FONT-FAMILY: Tahoma,sans-serif; FONT-SIZE: 8pt
}
.text {
	 FONT-SIZE: 15px;  COLOR: #1D1A16
}
.copy {
	 FONT-SIZE: 11px;  COLOR: #1D1A16
}
.niz {
	 FONT-SIZE: 12px;  COLOR: #1D1A16
}
</head>
</STYLE>
<table width=100% border=0 cellspacing=1 cellpadding=1>
  <tr>
    <td width=100% height=47 colspan=3 class=text>
<p align=right><img src=img/home.gif><a href=index.php>Главная страница</a> <img src=img/add.gif><a href=msg.php>Создать тему</a> <img src=img/admin.gif><a href=admin/admin.php>Меню администратора</a></p></td>
  </tr>

  <tr>
    <td width=50% height=10 background=img/1.gif class=text><font color=#FFFFFF><b>Тема</b></font></td>
    <td width=45% height=10 background=img/1.gif class=text><font color=#FFFFFF><b>Автор</b></font></td>
    <td width=5% height=10 background=img/1.gif class=text><font color=#FFFFFF><b>Ответы</b></font></td>
  </tr>
  <tr>
    <td width=100% height=9 colspan=3 background=img/2.gif></td>
  </tr>";
$xfile = @file("tems.txt");
$xfile = array_reverse($xfile);
for ($i=0;$i<count($xfile);$i++) {
 $udata = explode("::",$xfile[$i]);

print"
  <tr>
    <td width=50% height=20 bgcolor=#EFEFEF class=text><font color=#FFFFFF><img src=img/folder.gif> <a href=index.php?calculation=troforum&id=$udata[5]>$udata[1]</a></font></td>
    <td width=40% height=20 bgcolor=#C2CDD6 class=text><img src=img/stre.gif><font color=#000000> <b>$udata[0]</b> : $udata[3]</font></td>";
$dimidrol = $udata[5];  
$answers = count($countan);

print"
<td width=10% height=20 bgcolor=#DEE2E6 class=text><font color=#000000>$answers</font></td>
  </tr>
  <tr>
    <td width=100% height=2 colspan=3 background=img/2.gif></td>
  </tr>
";
}
$real_stri = "Q29weXJpZ2h0IKk=";
$news_cop = base64_decode($real_stri);
$real_s = "VHJvZmltb3YgRC5T";
$news_s = base64_decode($real_s);
$real_u = "aHR0cDovL3d3dy50cm9maW1vdi5jb20ucnUv";
$news_u = base64_decode($real_u);
$real_v = "UG93ZXJlZCBieTogVFJPZm9ydW0gMC4z";
$news_v = base64_decode($real_v);

print"
  <tr>
    <td width=754 height=19 colspan=3 background=img/1.gif class=text><font color=#FFFFFF><b>Информация форума</b></font></td>
  </tr>
  <tr>
    <td width=754 height=35 colspan=3 bgcolor=#EFEFEF class=niz>
Дата : $chislo $mesyac, $den_nedeli<br>
<a class=niz href=send.php>Написать модератору</a><br>
Всего тем на форуме : $count <br>
Пользователей онлайн : $online<br>
<b>Статистика посещений</b> :
<br>Сегодня : $all_today
<br>Всего : $all
  </td>
  </tr>
</table>";

case("calculation") :

print"";

break;


case("troforum") :

print "
<html>
<head>
<title>$title</title>
<meta http-equiv=Content-Type content=text/html; charset=windows-1251>
<meta content=$keywords name=keywords>
<meta content=$descr name=description>
<meta content=$author name=author>
<STYLE>A:link {
	COLOR: #006699; TEXT-DECORATION: none
}
A:visited {
	COLOR: #006699; TEXT-DECORATION: none
}
A:active {
	COLOR: #006699; TEXT-DECORATION: none
}
A:hover {
	COLOR: red; TEXT-DECORATION: none
}
.8pt {
	FONT-FAMILY: Tahoma,sans-serif; FONT-SIZE: 8pt
}
.text {
	 FONT-SIZE: 15px;  COLOR: #1D1A16
}
.copy {
	 FONT-SIZE: 11px;  COLOR: #1D1A16
}
.niz {
	 FONT-SIZE: 12px;  COLOR: #1D1A16
}
</head>
</STYLE>
<table width=100% border=0 cellspacing=1 cellpadding=1>
  <tr>
    <td width=100% height=47 colspan=3 class=text><p align=right><img src=img/home.gif><a href=index.php>Главная страница</a> <img src=img/add.gif><a href=msg.php>Создать тему</a> <img src=img/admin.gif><a href=admin/admin.php>Меню администратора</a></p></td>
  </tr>
</table>
<table border=0 width=100%>
  <tr>
    <td width=20% height=28 background=img/1.gif class=text><font color=#FFFFFF><b>Автор</b></font></td>
    <td width=80% height=28  background=img/1.gif class=text><font color=#FFFFFF><b>Тема</b></font></td>
  </tr>
</table>";

$data1 = file("msg/$id.txt");
$data1size = count($data1);
$mess_page = 12;
$p = $mess_page;

  if ($npage == ""){$npage = "1";}
  $first = $data1size - ($p * ($npage-1));
  $second = $data1size - ($p * $npage)+1;
  if ($second < 1) {$second = 1;}
  $npages = (int)($data1size / $p);
  if ($mess_page>((int) ($npages*$p))) $npages = $npages+1;
  $line = " | ";

  for ($p = 1; $p <= $npages; $p++) {
   if ($p != $npage) { $line .= "<a href=\"?calculation=troforum&id=$id&npage=$p\"> $p </a>|";}
   if ($p == $npage) { $line .= "$p |"; }
  }

  $gline = $gline_rew."&nbsp;".$line."&nbsp;".$gline_next;

  for ($i = $first-1; $i >= $second-1; $i--) {
   $ii = $i;
   $ii++;
   $datatext = explode("::", $data1[$i]);
   if ($n == "0") { $col = $id; $subject = "$datatext[3]"; } else { $col = $id; }
   if ($datatext[3] != "") {
   print"
<table border=0 width=100%>
<tr>
<td valign=top width=20% rowspan=2 bgcolor=#C2CDD6 class=text><img src=img/peop.gif>$datatext[0]</td>
<td valign=top width=80% height=1 bgcolor=#C2CDD6 class=text><b>$datatext[1]</b><img src=img/tem.gif> $datatext[3]</td>
</tr>
<tr>
<td valign=top width=80% bgcolor=#C2CDD6 class=text>$datatext[2]</td>
</tr>
<tr>
<td width=100% height=20 valign=top colspan=2 background=img/3.gif class=text align=right>$gline<a href=$datatext[6]><img src=img/homepage.gif border=0></a><a href=mailto:$datatext[4]><img src=img/email.gif border=0></a><a href=index.php?calculation=otvet&id=$datatext[5]><img src=img/otvet.gif border=0></a></td>
</tr>                                                                                
</table>
";
}
}

print"
<table border=0 width=100%>
  <tr>
    <td width=100% height=19 colspan=3 background=img/1.gif class=text><font color=#FFFFFF><b>Информация форума</b></font></td>
  </tr>
  <tr>
    <td width=100% height=35 colspan=3 bgcolor=#EFEFEF class=niz>
Дата : $chislo $mesyac, $den_nedeli<br>
Количество тем на форуме : $count <br>
Пользователей онлайн : $online<br>
<b>Статистика посещений</b> :
<br>Сегодня : $all_today
<br>Всего : $all
  </td>
  </tr>
</table>";

break;

case("otvet") :

print "
<html>
<head>
<title>$title</title>
<meta http-equiv=Content-Type content=text/html; charset=windows-1251>
<meta content=$keywords name=keywords>
<meta content=$descr name=description>
<meta content=$author name=author>
<STYLE>A:link {
	COLOR: #006699; TEXT-DECORATION: none
}
A:visited {
	COLOR: #006699; TEXT-DECORATION: none
}
A:active {
	COLOR: #006699; TEXT-DECORATION: none
}
A:hover {
	COLOR: red; TEXT-DECORATION: none
}
.8pt {
	FONT-FAMILY: Tahoma,sans-serif; FONT-SIZE: 8pt
}
.text {
	 FONT-SIZE: 15px;  COLOR: #1D1A16
}
.copy {
	 FONT-SIZE: 11px;  COLOR: #1D1A16
}
.niz {
	 FONT-SIZE: 12px;  COLOR: #1D1A16
}
</STYLE>
</head>";
$calculation = 0;
$xfiles = @file("msg/$id.txt");
$udatas = explode("::",$xfiles[$calculation]);

print"

<table width=100% border=0 cellspacing=1 cellpadding=1>
  <tr>
    <td width=100% height=47 colspan=3 class=text><p align=right><img src=img/home.gif><a href=index.php>Главная страница</a> <img src=img/add.gif><a href=msg.php>Создать тему</a> <img src=img/admin.gif><a href=admin/admin.php>Меню администратора</a></p></td>
  </tr>

  <tr>
    <td width=100% height=10 background=img/1.gif class=text><font color=#FFFFFF><b>Добавление нового ответа</b></font></td>
  </tr>
  <tr>
    <td width=100% height=9 colspan=3 background=img/2.gif></td>
  </tr>
<tr>
    <td width=100% height=20 bgcolor=#EFEFEF class=text>
<form action=msg.php?calculation=otvet method=post>
<input type=hidden name=doba value=$id>
<input type=hidden name=tema value=$udatas[1]>
<b>Тема сообщения :$udatas[1]</b>
<br><br>Ваше имя<br>
<input type=text  value='' name=name size=40 maxlength=20>
<br>Сайт<br> <input type=text  value='http://' name=web size=40>
<br>E-mail<br> <input type=text  value='' name=mail size=40>
<br><br>Сообщение
<textarea  name=\"message\" cols=\"100\" rows=\"14\"></textarea>
<input type=submit  value='Отправить'><input type=reset  value='Сбросить'>   
</form>
</td></tr>
<tr>
    <td width=100% height=2 colspan=3 background=img/2.gif></td>
  </tr>";


print"
  <tr>
    <td width=754 height=19 colspan=3 background=img/1.gif class=text><font color=#FFFFFF><b>Информация форума</b></font></td>
  </tr>
  <tr>
    <td width=754 height=35 colspan=3 bgcolor=#EFEFEF class=niz>
Дата : $chislo $mesyac, $den_nedeli<br>
Количество тем на форуме : $count <br>
Пользователей онлайн : $online<br>
<b>Статистика посещений</b> :
<br>Сегодня : $all_today
<br>Всего : $all

  </td>
  </tr>
</table>";

break;
endswitch;
?>