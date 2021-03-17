<?php 
/**
 * 
 */
class registro
{
	private $table='registro_clientes';
	function listar($c1){
	 $inf=null; $n=1; $cant=5;
	 $inf.='<thead>';
     $inf.='<tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Accion</th>
    </tr>';
	 $inf.='</thead>';
	 $inf.='<tbody>';
	 
	 $sql="SELECT * FROM ".$this->table." WHERE id_registro= 1; ";
	 $res=mysqli_query($c1, $sql) OR $_SESSION['Mysqli_Error()']= (mysqli_error($c1)) ;
	 if ($res) {
	 	if ($res->num_rows >0) {
	 	    while ($row=mysqli_fetch_array($res)) {
	 	    	$inf.='<tr>';
	 	    	$inf.='<th scope="row hidden">'.$n.'</th>';
	 	    	$inf.='<td>'.$row['nombre'].'</td>';
                $inf.='<td>'.$row['Apellido'].'</td>';
                $inf.='<td>'.$row['correo'].'</td>';
                $inf.='<td>'.$row['telefono'].'</td>';
                $inf.='<td>';	
                $inf.='';
                $inf.='</td>'; 	    	
	 	    	$inf.='</tr>';

	 	    	$n++;
	 	    }
	 	    mysqli_free_result($res);//liberar memoria de el resultado
	 	}else{
          $inf.='<tr><td colspan="'.$cant.'"><div class="alert alert-warning">No se encontro ningun registro</div></td></tr>';
	 	}
	 }else{
       $inf.='<tr><td colspan="'.$cant.'"><div class="alert alert-danger">Error:'$_SESSION['Mysqli_Error']'</div></td></tr>';
	 	}
	 }
	 $inf.='</tbody>';
	 mysqli_close($c1);
     return $inf;
	}
}
$data='
  <thead class="bg-sucess">
    
  </thead>
  <tbody>

  </tbody>';
 ?>