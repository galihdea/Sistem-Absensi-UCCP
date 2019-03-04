<?php
function tanggal_indo($tanggal)
{
    $bulan = array (1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $split = explode('-', $tanggal);
    return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
}

function tanggal_balik_semula($range_tanggal){
    $new_range = explode("(", $range_tanggal);
    $new_range2 = substr($new_range[1], 0, -1);
    $new_range3 = explode(" - ", $new_range2);
    $tanggal1 = $new_range3[0];
    $tanggal2 = $new_range3[1];
    $pisah_tanggal1 = explode(" ", $tanggal1);
    $hari1 = $pisah_tanggal1[0];
    $bulan1 = $pisah_tanggal1[1];
    switch ($bulan1) {
        case 'Januari':
            $bulan1 = "01";
            break;
        
        case 'Februari':
            $bulan1 = "02";
            break;

        case 'Maret':
            $bulan1 = "03";
            break;

        case 'April':
            $bulan1 = "04";
            break;

        case 'Mei':
            $bulan1 = "05";
            break;
        
        case 'Juni':
            $bulan1 = "06";
            break;

        case 'Juli':
            $bulan1 = "07";
            break;

        case 'Agustus':
            $bulan1 = "08";
            break;

        case 'September':
            $bulan1 = "09";
            break;

        case 'Oktober':
            $bulan1 = "10";
            break;

        case 'November':
            $bulan1 = "11";
            break;

        case 'Desember':
            $bulan1 = "12";
            break;
    }
    $tahun1 = $pisah_tanggal1[2];
    $tanggal1_baru = $bulan1."/".$hari1."/".$tahun1;
    $pisah_tanggal2 = explode(" ", $tanggal2);
    $hari2 = $pisah_tanggal2[0];
    $bulan2 = $pisah_tanggal2[1];
    switch ($bulan2) {
        case 'Januari':
            $bulan2 = "01";
            break;
        
        case 'Februari':
            $bulan2 = "02";
            break;

        case 'Maret':
            $bulan2 = "03";
            break;

        case 'April':
            $bulan2 = "04";
            break;

        case 'Mei':
            $bulan2 = "05";
            break;
        
        case 'Juni':
            $bulan2 = "06";
            break;

        case 'Juli':
            $bulan2 = "07";
            break;

        case 'Agustus':
            $bulan2 = "08";
            break;

        case 'September':
            $bulan2 = "09";
            break;

        case 'Oktober':
            $bulan2 = "10";
            break;

        case 'November':
            $bulan2 = "11";
            break;

        case 'Desember':
            $bulan2 = "12";
            break;
    }
    $tahun2 = $pisah_tanggal2[2];
    $tanggal2_baru = $bulan2."/".$hari2."/".$tahun2;
    return $tanggal1_baru." - ".$tanggal2_baru;
    /*$new_range = substr($range_tanggal, 0,-1);
    $new_range = explode(" - ", $new_range);
    $tanggal1 = $new_range[0];
    $tanggal2 = $new_range[1];*/

}

function tanggal_semula_1($tanggal){
    $tgl_ttl = explode(" - ", $tanggal);  
    return $tgl_ttl[0];
}

function tanggal_semula_2($tanggal){
    $tgl_ttl = explode(" - ", $tanggal);  
    return $tgl_ttl[1];
}

?>