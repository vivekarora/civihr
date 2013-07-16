CRM.HRApp.module('JobTabApp.General', function(General, HRApp, Backbone, Marionette, $, _){
  General.EditView = Marionette.ItemView.extend({
    template: '#hrjob-general-template',
    templateHelpers: function() {
      return {
        'RenderUtil': CRM.HRApp.RenderUtil,
        'FieldOptions': CRM.FieldOptions.HRJob
      };
    },
    initialize: function() {
      CRM.HRApp.Common.mbind(this);
    },
    onRender: function() {
      this.$('.crm-contact-selector').crmContactField();
    }
  });
});
