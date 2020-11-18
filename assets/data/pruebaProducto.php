<?php
    include('conexion.php');

    $obj = new Conexion;

    $res = $obj->buscarProducto();

    //print_r($res);

    //echo '<br><br><br>';

    echo '<table>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio venta</th>
                <th>Precio compra</th>
                <th>Stock</th>
                <th>url imagen</th>
            </tr>
            ';

    foreach($res as $filas){
        echo '<tr>';
        echo '<td>' . $filas['id_producto'] . '</td>';
        echo '<td>' . $filas['nombre_producto'] . '</td>';
        echo '<td>' . $filas['descripcion_producto'] . '</td>';
        echo '<td>' . $filas['precio_venta'] . '</td>';
        echo '<td>' . $filas['precio_compra'] . '</td>';
        echo '<td>' . $filas['stock'] . '</td>';
        echo '<td>' . $filas['url_img'] . '</td>';
        echo '</td>';
    }

    echo '</table>';
    echo '<br><br><br>';

    json_encode($res, JSON_FORCE_OBJECT);
    
    print_r($res);

    echo '<br><br><br>';

    $temp = array();

    $temp = $res;

    print("Id Producto:" . $temp[2]['id_producto'] . '<br>');
    print("Nombre:" . $temp[2]['nombre_producto'] . '<br>');
    print("Precio Venta:" . $temp[2]['precio_venta'] . '<br>');
    print("url imagen:" . $temp[2]['url_img'] . '<br>');

?>