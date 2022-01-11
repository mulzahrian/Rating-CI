<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function addLog($jenis_aksi, $keterangan, $pengguna) {
    $CI = get_instance();

    $pengguna_id = NULL;
    $pelamar_id = NULL;
    $tanggal = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'];

    if ($pengguna == 'administrator') {
        $pengguna_id = decrypt($CI->session->userdata('pengguna_id'));
        $dataInsert = array(
            'pengguna_id' => $pengguna_id,
            'pelamar_id' => null,
            'waktu' => $tanggal,
            'jenis_log' => $jenis_aksi,
            'deskripsi' => $keterangan,
            'status' => 1,
            'ip_addr' => $ip,
        );
        
    } else if ($pengguna == 'pelamar') {
        $pelamar_id = decrypt($CI->session->userdata('pelamar_id'));
        $dataInsert = array(
            'pelamar_id' => $pelamar_id,
            'pengguna_id' => null,
            'waktu' => $tanggal,
            'jenis_log' => $jenis_aksi,
            'deskripsi' => $keterangan,
            'status' => 1,
            'ip_addr' => $ip,
        );
    }

    $CI->Md_log->addLog($dataInsert);
}
?>