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
                <a class="nav-link collapsed" data-bs-target="#orang-tua" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>Orang Tua</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="orang-tua" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li class="nav-item">
                        <router-link class="nav-link collapsed" :to="{ name: 'ortu' }">
                            <i class="bi bi-grid"></i>
                            <span>Data Orang Tua</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link class="nav-link collapsed" :to="{ name: 'bumil' }">
                            <i class="bi bi-grid"></i>
                            <span>Data Permeriksaan Bumil</span>
                        </router-link>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#balita" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>Balita</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="balita" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li class="nav-item">
                        <router-link class="nav-link collapsed" :to="{ name: 'balita' }">
                            <i class="bi bi-grid"></i>
                            <span>Data Balita</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link class="nav-link collapsed" :to="{ name: 'pemeriksaan-balita' }">
                            <i class="bi bi-grid"></i>
                            <span>Data Permeriksaan Balita</span>
                        </router-link>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>Tables</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <router-link :to="{ name: '' }">
                            <i class="bi bi-circle"></i>
                            <span>General Tables</span>
                        </router-link>
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
