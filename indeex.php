<?php
// Mengatur zona waktu Indonesia
date_default_timezone_set("Asia/Jakarta");

// Menentukan hari dalam bahasa Indonesia
$hari = date("l");

switch ($hari) {
    case "Monday":
        $hari = "Senin";
        break;

    case "Tuesday":
        $hari = "Selasa";
        break;

    case "Wednesday":
        $hari = "Rabu";
        break;

    case "Thursday":
        $hari = "Kamis";
        break;

    case "Friday":
        $hari = "Jumat";
        break;

    case "Saturday":
        $hari = "Sabtu";
        break;

    case "Sunday":
        $hari = "Minggu";
        break;
}

// Menentukan bulan dalam bahasa Indonesia
$bulan = date("F");

switch ($bulan) {
    case "January":
        $bulan = "Januari";
        break;

    case "February":
        $bulan = "Februari";
        break;

    case "March":
        $bulan = "Maret";
        break;

    case "April":
        $bulan = "April";
        break;

    case "May":
        $bulan = "Mei";
        break;

    case "June":
        $bulan = "Juni";
        break;

    case "July":
        $bulan = "Juli";
        break;

    case "August":
        $bulan = "Agustus";
        break;

    case "September":
        $bulan = "September";
        break;

    case "October":
        $bulan = "Oktober";
        break;

    case "November":
        $bulan = "November";
        break;

    case "December":
        $bulan = "Desember";
        break;
}

// Menampilkan tanggal lengkap
$tanggal = date("d");
$tahun = date("Y");

// Output di tengah
echo "<h2 style='text-align:center;'>Hari ini $hari</h2>";
echo "<h3 style='text-align:center;'>$tanggal $bulan $tahun</h3>";
?>