<?php
/* Smarty version 3.1.31, created on 2018-04-25 18:41:19
  from "/mnt/sdb1/quo-group/manager/templates/default/element/tv/renders/input/radio.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ae0cbcfd6a7c6_90911172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee00ff32a0a872faa3aa39950c9041436e51cef8' => 
    array (
      0 => '/mnt/sdb1/quo-group/manager/templates/default/element/tv/renders/input/radio.tpl',
      1 => 1524504509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae0cbcfd6a7c6_90911172 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
-cb"></div>

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'radiogroup'
        ,id: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,vertical: true
        ,columns: <?php if ($_smarty_tpl->tpl_vars['params']->value['columns']) {
echo $_smarty_tpl->tpl_vars['params']->value['columns'];
} else { ?>1<?php }?>
        ,renderTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
-cb'
        ,width: '99%'
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
        ,hideMode: 'offsets'
        ,msgTarget: 'under'

        ,items: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opts']->value, 'item', false, 'k', 'cbs', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_cbs']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_cbs']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_cbs']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_cbs']->value['total'];
?>
        {
            name: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
            ,id: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
'
            ,boxLabel: '<?php echo strtr($_smarty_tpl->tpl_vars['item']->value['text'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
            ,checked: <?php if ($_smarty_tpl->tpl_vars['item']->value['checked']) {?>true<?php } else { ?>false<?php }?>
            ,inputValue: <?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>

            ,value: <?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>


            ,listeners: { 'check': MODx.fireResourceFormChange }

        }<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_cbs']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cbs']->value['last'] : null)) {?>,<?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
]
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});
// ]]>
<?php echo '</script'; ?>
>
<?php }
}
