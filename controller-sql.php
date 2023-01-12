<?php

function ConectarBD(){
$host = "localhost:8889";
$user = "Form_datos";
$bd = "Form_datos";
$pass = "8OFn4mX[ePh!Q3C)";
$con = mysqli_connect($host,$user,$pass,$bd,8889);
return $con;
}

if($_POST){
    if(isset($_POST['accion']) and !empty($_POST['accion'])){ 
        if($_POST['accion'] == 'ENVIO'){   
                $datos = $_POST;
                AddDatosUsuario($datos, $con); 
        }
    }
}                            
    

// GUARDAR DATOS MYADMIN
function AddDatosUsuario($datos){
    $con = ConectarBD();
    $sql = "INSERT INTO `Form_datos` (`rowid`, `deporte`, `fecha`, `name`, `via`, `dir`, `ndir`, `pais`, `prov`, `pobla`, `zip`, `tlf`, `nif`, `email`, `motivo`) VALUES (NULL, '".$datos['deporte']."', '".$datos['fecha']."', '".$datos['name']."', '".$datos['via']."', '".$datos['dir']."', '".$datos['ndir']."', '".$datos['pais']."', '".$datos['prov']."', '".$datos['pobla']."', '".$datos['zip']."', '".$datos['tlf']."', '".$datos['nif']."', '".$datos['email']."', '".$datos['motivo']."')";
    print_r($sql);
    $res = $con->query($sql)or die( "Error en la base de datos de Usuarios");
    print_r($res);
    if($res != 0){
        $msn = "Todo correcto";
        header('location:http://localhost:8080/formsql.php?msn='.$msn);
    }else{
        $msn = "Error en la conexion";
        header('location:http://localhost:8080/formsql.php?msn='.$msn);
    }
    mysqli_close($con);
}

// CARGAR DATOS
function CargarDatosUsuario(){
    $con = ConectarBD();
    $sql = "SELECT * FROM `Form_datos`;";
    $res = $con->query($sql)or die( "base de datos no guardada");
    $total = mysqli_num_rows($res);
    if($total != 0){
        return $res;
    }else{
        return $error = "No se puede conectar con la tabla Users.";
    }
    mysqli_close($con);
}
?>

<script>
function CalcularNif(inp_nif){
    var nif = inp_nif.value;
    var letrasnif = ['T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E'];
    //console.log(nif);
    if(nif.length == 9){
        var numeros = nif.substr(0,8);
        //console.log(numeros);
        var letra = nif.substr(-1,1);
        for( num of numeros){
            if(parseInt(num)){
                total_num = Math.floor(parseInt(numeros) % 23);
                if(letrasnif[total_num] == letra.toUpperCase()){
                    inp_nif.style.borderColor = "black";
                }else{
                    inp_nif.value="";
                    inp_nif.placeholder = "nif no es correcta";
                    inp_nif.style.borderColor = "red";
                }
            }
            else
            {
                inp_nif.value="";
                inp_nif.placeholder = "nif no es correcta";
                inp_nif.style.borderColor = "red";
                break;
            }
        }
       
    }
    else
    {
        inp_nif.value="";
        inp_nif.placeholder = "nif no es correcta";
        inp_nif.style.borderColor = "red";
    }
}
</script>