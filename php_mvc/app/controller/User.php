<?php
class User extends Controller{
    public function index(){
        $data['judul'] = "User";
        $this->view("templates/header", $data);
        $this->view("user/index");
        $this->view("templates/footer");
        // echo "User/index";
    }
    public function profile ($nama = "Erixs", $pekerjaan = "Pelajar") {
        $data['judul'] = "User";
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $this->view('templates/header', $data);
        $this->view('user/profile', $data); 
        $this->view('templates/footer');

        // echo "Salam kenal saya $nama, saya seorang $pekerjaan";
    }
}