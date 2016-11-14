<!DOCTYPE HTML>
<html>
<head>
<title>Catalogo</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/lightbox.css"  media="all"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="js/lightbox-plus-jquery.min.js"></script> <!-- chaca -->


</head>
<body>


<div class="header_btm">
<div class="wrap">
    <div class="header_sub">
        <div class="h_menu">
            <ul>
                 <li><a href="inicio.html">INICIO</a></li> |
                <li class="active"><a href="catalogo.php">CATALOGO</a></li> |
                <li><a href="contacto.html">CONTACTO</a></li> |
            </ul>
        </div>

    <div class="clear"></div>
</div>
</div>
</div>

<!-- start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">

		<!-- start grids_of_3 -->
		<div class="grids_of_3">
			<div class="grid1_of_3">
					<a class="example-image-link" href="images/menu.jpg" data-lightbox="example-1"><img class="example-image" src="images/w_pic1.jpg" /></a>
					<h3>La Casita</h3></a>
					<div class="price">
                        <h4>2227784950</h4></a>
                         <h4>Prolo. 14 Sur</h4></a>
                    </div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
					<a class="example-image-link" href="images/menu1.jpg" data-lightbox="example-1"><img class="example-image" src="images/w_pic2.jpg" /></a>
					<h3>San Claudio</h3></a>
					<div class="price">
                        <h4>2225194511</h4></a>
                        <h4>Av. San Claudio</h4></a>
                    </div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">

					<a class="example-image-link" href="images/menu2.jpg" data-lightbox="example-1"><img class="example-image" src="images/w_pic3.jpg" /></a>
					<h3>El Meson</h3></a>
					<div class="price">
                        <h4>2458796</h4></a>
                        <h4>Av. San Claudio</h4></a>
                    </div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="grids_of_3">
			<div class="grid1_of_3">
					<a class="example-image-link" href="images/menu3.jpg" data-lightbox="example-1"><img class="example-image" src="images/w_pic4.jpg" /></a>
					<h3>Taqueria 'XIME'</h3></a>
					<div class="price">
                        <h4>2223606094 </h4></a>
                        <h4>Av. San Claudio</h4></a>
                    </div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">

					<a class="example-image-link" href="images/menu4.jpg" data-lightbox="example-1"><img class="example-image" src="images/w_pic5.jpg" /></a>
					<h3>Antojitos Lupita II</h3></a>
					<div class="price">
                        <h4>2678090</h4></a>
                        <h4>Av. San Claudio</h4></a>
                    </div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
					<a class="exmple-image-link" href="images/menu5.jpg" data-lightbox="example-1"><img class="example-image" src="images/w_pic6.jpg">
					<h3>Mas X Menos</h3></a>
					<div class="price">
                        <h4>2228354252</h4></a>
                        <h4>Av. San Claudio</h4></a>
                    </div>
					<span class="b_btm"></span>
				</a>
			</div>
		</div>
    </div>
</div>
</div>

<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br>
<div class="main_bg">
<div class="wrap">


      <div class="grids_of_6">
        <div class="grid1_of_6">
        <?php
                        require("coneccion.php");

                        $query = "SELECT * FROM catalogo";
                        $resultado = $link->query($query);

                        if($resultado->num_rows>0){

                            while($row = $resultado->fetch_assoc()){
                                $id = $row['Id'];
                                $Nombre = $row['nombre'];
                                $Direccion = $row['direccion'];
                                $Telefono = $row['telefono'];
                                $rating_actual = $row['vot'];
                                $hits = $row['hits'];

                                echo"<form action='rate.php' method='POST'> $Nombre: <select name='vot'>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option></select>
                        <input type='hidden' value='$Nombre' name='nombre'>;
                        <input type='submit' value='Votar!'> Hits: ";echo round($hits);
                        echo "</form>";
                        }
                    }else{
                        echo "0 resultados";
                    }

        ?>
        <br>
        <span class="b_btm"></span>
        </a>
    </div>
    </div>

</div>
</div>

</body>
</html>