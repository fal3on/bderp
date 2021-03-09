<!DOCTYPE html>
<html lang="es" class="has-navbar-fixed-top">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="https://kit.fontawesome.com/48b003ed0f.js" crossorigin="anonymous"></script>

    <title>Inventario</title>
</head>
<body>
     <!--Top bar-->
     <nav class="navbar is-fixed-top box-shadow-y has-background-black">
            <div class="navbar-brand">
                <a href="#" class="navbar-burger toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <a href="#" class="navbar-item">
                    <img src="../../assets/img/erp-logo.png" alt="#" class="brand">
                </a>
                <a href="#" class="navbar-burger nav-toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="navbar-menu has-background-black">
                <div class="navbar-end">
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a href="" class="navbar-link">
                                <i class="fas fa-user-circle icon"></i>Cuenta</a>
                                <div class="navbar-dropdown is-right">
                                    <a href="../../index.html" class="navbar-item">Salir</a>
                                </div>

                        </div>
                </div>
            </div>
        </nav>
        <!--Top bar-->
        <!--side bar-->
        <div class="columns is-variable is-0 x">
            <div>
                <div class="menu-container px-1 has-background-black">
                    <div class="menu-wrapper py-1">

                        <aside class="aside is-placed-left ">
                            <div class="menu is-menu-main mt-6"></div>
                            <p class="menu-label">General</p>
                            <ul class="menu-list">
                                <li>
                                    <a href="home.html" class="has-icon">
                                        <span class="icon">
                                            <i class="fas fa-home"></i>
                                        </span>
                                        <span class="menu-item-label">Home</span>
                                    </a>
                                </li>
                            </ul>
                            <p class="menu-label">Modulos</p>
                            <ul class="menu-list">
                                <li>
                                    <a href="inventario.html" class="is-active router-link-active has-icon">
                                        <span class="icon">
                                            <i class="fas fa-box-open"></i>
                                        </span>
                                        <span class="menu-item-label">Inventario</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ventas.html" class="has-icon">
                                        <span class="icon">
                                            <i class="fas fa-money-bill-wave"></i>
                                        </span>
                                        <span class="menu-item-label">Ventas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="rh.html" class="has-icon">
                                        <span class="icon">
                                            <i class="fas fa-user-friends"></i>
                                        </span>
                                        <span class="menu-item-label">R.H</span>
                                    </a>
                                </li>
                            </ul>
                            
                            <footer class="footer has-background-black">
                                <div class="content has-text-centered is-small">
                                  <p>
                                    <strong>BitDesignERP © 2020</strong><br>Designed by <a href="https://twitter.com/faleon_dev">F A L E O N</a>.
                                  </p>
                                </div>
                              </footer>
                            


                            <div class="side-end">
                                <a href="#" id="myBtn" class="has-icon">
                                    <span class="icon is-small">
                                        <i class="fas fa-question"></i>
                                    </span>
                                    <span class="menu-item-label">About</span>
                                </a>
                            </div>

                            
                        </aside>
                    </div>
                </div>
            </div>
<!--side bar-->