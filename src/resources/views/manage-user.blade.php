<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ITS CYCLE</title>

  <!-- Custom fonts for this template -->
  <link href="{{asset('css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="{{asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  {{-- <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> --}}

  <!--?php require_once 'header.blade.php' ?> -->

</head>
<!-- END HEAD -->

<!-- BODY -->
<body id="page-top">  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- ?php require_once 'navbar.php' ?> -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src="{{asset('img/Home/stab1.png')}}" style="height: 70px; width: 70px">
        </div>
        <div class="sidebar-brand-text mx-3" >PETUGAS <sup>ITS-CYCLE</sup></div>
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('dashboard.index')}}">
          <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('data-peminjaman.index')}}">
          <i class="fas fa-database"></i>
          <span>Data Peminjaman </span>
        </a>
      </li>
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('data-user.index')}}">
          <i class="fas fa-users-cog"></i>
          <span>Manajemen Pengguna</span>
        </a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('sepeda.index')}}">
          <i class="fas fa-bicycle"></i>
          <span>Manajemen Sepeda</span>
        </a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('notifikasi.index')}}">
          <i class="fas fa-bell"></i>
          <span>Notifikasi</span>
        </a>
      </li>
      <hr class="sidebar-divider my-0">
      <li  class="nav-item">
        <a class="nav-link " href="" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>Logout</span>
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
                      <th style="max-width: 20px; min-width: 20px">No</th>
                      <th style="max-width: 100px; min-width: 100px">NRP</th>
                      <th style="max-width: 80px; min-width: 80px">Nama</th>
                      <th style="max-width: 80px; min-width: 80px">No. HP</th>
                      <th style="max-width: 200px ; min-width: 200px">Alamat Surabaya</th>
                      <th style="max-width: 70px; min-width: 70px">Departemen</th>
                      <th style="max-width: 20px; min-width: 20px">Menu</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $x=1; ?>
                    
                    @foreach($data as $key => $datas)
                    <tr class="data-row">
                      <td style="max-width: 20px; min-width: 20px"><?php echo $x; $x=$x+1; ?></td>
                      <td style="max-width: 100px; min-width: 100px">{{$datas->users_nomor_id}}</td>
                      <td class="name" style="max-width: 80px; min-width: 80px">{{$datas->users_nama}}</td>
                      <td class="hp" style="max-width: 80px; min-width: 80px">{{$datas->users_nomorhp}}</td>
                      <td class="alamat" style="max-width: 200px; min-width: 200px">{{$datas->users_alamat}}</td>
                      <td class="departemen" style="max-width: 70px; min-width: 70px">{{$datas->users_departemen}}</td>
                      <td>
                         {{-- button class="btn-sm btn-secondary" data-toggle="modal" data-target="#edituser" name="editbtn" id="editbtn"> <i class="fas fa-user-cog"></i></button> --}}
                        <button type="button" class="btn-sm btn-secondary" id="edit-item" data-item-id="{{$datas->users_nomor_id}}">
                          <i class="fas fa-user-cog"></i>EDIT</button>
                        <button type="button" class="btn-sm btn-danger" id="delete-item" data-item-id="{{$datas->users_nomor_id}}">
                          <i class="fas fa-trash"></i>HAPUS</button>
                        {{-- <button class="btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal"> <i class="fas fa-trash"></i>HAPUS</button> --}}
                      </td>
                    </tr>
                    <tr>
                      {{-- <td style="max-width: 20px; min-width: 20px">{{$datas->pos_jumlah_sepeda}}</td> --}}
                    </tr>
                    @endforeach
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

        <a class="scroll-to-top rounded" href="../#page-top">
          <i class="fas fa-angle-up"></i>
        </a>

        <!-- MODAL LOGOUT-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary editbtn-modal" type="button" data-dismiss="modal">BATAL</button>
                  <button type="submit" id="btn-reject" name="submit" style="" class="btn btn-primary">Lanjut </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--END MODAL LOGOUT-->

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
              <!-- End of Footer -->

        <!-- EDIT SCRIPT -->
        <script type="text/javascript">
          $(document).ready(function() {
          /**
           * for showing edit item popup
           */

          $(document).on('click', "#edit-item", function() {
            $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

            var options = {
              'backdrop': 'static'
            };
            $('#edituser').modal(options)
          })

          // on modal show
          $('#edituser').on('show.bs.modal', function() {
            var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
            var row = el.closest(".data-row");

            // get the data
            var id = el.data('item-id');
            var name = row.children(".name").text();
            var hp = row.children(".hp").text();
            var alamat = row.children(".alamat").text();
            var departemen = row.children(".departemen").text();

            // fill the data in the input fields
            $("#users_nomor_id").val(id);
            $("#users_nama").val(name);
            $("#users_nomorhp").val(hp);
            $("#users_alamat").val(alamat);
            $("#users_departemen").val(departemen);
            $("#form-edit").attr("action","data-user/"+id);

          })

          // on modal hide
          $('#edituser').on('hide.bs.modal', function() {
            $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
            $("#edit-form").trigger("reset");
          })
          })
        </script>
        <!-- END EDIT SCRIPT -->

        <!-- DELETE SCRIPT -->
        <script type="text/javascript">
          $(document).ready(function() {
          /**
           * for showing edit item popup
           */

          $(document).on('click', "#delete-item", function() {
            $(this).addClass('delete-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

            var options = {
              'backdrop': 'static'
            };
            $('#deleteModal').modal(options)
          })

          // on modal show
          $('#deleteModal').on('show.bs.modal', function() {
            var el = $(".delete-item-trigger-clicked"); // See how its usefull right here? 
            var row = el.closest(".data-row");

            // get the data
            var id = el.data('item-id');

            // fill the data in the input fields
            $("#users_nomor_id").val(id);

            $("#delete-form").attr("action","data-user/"+id);

          })

          // on modal hide
          $('#deleteModal').on('hide.bs.modal', function() {
            $('.delete-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
            $("#edit-form").trigger("reset");
          })
          })
        </script>
        <!-- END DELETE SCRIPT -->
      </footer>
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  {{-- </div> --}}

  <!-- Bootstrap core JavaScript-->
</body>
<!-- END BODY -->

<!-- MODAL ADD -->
<div class="modal fade" id="adduser" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Tambah User</h3>
      </div>
      <div class="modal-body" style="padding-left: 40px">
        <form action="{{ route('register') }}" method="post" >  
          @csrf  
          <div class="row form-group">
            <div class="col-3">
              <label class=""><strong >NRP</strong><span style="color: red">*</span></label>
            </div>
            <div class="col-8">
              <input type="text" name="users_nomor_id" class="form-control" placeholder="Contoh : 0511164000xxxx">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-3">
              <label class=""><strong >NAMA</strong><span style="color: red">*</span></label>
            </div>
            <div class="col-8">
              <input type="text" name="users_nama" class="form-control" placeholder="Nama Pengguna">
            </div>  
          </div>      
          <div class="row form-group">
            <div class="col-3">
              <label class=""><strong >No. HP</strong><span style="color: red">*</span></label>
            </div>
            <div class="col-8">
              <input type="text" name="users_nomorhp" class="form-control" placeholder="Contoh : 0877xxxxxxxx">
            </div>
          </div> 
          <div class="row form-group">
            <div class="col-3">
              <label class=""><strong >Alamat Surabaya</strong><span style="color: red">*</span></label>
            </div>
            <div class="col-8">
              <input type="text" name="users_alamat" class="form-control">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-3">
              <label class=""><strong >Departemen</strong><span style="color: red">*</span></label>
            </div>
            <div class="col-8">
              <select class="form-control" name="users_departemen">
                {{-- <option></option>Required for data-placeholder attribute to work with Select2 plugin --}}
                @foreach($dep as $deps)
                  <option value="{{$deps->departemens_nama}}">{{ $deps->departemens_nama }}</option>
                @endforeach
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
<!-- END MODAL ADD -->
{{-- </div> --}}

<!-- MODAL EDIT -->
<div class="modal fade" id="edituser" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Ubah Data User</h3>
      </div>
      <div class="modal-body" style="padding-left: 40px">
       <form id="form-edit" action="" method="post">
        <input name="_method" type="hidden" value="PATCH">
          @csrf
          <div class="row form-group">
            <div class="col-3">
              <label class=""><strong >NRP</strong><span style="color: red">*</span></label>
            </div>
            <div class="col-8">
              <input type="text" id="users_nomor_id" name="users_nomor_id" class="form-control" disabled>
            </div>
            </div>
              <div class="row form-group">
                <div class="col-3">
                  <label class=""><strong >NAMA</strong><span style="color: red">*</span></label>
                </div>
                <div class="col-8">
                  <input type="text" id="users_nama" name="users_nama" class="form-control" placeholder="Nama Pengguna">
                </div>  
              </div>      
              <div class="row form-group">
                <div class="col-3">
                  <label class=""><strong >No. HP</strong><span style="color: red">*</span></label>
                </div>
                <div class="col-8">
                  <input type="text" id="users_nomorhp" name="users_nomorhp" class="form-control" placeholder="Contoh : 0877xxxxxxxx">
                </div>
              </div> 
              <div class="row form-group">
                <div class="col-3">
                  <label class=""><strong >Alamat Surabaya</strong><span style="color: red">*</span></label>
                </div>
                <div class="col-8">
                  <input type="text" id="users_alamat" name="users_alamat" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-3">
                  <label class=""><strong >Departemen</strong><span style="color: red">*</span></label>
                </div>
                <div class="col-8">
                  <select class="form-control" name="users_departemen" id="users_departemen">
                    {{-- <option disabled="" value="Pilih Pos"></option> --}}
                    @foreach($dep as $deps)
                      <option value="{{$deps->departemens_nama}}">{{ $deps->departemens_nama }}</option>
                    @endforeach
                  </select>                     
                </div>  
              </div>
            </div>                     
            <div style="text-align: right; margin:10px ; margin-right: 40px">
              <button id="btnSubmit" type="submit" class="btn btn-primary btn-hero " name="btnSubmit" ><span class="fa fa-plus-circle" aria-hidden="true"></span>  KIRIM
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- END MODAL EDIT -->

<!-- MODAL DELETE -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form id="delete-form" method="post">
        {{-- <input name="_method" type="hidden" value="delete"> --}}
        @csrf
        <input name="_method" type="hidden" value="DELETE">
        {{-- <input class="form-control hidden" type="text" name="id" value="{{ $user->id }}" disabled> --}}
        <div class="modal-header">
          {{-- <input type="hidden" id="users_nomor_id" name="users_nomor_id" class="form-control" readonly> --}}
          <h5 class="modal-title" id="exampleModalLabel">HAPUS</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Apakah anda yakin menghapus catatan ini?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <button id="btnSubmit" type="submit" class="btn btn-danger" name="btnSubmit" >HAPUS</button>
          {{-- <a id="btn-delete" >Hapus</a> --}}
        </div>
      </form>
      
    </div>
  </div>
</div>
<!-- END MODAL DELETE -->

</html>
