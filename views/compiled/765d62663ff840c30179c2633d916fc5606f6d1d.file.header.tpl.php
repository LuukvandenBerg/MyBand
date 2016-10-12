<?php /* Smarty version Smarty-3.1.18, created on 2016-10-12 14:44:59
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:816257ebd265708781-42742859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1476276297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '816257ebd265708781-42742859',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57ebd26576ba53_46580591',
  'variables' => 
  array (
    'headertext' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ebd26576ba53_46580591')) {function content_57ebd26576ba53_46580591($_smarty_tpl) {?><header>
	<p><?php echo $_smarty_tpl->tpl_vars['headertext']->value;?>
</p>
	<ul>
		<li><a href="http://localhost/Leerjaar2/periode1/MyBand/test/index.php?action=home">home</a></li>
		<li><a href="http://localhost/Leerjaar2/periode1/MyBand/test/index.php?action=about">About</a></li>
	</ul>
</header><?php }} ?>
