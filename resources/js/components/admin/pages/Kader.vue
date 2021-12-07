<template>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Petugas Posyandu</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="bi bi-house-door"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Petugas Posyandu</li>
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
                            <div class="btn btn-success" style="margin-top: 1.5rem;">
                                <i class="bi bi-file-earmark-plus"></i>
                                Tambah Data
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode Petugas</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">TTL</th>
                                        <th scope="col" class="text-center">Gender</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col" class="text-center">Telp</th>
                                        <th scope="col" class="text-center">Email</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in kaders" :key="index">
                                        <th scope="row">{{ item.kd_kader }}</th>
                                        <td>{{ item.nama }}</td>
                                        <td>{{ item.nik }}</td>
                                        <td>{{ item.tmpt_lahir }}, {{ item.tgl_lahir }}</td>
                                        <td class="text-center">
                                            <p v-if="item.jk == 0">Wanita</p>
                                            <p v-if="item.jk == 1">Pria</p>
                                        </td>
                                        <td>{{ item.alamat }}</td>
                                        <td>{{ item.telp }}</td>
                                        <td>{{ item.email }}</td>
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
            kaders: {},
        };
    },
    mounted() {
        // axios.get("/api/kader").then((response) => {
        //     console.log(response);
        //});
        this.getDataKaders();
    },
    methods: {
        getDataKaders: function () {
            axios.get("/api/kader").then((response) => {
                this.kaders = response.data.data;
            });
        },
    },
};
</script>
