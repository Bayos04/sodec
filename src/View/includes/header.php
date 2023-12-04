<header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse"
                   href="javascript:void(0)">
                    <i class="ti ti-menu-2"></i>
                </a>
            </li>
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" data-bs-toggle="modal"
                   data-bs-target="#globalSearchModal">
                    <i class="ti ti-search"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav quick-links d-none d-lg-flex">
            <li class="nav-item dropdown hover-dd d-none d-lg-block">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Creer<span
                            class="mt-1"><i class="ti ti-chevron-down"></i></span></a>
                <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                    <div class="row">
                        <div class="col-12">
                            <div class=" ps-7 pt-7">
                                <div class="border-bottom">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="position-relative">
                                                <a href="./app-chat.html"
                                                   class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                                                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                        <img src="src/public/images/svgs/icon-dd-chat.svg"
                                                             alt="" class="img-fluid" width="24" height="24">
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h6 class="mb-1 fw-semibold bg-hover-primary">Chat
                                                            Application</h6>
                                                        <span class="fs-2 d-block text-dark">New messages arrived</span>
                                                    </div>
                                                </a>
                                                <a href="./app-invoice.html"
                                                   class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                                                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                        <img src="src/public/images/svgs/icon-dd-invoice.svg"
                                                             alt="" class="img-fluid" width="24" height="24">
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h6 class="mb-1 fw-semibold bg-hover-primary">Invoice
                                                            App</h6>
                                                        <span class="fs-2 d-block text-dark">Get latest invoice</span>
                                                    </div>
                                                </a>
                                                <a href="./app-contact2.html"
                                                   class="d-flex align-items-center pb-9 position-relative text-decoration-none text-decoration-none text-decoration-none text-decoration-none">
                                                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                        <img src="src/public/images/svgs/icon-dd-mobile.svg"
                                                             alt="" class="img-fluid" width="24" height="24">
                                                    </div>
                                                    <div class="d-inline-block">
                                                        <h6 class="mb-1 fw-semibold bg-hover-primary">Contact
                                                            Application</h6>
                                                        <span class="fs-2 d-block text-dark">2 Unsaved Contacts</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="d-block d-lg-none">
            <img src="src/public/images/logos/dark-logo.svg" class="dark-logo" width="180" alt=""/>
            <img src="src/public/images/logos/light-logo.svg" class="light-logo" width="180" alt=""/>
        </div>
        <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
              <span class="p-2">
                <i class="ti ti-dots fs-7"></i>
              </span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div class="d-flex align-items-center justify-content-between">
                <a href="javascript:void(0)"
                   class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button"
                   data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                   aria-controls="offcanvasWithBothOptions">
                    <i class="ti ti-align-justified fs-7"></i>
                </a>
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" onclick="toggleTheme('src/public/css/style-dark.min.css')" id="drop2"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-moon"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-bell-ringing"></i>
                            <div class="notification bg-primary rounded-circle"></div>
                        </a>
                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                             aria-labelledby="drop2">
                            <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                            </div>
                            <div class="message-body" data-simplebar>
                                <a href="javascript:void(0)"
                                   class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="src/public/images/profile/user-1.jpg" alt="user" class="rounded-circle" width="48"
                                 height="48"/>
                          </span>
                                    <div class="w-75 d-inline-block v-middle">
                                        <h6 class="mb-1 fw-semibold">Roman Joined the Team!</h6>
                                        <span class="d-block">Congratulate him</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0)"
                                   class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="src/public/images/profile/user-2.jpg" alt="user" class="rounded-circle" width="48"
                                 height="48"/>
                          </span>
                                    <div class="w-75 d-inline-block v-middle">
                                        <h6 class="mb-1 fw-semibold">New message</h6>
                                        <span class="d-block">Salma sent you new message</span>
                                    </div>
                                </a>
                            </div>
                            <!--<div class="py-6 px-7 mb-1">
                                <button class="btn btn-outline-primary w-100">Toutes le notifications</button>
                            </div>-->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="user-profile-img">
                                    <img src="src/public/images/profile/user-1.jpg" class="rounded-circle"
                                         width="35" height="35" alt=""/>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                             aria-labelledby="drop1">
                            <div class="profile-dropdown position-relative" data-simplebar>
                                <div class="py-3 px-7 pb-0">
                                    <h5 class="mb-0 fs-5 fw-semibold">Profil</h5>
                                </div>
                                <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                    <img src="src/public/images/profile/user-1.jpg" class="rounded-circle"
                                         width="80" height="80" alt=""/>
                                    <div class="ms-3">
                                        <h5 class="mb-1 fs-3">Mathew Anderson</h5>
                                        <span class="mb-1 d-block text-dark">Designer</span>
                                        <p class="mb-0 d-flex text-dark align-items-center gap-2">
                                            <i class="ti ti-mail fs-4"></i> info@modernize.com
                                        </p>
                                    </div>
                                </div>
                                <div class="message-body">
                                    <a href="/profile"
                                       class="py-8 px-7 mt-8 d-flex align-items-center">
                                        <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                                          <img src="src/public/images/svgs/icon-account.svg" alt="" width="24"
                                               height="24">
                                        </span>
                                        <div class="w-75 d-inline-block v-middle ps-3">
                                            <h6 class="mb-1 bg-hover-primary fw-semibold"> My Profile </h6>
                                            <span class="d-block text-dark">Account Settings</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="d-grid py-4 px-7 pt-8">
                                    <a href="/logout" class="btn btn-outline-primary">Déconnexion</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<?php
require "modals/search.php";
?>

<!--  Mobilenavbar -->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
     aria-labelledby="offcanvasWithBothOptionsLabel">
    <nav class="sidebar-nav scroll-sidebar">
        <div class="offcanvas-header justify-content-between">
            <img src="src/public/images/logos/favicon.ico" alt="" class="img-fluid">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body profile-dropdown mobile-navbar" data-simplebar="" data-simplebar>
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span>
                  <i class="ti ti-apps"></i>
                </span>
                        <span class="hide-menu">Créer</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level my-3">
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="src/public/images/svgs/icon-dd-chat.svg" alt="" class="img-fluid"
                                         width="24" height="24">
                                </div>
                                <div class="d-inline-block">
                                    <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">New messages arrived</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="src/public/images/svgs/icon-dd-invoice.svg" alt="" class="img-fluid"
                                         width="24" height="24">
                                </div>
                                <div class="d-inline-block">
                                    <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">Get latest invoice</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="src/public/images/svgs/icon-dd-mobile.svg" alt="" class="img-fluid"
                                         width="24" height="24">
                                </div>
                                <div class="d-inline-block">
                                    <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">2 Unsaved Contacts</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>