$(document).ready(function () {
  $('a[href*="#"]:not([href="#"])').click(function () {
    var offset = -50; // <-- change the value here
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top + offset
        }, 1000);
        return false;
      }
    }
  });

  sal();

})

$("#formContactUs").submit(function (e) {
  e.preventDefault();
  $.ajax({
    type: 'post',
    url: '/php/api.php',
    data: $('#formContactUs').serialize(),
    success: function (res) {
      if (res.includes("success")) {
        location.href = "/success.php";
      } else {
        location.href = "/error.php";
      }
    },
    error: function (err) {
      location.href = "/error.php";
      console.log(err);
    }
  });
})

$("#formSubscribe").submit(function (e) {
  e.preventDefault();
  $.ajax({
    type: 'post',
    url: '/php/api.php',
    data: $('#formSubscribe').serialize(),
    success: function (res) {
      console.log(res);
      if (res.includes("success")) {
        location.href = "/success.php";
      } else {
        location.href = "/error.php";
      }
    },
    error: function (err) {
      location.href = "/error.php";
      console.log(err);
    }
  });
})