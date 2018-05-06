<?php

class ControllerForm {

    private $uiForm;
    private $uiHasil;
    private $modelFak;

    public function getForm(){
        $this->uiForm = new ViewForm();
        $this->uiForm->tampilForm();
    }

    public function getHasil(){
        $this->modelFak = new ModelFakultas();
        $fakultas = $this->modelFak->fakRandom();

        $this->uiHasil = new ViewForm();
        $this->uiHasil->tampilHasil($fakultas);
    }

}
