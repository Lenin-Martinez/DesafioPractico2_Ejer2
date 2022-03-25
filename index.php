<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Estilo_Index.CSS">
    <title>Biblioteca</title>
</head>
<header>
    <img src="img/logo.png" alt="Logo_UDB" width="100" style="background-color: blue; float: left">
    <label style="float: left; padding-top: 2%; font-size: 50px">Biblioteca Ejercicio2</label>
</header>






<body>
    
        <div class="izq">
            <div class="entradas">
                <form method="post">
                    <label style="font-size: 25px;">Parametros del libro:</label> <br>
                    <input type="text" class="EstiloEntradas" style="width: 120px;" name="Apellido" placeholder="Autor: Apellido">
                    <input type="text" class="EstiloEntradas" style="width: 120px;" name="Nombre" placeholder="Autor: Nombre"><br><br>
                    <input type="text" class="EstiloEntradas" name="Titulo" placeholder="Titulo"><br><br>
                    <input type="number" class="EstiloEntradas" name="NEdicion" placeholder="Num. edicion"><br><br>
                    <input type="text" class="EstiloEntradas" name="Lugar" placeholder="Lugar Publicacion"><br><br>
                    <input type="text" class="EstiloEntradas" name="Editorial" placeholder="editorial"><br><br>
                    <input type="number" class="EstiloEntradas" name="Anio" placeholder="Año"><br><br>
                    <input type="number" class="EstiloEntradas" name="Npag" placeholder="Num. paginas"><br><br>
                    <input type="text" class="EstiloEntradas" name="Notas" placeholder="Notas"><br><br>
                    <input type="number" class="EstiloEntradas" name="ISBM" placeholder="ISBN"><br><br>
                </form>
            </div>

            <div class="botones">
                <form method="post">
                    <input type="submit" class="EstiloBotones" name="btnBuscar" value="Buscar">
                    <input type="submit" class="EstiloBotones" name="btnIngresar" value="Ingresar">
                    <input type="submit" class="EstiloBotones" name="" value="Modificar">
                    <input type="submit" class="EstiloBotones" name="" value="Eliminar">
                </form>
            </div>
        </div>


    <div class="der">
        <?php
            MostrarTabla();
        ?>
    </div>









        
</body>

</html>




