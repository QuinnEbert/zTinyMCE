<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<title>TinyMCE Test</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>

<script type="text/javascript" src="./tiny_mce/tiny_mce.js"></script>

<script type="text/javascript">
tinyMCE.init({
        theme : "advanced",
        mode : "exact",
        elements : "myEditor",
        width : "640",
        height : "480",
        theme_advanced_toolbar_location : "top",
        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,"
        + "justifyleft,justifycenter,justifyright,justifyfull,formatselect,"
        + "bullist,numlist,outdent,indent",
        theme_advanced_buttons2 : "link,unlink,anchor,image,separator,"
        +"undo,redo,cleanup,code,separator,sub,sup,charmap",
        theme_advanced_buttons3 : ""
});
</script>
</head>
<body>
<form method="post" action="show.php">
        <p>     
                <textarea name="content" id="myEditor" cols="50" rows="15"></textarea>
                <input type="submit" value="Save" />
        </p>
</form>

</body>
</html>