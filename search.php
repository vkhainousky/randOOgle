<?php
$randword = substr(str_shuffle("qwertyuiopasdfghjklzxcvbnm"),0,5);
header("Location: https://www.google.com/search?q=" . $randword)
?>