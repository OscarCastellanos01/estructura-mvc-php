<?php
class ProductoModel extends Model {
    
    public function getProductos() {
        $result = $this->db->query('SELECT nombre, precio FROM productos');
        $productos = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $productos[] = $row;
            }
        }

        return $productos;
    }
}
