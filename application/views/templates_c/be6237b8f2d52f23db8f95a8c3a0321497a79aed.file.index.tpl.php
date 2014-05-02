<?php /* Smarty version Smarty-3.1.18, created on 2014-05-02 09:16:13
         compiled from "application\views\templates\groups\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15434535bb0f6bb95d0-05085285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be6237b8f2d52f23db8f95a8c3a0321497a79aed' => 
    array (
      0 => 'application\\views\\templates\\groups\\index.tpl',
      1 => 1399022136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15434535bb0f6bb95d0-05085285',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_535bb0f6c3a486_46559290',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535bb0f6c3a486_46559290')) {function content_535bb0f6c3a486_46559290($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("inc/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="content">
    <div id="side-content">
        <?php echo $_smarty_tpl->getSubTemplate ("../left-nav/chufa-content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("../left-nav/mudi-content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("../left-nav/time-content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <div id="middle-content">
        <?php echo $_smarty_tpl->getSubTemplate ("groups/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="middle-items">
            <?php echo $_smarty_tpl->getSubTemplate ("groups/groups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("groups/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <div style="clear:both;"></div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
