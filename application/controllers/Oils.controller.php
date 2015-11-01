<?php
class OilController extends Controller {
    public function  Oils(){

        $aOils = Oil::RetrieveAll();


    }
}