<template>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Orang Tua</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'dashboard' }"><i class="bi bi-house-door"></i></router-link>
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
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Ibu</th>
                                        <th scope="col">Nama Ayah</th>
                                        <th scope="col" class="text-center">NIK Ibu</th>
                                        <th scope="col" class="text-center">NIK Ayah</th>
                                        <th scope="col" class="text-center">Info Orang Tua</th>
                                        <th scope="col" class="text-center">Status Bumil</th>
                                        <th scope="col" class="text-center">Tanggal Meninggal</th>
                                        <th scope="col" class="text-center">Info Bumil</th>
                                        <th scope="col" class="text-center">Petugas Posyandu</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in datas.ortus" :key="index">
                                        <th scope="row">{{ index + 1 }}</th>
                                        <td>{{ item.nama_ibu }}</td>
                                        <td>{{ item.nama_ayah }}</td>
                                        <td>{{ item.nik_ibu }}</td>
                                        <td>{{ item.nik_ayah }}</td>
                                        <td class="text-center">
                                            <!-- Vertically centered Modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" :data-bs-target="'#infoOrtu' + index">Detail</button>
                                            <div class="modal fade" :id="'infoOrtu' + index" tabindex="-1">
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
                                                                        <td>:</td>
                                                                        <td class="text-start">{{ item.tmpt_lahir_ibu }}, {{ item.tgl_lahir_ibu }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-start">TTL Ayah</td>
                                                                        <td>:</td>
                                                                        <td class="text-start">{{ item.tmpt_lahir_ayah }}, {{ item.tgl_lahir_ayah }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-start">Alamat Ortu</td>
                                                                        <td>:</td>
                                                                        <td class="text-start">{{ item.alamat }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-start">Telpon</td>
                                                                        <td>:</td>
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
                                            <p v-if="item.tgl_meninggal == NULL">-</p>
                                            <p v-if="item.tgl_meninggal != NULL">{{ item.tgl_meninggal }}</p>
                                        </td>
                                        <td class="text-center">
                                            <!-- Vertically centered Modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" :data-bs-target="'#infoBumil' + index">Detail</button>
                                            <div class="modal fade" :id="'infoBumil' + index" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Detail Pemeriksaan Bumil</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Table with stripped rows -->
                                                            <table class="table table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-start">Tinggi Badan Bumil</td>
                                                                        <td>:</td>
                                                                        <td class="text-start">{{ datas.pemeriksaanBumils.tb }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-start">Berat Badan</td>
                                                                        <td>:</td>
                                                                        <td class="text-start">{{ item.bb }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-start">Lingkar Lengan Bumil</td>
                                                                        <td>:</td>
                                                                        <td class="text-start">{{ item.lila }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-start">Keterangan</td>
                                                                        <td>:</td>
                                                                        <td class="text-start">{{ item.ket }}</td>
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
            datas: {
                ortus: {},
                kehamilans: {},
                pemeriksaanBumils: {},
            },
        };
    },
    mounted() {
        // axios.get("/api/kader").then((response) => {
        //     console.log(response);
        //});
        this.getDataOrtus();
        this.getKehamilan();
        this.getPemeriksaanBumil();
    },
    methods: {
        getDataOrtus: function () {
            axios.get("/api/ortu").then((response) => {
                this.datas.ortus = response.data.data;
            });
        },
        getKehamilan: function () {
            axios.get("/api/kehamilan").then((response) => {
                this.datas.kehamilans = response.data.data;
            });
        },
        getPemeriksaanBumil: function () {
            axios.get("/api/pemeriksaan-bumil").then((response) => {
                this.datas.pemeriksaanBumils = response.data.data;
            });
        },
    },
};
</script>
