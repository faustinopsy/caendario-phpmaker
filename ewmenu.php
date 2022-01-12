<!-- Begin Main Menu -->
<?php $RootMenu = new cMenu(EW_MENUBAR_ID) ?>
<?php

// Generate all menu items
$RootMenu->IsRoot = TRUE;
$RootMenu->AddMenuItem(1, "mi_calendar_php", $Language->MenuPhrase("1", "MenuText"), "calendar.php", -1, "", IsLoggedIn() || AllowListMenu('{9661832A-1868-435B-AC02-F5871FC25E94}calendar.php'), FALSE, TRUE);
$RootMenu->AddMenuItem(2, "mi_usuarios", $Language->MenuPhrase("2", "MenuText"), "usuarioslist.php", -1, "", IsLoggedIn() || AllowListMenu('{9661832A-1868-435B-AC02-F5871FC25E94}usuarios'), FALSE, FALSE);
$RootMenu->AddMenuItem(-1, "mi_logout", $Language->Phrase("Logout"), "logout.php", -1, "", IsLoggedIn());

$RootMenu->Render();
?>
<!-- End Main Menu -->
