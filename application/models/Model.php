<?php

class Model extends SQLQuery {
    protected $_model;

    function __construct() {
        $this->connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) || die('mysql connection error');
        $this->_model = get_class($this);
        $this->_table = strtolower($this->_model) . "s" ;
    }
    function __destruct() {

    }
}