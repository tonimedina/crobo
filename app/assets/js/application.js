;(function() {
  var navigation = function() {
    var navbarTrigger = $('#navigation .btn-trigger');
    var navbar        = $('#navigation .navbar-nav');

    navbarTrigger.on('click', function() {
      navbar.fadeToggle(300).toggleClass('hidden-xs hidden-sm');
    });
  }

  var search = function() {
    var searchForm  = $('#search-form');
    var searchInput = searchForm.find('input');
    var listItems   = $('.widget .widget-content > ul > li[data-title]');

    searchForm.hide().removeClass('hidden'); // FadeToggle effect

    // Search button was clicked
    $('.btn-search').on('click', function(e) {
      e.preventDefault();

      searchForm.fadeToggle(300); // Fade in-out
      searchInput.val(''); // Clear the search input field
      listItems.animate({opacity: 1}); // Reset the items opacity
    });

    // Typing
    searchInput.on('keyup', function() {
      var $this = $(this);

      // If input is not empty
      if ($this.val().length > 0) {
        listItems.filter(function() {
          var self = $(this);

          // If match occurs
          if (self.text().toUpperCase().match($this.val().toUpperCase())) {
            self.animate({opacity: 1}); // Set the opacity to 100%
          } else {
            self.animate({opacity: .3}); // Set the opacity to 30%
          }
        });
      } else {
        listItems.animate({opacity: 1}); // Reset the items opacity
      }
    });
  }

  var article = function() {
    var listItems = $('.widget .widget-content > ul > li');
    var listItemsAnchors = listItems.find('a');

    $('.article').hide().removeClass('hidden'); // FadeToggle effect

    listItemsAnchors.on('click', function(e) {
      var $this = $(this);

      e.preventDefault();

      $this.parents('li').find('.article').fadeIn(300); // Fade in the clicked article

      // Close button clicked
      $(document).on('click', '.btn-close', function() {
        $('.article').fadeOut(300); // Fade out the article
      });
    });
  }

  $(document).on('ready', navigation);
  $(document).on('ready', search);
  $(document).on('ready', article);
})(jQuery);
