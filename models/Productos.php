
<?php
//Models/Productos.php

class Productos extends Model{

//Crear Nuevo Producto 
 public function CrearProducto($producto_id,$nombre,$precio,$cat_id){

     //Validacion del producto_id
     if(!ctype_digit($producto_id)) throw new validacionException("Error1-Productos");
     if($producto_id<1) throw new validacionException("Error2-Productos"); 

    //Validacion del nombre
    if(strlen($nombre)<10) throw new validacionException("Error3-Productos");
    $nombre = substr($nombre,0,50);
    $this->db->escape($nombre);

    //Validacion del precio
    if(!is_numeric($precio)) throw new validacionException("Error4-Productos");
    if($precio<0) throw new validacionException("Error5-Productos");

    //Validacion de categoria_id
    if(!ctype_digit($cat_id)) throw new validacionException("Error6-Productos");
    if($cat_id<1)throw new validacionException("Error7-Productos");
    $this->db->query("SELECT * FROM categorias WHERE categoria_id = " . $cat_id . " LIMIT 1");
    if( $this->db->numRows() != 1 ) throw new validacionException("Error8-Productos");

    $stock = new stock();

    if( is_null($this->BuscarProductoId($producto_id)) &&
        is_null($stock->BuscarProductoStockId($producto_id)) ) {

        $this->db->query("INSERT INTO producto (producto_id ,nombre,precio,categoria_id) 
                           VALUES($producto_id,'$nombre',$precio,$cat_id)");

        $this->db->query("INSERT INTO stock (producto_id ,stock)  
                           VALUES($producto_id ,0)");
        return true;
    }
    else { return false;  }
 }

 
 public function ObtenerTodos(){
     $this->db->query("SELECT * FROM producto p ,stock s WHERE p.producto_id = s.producto_id");
     if( $this->db->numRows() > 0 ) return $this->db->fetchAll();
     return null;
 }

 
 public function EliminarProducto($producto_id){
    
    if(!ctype_digit($producto_id))throw new validacionException("Error9-Productos");
    if($producto_id<1) throw new validacionException("Error10-Productos");
    
    $stock = new stock();

    if( !is_null($this->BuscarProductoId($producto_id)) && 
        !is_null($stock->BuscarProductoStockId($producto_id))){
        
        $this->db->query("DELETE FROM producto WHERE producto_id=".$producto_id." LIMIT 1");
        $this->db->query("DELETE FROM stock WHERE producto_id=".$producto_id." LIMIT 1");    
        return true;
    }
    else{  return false; }
 }

 public function ModificarProducto($producto_id,$nombre,$precio){

    if(!ctype_digit($producto_id))throw new validacionException("Error11-Productos");
    if($producto_id<1) throw new validacionException("Error12-Productos"); 

    
    if(strlen($nombre)<10) throw new validacionException("Error13-Productos");
    $nombre = substr($nombre,0,50);
    $this->db->escape($nombre);

    
    if(!is_numeric($precio)) throw new validacionException("Error14-Productos");
    if($precio<0) throw new validacionException("Error15-Productos");
    if( !is_null($this->BuscarProductoId($producto_id))) {
            $aux = $this->BuscarProductoId($producto_id);
            if($aux['nombre'] == $nombre && $aux['precio'] == $precio){ return false;}
            $this->db->query("UPDATE producto
            SET nombre ='$nombre',
            precio=$precio 
            WHERE producto_id= $producto_id 
            LIMIT 1");
            return true;
    }
    else {  return false; }

   }


 public function VerDetalleProducto($producto_id){
    if(!ctype_digit($producto_id))throw new validacionException("Error16-Productos");
    if($producto_id<1) throw new validacionException("Error17-Productos");

    $this->db->query("SELECT * FROM producto WHERE producto_id=" .$producto_id ." LIMIT 1");
    return $this->db->fetch();
 }

 

 public function BuscarProductoNom($nombre){
     
    if(strlen($nombre)<3) throw new validacionException("Error18-Productos");
    $nombre = substr($nombre,0,50);
    $this->db->escape($nombre);
    $this->db->escapeWildcards($nombre);
    $this->db->query("SELECT * FROM producto p ,stock s WHERE p.producto_id = s.producto_id AND p.nombre LIKE '%$nombre%'");
    if( $this->db->numRows() > 0 ) return $this->db->fetchAll();
    return null;
 }


  public function BuscarProductoId($producto_id){
     
     if(!ctype_digit($producto_id)) throw new validacionException("Error19-Productos");
     if( $producto_id < 1 ) throw new validacionException("Error20-Productos");
     $this->db->query("SELECT * FROM producto WHERE producto_id = " . $producto_id . " LIMIT 1 ");
     if( $this->db->numRows() == 1 ) return $this->db->fetch();
     return null;

 }


 public function productosCategoria($categoria_id){

    if( !ctype_digit($categoria_id)) throw new validacionException("Error21-Productos");
    if( $categoria_id < 1 ) throw new validacionException("Error22-Productos");

    $this->db->query("SELECT p.* , s.stock AS stock
                        FROM producto p
                        LEFT JOIN stock s ON p.producto_id = s.producto_id
                        WHERE p.categoria_id = " . $categoria_id );
        if( $this->db->numRows() > 0 ) return $this->db->fetchAll();
        return null;
 }

 public function cantidadProductosCategoria($categorias){

    if(!is_array($categorias)) return null;
    
    $cantidad = array();
    foreach($categorias as $categoria){
        if( is_null($this->productosCategoria($categoria['categoria_id'])) ){
            $cantidad[] = 0;
        }
        else
        {
            $cantidad[] = count($this->productosCategoria($categoria['categoria_id']));
        }
    }
    return $cantidad;
 }



}



?>