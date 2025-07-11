<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SeoDash Free Bootstrap Admin Template by Adminmart</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('/assets/images/logos/seodashlogo.png')}}" />
    <link rel="stylesheet" href="{{asset('/node_modules/simplebar/dist/simplebar.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/styles.min.css')}}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="{{asset('/assets/images/logos/logo-light.svg')}}" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                            <span class="hide-menu">Pesan</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./index.html" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Booking </span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                            <span class="hide-menu">LIST</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:layers-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Jenis </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:danger-circle-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Waktu Pengembalian</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:bookmark-square-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Pesanan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:file-text-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Staff</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-6" class="fs-6"></iconify-icon>
                            <span class="hide-menu">AUTH</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="login.blade.php" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:login-3-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Login</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:user-plus-rounded-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Register</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                        </li>
                        <li class="sidebar-item">
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <a href="#" target="_blank"
                                class="btn btn-success"><span class="d-none d-md-block">Bilal</span> <span class="d-block d-md-none">Free</span></a>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block" class="nav-link" href="{{ route('logout') }}" More actions
                                            onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Welcome</h5>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <a href="/pelanggan/tambah" class="btn btn-primary btn-sm"><i class="fa fa-user-plus"></i> Tambah Data</a>
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">NIDN</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ( $pelanggan as $data)
                                        <tr>
                                            <th scope="row">{{$nomor++}}</th>
                                            <td>{{$data->nidn}}</td>
                                            <td>{{$data->nama}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>
                                                <a href="" class="btn btn-warning btn-sm"><i class="fa fa-info"></i></a>
                                                <a href="/dosen/edit/{{$data->id}}" class="btn btn-info btn-sm"><i class="fa fa-pen"></i></a>


                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$data->id}}">
                                                    <i class="fa fa-trash"></i>
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Yakin Data Dosen a.n. {{$data->nama}} ingin dihapus?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                <form action="dosen/{{$data->id}}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <th colspan="5" scope="row">Data Tidak Ada</th>
                                        </tr>
                                        @endforelse


                                    </tbody>
                                </table>
                            </div>
                            <p class="mb-0"> </p>
                        </div>
                    </div>
                    <div class="py-6 px-6 text-center">
                        <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
                                class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Made By <a href="https://www.instagram.com/rnabilal?igsh=MW00OXA5cnIzN3d1cg==" target="_blank"
                                class="pe-1 text-primary text-decoration-underline">Rifqi Nabilal</a></p>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{asset('/assets/libs/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('/assets/libs/simplebar/dist/simplebar.js')}}"></script>
        <script src="{{asset('/assets/js/sidebarmenu.js')}}"></script>
        <script src="{{asset('/assets/js/app.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>