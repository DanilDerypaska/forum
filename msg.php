<?
include ("calculation.php");
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
</STYLE>
</head>
<table width=100% border=0 cellspacing=1 cellpadding=1>
  <tr>
    <td width=100% height=47 colspan=3 class=text><p align=right><img src=img/home.gif><a href=index.php>Главная страница</a> <img src=img/add.gif><a href=msg.php>Создать тему</a> <img src=img/admin.gif><a href=admin/admin.php>Меню администратора</a></p></td>
  </tr>

  <tr>
    <td width=100% height=10 background=img/1.gif class=text><font color=#FFFFFF><b>Добавление новой темы</b></font></td>
  </tr>
  <tr>
    <td width=100% height=9 colspan=3 background=img/2.gif></td>
  </tr>

  <tr>
    <td width=100% height=20 bgcolor=#EFEFEF class=text>
<form name=fo action=msg.php?calculation=add method=post>
     <script src=example.js></script>
<br>Ваше имя<br>
<input type=text  value='' name=name size=40 maxlength=20>
<br>Тема сообщения<br> <input type=text  value='' name=tema size=40 maxlength=42>
<br>Сайт<br> <input type=text  value='http://' name=web size=40>
<br>E-mail<br> <input type=text  value='' name=mail size=40>

<br>Сообщение
<textarea  name=\"message\" cols=\"100\" rows=\"14\" class=frm2 style=\"width: 100%\" WRAP></textarea>
<input type=submit  value='Отправить'><input type=reset  value='Сбросить'>   
 </form>

  </tr>
  <tr>
    <td width=100% height=2 colspan=3 background=img/2.gif></td>
  </tr>
";

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
    <td width=754 height=19 colspan=3 background=img/1.gif class=text><font color=#FFFFFF><b>Информация  форума</b></font></td>
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

case("calculation") :

print"";

break;

case("add") :

if ($name == "") {print "Введите имя!"; exit;}
if ($tema == "") {print "Введите тему сообщения!"; exit;}
if ($message == "") {print "Введите сообщение!"; exit;}

$ip = $REMOTE_ADDR;
$date = date("d.m.Y");
$ss = file("tems.txt");
$s2size = sizeof($ss);
$s2size++;
$message = strip_tags($message, "<b><i><u>");
$message = str_replace(':', '&#58;', $message);
$name = htmlspecialchars($name);
$name = str_replace(':', '&#58;', $name);
$tema = htmlspecialchars($tema);
$tema = str_replace(':', '&#58;', $tema);
$mail = htmlspecialchars($mail);
$mail = str_replace(':', '&#58;', $mail);
$web = htmlspecialchars($web);
$text = "$name::$tema::$message::$date $den_nedeli::$mail::$s2size::$web::$ip";
$text = stripslashes($text);
$text = str_replace("\r\n", "<br>", $text);

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
</head>
<table width=100% border=0 cellspacing=1 cellpadding=1>
  <tr>
    <td width=100% height=47 colspan=3 class=text><p align=right><img src=img/home.gif><a href=index.php>Главная страница</a> <img src=img/add.gif><a href=msg.php>Создать тему</a> <img src=img/admin.gif><a href=admin/admin.php>Меню администратора</a></p></td>
  </tr>

  <tr>
    <td width=100% height=10 background=img/1.gif class=text><font color=#FFFFFF><b>Добавление новой темы</b></font></td>
  </tr>
  <tr>
    <td width=100% height=9 colspan=3 background=img/2.gif></td>
  </tr>

  <tr>
    <td width=100% height=20 bgcolor=#EFEFEF class=text>
Спасибо $name ваша тема успешно занесена в базу данных.

  </tr>
  <tr>
    <td width=100% height=2 colspan=3 background=img/2.gif></td>
  </tr>
";

print"
  <tr>
    <td width=754 height=19 colspan=3 background=img/1.gif class=text><font color=#FFFFFF><b>Информация форума</b></font></td>
  </tr>
  <tr>
    <td width=754 height=35 colspan=3 bgcolor=#EFEFEF class=niz>
Дата : $chislo $mesyac, $den_nedeli<br>
Количество тем на форуме : $count <br>
Пользователей онлайн: $online<br>
<b>Статистика посещений</b> :
<br>Сегодня : $all_today
<br>Всего : $all

  </td>
  </tr>
</table>";

$fp=fopen("tems.txt","a");
fputs($fp,"$text \r\n");
fclose($fp);
$fp=fopen("./msg/$s2size.txt","w");
fputs($fp,"$text \r\n");
fclose($fp);
@chmod("./msg/$s2size.txt", $start_page); 

break;

case("otvet") :

$ip = $REMOTE_ADDR;
$date = date("d.m.Y");
$ss = file("tems.txt");
$message = strip_tags($message, "<b><i><u>");
$name = htmlspecialchars($name);
$tema = htmlspecialchars($tema);
$mail = htmlspecialchars($mail);
$web = htmlspecialchars($web);
$text = "$name::$tema::$message::$date $den_nedeli::$doba::$web::$ip";
$text = stripslashes($text);
$text = str_replace("\r\n", "<br>", $text);

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
</head>
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
Спасибо $name ваш ответ удачно занесен в базу данных.

  </tr>
  <tr>
    <td width=100% height=2 colspan=3 background=img/2.gif></td>
  </tr>
";

print"
  <tr>
    <td width=754 height=19 colspan=3 background=img/1.gif class=text><font color=#FFFFFF><b>Информация  форума</b></font></td>
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