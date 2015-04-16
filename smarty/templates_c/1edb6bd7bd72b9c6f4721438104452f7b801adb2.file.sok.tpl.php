<?php /* Smarty version Smarty-3.1.19, created on 2015-04-16 15:22:41
         compiled from "C:\wamp\www\databaser\DatabaserProsjekt\smarty\templates\sok.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13514552fb3484545f5-14224074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1edb6bd7bd72b9c6f4721438104452f7b801adb2' => 
    array (
      0 => 'C:\\wamp\\www\\databaser\\DatabaserProsjekt\\smarty\\templates\\sok.tpl',
      1 => 1429190558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13514552fb3484545f5-14224074',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552fb3484b9a97_88524846',
  'variables' => 
  array (
    'a_tidspunkt' => 0,
    'avtale' => 0,
    'sok' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552fb3484b9a97_88524846')) {function content_552fb3484b9a97_88524846($_smarty_tpl) {?><form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="a_tidspunkt" class="col-sm-3 control-label">Sok Tidspunkt</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="a_tidspunkt" name="a_tidspunkt" placeholder="Skriv dato paa Avtalen du har lyst aa finne" value="<?php echo $_smarty_tpl->tpl_vars['a_tidspunkt']->value;?>
">
        </div>
    </div>
    <input type="hidden" name="action" value="sok" />
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
        <?php  $_smarty_tpl->tpl_vars['sok'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sok']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['avtale']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sok']->key => $_smarty_tpl->tpl_vars['sok']->value) {
$_smarty_tpl->tpl_vars['sok']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['sok']->value['a_avtaleID'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['sok']->value['a_tidspunkt'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['sok']->value['a_avtaleType'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['sok']->value['a_kommentar'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['sok']->value['a_stedID'];?>
</td>

            </tr>
        <?php } ?>
    </tbody>
</table>

<a href="index.php">Back to main page</a>
<?php }} ?>
