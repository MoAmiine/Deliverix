<?php
// 1. Démarrer la session pour y avoir accès
session_start();
session_destroy();
header("Location: ../../index.php");
exit();