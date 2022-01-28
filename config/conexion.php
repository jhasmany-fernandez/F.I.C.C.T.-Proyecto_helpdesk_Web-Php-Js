<?php
    session_start();

    class Conectar{
        protected $dbh;
        protected function Conexion(){
            try {
                //Local
                //$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=helpdeskbd","root","");
                //Produccion
                $conectar = $this->dbh = new PDO("mysql:local=us-cdbr-east-05.cleardb.net;dbname=heroku_d73cf45d77aedf5","baccff5f422037","1193aa55");
                return $conectar;
            } catch(Exception $e){
                print "!Error BD!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        public function ruta(){
            //Local
            //return "http://localhost/github-xampp/F.I.C.C.T.-Proyecto_helpdesk_Web-Php-Js/";
            //Produccion
            return "https://sistema-tickets-helpdesk.herokuapp.com/";

        }
    }
?>