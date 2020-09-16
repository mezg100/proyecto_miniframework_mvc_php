<?php

//models//categoria.php

class Categoria extends Model{

	//devuelve todas las cateogiras
	public function getCategorias(){
			$this->db->query("SELECT *
								FROM categorias ");
			if( $this->db->numRows() > 0 ) return $this->db->fetchAll();
			return null;
	}

	//devuelve categoria
	public function getCategoria($categoria_id){
		if(!ctype_digit($categoria_id)) throw new validacionException("Error1-Categoria");
		if($categoria_id < 1) throw new validacionException("Error2-Categoria");

		$this->db->query("SELECT * 
							FROM categorias 
							WHERE categoria_id =" . $categoria_id . " LIMIT 1" );

		if( $this->db->numRows() != 1 ) throw new validacionException("Error3-Categoria");

		return $this->db->fetch();
	}

}

?>
