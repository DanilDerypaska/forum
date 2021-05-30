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
    <td width=100% height=10 background=img/1.gif class=text><font color=#FFFFFF><b>Связь с модератором</b></font></td>
  </tr>
  <tr>
    <td width=100% height=9 colspan=3 background=img/2.gif></td>
  </tr>

  <tr>
    <td width=100% height=20 bgcolor=#EFEFEF class=text>
<form action=send.php?calculation=res method=post>
<br>Ваше имя<br>
<input type=text  value='' name=name size=40 maxlength=50>
<br>Тема сообщения<br> <input type=text  value='' name=tema size=40 maxlength=82>
<br>E-mail<br> <input type=text  value='' name=mail size=40>

<br>Сообщение
<textarea  name=\"message\" cols=\"100\" rows=\"14\" class=frm2 style=\"width: 100%\" ></textarea>
<input type=submit  value='Отправить'><input type=reset  value='Сбросить'>   
 </form>

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

case("res") :

print"
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

 $ip = $REMOTE_ADDR;
  $date = date("d.m.Y");
  $info = "Name:\t$name\n";
  $info = "Tema:\t$tema\n";
  $info .= "E-Mail:\t$mail\n";
  $info .= "Message:\t$message\n\n";
  $send_to = "$admin_mail";             
  $subject = "С форума $date";          
  $headers = "From: Ip адрес: $ip: \n";
  $headers .= "Reply-To: $email\n\n";
  $send = mail($send_to, $subject, $info, $headers);
  if($send == 1)
  {
 
print"
<table width=100% border=0 cellspacing=1 cellpadding=1>
  <tr>
    <td width=100% height=47 colspan=3 class=text><p align=right><img src=img/home.gif><a href=index.php>Главная страница</a> <img src=img/add.gif><a href=msg.php>Создать тему</a> <img src=img/admin.gif><a href=admin/admin.php>Меню администратора</a></p></td>
  </tr>

  <tr>
    <td width=100% height=10 background=img/1.gif class=text><font color=#FFFFFF><b>Связь с модератором</b></font></td>
  </tr>
  <tr>
    <td width=100% height=9 colspan=3 background=img/2.gif></td>
  </tr>

  <tr>
    <td width=100% height=20 bgcolor=#EFEFEF class=text>
Спасибо $name, ваше сообщение удачно отправлено.
  </tr>

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

}
 else
 
break;
endswitch;
?>
