// https://codepen.io/chucky25/pen/dBevXW

/* Dengan Rupiah */
let dengan_rupiah = document.getElementById("ekspektasi-gaji");
dengan_rupiah.addEventListener("keyup", function (e) {
    dengan_rupiah.value = formatRupiah(this.value, "Rp. ");
});
let dengan_rupiah1 = document.getElementById("gaji-1");
dengan_rupiah1.addEventListener("keyup", function (e) {
    dengan_rupiah1.value = formatRupiah(this.value, "Rp. ");
});
let dengan_rupiah2 = document.getElementById("gaji-2");
dengan_rupiah2.addEventListener("keyup", function (e) {
    dengan_rupiah2.value = formatRupiah(this.value, "Rp. ");
});
let dengan_rupiah3 = document.getElementById("gaji-3");
dengan_rupiah3.addEventListener("keyup", function (e) {
    dengan_rupiah3.value = formatRupiah(this.value, "Rp. ");
});

/* Fungsi */
function formatRupiah(angka, prefix) {
    let number_string = angka.replace(/[^,\d]/g, "").toString(),
        split = number_string.split(","),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    if (ribuan) {
        separator = sisa ? "." : "";
        rupiah += separator + ribuan.join(".");
    }

    rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
    return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}
