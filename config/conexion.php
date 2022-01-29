<?php
    session_start();

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
                //Local
				//$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=andercode_helpdesk1","root","");
                //Produccion
                $conectar = $this->dbh = new PDO("mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_d73cf45d77aedf5","baccff5f422037","1193aa55");
				return $conectar;
			} catch (Exception $e) {
				print "¡Error BD!: " . $e->getMessage() . "<br/>";
				die();
			}
        }

        public function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
        }

        public static function ruta(){
            //Local
			//return "http://localhost/github-xampp/PERSONAL_HelpDesk/";
            //Produccion
            return "https://sistema-tickets-helpdesk.herokuapp.com/";
		}

    }
?>