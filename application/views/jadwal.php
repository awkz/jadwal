
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/dist/css/dataTables.bootstrap.min.css"/>

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
              <li class="active"><a href="<?php echo site_url(); ?>">Jadwal</a></li>
              <li><a href="<?php echo site_url(); ?>/Jadwal/input">Input Jadwal</a></li>
            </ul>
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="table-responsive">          
        <table id="jadwal" class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Hari</th>
              <th>Jam</th>
              <th>Mata Kuliah</th>
              <th>Ruangan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Pemrograman Web III</td>
              <td>Senin</td>
              <td>17:00</td>
              <td>Lab 1</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>static/dist/js/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url(); ?>static/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>static/dist/js/jquery.dataTables.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>static/dist/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          $('#jadwal').DataTable();
      } );
    </script>
  </body>
</html>
