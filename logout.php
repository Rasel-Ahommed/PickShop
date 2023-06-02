<?php
setcookie("email","",time()-(86400*8));
header("location:index.php");