<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="style.css">

</head>
<body class="well">
<form class="form-horizontal" method="POST" action="informe.php">
    <div class="container">
        <div class="row">

            <section class="logo col-xs-4 col-xs-offset-4     col-md-2 col-md-offset-5    col-lg-2  col-lg-offset-5">
                <img src="qhs.png" class="img-responsive img-thumbnail" height="200px;">
            </section>
            
            <section class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-offset-2 col-md-8 thumbnail bg-primary">

                    <div class="input-group col-xs-10 col-xs-offset-1  col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 input  text-center">
                        <div class="input-group-addon bg-purple"><i class="glyphicon glyphicon-user"></i> &nbsp;Cedula :</div>
                        <input type="number" min="999999" max="99999999999" id="ID" name="cedula" class="form-control" placeholder="Ejemplo: 1118835265" required>
                    </div>

                <div class="text-center center-block rap-button">
                    <input type="submit" class="btn btn-success" value="Consultar constancia">
                    <input type="reset" class="btn btn-danger" value="Limpiar campo">
                    <a href="http://www.hseqmundial.com" class="btn btn-info" role="button">HSEQMUNDIAL.COM</a>
                </div>
            </section>
            
        </div>
        
    </div>
    
</form>


</body>


</html>