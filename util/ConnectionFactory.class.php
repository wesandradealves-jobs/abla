<?php



/***********************************************************************

 * Classe:  ConnectionFactory.php

 * 

 * Objetivo: Definir a Classe ConnectionFactory

 ***********************************************************************/

 

class ConnectionFactory{



    static private $instance;

    public $conn;

   

    private function __construct() 

    {

    	

        $this->conn = mssql_connect('187.11.238.201', 'AblaProd', 'txt#sg21@abla');

        

        if (!$this->conn) {

            die('N&atilde;o foi possível conectar ao Banco de Dados: ' . mssql_error()."<br><br>");

        }



        $db_selected = mssql_select_db('AblaProd', $this->conn);



        if (!$db_selected) {

            die ('N&atilde;o foi possível selecionar a Base de Dados : ' . mssql_error());

        }

    }



    

    static public function singleton() 

    {

        if (!isset(self::$instance)) {

            self::$instance = new ConnectionFactory();

        }



        return self::$instance;

    }

	

}



?>

