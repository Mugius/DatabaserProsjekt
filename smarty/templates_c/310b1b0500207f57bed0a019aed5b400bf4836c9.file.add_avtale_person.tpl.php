<?php /* Smarty version Smarty-3.1.19, created on 2015-04-16 12:40:34
         compiled from "C:\wamp\www\databaser\DatabaserProsjekt\smarty\templates\add_avtale_person.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27200552f91a2a6cf62-81772383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '310b1b0500207f57bed0a019aed5b400bf4836c9' => 
    array (
      0 => 'C:\\wamp\\www\\databaser\\DatabaserProsjekt\\smarty\\templates\\add_avtale_person.tpl',
      1 => 1429180430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27200552f91a2a6cf62-81772383',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ap_avtaleID' => 0,
    'ap_personID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552f91a2aa4978_64870909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552f91a2aa4978_64870909')) {function content_552f91a2aa4978_64870909($_smarty_tpl) {?><form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="ap_avtaleID" class="col-sm-3 control-label">Avtale ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="ap_avtaleID" name="ap_avtaleID" placeholder="Skriv Avtale ID" value="<?php echo $_smarty_tpl->tpl_vars['ap_avtaleID']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="ap_personID" class="col-sm-3 control-label">Person ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="ap_personID" name="ap_personID" placeholder="Skriv Person ID" value="<?php echo $_smarty_tpl->tpl_vars['ap_personID']->value;?>
">
        </div>
    </div>
    <input type="hidden" name="action" value="add_avtale_person" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Registrer</button>
</form>

<a href="index.php">Back to main page</a>
<?php }} ?>
