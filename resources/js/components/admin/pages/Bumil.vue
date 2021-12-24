<template>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Bumil</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'dashboard' }"><i class="bi bi-house-door"></i></router-link>
                    </li>
                    <li class="breadcrumb-item active">Orang Tua</li>
                    <li class="breadcrumb-item active">
                        <router-link :to="{ name: 'bumil' }">Data Pemeriksaan Bumil</router-link>
                    </li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- <h5 class="card-title">Data Petugas Posyandu</h5> -->
                            <div class="btn btn-success" style="margin-top: 1.5rem">
                                <i class="bi bi-file-earmark-plus"></i>
                                Tambah Data
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Bumil</th>
                                        <th scope="col" class="text-center">NIK Bumil</th>
                                        <th scope="col" class="text-center">TTL</th>
                                        <th scope="col" class="text-center">Status Bumil</th>
                                        <th scope="col" class="text-center">Info Orang Tua</th>
                                        <th scope="col" class="text-center">Tanggal Meninggal</th>
                                        <th scope="col" class="text-center">Petugas Posyandu</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>
