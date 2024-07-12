$(function () {
  $(".tombolTambah").on("click", function () {
    $("#judulModalTambah").html("Tambah Data");
    $(".modal-footer button[type=submit]").html("tambah data");
    $("#judul").val("");
    $("#kode").val("");
    $("#pengarang").val("");
    $("#penerbit").val("");
    $("#tahun").val("");
  });

  $(".editBuku").on("click", function () {
    $("#judulModalTambah").html("Update Data");
    $(".modal-footer button[type=submit]").html("ubah data");
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
        $("#nama").val(data.nama);
        $("#absen").val(data.absen);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
});
