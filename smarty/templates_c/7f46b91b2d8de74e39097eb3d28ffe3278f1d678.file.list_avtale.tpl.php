<?php /* Smarty version Smarty-3.1.19, created on 2015-04-16 12:40:27
         compiled from "C:\wamp\www\databaser\DatabaserProsjekt\smarty\templates\list_avtale.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21363552f819ef2d6a8-94411170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f46b91b2d8de74e39097eb3d28ffe3278f1d678' => 
    array (
      0 => 'C:\\wamp\\www\\databaser\\DatabaserProsjekt\\smarty\\templates\\list_avtale.tpl',
      1 => 1429180824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21363552f819ef2d6a8-94411170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552f819f051169_54197201',
  'variables' => 
  array (
    'avtale' => 0,
    'avta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552f819f051169_54197201')) {function content_552f819f051169_54197201($_smarty_tpl) {?><table class="table table-condensed table-hover">
    <thead>
        <tr>
            <th>AvtaleID</th>
            <th>Tidspunkt</th>
            <th>Avtale Type</th>
            <th>Kommentar</th>
            <th>Sted ID</th>

        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['avta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['avta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['avtale']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['avta']->key => $_smarty_tpl->tpl_vars['avta']->value) {
$_smarty_tpl->tpl_vars['avta']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['avta']->value['a_avtaleID'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['avta']->value['a_tidspunkt'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['avta']->value['a_avtaleType'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['avta']->value['a_kommentar'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['avta']->value['a_stedID'];?>
</td>

            </tr>
        <?php } ?>
    </tbody>
</table>
<a href="index.php?action=add_avtale_person">Legg til <b>Personer</b> til en Avtale</a></br>
<a href="index.php?action=add_avtale_gruppe">Legg til <b>Grupper</b> til en Avtale</a>

<?php }} ?>
