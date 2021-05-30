<?
include("config.inc.php");
if ($update == "")
 {
?>
<table border=0 borderColor=white cellPadding=1 cellSpacing=1 width=75%>
<tr><td width=100% align=center bgColor="blue"><b><font color="#FFFFFF">Информация о форуме</font></b></td></tr><tr><td align=center>
<?
echo "<table border=0 cellspacing=1 cellpadding=1 width=100% align=center>
<form action='update.php' method=post>
<tr><td align=center colspan=2>&nbsp;</td></tr>
<tr><td align=center width=50%><font face=verdana size=2 color=red>Адрес форума:</font></td><td  align=center width=50%><input type=text name=site_url_ value=\"$site_url\" size=33></td></tr>
<tr><td align=center width=50%><font face=verdana size=2 color=red>Название форума:</font></td><td  align=center width=50%><input type=text name=title_ value=\"$title\" size=33></td></tr>
<tr><td align=center width=50%><font face=verdana size=2 color=red>Создатель:</font></td><td  align=center width=50%><input type=text name=generator_ value=\"$generator\" size=33></td></tr>
<tr><td align=center width=50%><font face=verdana size=2 color=red>Версия форума:</font></td><td  align=center width=50%><input type=text name=admin_password_ value=\"$version\" size=33></td></tr>
<tr><td align=center width=50%><font face=verdana size=2 color=red>Пароль администратора:</font></td><td  align=center width=50%><input type=text name=admin_password_ value=\"$admin_password\" size=33></td></tr>
<tr><td align=center width=50%><font face=verdana size=2 color=red>Логин администратора:</font></td><td  align=center width=50%><input type=text name=admin_login_ value=\"$admin_login\" size=33></td></tr>
<tr><td align=center width=50%><font face=verdana size=2 color=red>E-mail администратора:</font></td><td  align=center width=50%><input type=text name=admin_mail_ value=\"$admin_mail\" size=33></td></tr>
<tr><td align=center width=50%><font face=verdana size=2 color=red>E-mail бота:</font></td><td  align=center width=50%><input type=text name=root_mail_ value=\"$root_mail\" size=33></td></tr>
<tr><td align=center width=50%><font face=verdana size=2 color=red>CHMOD:</font></td><td  align=center width=50%><input type=text name=start_page_ value=\"$start_page\" size=33></td></tr>
<tr><td align=center colspan=2><input type=submit name=action value=\"Обновить\"></td></tr></table>
</td></tr></table>";
}
?>
