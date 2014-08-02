applications.page.Home = function(config) {
	config = config || {};
	Ext.applyIf(config,{
		components: [{
			xtype: 'applications-panel-home'
			,renderTo: 'applications-panel-home-div'
		}]
	}); 
	applications.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(applications.page.Home,MODx.Component);
Ext.reg('applications-page-home',applications.page.Home);