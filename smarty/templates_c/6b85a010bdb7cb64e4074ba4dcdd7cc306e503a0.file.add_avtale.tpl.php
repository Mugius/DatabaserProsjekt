<?php /* Smarty version Smarty-3.1.19, created on 2015-04-16 12:54:45
         compiled from "C:\wamp\www\databaser\DatabaserProsjekt\smarty\templates\add_avtale.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23009552f94f5519d69-76976168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b85a010bdb7cb64e4074ba4dcdd7cc306e503a0' => 
    array (
      0 => 'C:\\wamp\\www\\databaser\\DatabaserProsjekt\\smarty\\templates\\add_avtale.tpl',
      1 => 1429165071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23009552f94f5519d69-76976168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'a_tidspunkt' => 0,
    'a_avtaleType' => 0,
    'a_kommentar' => 0,
    'a_stedID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552f94f555ec57_73638359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552f94f555ec57_73638359')) {function content_552f94f555ec57_73638359($_smarty_tpl) {?><form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="a_tidspunkt" class="col-sm-3 control-label">Tidspunkt</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="a_tidspunkt" name="a_tidspunkt" placeholder="Skriv Tidspunktet på Avtalen" value="<?php echo $_smarty_tpl->tpl_vars['a_tidspunkt']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="a_avtaleType" class="col-sm-3 control-label">Avtale Type</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="a_avtaleType" name="a_avtaleType" placeholder="Skriv Avtale-typen" value="<?php echo $_smarty_tpl->tpl_vars['a_avtaleType']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="a_kommentar" class="col-sm-3 control-label">Kommentar</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="a_kommentar" name="a_kommentar" placeholder="Skriv Kommentar" value="<?php echo $_smarty_tpl->tpl_vars['a_kommentar']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="a_stedID" class="col-sm-3 control-label">Sted ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="a_stedID" name="a_stedID" placeholder="Skriv Sted ID" value="<?php echo $_smarty_tpl->tpl_vars['a_stedID']->value;?>
">
        </div>
    </div>

    <input type="hidden" name="action" value="add_avtale" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Registrer</button>
</form>

<a href="index.php">Back to main page</a>
<?php }} ?>
