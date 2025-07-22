<div class="vertical-menu">
    <div data-simplebar class="h-100">

        <div class="user-sidebar text-center">
            <div class="dropdown">
                <div class="user-img">
                    <img src="../assets/img/users/avatar-7.jpg" alt="" class="rounded-circle">
                    <span class="avatar-online bg-success"></span>
                </div>
                <div class="user-info">
                    <h5 class="mt-3 font-size-16 text-white">James Raphael</h5>
                    <span class="font-size-13 text-white-50">Administrator</span>
                </div>
            </div>
        </div>

        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <?php
                    $sidebar = require '../config/sidebar.php';

                    // Ambil nama file (misal: index.php)
                    $currentScript = basename($_SERVER['SCRIPT_NAME']);  // index.php
                    $currentPage = $_GET['page'] ?? null;

                    foreach ($sidebar as $item) {
                        $route = $item['route'];
                        $isActive = false;

                        // Jika pakai ?page=xxx
                        if (strpos($route, '?page=') !== false && $currentPage !== null) {
                            $routePage = explode('=', $route)[1];
                            if ($routePage === $currentPage) {
                                $isActive = true;
                            }
                        }

                        // Jika tidak pakai ?page= (misal index.php langsung)
                        if ($currentPage === null && basename($route) === $currentScript) {
                            $isActive = true;
                        }

                        // Output HTML, class 'active' di <a>
                        echo '
                            <li>
                                <a href="' . $route . '" class="waves-effect ' . ($isActive ? 'active' : '') . '">
                                    <i class="' . $item['icon'] . '"></i>
                                    <span>' . $item['title'] . '</span>
                                </a>
                            </li>';
                    }
                ?>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
