$(document).ready(function () {
  $("#start").on("click", () => {
    $("#start").css("display", "none");
    $.ajax({
      url: "service.php",
      type: "GET",
      beforeSend: () => {
        $("#loading").css("display", "block");
      },
      success: (s) => {
        $("ul").append(s);       
        Swal.fire({
          icon: "success",
          title: "Sucesso!",
          text: "Processo completo.",
          footer: "<strong>Status: " + s + "</strong>",
        });
      },
      error: (r) => {
        $("ul").append(r);
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Algo de errado aconteceu!",
          footer: "<strong>Status: " + r.responseText + "</strong>",
        });
      },
      complete: () => {
        $("#loading").css("display", "none");
        $("#start").css("display", "block");
      },
    }); //ajax
  }); //click
}); //document
