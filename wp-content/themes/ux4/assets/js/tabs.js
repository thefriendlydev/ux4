window.UXTabs = function() {
  return {
    activeTab: null,
    tabNav: null,
    tabContent: null,

    init: function(tabNav) {
      this.tabNav = tabNav;
      this.tabContent = $(tabNav).data('tab-content');
      if($(tabNav).data('tab-default')) {
        this.setActiveTab($(tabNav).data('tab-default'));
      }
      $(tabNav).on('click', 'li', this.onclick.bind(this));
    },

    onclick: function(e) {
      var tab = $(e.currentTarget).data('tab');
      e.preventDefault();
      if(tab !== this.activeTab) {
        this.setActiveTab(tab);
      } else {

      }
    },

    setActiveTab: function(tab) {
      this.activeTab = tab
      $(this.tabNav).find('li').removeClass('active');
      $(this.tabNav).find('[data-tab="' + tab + '"]').addClass('active');
      $(this.tabContent).find('[data-tab-filter]').each(function(index, el) {
        if($(el).data('tab-filter') !== tab) {
          $(el).hide();
        }else{
          $(el).show();
        }
      });
    }
  };
};


$(document).ready(function() {
  UXTabs().init('.ux-tabs');
});
