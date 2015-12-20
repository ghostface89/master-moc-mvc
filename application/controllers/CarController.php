<?php

class CarController extends Controller
{

    public function index(){
        $aData = array();
        $oOils = new Car();
        $aCars = $oOils->RetrieveAll();
        $aData['aCars'] = $aCars;
        $this->set('aCars',$aData['aCars']);
    }

}