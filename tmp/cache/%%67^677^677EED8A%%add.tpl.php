<?php /* Smarty version 2.6.18, created on 2014-03-17 13:04:38
         compiled from ../templates/default/products/add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlsafe', '../templates/default/products/add.tpl', 21, false),array('modifier', 'unescape', '../templates/default/products/add.tpl', 82, false),array('function', 'html_options', '../templates/default/products/add.tpl', 87, false),)), $this); ?>


<?php if ($_POST['description'] != "" && $_POST['id'] != null): ?> 
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../templates/default/products/save.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
 
	<?php if ($_POST['id'] != null): ?> 
		<div class="validation_alert"><img src="./images/common/important.png" alt="" />
		You must enter a description for the product</div>
		<hr />
	<?php endif; ?>
<form name="frmpost" action="index.php?module=products&view=add" method="POST" id="frmpost" onsubmit="return checkForm(this);">
<br />

<table align="center">
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['description']; ?>
 
		<a class="cluetip" href="#"	rel="index.php?module=documentation&amp;view=view&amp;page=help_required_field" title="<?php echo $this->_tpl_vars['LANG']['Required_Field']; ?>
"><img src="./images/common/required-small.png" alt="" /></a>
		</td>
		<td><input type="text" name="description" value="<?php echo ((is_array($_tmp=$_POST['description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" id="description"  class="validate[required]" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['unit_price']; ?>
</td>
		<td><input type="text" class="edit" name="unit_price" value="<?php echo ((is_array($_tmp=$_POST['unit_price'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"  size="25" /></td>
	</tr>
    <?php if ($this->_tpl_vars['defaults']['inventory'] == '1'): ?>
        <tr>
            <td class="details_screen">

                <?php echo $this->_tpl_vars['LANG']['cost']; ?>


		        <a class="cluetip" href="#"	rel="index.php?module=documentation&amp;view=view&amp;page=help_cost" title="<?php echo $this->_tpl_vars['LANG']['cost']; ?>
">
                    <img src="./images/common/help-small.png" alt="" />
                </a>

            </td>
            <td><input type="text" class="edit" name="cost" value="<?php echo ((is_array($_tmp=$_POST['cost'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"  size="25" /></td>
        </tr>
        <tr>
            <td class="details_screen"><?php echo $this->_tpl_vars['LANG']['reorder_level']; ?>
</td>
            <td><input type="text" class="edit" name="reorder_level" value="<?php echo ((is_array($_tmp=$_POST['reorder_level'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"  size="25" /></td>
        </tr>
    <?php endif; ?>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['default_tax']; ?>
</td>
		<td>
		<select name="default_tax_id">
		    <option value=''></option>
			<?php $_from = $this->_tpl_vars['taxes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tax']):
?>
				<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tax']['tax_id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['tax']['tax_description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
		</select>
		</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabel']['product_cf1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 
		<a class="cluetip" href="#"	rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields" title="<?php echo $this->_tpl_vars['LANG']['custom_fields']; ?>
"><img src="./images/common/help-small.png" alt="" /></a>
		</td>
		<td><input type="text" class="edit" name="custom_field1" value="<?php echo ((is_array($_tmp=$_POST['custom_field1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"  size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabel']['product_cf2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 
		<a class="cluetip" href="#"	rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields" title="<?php echo $this->_tpl_vars['LANG']['custom_fields']; ?>
"><img src="./images/common/help-small.png" alt="" /></a>
		</td>
		<td><input type="text" class="edit" name="custom_field2" value="<?php echo ((is_array($_tmp=$_POST['custom_field2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabel']['product_cf3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 
		<a class="cluetip" href="#"	rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields" title="<?php echo $this->_tpl_vars['LANG']['custom_fields']; ?>
"><img src="./images/common/help-small.png" alt="" /></a>
		</td>
		<td><input type="text" class="edit" name="custom_field3" value="<?php echo ((is_array($_tmp=$_POST['custom_field3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabel']['product_cf4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 
		<a class="cluetip" href="#"	rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields" title="<?php echo $this->_tpl_vars['LANG']['custom_fields']; ?>
"><img src="./images/common/help-small.png" alt="" /></a>
		</td>
		<td><input type="text" class="edit" name="custom_field4" value="<?php echo ((is_array($_tmp=$_POST['custom_field4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['notes']; ?>
</td>
		<td><textarea input type="text" class="editor" name='notes' rows="8" cols="50"><?php echo ((is_array($_tmp=$_POST['notes'])) ? $this->_run_mod_handler('unescape', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['enabled']; ?>
</td>
		<td>
			<?php echo smarty_function_html_options(array('class' => 'edit','name' => 'enabled','options' => $this->_tpl_vars['enabled'],'selected' => 1), $this);?>

		</td>
	</tr>
	</table>
<br />
<table class="buttons" align="center">
	<tr>
		<td>
			<button type="submit" class="positive" name="id" value="<?php echo $this->_tpl_vars['LANG']['save']; ?>
">
			    <img class="button_img" src="./images/common/tick.png" alt="" /> 
				<?php echo $this->_tpl_vars['LANG']['save']; ?>

			</button>

			<input type="hidden" name="op" value="insert_product" />
		
			<a href="./index.php?module=products&view=manage" class="negative">
		        <img src="./images/common/cross.png" alt="" />
	        	<?php echo $this->_tpl_vars['LANG']['cancel']; ?>

    		</a>
	
		</td>
	</tr>
</table>


</form>
	<?php endif; ?>