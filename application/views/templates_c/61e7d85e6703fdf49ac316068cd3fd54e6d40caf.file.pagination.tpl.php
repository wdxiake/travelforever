<?php /* Smarty version Smarty-3.1.18, created on 2014-05-02 09:43:33
         compiled from "application\views\templates\groups\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29546535cb8bdecb487-17908092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61e7d85e6703fdf49ac316068cd3fd54e6d40caf' => 
    array (
      0 => 'application\\views\\templates\\groups\\pagination.tpl',
      1 => 1399023810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29546535cb8bdecb487-17908092',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_535cb8bded1780_82703141',
  'variables' => 
  array (
    'pageInfo' => 0,
    'cityInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535cb8bded1780_82703141')) {function content_535cb8bded1780_82703141($_smarty_tpl) {?><div id="pagination" class="pagination">
    <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['first']) {?>
        <a class="current prev" href="/page/groups?page=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page']-1;?>
<?php echo $_smarty_tpl->tpl_vars['cityInfo']->value['from_city_url'];?>
<?php echo $_smarty_tpl->tpl_vars['cityInfo']->value['to_city_url'];?>
">上一页</a>
    <?php }?>
    <a class="current"><?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page'];?>
</a>
    <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['last']) {?>
        <a class="current next" href="/page/groups?page=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page']+1;?>
<?php echo $_smarty_tpl->tpl_vars['cityInfo']->value['from_city_url'];?>
<?php echo $_smarty_tpl->tpl_vars['cityInfo']->value['to_city_url'];?>
">下一页</a>
    <?php }?>
</div><?php }} ?>
