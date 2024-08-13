
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin AllStar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('Alladmin')}}/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="{{asset('Alladmin')}}/vendors/feather/feather.css" />
    <link rel="stylesheet" href="{{asset('Alladmin')}}/vendors/base/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('Alladmin')}}/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="{{asset('Alladmin')}}/vendors/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('Alladmin')}}/vendors/jquery-bar-rating/fontawesome-stars-o.css"/>
    <link rel="stylesheet" href="{{asset('Alladmin')}}/vendors/jquery-bar-rating/fontawesome-stars.css"/>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('Alladmin')}}/css/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('Alladmin')}}/images/favicon.png" />
</head>
<body>
<div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div
          class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"
        >
          <a class="navbar-brand brand-logo" href="index.html"
            ><img src="{{asset('Alladmin')}}/images/allstar.png" alt="logo"
          /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"
            ><img
              src="{{asset('Alladmin')}}/images/allstar.png
            "
              alt="logo"
          /></a>
        </div>
        <div
          class="navbar-menu-wrapper d-flex align-items-center justify-content-end"
        >
          <button
            class="navbar-toggler navbar-toggler align-self-center"
            type="button"
            data-toggle="minimize"
          >
            <span class="icon-menu"></span>
          </button>
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="search">
                    <i class="icon-search"></i>
                  </span>
                </div>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search Projects.."
                  aria-label="search"
                  aria-describedby="search"
                />
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">

          </ul>
          <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-toggle="offcanvas"
          >
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-profile">
            <div class="user-image">
              <img src="{{asset('Alladmin')}}/images/faces/kita2.jpg" />
            </div>
            <div class="user-name">AllStar</div>
            <div class="user-designation">Admin</div>
          </div>
          <ul class="nav">
          <li class="nav-item">
              <a class="nav-link" href="user">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Data User</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard">
                <i class="icon-command menu-icon"></i>
                <span class="menu-title">Data Boneka</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="jenis">
                <i class="icon-command menu-icon"></i>
                <span class="menu-title">Data Jenis Boneka</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="template">
                <i class="icon-box menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}" class="nav-link ">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        <i class="icon-arrow-right menu-icon">
                                            
                          {{ __('Logout') }} </i>
                    </x-responsive-nav-link>
                </form>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-sm-12 mb-4 mb-xl-0">
                
                
              </div>
            </div>
                <div class="container">
        <h1>Data Boneka</h1>
        <a href="javascript:void(0)" class="btn btn-info ml-3" id="create-new-boneka">Add New</a>
        <a href="{{ route('export.pdf') }}" class="btn btn-danger ml-3">Export PDF</a>
        <br><br>
        <table class="table table-bordered table-striped" id="laravel_11_datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Boneka</th>
                    <th>Jenis Boneka</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($boneka as $bonekas)
                <tr id="index_{{ $bonekas->id }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $bonekas->nama }}</td>
                    <td>{{ $bonekas->jenis }}</td>
                    <td>{{ $bonekas->stok }}</td>
                    <td>{{ $bonekas->harga }}</td>
                    <td>
                        @if($bonekas->image)
                            <img src="{{ asset('public/boneka/'.$bonekas->image) }}" width="50">
                        @else
                            No image
                        @endif
                    </td>
                    <td>
                    <a href="javascript:void(0)" id="btn-edit-post" data-id="{{ $bonekas->id }}" class="btn btn-warning btn-sm">
                <i class="fas fa-pencil-alt"></i>
            </a>
            <a href="javascript:void(0)" id="btn-delete-post" data-id="{{ $bonekas->id }}" class="btn btn-danger btn-sm">
                <i class="fas fa-trash-alt"></i>
            </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="ajax-boneka-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="bonekaCrudModal"></h4>
                </div>
                <div class="modal-body">
                    <form id="bonekaForm" name="bonekaForm" class="form-horizontal" enctype="multipart/form-data">
                        <input type="hidden" name="boneka_id" id="boneka_id">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Nama Boneka</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Boneka" value="" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis" class="col-sm-2 control-label">Jenis Boneka</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="jenis" name="jenis" required="">
                                    <option value="" disabled selected>Masukkan Jenis Boneka</option>
                                    <option value="Nendoroid">Nendoroid</option>
                                    <option value="Action Figure">Action Figure</option>
                                    <option value="Petite Character">Petite Character</option>
                                    <option value="Fluffy Doll">Fluffy Doll</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="stok" class="col-sm-2 control-label">Stok</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" id="stok" name="stok" placeholder="Masukkan Stok" value="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga" class="col-sm-2 control-label">Harga</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga" value="" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image" class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-12">
                                <input id="image" type="file" name="image" accept="image/*" onchange="readURL(this);">
                                <input type="hidden" name="hidden_image" id="hidden_image">
                            </div>
                        </div>
                        
                        <img id="modal-preview" src="https://via.placeholder.com/150" alt="Preview" class="form-group hidden" width="100" height="100">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" id="btn-save" value="create">Save changes</button>
                        </div>
                        

                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        var SITEURL = "{{ url('/') }}/";
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#laravel_11_datatable').DataTable();

            $('#create-new-boneka').click(function() {
                $('#btn-save').val("create-boneka");
                $('#boneka_id').val('');
                $('#bonekaForm').trigger("reset");
                $('#bonekaCrudModal').html("Add New Boneka");
                $('#ajax-boneka-modal').modal('show');
                $('#modal-preview').attr('src', 'https://via.placeholder.com/150').addClass('hidden');
            });

            $('body').on('click', '#btn-edit-post', function() {
                var boneka_id = $(this).data('id');
                $.get(SITEURL + 'admin/dashboard/bonekasEdit/' + boneka_id, function(data) {
                    $('#bonekaCrudModal').html("Edit Boneka");
                    $('#btn-save').val("edit-boneka");
                    $('#ajax-boneka-modal').modal('show');
                    $('#boneka_id').val(data.id);
                    $('#nama').val(data.nama);
                    $('#jenis').val(data.jenis);
                    $('#stok').val(data.stok);
                    $('#harga').val(data.harga);
                    if (data.image) {
                        $('#modal-preview').attr('src', SITEURL + 'boneka/' + data.image).removeClass('hidden');
                        $('#hidden_image').val(data.image);
                    } else {
                        $('#modal-preview').attr('src', 'https://via.placeholder.com/150').addClass('hidden');
                    }
                });
            });

            $('body').on('click', '#btn-delete-post', function() {
                var boneka_id = $(this).data("id");
                if (confirm("Are You sure want to delete !")) {
                    $.ajax({
                        type: "GET",
                        url: SITEURL + "admin/dashboard/bonekasDelete/" + boneka_id,
                        success: function(data) {
                            var oTable = $('#laravel_11_datatable').dataTable();
                            oTable.fnDraw(false);
                        },
                        error: function(data) {
                            console.log('Error:', data);
                        }
                    });
                }
            });

            $('body').on('submit', '#bonekaForm', function(e) {
                e.preventDefault();
                var actionType = $('#btn-save').val();
                $('#btn-save').html('Sending..');
                var formData = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: SITEURL + "admin/dashboard/bonekasStore",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        $('#bonekaForm').trigger("reset");
                        $('#ajax-boneka-modal').modal('hide');
                        $('#btn-save').html('Save changes');
                        var oTable = $('#laravel_11_datatable').dataTable();
                        oTable.fnDraw(false);
                    },
                    error: function(data) {
                        console.log('Error:', data);
                        $('#btn-save').html('Save changes');
                    }
                });
            });
        });

        function readURL(input, id) {
            id = id || '#modal-preview';
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(id).attr('src', e.target.result).removeClass('hidden');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    </div> 
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->

          <footer class="footer">
            <center><div>
              <span
                class="text-muted d-block text-center text-sm-left d-sm-inline-block"
                >Copyright © AllStar</span>
            </div></center>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
</body>
</html>
