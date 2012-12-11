<?php
$allowedTags  = '<p><strong><em><u><h1><h2><h3><h4><h5><h6><img>';
$allowedTags .= '<li><ol><ul><span><div><br><ins><del>';
//echo(stripslashes($_POST['content']));
echo(strip_tags(stripslashes($_POST['content']),$allowedTags));