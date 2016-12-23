window.UXTabs = function() {
  return {
    activeTab: null,
    activeIndustry: null,
    tabNav: null,
    tabContent: null,
    allowEmpty: true,

    init: function(tabNav) {
      this.tabNav = tabNav;
      this.tabContent = $(tabNav).data('tab-content');
      if($(tabNav).data('tab-allow-empty') === false) {
        this.allowEmpty = false;
      }
      if($(tabNav).data('tab-default')) {
        this.setActiveTab($(tabNav).data('tab-default'));
      }
      $(tabNav).on('click', 'li', this.onclick.bind(this));

      if (this.activeTab === null) {
        $(".uxTab--all").addClass('active')
      }

      var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
      }

      var filter = getUrlParameter('filter')

      if (filter === 'application' || filter === 'website' || filter === 'consulting') {
        this.setActiveTab(filter);
      }
    },

    onclick: function(e) {
      e.preventDefault();
      var tab = $(e.currentTarget).data('tab');
      var tabIndustry = $(e.currentTarget).data('industry');


      if (tab === 'all') {
        this.setActiveTab(null);
      } else if (tab === undefined) {
        if (tabIndustry !== this.activeIndustry) {
          this.setActiveIndustry(tabIndustry)
        } else {
          this.setActiveIndustry(null)
        }
      } else if(tab !== this.activeTab) {
        this.setActiveTab(tab);
        this.setActiveIndustry(null)
      }
      else {
        if(this.allowEmpty) {
          this.setActiveTab(null);
          this.setActiveIndustry(null)
        }
      }

      if (this.activeTab === null) {
        $(".uxTab--all").addClass('active')
      }
    },

    setActiveTab: function(tab) {
      this.activeTab = tab
      $(this.tabNav).find('li').removeClass('active');
      $(this.tabNav).find('[data-tab="' + tab + '"]').addClass('active');
      // this.activeClients();
      $(this.tabContent).find('[data-tab-filter]').each(function(index, el) {
        var categories = $(el).data('tab-filter').trim().split(' ');
        if(categories.indexOf(tab) === -1 && tab !== null) {
          $(el).hide();
        }else{
          $(el).show();
        }
      });

      if (tab === null) {
        $('.industryTabs').show()
      } else {
        $('.industryTabs').hide()
      }
    },

    setActiveIndustry: function (tabIndustry) {
      this.activeIndustry = tabIndustry
      $(this.tabNav).find('li.uxTab--secondary').removeClass('active');
      $(this.tabNav).find('[data-industry="' + tabIndustry + '"]').addClass('active');

      $(this.tabContent).find('[data-tab-industry]').each(function(index, el) {
        var categories = $(el).data('tab-industry').trim().split(' ');
        if(categories.indexOf(tabIndustry) === -1 && tabIndustry !== null) {
          $(el).hide();
        }else{
          $(el).show();
        }
      });
    },

    activeClients: function() {
      var activeTab = this.activeTab;
      var activeIndustry = this.activeIndustry;
      $(this.tabContent).find('..').each(function(index, el) {
        // if the element has a indsutry or filter that is active, show it, otherwise hide it.
      });
    }

  };
};


$(document).ready(function() {
  UXTabs().init('.ux-tabs');
});
