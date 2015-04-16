<?php /* Smarty version Smarty-3.1.19, created on 2015-04-16 11:36:29
         compiled from "C:\wamp\www\databaser\DatabaserProsjekt\smarty\templates\add_gruppe_person.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32425552f829da80399-88392062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed831e1b6b5317db1cec8805ea1eebfbd7a0af76' => 
    array (
      0 => 'C:\\wamp\\www\\databaser\\DatabaserProsjekt\\smarty\\templates\\add_gruppe_person.tpl',
      1 => 1429175918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32425552f829da80399-88392062',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gp_gruppeID' => 0,
    'gp_personID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552f829daba6d5_76472996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552f829daba6d5_76472996')) {function content_552f829daba6d5_76472996($_smarty_tpl) {?><form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="gp_gruppeID" class="col-sm-3 control-label">Gruppe ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="gp_gruppeID" name="gp_gruppeID" placeholder="Skriv Gruppe ID" value="<?php echo $_smarty_tpl->tpl_vars['gp_gruppeID']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="gp_personID" class="col-sm-3 control-label">Person ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="gp_personID" name="gp_personID" placeholder="Skriv Person ID" value="<?php echo $_smarty_tpl->tpl_vars['gp_personID']->value;?>
">
        </div>
    </div>
    <input type="hidden" name="action" value="add_gruppe_person" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Registrer</button>
</form>

<a href="index.php">Tilbake</a>
<?php }} ?>
