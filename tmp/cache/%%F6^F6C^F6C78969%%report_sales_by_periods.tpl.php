<?php /* Smarty version 2.6.18, created on 2014-03-17 13:13:46
         compiled from ../templates/default/reports/report_sales_by_periods.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlsafe', '../templates/default/reports/report_sales_by_periods.tpl', 9, false),array('modifier', 'siLocal_number', '../templates/default/reports/report_sales_by_periods.tpl', 14, false),)), $this); ?>


<div id="top"><h3><?php echo $this->_tpl_vars['LANG']['monthly_sales_per_year']; ?>
</h3></div>
 <hr />

<table width="100%">
 <?php $_from = $this->_tpl_vars['years']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['year']):
?>
   <tr>
   <td><b><?php echo ((is_array($_tmp=$this->_tpl_vars['year'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</b></td>
   <tr>
   <td></td><td>Month:<br />Sales:<br />Payments:</td>
     <?php $_from = $this->_tpl_vars['total_sales'][$this->_tpl_vars['year']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item_sales']):
?>
	      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

		  <br /><?php if ($this->_tpl_vars['item_sales'] > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item_sales'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item_sales'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php endif; ?>
		  <br /><?php if ($this->_tpl_vars['total_payments'][$this->_tpl_vars['year']][$this->_tpl_vars['key']] > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['total_payments'][$this->_tpl_vars['year']][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['total_payments'][$this->_tpl_vars['year']][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php endif; ?></td>
     <?php endforeach; endif; unset($_from); ?>

	</tr>
 <?php endforeach; endif; unset($_from); ?>
 </table>