<?php
/* Smarty version 4.3.4, created on 2024-03-11 11:26:18
  from '/app/admin/themes/default/template/controllers/statuses/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65eeea5adccac9_29022250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '086b683e4cb94fe1928ac0fc077f5e32dd2848b8' => 
    array (
      0 => '/app/admin/themes/default/template/controllers/statuses/helpers/form/form.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eeea5adccac9_29022250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173864438865eeea5adc1932_35656641', "label");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25460265eeea5adc2a16_33875586', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205164755365eeea5adcbdc1_91633629', "field");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71707573665eeea5adcc731_28988049', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "label"} */
class Block_173864438865eeea5adc1932_35656641 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_173864438865eeea5adc1932_35656641',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == "select_template") {?>
		<div id="tpl" style="display:<?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value['send_email'])) && $_smarty_tpl->tpl_vars['fields_value']->value['send_email']) {?>block<?php } else { ?>none<?php }?>">
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "label"} */
/* {block "input"} */
class Block_25460265eeea5adc2a16_33875586 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_25460265eeea5adc2a16_33875586',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == "select_template") {?>
	<div class="col-lg-9">
		<div class="row">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
			<?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']]);?>
			<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
				<div class="col-lg-8">
					<select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
							id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_select_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
							<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['multiple']))) {?>multiple="multiple" <?php }?>
							<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['size']))) {?>size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
							<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['onchange']))) {?>onchange="<?php echo $_smarty_tpl->tpl_vars['input']->value['onchange'];?>
"<?php }?>>
						<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['options']['query'][$_smarty_tpl->tpl_vars['language']->value['iso_code']])) && $_smarty_tpl->tpl_vars['input']->value['options']['query'][$_smarty_tpl->tpl_vars['language']->value['iso_code']]) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options']['query'][$_smarty_tpl->tpl_vars['language']->value['iso_code']], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"
									<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['multiple']))) {?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], 'field_value');
$_smarty_tpl->tpl_vars['field_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->do_else = false;
?>
											<?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>selected="selected"<?php }?>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php } else { ?>
										<?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) && ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']] == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']])) {?>selected="selected"<?php }?>
									<?php }?>
									data-preview="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['folder']];?>
"
								><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']],'html','UTF-8' ));?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					</select>
				</div>
				<div class="col-lg-4">
					<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
						<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language_flag');
$_smarty_tpl->tpl_vars['language_flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language_flag']->value) {
$_smarty_tpl->tpl_vars['language_flag']->do_else = false;
?>
						<li>
							<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language_flag']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language_flag']->value['name'];?>
</a>
						</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
					<button type="button" class="btn btn-default" onclick="viewTemplates('#template_select_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
', '<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
/', '.html');">
						<i class="icon-eye-open"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

					</button>
				</div>
			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['hint']))) {?>
			<div class="clearfix">&nbsp;</div>
			<div class="col-lg-9">
				<div class="alert alert-info">
				<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['hint'], 'hint');
$_smarty_tpl->tpl_vars['hint']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->do_else = false;
?>
						<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
<br/>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php } else { ?>
					<?php echo $_smarty_tpl->tpl_vars['input']->value['hint'];?>

				<?php }?>
				</div>
			</div>
		<?php }?>
		</div>
	</div>

	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block "field"} */
class Block_205164755365eeea5adcbdc1_91633629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_205164755365eeea5adcbdc1_91633629',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == "select_template") {?>
		</div>
	<?php }
}
}
/* {/block "field"} */
/* {block "script"} */
class Block_71707573665eeea5adcc731_28988049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_71707573665eeea5adcc731_28988049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	$(document).ready(function() {
		$('#send_email_on').click(function() {
			$('#tpl').slideToggle();
		});
	});
<?php
}
}
/* {/block "script"} */
}
