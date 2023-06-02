<?php
setcookie("admin_user","",time()-(86400*8));
header("location:admin.php");