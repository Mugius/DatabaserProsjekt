<?php /* Smarty version Smarty-3.1.19, created on 2015-04-17 12:54:06
         compiled from "C:\wamp\www\databaser\DatabaserProsjekt\smarty\templates\list_avtaler.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98075530e64e76c0f0-36974103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73d162a7c635970094421123e560e95659e593cb' => 
    array (
      0 => 'C:\\wamp\\www\\databaser\\DatabaserProsjekt\\smarty\\templates\\list_avtaler.tpl',
      1 => 1429267784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98075530e64e76c0f0-36974103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'avtaler' => 0,
    'avtlr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5530e64e7cfa42_55400566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5530e64e7cfa42_55400566')) {function content_5530e64e7cfa42_55400566($_smarty_tpl) {?><form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="aa_gruppeID" class="col-sm-3 control-label">Gruppe ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="aa_gruppeID" name="aa_gruppeID" placeholder="Skriv gruppe ID for å finne avtalene deres" >
        </div>
    </div>
    <input type="hidden" name="action" value="list_avtaler" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Søk Avtaler</button>
    <a href="index.php?action=list_avtaler" class="btn btn-primary">Reset</a>
</form>


<table class="table table-condensed table-hover">
    <thead>
        <tr>
            <th>Tidspunkt</th>
            <th>Avtale Type</th>
            <th>Kommentar</th>
            <th>Sted ID</th>
            <th>Gruppe Navn</th>
        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['avtlr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['avtlr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['avtaler']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['avtlr']->key => $_smarty_tpl->tpl_vars['avtlr']->value) {
$_smarty_tpl->tpl_vars['avtlr']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['avtlr']->value['a_tidspunkt'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['avtlr']->value['a_avtaleType'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['avtlr']->value['a_kommentar'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['avtlr']->value['a_stedID'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['avtlr']->value['g_gruppenavn'];?>
</td>
            </tr>
        <?php } ?>
    </tbody>
</table>



<?php }} ?>
