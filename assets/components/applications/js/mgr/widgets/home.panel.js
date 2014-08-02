applications.panel.Home = function(config) {
	config = config || {};
	Ext.apply(config,{
		border: false
		,baseCls: 'modx-formpanel'
		,items: [{
			html: '<h2>'+_('applications')+'</h2>'
			,border: false
			,cls: 'modx-page-header container'
		},{
			xtype: 'modx-tabs'
			,bodyStyle: 'padding: 10px'
			,defaults: { border: false ,autoHeight: true }
			,border: true
			,activeItem: 0
			,hideMode: 'offsets'
			,items: [{
				title: _('applications_items')
				,items: [{
					html: _('applications_intro_msg')
					,border: false
					,bodyCssClass: 'panel-desc'
					,bodyStyle: 'margin-bottom: 10px'
				},{
					xtype: 'applications-grid-items'
					,preventRender: true
				}]
			}]
		}]
	});
	applications.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(applications.panel.Home,MODx.Panel);
Ext.reg('applications-panel-home',applications.panel.Home);
