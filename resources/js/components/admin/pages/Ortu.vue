<template>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Orang Tua</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="bi bi-house-door"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Orang Tua</li>
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
                                        <th scope="col">Nama Ibu</th>
                                        <th scope="col">Nama Ayah</th>
                                        <th scope="col" class="text-center">NIK Ibu</th>
                                        <th scope="col" class="text-center">NIK Ayah</th>
                                        <th scope="col" class="text-center">Keterangan Orang Tua</th>
                                        <th scope="col" class="text-center">Status Bumil</th>
                                        <th scope="col" class="text-center">Tanggal Meninggal</th>
                                        <th scope="col" class="text-center">Nama Kader</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in ortus" :key="index">
                                        <th scope="row">{{ index + 1 }}</th>
                                        <td>{{ item.nama_ibu }}</td>
                                        <td>{{ item.nama_ayah }}</td>
                                        <td>{{ item.nik_ibu }}</td>
                                        <td>{{ item.nik_ayah }}</td>
                                        <td class="text-center">
                                            <!-- Vertically centered Modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">Detail</button>
                                            <div class="modal fade" id="verticalycentered" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Detail Orang Tua</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Table with stripped rows -->
                                                            <table class="table table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-start">TTL Ibu</td>
                                                                        <td> : </td>
                                                                        <td class="text-start">{{ item.tmpt_lahir_ibu }}, {{ item.tgl_lahir_ibu }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-start">TTL Ayah</td>
                                                                        <td> : </td>
                                                                        <td class="text-start">{{ item.tmpt_lahir_ayah }}, {{ item.tgl_lahir_ayah }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-start">Alamat Ortu</td>
                                                                        <td> : </td>
                                                                        <td class="text-start">{{ item.alamat }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-start">Telpon</td>
                                                                        <td> : </td>
                                                                        <td class="text-start">{{ item.telp }}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- End Table with stripped rows -->
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Vertically centered Modal-->
                                        </td>
                                        <td class="text-center">
                                            <p v-if="item.stts_bumil == 0">Meniggal</p>
                                            <p v-if="item.stts_bumil == 1">Hidup</p>
                                        </td>
                                        <td class="text-center">
                                            <p v-if="item.tgl_meninggal == NULL"> - </p>
                                            <p v-if="item.tgl_meninggal != NULL"> {{ item.tgl_meninggal }} </p>
                                        </td>
                                        <td>{{ item.nama_kader }}</td>
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
            ortus: {},
            title: "hallo",
        };
    },
    mounted() {
        // axios.get("/api/kader").then((response) => {
        //     console.log(response);
        //});
        this.getDataOrtus();
    },
    methods: {
        getDataOrtus: function () {
            axios.get("/api/ortu").then((response) => {
                this.ortus = response.data.data;
            });
        },
    },
};
</script>
