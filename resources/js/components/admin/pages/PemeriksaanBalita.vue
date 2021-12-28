<template>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Pemeriksaan Balita</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'dashboard' }"><i class="bi bi-house-door"></i></router-link>
                    </li>
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'balita' }">Balita</router-link>
                    </li>
                    <li class="breadcrumb-item active">
                        <router-link :to="{ name: 'pemeriksaan-balita' }">Pemeriksaan Balita</router-link>
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
                            <router-link class="btn btn-success" style="margin-top: 1.5rem" :to="{ name: 'form-balita' }">
                                <i class="bi bi-file-earmark-plus"></i>
                                Tambah Data
                            </router-link>

                            <div class="dataTable-search text-end">
                                <input class="dataTable-input" placeholder="Search..." type="text" v-model="search" />
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Balita</th>
                                        <th scope="col" class="">Tempat, Tanggal Lahir</th>
                                        <th scope="col" class="text-center">Status Balita</th>
                                        <th scope="col" class="text-center">Tanggal Meninggal</th>
                                        <th scope="col" class="text-center">Petugas Posyandu</th>
                                        <th scope="col" class="text-center">Data Pemeriksaan</th>
                                        <th scope="col" class="text-center">Waktu Data Masuk</th>
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
<script>
export default {
    data() {
        return {
            balita: {},
            pemeriksaanBalita: {},
            search: "",
        };
    },
    mounted() {},
    methods: {
        getBalita: function () {
            axios.get("/api/balita").then((response) => {
                this.balita = response.data.data;
                console.log(this.balita);
            });
        },
    },
};
</script>
