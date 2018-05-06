<?php

class ModelFakultas {

    public function fakRandom(){
        $arrFak = array('Ilmu Komputer', 'Ilmu Administrasi', 'Kedokteran', 'Hukum', 'Teknik', 'Ekonomi dan Bisnis');
        $rand = $arrFak[ rand(0, count($arrFak)-1) ];
        return $rand;
    }
}
