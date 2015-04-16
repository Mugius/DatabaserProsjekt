<?php /* Smarty version Smarty-3.1.19, created on 2015-04-16 12:54:34
         compiled from "C:\wamp\www\databaser\DatabaserProsjekt\smarty\templates\add_gruppe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10056552f94ea127d08-41363975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94182d10370f78f7aa0f8bcdf171af1e6464c9c7' => 
    array (
      0 => 'C:\\wamp\\www\\databaser\\DatabaserProsjekt\\smarty\\templates\\add_gruppe.tpl',
      1 => 1429165071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10056552f94ea127d08-41363975',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'g_gruppenavn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552f94ea161432_06279127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552f94ea161432_06279127')) {function content_552f94ea161432_06279127($_smarty_tpl) {?><form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="g_gruppenavn" class="col-sm-3 control-label">Gruppenavn</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="g_gruppenavn" name="g_gruppenavn" placeholder="Skriv gruppenavn" value="<?php echo $_smarty_tpl->tpl_vars['g_gruppenavn']->value;?>
">
        </div>
    </div>

    <input type="hidden" name="action" value="add_gruppe" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Registrer</button>
</form>

<a href="index.php">Back to main page</a>
<?php }} ?>
