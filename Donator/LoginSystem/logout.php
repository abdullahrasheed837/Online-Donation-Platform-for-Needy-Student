<?php
session_start();
session_destroy();

echo "<script>window.open('../../Home/index.php','_self')</script>";
