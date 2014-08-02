var applications = function(config) {
	config = config || {};
	applications.superclass.constructor.call(this,config);
};
Ext.extend(applications,Ext.Component,{
	page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {},view: {}
});
Ext.reg('applications',applications);

applications = new applications();