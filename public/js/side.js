$(document).ready(function () {

  $('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });

  $('#myModal').on('shown.bs.modal', function (e) {
    $('#myModalLabel').focus()
  })



});