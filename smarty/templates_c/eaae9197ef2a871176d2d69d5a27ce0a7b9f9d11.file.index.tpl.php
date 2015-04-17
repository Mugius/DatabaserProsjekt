<?php /* Smarty version Smarty-3.1.19, created on 2015-04-17 12:19:07
         compiled from "C:\wamp\www\databaser\DatabaserProsjekt\smarty\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21398552fbaa464d2d2-38091434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaae9197ef2a871176d2d69d5a27ce0a7b9f9d11' => 
    array (
      0 => 'C:\\wamp\\www\\databaser\\DatabaserProsjekt\\smarty\\templates\\index.tpl',
      1 => 1429265943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21398552fbaa464d2d2-38091434',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552fbaa46de829_02740335',
  'variables' => 
  array (
    'page_info' => 0,
    'page_errors' => 0,
    'error' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552fbaa46de829_02740335')) {function content_552fbaa46de829_02740335($_smarty_tpl) {?><html>
<head>
    <title>[Databaser] Avtalebok</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
    <div id="header">
        <h1>[Databaser] Avtalebok <small>Adam og Damien</small></h1>
    </div>

    <div class="col-md-8">
       

        
        <?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>
        <div class="alert alert-info" role="alert">
            <p><?php echo $_smarty_tpl->tpl_vars['page_info']->value;?>
</p>
        </div>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['page_errors']->value) {?>
        <div class="alert alert-danger" role="alert">
            <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
            <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
            <?php } ?>
        </div>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['page']->value) {?>                
            <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['page']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("main_page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>


    </div>
</body>
</html>
<?php }} ?>
