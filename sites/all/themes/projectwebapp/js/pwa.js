(function ($) {
  Drupal.behaviors.pwaMisc = {
    attach: function (context, settings) {
      $('.bef-select-as-links a', context).each(function () {
        $(this).html($(this).html().replace(" Asc", ""));
        $(this).html($(this).html().replace(" Desc", ""));
      });
      $('.bef-select-as-links .form-item', context).each(function () {
        $(this).html($(this).html().replace(" Asc", ""));
        $(this).html($(this).html().replace(" Desc", ""));
      });
    }
  };
})(jQuery);
