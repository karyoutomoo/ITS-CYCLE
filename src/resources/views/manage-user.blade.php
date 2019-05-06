<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ITS CYCLE</title>

  <!-- Custom fonts for this template -->
  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css">
  {{-- <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> --}}
  <link href="../https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/Home/bootstrap.min.css') }}" rel="stylesheet">
  {{-- <link href="../css/sb-admin-2.min.css" rel="stylesheet"> --}}

    <!-- Custom styles for this page -->
  <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  {{-- <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> --}}

<!--?php require_once 'header.blade.php' ?> -->

</head>

<body id="page-top">  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- ?php require_once 'navbar.php' ?> -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src="{{asset('img/Home/stab1.png')}}"style="height: 70px; width: 70px">
        </div>
        <div class="sidebar-brand-text mx-3" >PETUGAS <sup>ITS-CYCLE</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/dashboard')}}">
          <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider my-0">

      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/data-peminjaman')}}">
          <i class="fas fa-database"></i>
          <span>Data Peminjaman </span></a>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/manage-user')}}">
          <span>Manajemen Pengguna</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/data-cycle')}}">
          <i class="fas fa-bicycle"></i>
          <span>Manajemen Sepeda</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/notifikasi')}}">
        <i class="fas fa-bell"></i>
          <span>Notifikasi</span></a>
      </li>

      <hr class="sidebar-divider my-0">
      <li  class="nav-item active">
        <a class="nav-link " href="../#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
               Logout
               </a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" style="padding-top: 30px">

         
      <!-- Main Content -->
      <div id="content">

        <!-- Topbar --> 
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Manajemen Pengguna</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active"><a >Manajemen Pengguna</a></li>
         
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>
       
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
            </div>
            <div class="card-body">
               <button type="button" class="btn-sm btn-primary" style="float: right; margin-bottom: 5px" align="right" data-toggle="modal" data-target="#adduser"><i class="fas fa-user-plus"></i> TAMBAH USER</button>
                


              <div class="table-responsive small">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="max-width: 10px; min-width: 10px">No</th>
                      <th style="max-width: 50px; min-width: 50px">NRP</th>
                      <th style="max-width: 80px; min-width: 80px">Nama</th>
                      <th style="max-width: 80px; min-width: 80px">No. HP</th>
                      <th style="max-width: 200px ; min-width: 200px">Alamat Surabaya</th>
                      <th style="max-width: 70px; min-width: 70px">Departemen</th>
                      <th></th>
                    </tr>
                  </thead>
                 
                  <tbody>
                  
                    <tr>
                      <td>1</td>
                      <td>05111640000043</td>
                      <td>Muhammad Arrafi</td>
                      <td>087784606327</td>
                      <td>Keputih Gg 1 A</td>
                      <td>Informatika</td>
                      <td>

                         <button class="btn-sm btn-secondary" data-toggle="modal" data-target="#edituser"> <i class="fas fa-user-cog"></i></button>
                        <button class="btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal"> <i class="fas fa-trash"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>051116640000001</td>
                      <td>Colleen Hurst</td>
                      <td>082131231233</td>
                      <td>San Francisco</td>
                      <td>2009/09/15</td>
                      <td>
                        <button class="btn-sm btn-secondary" data-toggle="modal" data-target="#edituser"> <i class="fas fa-user-cog"></i></button>
                        <button class="btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal"> <i class="fas fa-trash"></i></button>
                        
                      </td>
                    </tr>    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; ITS CYCLE 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  </div>

  <!-- Bootstrap core JavaScript-->
  
