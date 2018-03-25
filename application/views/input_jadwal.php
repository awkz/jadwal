
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jadwal</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>static/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>static/dist/navbar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/dist/css/datatables.min.css"/>

  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li ><a href="<?php echo site_url(); ?>">Jadwal</a></li>
              <li class="active"><a href="<?php echo site_url(); ?>/Jadwal/input">Input Jadwal</a></li>
            </ul>
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      <form class="form-horizontal">
        <fieldset>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="hari">Hari</label>  
          <div class="col-md-4">
          <input id="hari" name="hari" type="text" placeholder="Senin" class="form-control input-md" required="">
            
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Jam">Jam</label>  
          <div class="col-md-4">
          <input id="Jam" name="Jam" type="text" placeholder="17:00" class="form-control input-md">
            
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="makul">Mata Kuliah</label>  
          <div class="col-md-4">
          <input id="makul" name="makul" type="text" placeholder="Pemrograman Web III" class="form-control input-md">
            
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="ruangan">Ruangan</label>  
          <div class="col-md-4">
          <input id="ruangan" name="ruangan" type="text" placeholder="Lab 1" class="form-control input-md">
            
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="simpan"></label>
          <div class="col-md-4">
            <button id="simpan" name="simpan" class="btn btn-primary">Simpan</button>
          </div>
        </div>

        </fieldset>
        </form>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>static/dist/js/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url(); ?>static/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>static/dist/js/datatables.min.js"></script>
  </body>
</html>
