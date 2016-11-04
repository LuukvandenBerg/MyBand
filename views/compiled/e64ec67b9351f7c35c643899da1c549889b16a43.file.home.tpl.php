<?php /* Smarty version Smarty-3.1.18, created on 2016-11-01 14:33:15
         compiled from "views\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192358172ca67fc997-42415309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e64ec67b9351f7c35c643899da1c549889b16a43' => 
    array (
      0 => 'views\\home.tpl',
      1 => 1478006990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192358172ca67fc997-42415309',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58172ca68258e1_93352073',
  'variables' => 
  array (
    'result' => 0,
    'oneitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58172ca68258e1_93352073')) {function content_58172ca68258e1_93352073($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['oneitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneitem']->key => $_smarty_tpl->tpl_vars['oneitem']->value) {
$_smarty_tpl->tpl_vars['oneitem']->_loop = true;
?>
	<div id="<?php echo $_smarty_tpl->tpl_vars['oneitem']->value['firstname'];?>
">
		<h1><?php echo $_smarty_tpl->tpl_vars['oneitem']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['oneitem']->value['lastname'];?>
</h1>
		<img src="image/<?php echo $_smarty_tpl->tpl_vars['oneitem']->value['image'];?>
">
		<p><?php echo $_smarty_tpl->tpl_vars['oneitem']->value['description'];?>
</p>
	</div>      
<?php } ?>


<?php }} ?>
