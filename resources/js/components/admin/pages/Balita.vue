<template>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Balita</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'dashboard' }"><i class="bi bi-house-door"></i></router-link>
                    </li>
                    <li class="breadcrumb-item active">Balita</li>
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
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">TTL</th>
                                        <th scope="col" class="text-center">Gender</th>
                                        <th scope="col">Detail Ortu</th>
                                        <th scope="col">Status Balita</th>
                                        <th scope="col" class="text-center">Tanggal Meninggal</th>
                                        <th scope="col" class="text-center">Petugas Posyandu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in balitas" :key="index">
                                        <th scope="row">{{ index + 1 }}</th>
                                        <td>{{ item.nama }}</td>
                                        <td>{{ item.tmpt_lahir }}, {{ item.tgl_lahir }}</td>
                                        <td class="text-center">
                                            <p v-if="item.jk == 0">Perempuan</p>
                                            <p v-if="item.jk == 1">Laki-laki</p>
                                        </td>
                                        <td>
                                            modal
                                        </td>
                                        <td class="text-center">
                                            <p v-if="item.stts_balita == 0">Meniggal</p>
                                            <p v-if="item.stts_balita == 1">Hidup</p>
                                        </td>
                                        <td class="text-center">
                                            <p v-if="item.tgl_meninggal == NULL"> - </p>
                                            <p v-if="item.tgl_meninggal != NULL"> {{ item.tgl_meninggal }} </p>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <a href="" class="btn btn-outline-warning"><i class="bi bi-pencil-fill"></i></a>
                                                <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
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
            balitas: {},
        };
    },
    mounted() {
        // axios.get("/api/balita").then((response) => {
        //     console.log(response);
        //});
        this.getDataBalitas();
    },
    methods: {
        getDataBalitas: function () {
            axios.get("/api/balita").then((response) => {
                this.balitas = response.data.data;
            });
        },
    },
}
</script>
