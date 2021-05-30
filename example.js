document.onkeydown = keyhandler;
function keyhandler(e) {
    

        Key = window.event.keyCode;


if ((Key==66) && (window.event.ctrlKey))
{
	voidPutATag('<b>','</b>');
	e = window.event;
	e.returnValue = false
}

if ((Key==76) && (window.event.ctrlKey))
{
	voidPutATag('<a href=>','</a>');
	e = window.event;
	e.returnValue = false
}

if ((Key==73) && (window.event.ctrlKey))
{
	voidPutATag('<i>','</i>');
	e = window.event;
	e.returnValue = false
}

if ((Key==85) && (window.event.ctrlKey))
{
	voidPutATag('<u>','</u>');
	e = window.event;
	e.returnValue = false
}

if ((Key==83) && (window.event.ctrlKey))
{
	voidPutATag('<strike>','</strike>');
	e = window.event;
	e.returnValue = false
}

if ((Key==81) && (window.event.ctrlKey))
{
	voidPutATag('<blockquote>','</blockquote>');
	e = window.event;
	e.returnValue = false
}

}
function kw()
{
    document.fo.keywords.focus();
    if (document.selection && document.selection.createRange) { 
	sel = document.selection.createRange();
        sel.text= document.fo.anus.value+", ";
    } else { 
	document.fo.keywords.value += document.fo.anus.value + ", ";
    }
}
function ht()
{
document.fo.message.focus();
sel = document.selection.createRange();
s = sel.text;

re = /</g;
s = s.replace(re, "&lt;");
re = />/g;
s = s.replace(re, "&gt;");
sel.text= s;
}

function li()
{
document.fo.message.focus();
sel = document.selection.createRange();
s= "<ul>\n"+sel.text;
re = /\n/g;
s = s.replace(re, "\n<li>");
s=s+"\n</ul>"
sel.text= s;
}
function voidPutATag(Tag,Tag2)
{
document.fo.message.focus();
sel = document.selection.createRange();
sel.text= Tag+sel.text+Tag2;
}




