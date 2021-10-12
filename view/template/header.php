<header class="page-header" role="banner">
    <!-- we need this logo when user switches to nav-function-top -->
    <div class="page-logo">
        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative"
           data-toggle="modal" data-target="#modal-shortcut">
            <img src="./assets/img/fader-face.jpg" alt="Fader" aria-roledescription="logo">
            <span class="page-logo-text mr-1">Fader</span>
            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
        </a>
    </div>
    <!-- DOC: nav menu layout change shortcut -->
    <div class="hidden-md-down dropdown-icon-menu position-relative">
        <a href="#" class="header-btn btn js-waves-off" data-action="toggle"
           data-class="nav-function-hidden" title="Hide Navigation">
            <i class="ni ni-menu"></i>
        </a>
        <ul>
            <li>
                <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify"
                   title="Minify Navigation">
                    <i class="ni ni-minify-nav"></i>
                </a>
            </li>
            <li>
                <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed"
                   title="Lock Navigation">
                    <i class="ni ni-lock-nav"></i>
                </a>
            </li>
        </ul>
    </div>
    <!-- DOC: mobile button appears during mobile width -->
    <div class="hidden-lg-up">
        <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
            <i class="ni ni-menu"></i>
        </a>
    </div>
    <div class="ml-auto d-flex">
        <!-- app settings -->
        <div class="hidden-md-down">
            <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
                <i class="fal fa-cog"></i>
            </a>
        </div>

        <!-- app notification -->
        <div>
            <a href="#" class="header-icon" data-toggle="dropdown" title="You got 11 notifications">
                <i class="fal fa-bell"></i>
                <span class="badge badge-icon">11</span>
            </a>
            <div class="dropdown-menu dropdown-menu-animated dropdown-xl">
                <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top mb-2">
                    <h4 class="m-0 text-center color-white">
                        11 New
                        <small class="mb-0 opacity-80">User Notifications</small>
                    </h4>
                </div>
                <ul class="nav nav-tabs nav-tabs-clean" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link px-4 fs-md js-waves-on fw-500" data-toggle="tab"
                           href="#tab-messages" data-i18n="drpdwn.messages">Messages</a>
                    </li>
                </ul>
                <div class="tab-content tab-notification">
                    <div class="tab-pane active p-3 text-center">
                        <h5 class="mt-4 pt-4 fw-500">
                                                <span class="d-block fa-3x pb-4 text-muted">
                                                    <i class="ni ni-arrow-up text-gradient opacity-70"></i>
                                                </span> Select a tab above to activate
                            <small class="mt-3 fs-b fw-400 text-muted">
                                This blank page message helps protect your privacy, or you can show the
                                first message here automatically through
                                <a href="#">settings page</a>
                            </small>
                        </h5>
                    </div>
                    <div class="tab-pane" id="tab-messages" role="tabpanel">
                        <div class="custom-scroll h-100">
                            <ul class="notification">
                                <li class="unread">
                                    <a href="#" class="d-flex align-items-center">
                                                            <span class="status mr-2">
                                                                <span class="profile-image rounded-circle d-inline-block"
                                                                      style="background-image:url('img/demo/avatars/avatar-c.png')"></span>
                                                            </span>
                                        <span class="d-flex flex-column flex-1 ml-1">
                                                                <span class="name">Melissa Ayre <span
                                                                        class="badge badge-primary fw-n position-absolute pos-top pos-right mt-1">INBOX</span></span>
                                                                <span class="msg-a fs-sm">Re: New security codes</span>
                                                                <span class="msg-b fs-xs">Hello again and thanks for being part...</span>
                                                                <span class="fs-nano text-muted mt-1">56 seconds ago</span>
                                                            </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- app user menu -->
        <div>
            <a href="#" data-toggle="dropdown" title="drlantern@gotbootstrap.com"
               class="header-icon d-flex align-items-center justify-content-center ml-2">
                <img src="./assets/img/fader-face.jpg" class="profile-image rounded-circle"
                     alt="Fader Azevedo Macuvele">
                <!-- you can also add username next to the avatar with the codes below:
                <span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">Me</span>
                <i class="ni ni-chevron-down hidden-xs-down"></i> -->
            </a>
            <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                    <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                            <span class="mr-2">
                                                <img src="./assets/img/fader-face.jpg"
                                                     class="rounded-circle profile-image" alt="Fader">
                                            </span>
                        <div class="info-card-text">
                            <div class="fs-lg text-truncate text-truncate-lg">Fader</div>
                            <span class="text-truncate text-truncate-md opacity-80">fader@fader.com</span>
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider m-0"></div>
                <a href="#" class="dropdown-item" data-action="app-fullscreen">
                    <span data-i18n="drpdwn.fullscreen">Fullscreen</span>
                    <i class="float-right text-muted fw-n">F11</i>
                </a>
                <div class="dropdown-multilevel dropdown-multilevel-left">
                    <div class="dropdown-item">
                        Language
                    </div>
                    <div class="dropdown-menu">
                        <a href="#?lang=fr" class="dropdown-item active" data-action="lang"
                           data-lang="fr">Portuguese</a>
                        <a href="#?lang=en" class="dropdown-item" data-action="lang" data-lang="en">English
                            (US)</a>
                    </div>
                </div>
                <div class="dropdown-divider m-0"></div>
                <a class="dropdown-item fw-500 pt-3 pb-3" href="page_login.html">
                    <span data-i18n="drpdwn.page-logout">Logout</span>
                </a>
            </div>
        </div>
    </div>
</header>
