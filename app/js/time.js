$('.datetimepicker').datetimepicker({
    viewMode: 'years',
    format: 'MM/DD/YYYY',
    inline: true,
    sideBySide: true,
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
    }
});
$(function() {
    $('#datetimepicker2').datetimepicker({
              language: 'pt-BR'
      });
  });
  