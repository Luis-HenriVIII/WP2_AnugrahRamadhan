<?php
class Latihan1 extends CI_Controller
{
 public function index()
 {
 echo "Selamat Datang.. selamat belajar";
 }
 public function penjumlahan($n1, $n2)
 {
 $this->load->model('Model_latihan1');
 $hasil = $this->Model>contoh2($n1, $n2);
 echo "Hasil Penjumlahan dari". $n1 ." + ". $n2 ." = "
.$hasil;
 }
}