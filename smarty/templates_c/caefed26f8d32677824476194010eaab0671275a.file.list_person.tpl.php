<?php /* Smarty version Smarty-3.1.19, created on 2015-04-17 12:00:20
         compiled from "C:\wamp\www\databaser\DatabaserProsjekt\smarty\templates\list_person.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32185530d9b47ec578-89003980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caefed26f8d32677824476194010eaab0671275a' => 
    array (
      0 => 'C:\\wamp\\www\\databaser\\DatabaserProsjekt\\smarty\\templates\\list_person.tpl',
      1 => 1429182646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32185530d9b47ec578-89003980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'person' => 0,
    'pers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5530d9b4898785_41004194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5530d9b4898785_41004194')) {function content_5530d9b4898785_41004194($_smarty_tpl) {?><table class="table table-condensed table-hover">
    <thead>
        <tr>
            <th>Person ID</th>
            <th>Fornavn</th>
            <th>Etternavn</th>
            <th>Telefon Nummer</th>
            <th>Epost</th>
            <th>Adresse</th>
            <th>Post Nummer</th>
        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['pers'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pers']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['person']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pers']->key => $_smarty_tpl->tpl_vars['pers']->value) {
$_smarty_tpl->tpl_vars['pers']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['pers']->value['p_personID'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['pers']->value['p_fornavn'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['pers']->value['p_etternavn'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['pers']->value['p_tlfnummer'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['pers']->value['p_epost'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['pers']->value['p_adresse'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['pers']->value['p_postnr'];?>
</td>             
            </tr>
        <?php } ?>
    </tbody>
</table>

<a href="index.php?action=add_person">Legg til ny Person!</a><?php }} ?>
