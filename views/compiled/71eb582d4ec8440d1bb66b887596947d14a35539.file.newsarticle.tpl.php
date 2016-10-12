<?php /* Smarty version Smarty-3.1.18, created on 2016-10-12 14:21:38
         compiled from "views\newsarticle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3080857f4f7057b0605-86374695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71eb582d4ec8440d1bb66b887596947d14a35539' => 
    array (
      0 => 'views\\newsarticle.tpl',
      1 => 1475672715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3080857f4f7057b0605-86374695',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f4f7061ec868_49840307',
  'variables' => 
  array (
    'result' => 0,
    'oneitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4f7061ec868_49840307')) {function content_57f4f7061ec868_49840307($_smarty_tpl) {?><section>
    <?php  $_smarty_tpl->tpl_vars['oneitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneitem']->key => $_smarty_tpl->tpl_vars['oneitem']->value) {
$_smarty_tpl->tpl_vars['oneitem']->_loop = true;
?>
        <h1><?php echo $_smarty_tpl->tpl_vars['oneitem']->value['title'];?>
</h1>
		<p><?php echo $_smarty_tpl->tpl_vars['oneitem']->value['content'];?>
</p>
		<img src="image/<?php echo $_smarty_tpl->tpl_vars['oneitem']->value['image'];?>
"><br>
        <h3><?php echo $_smarty_tpl->tpl_vars['oneitem']->value['date_created'];?>
</h3>

    <?php } ?>




</section><?php }} ?>
