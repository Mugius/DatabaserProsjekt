<?php /* Smarty version Smarty-3.1.19, created on 2015-04-16 15:47:34
         compiled from "C:\wamp\www\databaser\DatabaserProsjekt\smarty\templates\list_avtale.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1669552fbca4d507c1-77720849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f46b91b2d8de74e39097eb3d28ffe3278f1d678' => 
    array (
      0 => 'C:\\wamp\\www\\databaser\\DatabaserProsjekt\\smarty\\templates\\list_avtale.tpl',
      1 => 1429192047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1669552fbca4d507c1-77720849',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552fbca4db3431_93167736',
  'variables' => 
  array (
    'a_tidspunkt' => 0,
    'avtale' => 0,
    'avta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552fbca4db3431_93167736')) {function content_552fbca4db3431_93167736($_smarty_tpl) {?><form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="a_tidspunkt" class="col-sm-3 control-label">Sok Tidspunkt</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="a_tidspunkt" name="a_tidspunkt" placeholder="Skriv dato paa Avtalen du har lyst aa finne" value="<?php echo $_smarty_tpl->tpl_vars['a_tidspunkt']->value;?>
">
        </div>
    </div>
    <input type="hidden" name="action" value="list_avtale" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Search dato</button>
</form>
<table class="table table-condensed table-hover">
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
<a href="index.php?action=add_avtale_gruppe">Legg til <b>Grupper</b> til en Avtale</a></br></br>

<a href="index.php?action=add_avtale">Legg til ny Avtale!</a>

<?php }} ?>
