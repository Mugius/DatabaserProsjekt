<?php /* Smarty version Smarty-3.1.19, created on 2015-04-16 12:49:10
         compiled from "C:\wamp\www\databaser\DatabaserProsjekt\smarty\templates\add_avtale_gruppe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15851552f93a6b6b713-66372638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c6216faa643978fbee2c36128f0bd0fe46a0761' => 
    array (
      0 => 'C:\\wamp\\www\\databaser\\DatabaserProsjekt\\smarty\\templates\\add_avtale_gruppe.tpl',
      1 => 1429181234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15851552f93a6b6b713-66372638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aa_avtaleID' => 0,
    'aa_gruppeID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552f93a6ba18c4_02979496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552f93a6ba18c4_02979496')) {function content_552f93a6ba18c4_02979496($_smarty_tpl) {?><form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="aa_avtaleID" class="col-sm-3 control-label">Avtale ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="aa_avtaleID" name="aa_avtaleID" placeholder="Skriv Avtale ID" value="<?php echo $_smarty_tpl->tpl_vars['aa_avtaleID']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="aa_gruppeID" class="col-sm-3 control-label">Gruppe ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="aa_gruppeID" name="aa_gruppeID" placeholder="Skriv Gruppe ID" value="<?php echo $_smarty_tpl->tpl_vars['aa_gruppeID']->value;?>
">
        </div>
    </div>


    <input type="hidden" name="action" value="add_avtale_gruppe" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Registrer</button>
</form>

<a href="index.php">Back to main page</a>
<?php }} ?>
