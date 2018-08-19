<!--?php
class Conexion extends mysqli {
	public function__construct(){
		parent::__construct('localhost','root','12345','mvc');
		this->query("SET NAMES 'utf-8'; ");
		this->connect_errnor ? die('Error Con la Conexion') : x$ = 'Conectado';
		$echo $x;	
		unset($x);	
	}
	public function recorrer($x){
		return mysqli_fetch_array($x);
	}
	public function rows($x){
		return mysqli_nun_rows($x);
	}
}
?-->
<?php 
require_once "config.php";

class Modelo
{
    protected $_db;

    public function __construct()
    {
        $this->_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ( $this->_db->connect_errno )
        {
            echo "Fallo al conectar a MySQL: ". $this->_db->connect_error;
            return;    
        }

        $this->_db->set_charset(DB_CHARSET);
    }
}
?> 