</body>
    <div class="modal fade" id="adduser" tabindex="-1" role="dialog"  aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3>Tambah User</h3>
              </div>
              <div class="modal-body" style="padding-left: 40px">
                   <form action="#" method="post" >     
                      <div class="row form-group">
                        <div class="col-3">
                          <label class=""><strong >NRP</strong><span style="color: red">*</span></label>
                        </div>
                        <div class="col-8">
                          <input type="text" name="" class="form-control" placeholder="Contoh : 0511164000xxxx">
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-3">
                          <label class=""><strong >NAMA</strong><span style="color: red">*</span></label>
                        </div>
                        <div class="col-8">
                          <input type="text" name="" class="form-control" placeholder="Nama Pengguna">
                        </div>  
                      </div>      
                      <div class="row form-group">
                        <div class="col-3">
                          <label class=""><strong >No. HP</strong><span style="color: red">*</span></label>
                        </div>
                        <div class="col-8">
                          <input type="text" name="" class="form-control" placeholder="Contoh : 0877xxxxxxxx">
                        </div>
                      </div> 
                      <div class="row form-group">
                        <div class="col-3">
                          <label class=""><strong >Alamat Surabaya</strong><span style="color: red">*</span></label>
                        </div>
                        <div class="col-8">
                          <input type="text" name="" class="form-control">
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-3">
                          <label class=""><strong >Departemen</strong><span style="color: red">*</span></label>
                        </div>
                        <div class="col-8">
                          <select class="form-control">
                          <option selected disabled >Choose..</option>
                          <option>Informatika</option>
                          <option>Sistem Informasi</option>
                          <option>Fisika</option>
                        </select>                          
                        </div>
                      
                      </div>                     

                        <div style="text-align: right; margin:10px ; margin-right: 40px">
                        
                        <button id="btnSubmit" type="submit" class="btn btn-primary btn-hero " name="btnSubmit" ><span class="fa fa-plus-circle" aria-hidden="true"></span>  KIRIM</button>
                        </div>

                    </form>
                  </div>
              </div>
             
            </div>
          </div>
        </div>


          <div class="modal fade" id="edituser" tabindex="-1" role="dialog"  aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3>Ubah Data User</h3>
              </div>
              <div class="modal-body" style="padding-left: 40px">
                   <form action="#" method="post" >     
                      <div class="row form-group">
                        <div class="col-3">
                          <label class=""><strong >NRP</strong><span style="color: red">*</span></label>
                        </div>
                        <div class="col-8">
                          <input type="text" name="" class="form-control" placeholder="Contoh : 0511164000xxxx">
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-3">
                          <label class=""><strong >NAMA</strong><span style="color: red">*</span></label>
                        </div>
                        <div class="col-8">
                          <input type="text" name="" class="form-control" placeholder="Nama Pengguna">
                        </div>  
                      </div>      
                      <div class="row form-group">
                        <div class="col-3">
                          <label class=""><strong >No. HP</strong><span style="color: red">*</span></label>
                        </div>
                        <div class="col-8">
                          <input type="text" name="" class="form-control" placeholder="Contoh : 0877xxxxxxxx">
                        </div>
                      </div> 
                      <div class="row form-group">
                        <div class="col-3">
                          <label class=""><strong >Alamat Surabaya</strong><span style="color: red">*</span></label>
                        </div>
                        <div class="col-8">
                          <input type="text" name="" class="form-control">
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-3">
                          <label class=""><strong >Departemen</strong><span style="color: red">*</span></label>
                        </div>
                        <div class="col-8">
                          <select class="form-control">
                          <option selected disabled >Choose..</option>
                          <option>Informatika</option>
                          <option>Sistem Informasi</option>
                          <option>Fisika</option>
                        </select>                          
                        </div>
                      
                      </div>                     

                        <div style="text-align: right; margin:10px ; margin-right: 40px">
                        
                        <button id="btnSubmit" type="submit" class="btn btn-primary btn-hero " name="btnSubmit" ><span class="fa fa-plus-circle" aria-hidden="true"></span>  KIRIM</button>
                        </div>

                    </form>
                  </div>
              </div>
             
            </div>
          </div>
        </div>

        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">HAPUS</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Apakah anda yakin menghapus catatan ini?</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
              <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
            </div>
          </div>
        </div>
      </div>
      
<footer>
  <a class="scroll-to-top rounded" href="../#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      <a class="btn btn-primary" href="../login.html">Logout</a>
    </div>
  </div>
</div>


{{-- <script src="../vendor/jquery/jquery.min.js"></script> --}}
{{-- <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
<!-- ?php require_once 'footer.php'  ?>  -->
</footer>
</html>