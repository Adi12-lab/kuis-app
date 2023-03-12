$(document).ready(function() {
  $("#checkbox").click(function() {
    $(".card").each(function(i, item) {
      if (!$(item).hasClass("approved")) {
        $(item).toggleClass("cencored");
      }
    })
  })
  Livewire.on("Alert", function(icon, judul, pesan) {
    Swal.fire({
      icon: icon,
      title: judul,
      text: pesan
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        window.location.reload();
      }
    });
  });
});