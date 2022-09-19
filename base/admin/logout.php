<?php
session_destroy();
session_reset();
session_id();
header("location:../index.php?pesan=logout");
?>