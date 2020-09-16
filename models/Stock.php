<?php

//Models/Stock.php

class stock extends Model{


	public function getTodos(){
		$this->db->query("SELECT * FROM stock");
		if( $this->db->numRows() > 0)  return $this->db->fetchAll();
		return null;
	}

	public function obtenerStock($producto_id){
		if( !ctype_digit($producto_id)) throw new validacionException("error1-Stock");
		if( $producto_id < 1 ) throw new validacionException("error2-Stock");

		$this->db->query("SELECT * FROM stock WHERE producto_id = " . $producto_id . " LIMIT 1 ");
		if( $this->db->numRows() == 1 ) return $this->db->fetch();
		return null;
	}

  	public function BuscarProductoStockId($producto_id){
     
	     if(!ctype_digit($producto_id)) throw new validacionException("Error3-Stock");
	     if( $producto_id < 1 ) throw new validacionException("Error4-Stock");
	     $this->db->query("SELECT * FROM stock WHERE producto_id = " . $producto_id . " LIMIT 1 ");
	     if( $this->db->numRows() == 1 ) return $this->db->fetch();
	     return null;
 	}

 	public function ingresoStock($producto_id,$cantidad){
	 	 if(!ctype_digit($producto_id))throw new validacionException("Error5-Stock");
	     if($producto_id<1) throw new validacionException("Error6-Stock"); 

	     if(!ctype_digit($cantidad))throw new validacionException("Error7-Stock");
	     if($cantidad<1) throw new validacionException("Error8-Stock"); 

	     if( $this->BuscarProductoStockId($producto_id)){
	     	$this->db->query("UPDATE stock 
	     					  SET stock = stock + $cantidad 
	     					  WHERE producto_id = $producto_id 
	     					  LIMIT 1");
	     	return true;
	     }
	     return false;
 	}

}


?>