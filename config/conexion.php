<?php
    session_start();

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=enlaces_helpdesk","root","");
            } catch (Exception $e) {
                print "!Error DB¡: " . $e->getMessage(). "<br/>";
                die()
            }

        }
        public function set_name(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
        public function ruta(){
            return "http://localhost/helpdesk/"
        }
    }

?>