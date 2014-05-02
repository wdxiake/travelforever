<?php /* Smarty version Smarty-3.1.18, created on 2014-04-26 13:24:07
         compiled from "application\views\templates\groups\groups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20353535bb29b281939-76034501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63aea95cfbb16bea33d77b093ea6af6a6deaf0cf' => 
    array (
      0 => 'application\\views\\templates\\groups\\groups.tpl',
      1 => 1398518629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20353535bb29b281939-76034501',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_535bb29b2cd559_00349914',
  'variables' => 
  array (
    'groups' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535bb29b2cd559_00349914')) {function content_535bb29b2cd559_00349914($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
    <div class="middle-item">
        <div class="middle-item-img">
            <img src="<?php echo $_smarty_tpl->tpl_vars['group']->value['image_url'];?>
" width="357" height="200"/>
        </div>
        <div class="middle-item-desc">
            <a class="item-desc-name" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['group']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['product_name'];?>
</a>
            <p class="item-desc-content">
                <?php echo $_smarty_tpl->tpl_vars['group']->value['product_summary'];?>

            </p>
            <span class="item-desc-price"><?php echo $_smarty_tpl->tpl_vars['group']->value['current_price'];?>
</span>元起<span class="item-desc-privilege">原价 : <?php echo $_smarty_tpl->tpl_vars['group']->value['market_price'];?>
元</span>
            <a href="<?php echo $_smarty_tpl->tpl_vars['group']->value['url'];?>
" target="_blank" class="item-desc-url">查看详情</a>
        </div>
    </div>
<?php } ?><?php }} ?>
