<?php
class Dilemas extends CI_Controller
{
    public function index()
    {
        $this->load->view('form-input-dilemas');
    }

    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'kelas' => $this->input->post('kelas'),
            'tmptlhr' => $this->input->post('tmptlhr'),
            'tgllhr' => $this->input->post('tgllhr'),
            'alamat' => $this->input->post('alamat'),
            'jeniskel' => $this->input->post('jeniskel'),
            'agama' => $this->input->post('agama'),
        ];
        $this->load->view('form-output-dilemas', $data);
    }
}
