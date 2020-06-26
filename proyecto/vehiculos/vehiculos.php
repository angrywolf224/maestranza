<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

 <title>Titulo ventana</title>

  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../../https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
   
<?php  require '../../menu.php'?>    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->

       <?php include '../../barra_superior.php'
            ?>


        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Vehiculos Ingresados</h1>

        </div>
        <!-- /.container-fluid -->

            </div>
      

    <div class="container-fluid">

          <!-- Page Heading -->
         
          
          <p class="mb-4">Listado de vehiculos activos en la empresa</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Exampleaaa</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Patente</th>
                      <th>Tipo Vehiculo</th>
                      <th></th>
                      <th></th>
                    
                    </tr>
                  </thead>

                  <tfoot>
                    <tr>
                      <th>Patente</th>
                      <th>Tipo Vehiculo</th>
                      <th></th>
                      <th></th>
                     
                    </tr>
                  </tfoot>

                  
                  <tbody>
                  
                  



                <?php include '../consultas/consultas.php';
               
                            $resultado = listar_vehiculos();


                            if (isset($resultado)) {
                                foreach ($resultado as $res) {


                                echo "<tr><td>".$res['patente']."</td>";
                                echo "<td>".$res['tipo_vehiculo']."</td>";
                               ?>
                                <td><a href="#" class="btn btn-danger btn-circle btn-sm">
                                         <i class="fas fa-trash"></i></a>
                                             </td>

                                <td><a href="#" class="btn btn-warning btn-circle btn-sm">
                    <i class="fas fa-exclamation-triangle"></i>
                            </a></td>
                                </tr>
                              
                                
<?php

//COMIENZO DEL MODAL ---------------------------------------------------------

//FIN DEL MODAL-----------------------------------------------------------------------
                                }
                            }

                            ?>

                   


                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>     



      <!-- End of Main Content -->















      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
 

  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="v../../endor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="j../../s/sb-admin-2.min.js"></script>
  <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../../js/demo/datatables-demo.js"></script>
</body>

</html>
