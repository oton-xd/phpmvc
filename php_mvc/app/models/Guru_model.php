<?php
class Guru_model
{
    private $guru = [[
        "penulis" => "Fikrotu Dwi Fuadatuzzahro, S.Pd.",
        "tulisan" => "Pemrograman Web dan Perangkat Bergerak"
    ],
    [
        "penulis" => "Estri Handayani, S.Pd",
        "tulisan" => "Pemrograman Berorientasi Objek"
    ],
    [
        "penulis" => "Ivans Zuwanta, S.Kom",
        "tulisan" => "Basis Data"
    ]
    ];
    public function getAllGuru()
    {
        return $this->guru;
    }
}