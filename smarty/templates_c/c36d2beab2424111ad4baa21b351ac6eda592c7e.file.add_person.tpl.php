<?php /* Smarty version Smarty-3.1.19, created on 2015-04-16 11:41:30
         compiled from "C:\wamp\www\databaser\DatabaserProsjekt\smarty\templates\add_person.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13263552f83ca2c0030-60171578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c36d2beab2424111ad4baa21b351ac6eda592c7e' => 
    array (
      0 => 'C:\\wamp\\www\\databaser\\DatabaserProsjekt\\smarty\\templates\\add_person.tpl',
      1 => 1429176630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13263552f83ca2c0030-60171578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p_fornavn' => 0,
    'p_etternavn' => 0,
    'p_epost' => 0,
    'p_tlfnummer' => 0,
    'p_adresse' => 0,
    'p_postnr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552f83ca30cad1_73755740',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552f83ca30cad1_73755740')) {function content_552f83ca30cad1_73755740($_smarty_tpl) {?><form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="p_fornavn" class="col-sm-3 control-label">Fornavn</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="p_fornavn" name="p_fornavn" placeholder="Skriv Fornavn" value="<?php echo $_smarty_tpl->tpl_vars['p_fornavn']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="p_etternavn" class="col-sm-3 control-label">Etternavn</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="p_etternavn" name="p_etternavn" placeholder="Skriv Etternavn" value="<?php echo $_smarty_tpl->tpl_vars['p_etternavn']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="p_epost" class="col-sm-3 control-label">Epost</label>
        <div class="col-sm-9">
            <input type="email" class="form-control" id="p_epost" name="p_epost" placeholder="Skriv inn Epost" value="<?php echo $_smarty_tpl->tpl_vars['p_epost']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="p_tlfnummer" class="col-sm-3 control-label">Telefonnummer</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="p_tlfnummer" name="p_tlfnummer" placeholder="Skriv inn telefonnummer" value="<?php echo $_smarty_tpl->tpl_vars['p_tlfnummer']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="p_adresse" class="col-sm-3 control-label">Adresse</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="p_adresse" name="p_adresse" placeholder="Skriv adressen" value="<?php echo $_smarty_tpl->tpl_vars['p_adresse']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="p_postnr" class="col-sm-3 control-label">Postnummer</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="p_postnr" name="p_postnr" placeholder="Skriv inn postnummer" value="<?php echo $_smarty_tpl->tpl_vars['p_postnr']->value;?>
">
        </div>
    </div>
    <input type="hidden" name="action" value="add_person" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Registrer</button>
</form>

<a href="index.php">Back to login page</a>
<?php }} ?>
