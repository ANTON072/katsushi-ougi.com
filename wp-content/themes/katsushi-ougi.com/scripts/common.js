(function() {

  // ページネーション
  $('select[name=page-select]').change(function() {
    var target = $(this).val();
    window.location.href = target;
  });

})();