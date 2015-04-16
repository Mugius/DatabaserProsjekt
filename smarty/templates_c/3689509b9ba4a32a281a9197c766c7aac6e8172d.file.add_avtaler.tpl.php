<?php /* Smarty version Smarty-3.1.19, created on 2015-04-16 11:32:16
         compiled from "C:\wamp\www\databaser\DatabaserProsjekt\smarty\templates\add_avtaler.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16944552f81a0327cc4-40558278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3689509b9ba4a32a281a9197c766c7aac6e8172d' => 
    array (
      0 => 'C:\\wamp\\www\\databaser\\DatabaserProsjekt\\smarty\\templates\\add_avtaler.tpl',
      1 => 1429165071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16944552f81a0327cc4-40558278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aa_avtaleID' => 0,
    'aa_personID' => 0,
    'aa_gruppeID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552f81a036a052_81630841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552f81a036a052_81630841')) {function content_552f81a036a052_81630841($_smarty_tpl) {?><form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="aa_avtaleID" class="col-sm-3 control-label">Avtale ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="aa_avtaleID" name="aa_avtaleID" placeholder="Skriv Avtale ID" value="<?php echo $_smarty_tpl->tpl_vars['aa_avtaleID']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="aa_personID" class="col-sm-3 control-label">Person ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="aa_personID" name="aa_personID" placeholder="Skriv Person ID" value="<?php echo $_smarty_tpl->tpl_vars['aa_personID']->value;?>
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


    <input type="hidden" name="action" value="add_avtaler" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Registrer</button>
</form>

<a href="index.php">Back to main page</a>
<?php }} ?>
