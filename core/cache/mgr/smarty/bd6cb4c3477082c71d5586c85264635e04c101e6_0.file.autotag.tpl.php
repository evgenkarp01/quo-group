<?php
/* Smarty version 3.1.31, created on 2018-04-27 07:57:00
  from "/mnt/sdb1/quo-group/manager/templates/default/element/tv/renders/inputproperties/autotag.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ae2d7cc259131_11859473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd6cb4c3477082c71d5586c85264635e04c101e6' => 
    array (
      0 => '/mnt/sdb1/quo-group/manager/templates/default/element/tv/renders/inputproperties/autotag.tpl',
      1 => 1524551568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae2d7cc259131_11859473 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="tv-input-properties-form<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
"></div>


<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[
var params = {
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value, 'v', false, 'k', 'p', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['total'];
?>
 '<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
': '<?php echo strtr($_smarty_tpl->tpl_vars['v']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['last'] : null)) {?>,<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

};
var oc = {'change':{fn:function(){Ext.getCmp('modx-panel-tv').markDirty();},scope:this}};
MODx.load({
    xtype: 'panel'
    ,layout: 'form'
    ,autoHeight: true
    ,cls: 'form-with-labels'
    ,labelAlign: 'top'
    ,border: false
    ,items: [{
        xtype: 'combo-boolean'
        ,fieldLabel: _('required')
        ,description: MODx.expandHelp ? '' : _('required_desc')
        ,name: 'inopt_allowBlank'
        ,hiddenName: 'inopt_allowBlank'
        ,id: 'inopt_allowBlank<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['allowBlank'] == 0 || params['allowBlank'] == 'false' ? false : true
        ,width: 200
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_allowBlank<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,html: _('required_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'textfield'
        ,fieldLabel: _('parent_resources')
        ,description: MODx.expandHelp ? '' : _('parent_resources_desc')
        ,name: 'inopt_parent_resources'
        ,id: 'inopt_parent_resources<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['parent_resources'] || ''
        ,anchor: '100%'
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_parent_resources<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,html: _('parent_resources_desc')
        ,cls: 'desc-under'
    }]
    ,renderTo: 'tv-input-properties-form<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
});
// ]]>
<?php echo '</script'; ?>
>

<?php }
}
