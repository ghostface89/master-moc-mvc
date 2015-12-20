<?php
 class Car extends Model {

     public function __construct(){
         parent::__construct();

     }

        public function  RetrieveAll(){
            $aCarsModelYrars = array();
            $query = 'select * from vehiclemodelyear vmy where vmy.year IN(2002,2003,2004)';

            $aCarsModelYrars = $this->query($query, $this->_dbHandle);

            return $aCarsModelYrars;
        }

         public function RetrieveById(){



         }

        public function RetriveByFilter(){


        }


 }