<?php
//
// Author: timgno 
// WebSite: http://mcdirectory.netsons.org/txmod/
//
$modversion['name'] = "Base";
$modversion['version'] = 0.5;
$modversion['description'] = "Base is a initial standard module";   
$modversion['author'] = 'timgno';
$modversion['credits'] = 'http://mcdirectory.netsons.org/txmod/';
$modversion['help'] = 'help.php';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'images/base_slogo.png';
$modversion['dirname'] = 'base';
 // Admin
$modversion['hasAdmin'] = 0;
// Main
$modversion['hasMain'] = 1;
// Templates
$modversion['templates'][1]['file'] = 'base.html';
$modversion['templates'][1]['description'] = 'Base module';
// Blocks
$modversion['blocks'][1]['file'] = "base_block.php";
$modversion['blocks'][1]['name'] = "Base Block";
$modversion['blocks'][1]['description'] = "Shows base block";
$modversion['blocks'][1]['show_func'] = "b_base_show";
$modversion['blocks'][1]['template'] = 'base_block.html';

?>