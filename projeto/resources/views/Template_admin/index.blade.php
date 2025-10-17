<!-- Correções aplicadas -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Meu Sistema - Dashboard</title>

    <!-- Fonts -->
    <link href="/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- Styles -->
    <link href="/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('clientes') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <hr class="sidebar-divider my-0">

            <!-- Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('clientes') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <!-- Interface Heading -->
            <div class="sidebar-heading">Interface</div>

            <!-- Components -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseComponents"
                    aria-expanded="true" aria-controls="collapseComponents">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseComponents" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Utilities -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1"
                    aria-expanded="true" aria-controls="collapseUtilities1">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">

            <!-- Addons -->
            <div class="sidebar-heading">Addons</div>

            <!-- Pages -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesGeneral"
                    aria-expanded="true" aria-controls="collapsePagesGeneral">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePagesGeneral" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Clientes -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClientes"
                    aria-expanded="false" aria-controls="collapseClientes">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Clientes</span>
                </a>
                <div id="collapseClientes" class="collapse" aria-labelledby="headingClientes"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Clientes Opções:</h6>
                        <a class="collapse-item" href="{{ route('cliente.novo') }}">Cadastrar</a>
                        <a class="collapse-item" href="{{ route('clientes') }}">Registros</a>
                    </div>
                </div>
            </li>


            <!-- Produtos -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProdutos"
                    aria-expanded="true" aria-controls="collapseProdutos">
                    <i class="fas fa-fw fa-boxes"></i>
                    <span>Produtos</span>
                </a>
                <div id="collapseProdutos" class="collapse" aria-labelledby="headingProdutos"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Produtos Opções:</h6>
                        <a class="collapse-item" href="{{ route('cadastrar.produto') }}">
                            <i class="fas fa-plus"></i> Cadastrar
                        </a>
                        <a class="collapse-item" href="{{ route('produtos.index') }}">
                            <i class="fas fa-clipboard-list"></i> Registros
                        </a>
                    </div>
                </div>
            </li>


                        <!-- Carros -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCar"
                    aria-expanded="true" aria-controls="collapseCar">
                    <i class="fas fa-fw fa-car"></i>
                    <span>Carros</span>
                </a>
                <div id="collapseCar" class="collapse" aria-labelledby="headingCar"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Carros Opções:</h6>
                        <a class="collapse-item" href="{{ route('novo.carro') }}">
                            <i class="fas fa-plus"></i> Cadastrar
                        </a>
                        <a class="collapse-item" href="{{ route('carros.index') }}">
                            <i class="fas fa-clipboard-list"></i> Registros
                        </a>
                    </div>
                </div>
            </li>

            <!-- Pokemons -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pokemon.index') }}">
                    <img src="https://img.pokemondb.net/sprites/items/poke-ball.png" alt="Pokébola"
                        style="width:24px; height:auto;">
                    <span>Pokemons</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="/admin/img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
                    Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <!-- (topbar code permanece igual) -->

                <!-- Page Content -->
                <div class="container-fluid">
                    @yield("conteudo")
                </div>

            </div>

            <!-- jQuery -->
            <script src="/admin/vendor/jquery/jquery.min.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- jQuery Easing Plugin -->
            <script src="/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- SB Admin 2 Custom scripts -->
            <script src="/admin/js/sb-admin-2.min.js"></script>


</body>

</html>