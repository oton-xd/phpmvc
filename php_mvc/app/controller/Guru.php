<?php 

class Guru extends Controller {
    public function index(){
        $data['judul'] = "Data Guru";
        $data['guru'] = $this->model("Guru_model")->getAllGuru();
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }
}