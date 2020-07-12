<?php
//
// Author: timgno 
// WebSite: http://mcdirectory.netsons.org/txmod/
//
// inclusione intestazione
include('header.php'); 
global $xoopsTpl;
// dichiarazione template principale (prima di includere path con il file header.php)
$xoopsOption['template_main'] = 'base.html';
 
// inclusione dell'intestazione della pagina (header file)
include(XOOPS_ROOT_PATH.'/header.php');

$xoopsTpl->assign('base', array('slogan' => 'My first module<br />Il mio primo modulo'));

// inclusione del footer
include(XOOPS_ROOT_PATH.'/footer.php');

?>