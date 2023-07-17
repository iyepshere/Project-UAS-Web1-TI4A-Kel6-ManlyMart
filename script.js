// Menghapus item dari keranjang
var deleteButtons = document.getElementsByClassName("hapus");
for (var i = 0; i < deleteButtons.length; i++) {
  var button = deleteButtons[i];
  button.addEventListener("click", function() {
    var row = this.parentNode.parentNode;
    row.parentNode.removeChild(row);
  });
}
