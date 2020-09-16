<?php

session_start();

class Login extends Model {

	public function iniciar( $email , $password ){
		if( strlen($email) < 8 )  throw new validacionException("Error1-Login");
		if( strlen($email) > 200)  throw new validacionException("Error2-login");
		if( strpos($email ,"@") == false ) throw new validacionException("Error3-Login");
		$this->db->escape($email);

		if( strlen($password) < 5 )  throw new validacionException("Error4-Login");
		if( strlen($password) > 40)  throw new validacionException("Error5-Login");
		$this->db->escape($password);
		$u_password =sha1($password);

		$this->db->query("SELECT *
								FROM usuarios
								WHERE email = '$email' AND password = '$u_password' LIMIT 1 ");

		if( $this->db->numRows() == 1 ){
			$_SESSION['logueado'] = true;
			$datos = $this->db->fetch();
			$_SESSION['nombre'] = $datos['nombre'];
			return true;
		}
		return false;	
	}

	public static function loginTrue(){
		if( !isset($_SESSION['logueado']))header("Location: home");
	}

}


?>