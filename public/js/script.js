$(function () {
  $(".editBuku").on("click", function () {
    $("#judulModal").html("Update Data");
    $(".modal-footer button[type=submit]").html("Update Buku");
    $(".modal-body form").attr(
      "action",
      "http://localhost/praktekmvc1/public/buku/update"
    );
    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/praktekmvc1/public/buku/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        console.log(data);
        $("#judul").val(data.judul);
        $("#kode").val(data.kode_buku);
        $("#pengarang").val(data.pengarang);
        $("#penerbit").val(data.penerbit);
        $("#tahun").val(data.tahun_terbit);
      },
    });
  });
});
