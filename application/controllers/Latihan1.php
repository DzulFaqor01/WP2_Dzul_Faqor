<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "tambahkan fungsi penjumlahan/perkalian yang tersedia ";
        echo "contoh : localhost/pustaka-booking/Latihan1/penjumlahan/2/6";
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('ModelLatihan1');
        $hasil = $this->ModelLatihan1->jumlah($n1, $n2);
        echo "Hasil Penjumlahan dari " . $n1 . " + " . $n2 . " = "
            . $hasil;

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->ModelLatihan1->jumlah($n1, $n2);
        $this->load->view('view-latihan1', $data);
    }

    public function perkalian($n1, $n2)
    {
        $this->load->model('ModelLatihan1');
        $hasil = $this->ModelLatihan1->kali($n1, $n2);
        echo "Hasil Perkalian dari " . $n1 . " * " . $n2 . " = "
            . $hasil;
    }
}
