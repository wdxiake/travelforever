<?php /* Smarty version Smarty-3.1.18, created on 2014-05-02 10:09:13
         compiled from "application\views\templates\groups\title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28520535bb29b2636b6-91179417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '909739861910e635a14db0c414d5091c196914fa' => 
    array (
      0 => 'application\\views\\templates\\groups\\title.tpl',
      1 => 1399025350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28520535bb29b2636b6-91179417',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_535bb29b26a8a4_56754350',
  'variables' => 
  array (
    'cityInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535bb29b26a8a4_56754350')) {function content_535bb29b26a8a4_56754350($_smarty_tpl) {?><div class="middle-title">
    <span class="middle-title-chufa">出发：<?php echo $_smarty_tpl->tpl_vars['cityInfo']->value['from_city_str'];?>
</span>--<span class="middle-title-mudi">目的地：<?php echo $_smarty_tpl->tpl_vars['cityInfo']->value['to_city_str'];?>
</span>
    <div class="middle-title-order">
        排序:
        <a href="#" class="selected">默认</a>
        <a href="#">价格</a>
        <a href="#">热卖</a>
    </div>
</div><?php }} ?>
