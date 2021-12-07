<template>
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <router-link class="nav-link" :to="{ name: 'dashboard' }">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </router-link>
            </li>
            <!-- End Dashboard Nav -->

            <li class="nav-item">
                <router-link class="nav-link collapsed" :to="{ name: 'kader' }">
                    <i class="bi bi-grid"></i>
                    <span>Petugas Posyandu</span>
                </router-link>
            </li>

            <li class="nav-item">
                <router-link class="nav-link collapsed" :to="{ name: '' }">
                    <i class="bi bi-grid"></i>
                    <span>Orang Tua</span>
                </router-link>
            </li>

            <li class="nav-item">
                <router-link class="nav-link collapsed" :to="{ name: '' }">
                    <i class="bi bi-grid"></i>
                    <span>Balita</span>
                </router-link>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>Tables</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="tables-general.html">
                            <i class="bi bi-circle"></i>
                            <span>General Tables</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-data.html">
                            <i class="bi bi-circle"></i>
                            <span>Data Tables</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Tables Nav -->

        </ul>
    </aside>
    <!-- End Sidebar-->
</template>
