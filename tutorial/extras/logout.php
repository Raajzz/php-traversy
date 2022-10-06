<?php
  session_start();
  session_destroy();
  header("Location: /tutorial/13_sessions.php");
?>