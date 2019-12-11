<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Hind|Muli|Oxygen:700|Poiret+One|Questrial|Quicksand:500|Raleway|Yanone+Kaffeesatz" rel="stylesheet">
    <link rel="stylesheet" href="css/estilosindex.css">
    </head>

<body>


<div class="row">
    <div class="col-6">
        <form action="guardar.php" method="post">
            <div class="form-group row">
                <label for = "" class="col-2 col-form-label">Nombre:</label>
                <input type="text" name="nombre" placeholder="Nombre del cliente" class="form-control col-10"> 
            </div>
            <div class="form-group row">
                <label for = "" class="col-2 col-form-label">Sexo:</label>
                <input type="text" name="sexo" placeholder="Sexo del cliente" class="form-control col-10"> 
            </div>
            <div class="form-group row">
                <label for = ""class="col-2 col-form-label">Dirección:</label>
                <input type="text" name="direccion" placeholder="Dirección del cliente" class="form-control col-10"> 
            </div>
            <div class="form-group row">
                <label for = "" class="col-2 col-form-label">Teléfono:</label>
                <input type="text" name="telefono" placeholder="Teléfono del cliente" class="form-control col-10"> 
            </div>
            <div class="form-group row">
                <label for = "" class="col-2 col-form-label">Correo:</label>
                <input type="email" name="correo" placeholder="Email del cliente" class="form-control col-10"> 
            </div>
            <div class="form-group row">
                <label for = "" class="col-2 col-form-label"> Fecha:</label>
                <input type="date" name="fecha_registro" placeholder="Fecha de Registro" class="form-control col-10"> 
            </div>
                <div class="form-group">
                <button type="submit" value="guardar" class="btn btn-success">Enviar</button>
            </div>
        </form>
    </div>
</div>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
</body>