<?php
/* Smarty version 4.3.4, created on 2024-03-11 11:26:19
  from '/app/admin/themes/default/template/helpers/tree/tree_node_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65eeea5b0360d0_89054511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1d25ff8422c063ae3acdb2e2043d5e5589b049d' => 
    array (
      0 => '/app/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eeea5b0360d0_89054511 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
