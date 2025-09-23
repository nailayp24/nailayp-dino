<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        // Nama
        $data['name'] = 'Naila Yohanda Putri';

        // Hitung umur
        $tgl_lahir = date_create('2006-06-02');
        $today = date_create(date('Y-m-d'));
        $umur = date_diff($tgl_lahir, $today)->y;
        $data['my_age'] = $umur;

        // Hobi
        $data['hobbies'] = ['Berenang', 'Membaca', 'Memasak', 'Menari', 'Melukis'];

        // Tanggal harus wisuda
        $tglWisuda = '2028-09-05';
        $data['tgl_harus_wisuda'] = $tglWisuda;

        // Jarak hari ke wisuda
        $tglWisudaTime = strtotime($tglWisuda);
        $todayTime = strtotime(date('Y-m-d'));
        $selisihHari = round(($tglWisudaTime - $todayTime) / (60 * 60 * 24));
        $data['time_to_study_left'] = $selisihHari;

        // Semester
        $data['current_semester'] = 3;

        // Info semester
        if ($data['current_semester'] < 2) {
            $data['semester_info'] = 'Masih Awal, Kejar TAK!';
        } else {
            $data['semester_info'] = 'Jangan main-main, kurang-kurangi main game!';
        }

        // Cita-cita
        $data['future_goal'] = 'Data Analyst!';

        return view('pegawai', $data);
    }
}
