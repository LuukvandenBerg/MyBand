<?php /* Smarty version Smarty-3.1.18, created on 2016-11-01 14:08:19
         compiled from "C:\wamp\www\Leerjaar2\periode1\MyBand\test\model\DriversDB.php" */ ?>
<?php /*%%SmartyHeaderCode:23397581893c31e00c1-87907006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a710ab6e0b6d65650feb7c56db0ab6583293ef2' => 
    array (
      0 => 'C:\\wamp\\www\\Leerjaar2\\periode1\\MyBand\\test\\model\\DriversDB.php',
      1 => 1478005673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23397581893c31e00c1-87907006',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581893c31e4d28_49290746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581893c31e4d28_49290746')) {function content_581893c31e4d28_49290746($_smarty_tpl) {?><<?php ?>?php

$result = $mysqli->query("SELECT * FROM drivers");

//$result = ConvertToArray($result);

while($row = $result->fetch_assoc()){
        }
<?php }} ?>