<?php
    function ConexionBD(){
        $user='root';
        $password = '';
        $db = 'desafiopract2';

        return new PDO('mysql:host=localhost;dbname='.$db, $user, $password);
    }


    function BuscarLibro($Apellido, $Nombre, $Titulo, $NEdicion, $Lugar, $Editorial, $Anio, $NPag, $Notas, $ISBN){
        $Consulta='SELECT * FROM libros ';
        $Contador = 0;

        //Condicion del Apellido
        if(!empty($Apellido) && ($Contador == 0))
        {
        $Consulta .= "WHERE Apellido LIKE '" .$Apellido. "%' ";
        $Contador++;
        }
        else if(!empty($Apellido) && ($Contador > 0))
        {
        $Consulta .= "AND Apellido LIKE '" .$Apellido. "%' ";
        }
        //Condicion del Nombre
        if(!empty($Nombre) && ($Contador == 0))
        {
        $Consulta .= "WHERE Nombre LIKE '" .$Nombre. "%' ";
        $Contador++;
        }
        else if(!empty($Nombre) && ($Contador > 0))
        {
        $Consulta .= "AND Nombre LIKE '" .$Nombre. "%' ";
        }
        //Condicion del Titulo
        if(!empty($Titulo) && ($Contador == 0))
        {
        $Consulta .= "WHERE Titulo LIKE '" .$Titulo. "%' ";
        $Contador++;
        }
        else if(!empty($Titulo) && ($Contador > 0))
        {
        $Consulta .= "AND Titulo LIKE '" .$Titulo. "%' ";
        }
        //Condicion del NEdicion
        if(!empty($NEdicion) && ($Contador == 0))
        {
        $Consulta .= "WHERE NEdicion LIKE '" .$NEdicion. "%' ";
        $Contador++;
        }
        else if(!empty($NEdicion) && ($Contador > 0))
        {
        $Consulta .= "AND NEdicion LIKE '" .$NEdicion. "%' ";
        }
        //Condicion del Lugar
        if(!empty($Lugar) && ($Contador == 0))
        {
        $Consulta .= "WHERE Lugar LIKE '" .$Lugar. "%' ";
        $Contador++;
        }
        else if(!empty($Lugar) && ($Contador > 0))
        {
        $Consulta .= "AND Lugar LIKE '" .$Lugar. "%' ";
        }
        //Condicion del Editorial
        if(!empty($Editorial) && ($Contador == 0))
        {
        $Consulta .= "WHERE Editorial LIKE '" .$Editorial. "%' ";
        $Contador++;
        }
        else if(!empty($Editorial) && ($Contador > 0))
        {
        $Consulta .= "AND Editorial LIKE '" .$Editorial. "%' ";
        }
        //Condicion del Anio
        if(!empty($Anio) && ($Contador == 0))
        {
        $Consulta .= "WHERE Anio LIKE '" .$Anio. "%' ";
        $Contador++;
        }
        else if(!empty($Anio) && ($Contador > 0))
        {
        $Consulta .= "AND Anio LIKE '" .$Anio. "%' ";
        }
        //Condicion del NPag
        if(!empty($NPag) && ($Contador == 0))
        {
        $Consulta .= "WHERE NPag LIKE '" .$NPag. "%' ";
        $Contador++;
        }
        else if(!empty($NPag) && ($Contador > 0))
        {
        $Consulta .= "AND NPag LIKE '" .$NPag. "%' ";
        }
        //Condicion del Notas
        if(!empty($Notas) && ($Contador == 0))
        {
        $Consulta .= "WHERE Notas LIKE '" .$Notas. "%' ";
        $Contador++;
        }
        else if(!empty($Notas) && ($Contador > 0))
        {
        $Consulta .= "AND Notas LIKE '" .$Notas. "%' ";
        }
        //Condicion del ISBN
        if(!empty($ISBN) && ($Contador == 0))
        {
        $Consulta .= "WHERE ISBN LIKE '" .$ISBN. "%' ";
        $Contador++;
        }
        else if(!empty($ISBN) && ($Contador > 0))
        {
        $Consulta .= "AND ISBN LIKE '" .$ISBN. "%' ";
        }

        
        $Conexion = ConexionBD();
        $result = $Conexion->query($Consulta);
        $libros = array();
        while ($libro = $result->fetch())
        {
        $libros[] = $libro;
        }

        return $libros;
    }


    function MostrarTabla()
    {
        ?>
        <div class="Resultados">
            <h3>Libros encontrados: </h3>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Autor</th>
                    <th>Titulo</th>
                    <th>Num. Edicion</th>
                    <th>Lugar</th>
                    <th>Editorial</th>
                    <th>Año</th>
                    <th>Num. Pag</th>
                    <th>Notas</th>
                    <th>ISBN</th>
                    
                </tr>
                <?php
                    if(isset($_POST["btnBuscar"])){
                        
                        $Apellido = "";
                        $Nombre = "";
                        $Titulo = "";
                        $NEdicion = "";
                        $Lugar = "";
                        $Editorial = "";
                        $Anio = "";
                        $NPag = "";
                        $Notas = "";
                        $ISBN = "";

                        if(!empty($_POST["Apellido"]))
                        {
                            $Apellido = $_POST["Apellido"];
                        }
                        if(!empty($_POST["Nombre"]))
                        {
                            $Nombre = $_POST["Nombre"];
                        }
                        if(!empty($_POST["Titulo"]))
                        {
                            $Titulo = $_POST["Titulo"];
                        }
                        if(!empty($_POST["NEdicion"]))
                        {
                            $NEdicion = $_POST["NEdicion"];
                        }
                        if(!empty($_POST["Lugar"]))
                        {
                            $Lugar = $_POST["Lugar"];
                        }
                        if(!empty($_POST["Editorial"]))
                        {
                            $Editorial = $_POST["Editorial"];
                        }
                        if(!empty($_POST["Anio"]))
                        {
                            $Anio = $_POST["Anio"];
                        }
                        if(!empty($_POST["NPag"]))
                        {
                            $NPag = $_POST["NPag"];
                        }
                        if(!empty($_POST["Notas"]))
                        {
                            $Notas = $_POST["Notas"];
                        }
                        if(!empty($_POST["ISBN"]))
                        {
                            $ISBN = $_POST["ISBN"];
                        }



                        $libros = BuscarLibro($Apellido, $Nombre, $Titulo, $NEdicion, $Lugar, $Editorial, $Anio, $NPag, $Notas, $ISBN);
                    
                        foreach($libros as $libro)
                        { ?>
                            <tr>
                                <td><?php echo $libro['ID']?></td>
                                <td><?php echo $libro['Apellido'].", ".$libro['Nombre'] ?></td>
                                <td><?php echo $libro['Titulo']?></td>
                                <td><?php echo $libro['NEdicion']?></td>
                                <td><?php echo $libro['Lugar']?></td>
                                <td><?php echo $libro['Editorial']?></td>
                                <td><?php echo $libro['Anio']?></td>
                                <td><?php echo $libro['NPag']?></td>
                                <td><?php echo $libro['Notas']?></td>
                                <td><?php echo $libro['ISBN']?></td>
                                
                            </tr>

                        <?php
                        }
                    }
                ?>
            </table>

    <?php
    }

    if(isset($_POST["btnIngresar"]))
    {
        $Apellido = "";
        $Nombre = "";
        $Titulo = "";
        $NEdicion = "";
        $Lugar = "";
        $Editorial = "";
        $Anio = "";
        $NPag = "";
        $Notas = "";
        $ISBN = "";

        if(!empty($_POST["Apellido"]))
        {
            $Apellido = $_POST["Apellido"];
        }
        if(!empty($_POST["Nombre"]))
        {
            $Nombre = $_POST["Nombre"];
        }
        if(!empty($_POST["Titulo"]))
        {
            $Titulo = $_POST["Titulo"];
        }
        if(!empty($_POST["NEdicion"]))
        {
            $NEdicion = $_POST["NEdicion"];
        }
        if(!empty($_POST["Lugar"]))
        {
            $Lugar = $_POST["Lugar"];
        }
        if(!empty($_POST["Editorial"]))
        {
            $Editorial = $_POST["Editorial"];
        }
        if(!empty($_POST["Anio"]))
        {
            $Anio = $_POST["Anio"];
        }
        if(!empty($_POST["NPag"]))
        {
            $NPag = $_POST["NPag"];
        }
        if(!empty($_POST["Notas"]))
        {
            $Notas = $_POST["Notas"];
        }
        if(!empty($_POST["ISBN"]))
        {
            $ISBN = $_POST["ISBN"];
        }

        $sql = "insert into libros (Apellido, Nombre, Titulo, NEdicion, Lugar, Editorial, Anio, NPag, Notas, ISBN) 
        values (".$Apellido.", ".$Nombre.", ".$Titulo.", ".$NEdicion.", ".$Lugar.", ".$Editorial.", ".$Anio.", ".$NPag.", ".$Notas.", ".$ISBN.")";

        $user='root';
        $password = '';
        $db = 'desafiopract2';

        $Conexion = mysqli_connect('localhost',$user,$password,$db,'80');
        mysqli_query($Conexion, $sql);

        MostrarTabla();







    }


?>