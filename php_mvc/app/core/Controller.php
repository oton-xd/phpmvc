<?php

class Controller {
    public function view($view, $data = []){
        require_once "../app/view/" . $view . '.php';
    }

    public function model($model){
        require_once "../app/models/" . $model . ".php";
        return new $model;
    }

    public function tambah()
    {
        if( $this->model('Siswa_model')->tambahDatasiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'succes');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }
}