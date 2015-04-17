<?php /* Smarty version Smarty-3.1.19, created on 2015-04-17 12:00:23
         compiled from "C:\wamp\www\databaser\DatabaserProsjekt\smarty\templates\list_gruppe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47045530d9b7636172-01128709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c75a8cb733632cfb01a7df91fec4a72ad59c47b' => 
    array (
      0 => 'C:\\wamp\\www\\databaser\\DatabaserProsjekt\\smarty\\templates\\list_gruppe.tpl',
      1 => 1429182566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47045530d9b7636172-01128709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gruppe' => 0,
    'grupp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5530d9b7682f38_54877056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5530d9b7682f38_54877056')) {function content_5530d9b7682f38_54877056($_smarty_tpl) {?><table class="table table-condensed table-hover">
    <thead>
        <tr>
            <th>Gruppe ID</th>
            <th>Gruppe Navn</th>

        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['grupp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['grupp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gruppe']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['grupp']->key => $_smarty_tpl->tpl_vars['grupp']->value) {
$_smarty_tpl->tpl_vars['grupp']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['grupp']->value['g_gruppeID'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['grupp']->value['g_gruppenavn'];?>
</td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<a href="index.php?action=add_gruppe_person">Legg til Personer inn i en gruppe</a></br></br>
<a href="index.php?action=add_gruppe">Legg til ny Gruppe!</a>
<?php }} ?>
