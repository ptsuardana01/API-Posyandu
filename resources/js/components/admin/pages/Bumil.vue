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
                            <router-link class="btn btn-success" style="margin-top: 1.5rem" :to="{ name: 'form-bumil' }">
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
                                        <th scope="col">Nama Bumil</th>
                                        <th scope="col" class="">NIK Bumil</th>
                                        <th scope="col" class="">Tempat, Tanggal Lahir</th>
                                        <th scope="col" class="text-center">Status Bumil</th>
                                        <th scope="col" class="text-center">Tanggal Meninggal</th>
                                        <th scope="col" class="text-center">Petugas Posyandu</th>
                                        <th scope="col" class="text-center">Data Pemeriksaan</th>
                                        <th scope="col" class="text-center">Waktu Data Masuk</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in pemeriksaanBumil" :key="index">
                                        <th scope="row">{{ index + 1 }}</th>
                                        <td>{{ item.nama_ibu }}</td>
                                        <td class="">{{ item.nik_ibu }}</td>
                                        <td>
                                            {{ item.tmpt_lahir_ibu }},
                                            <br />
                                            {{ item.tgl_lahir_ibu }}
                                        </td>
                                        <td class="text-center">
                                            <p v-if="item.stts_bumil == 0">Meninggal</p>
                                            <p v-if="item.stts_bumil == 1">Hidup</p>
                                        </td>
                                        <td class="text-center">
                                            <p v-if="item.stts_bumil == 1">-</p>
                                            <p v-if="item.stts_bumil == 0">{{ item.tgl_meninggal }}</p>
                                        </td>
                                        <td class="text-center">
                                            {{ item.id_kader_bumil }}
                                        </td>
                                        <td class="text-center">
                                            <!-- Vertically centered Modal -->
                                            <button type="button" class="btn btn-info" data-bs-toggle="modal" :data-bs-target="'#verticalycentered' + index"><i class="bi bi-info-circle"></i></button>
                                            <div class="modal fade" :id="'verticalycentered' + index" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Data Pemeriksaan Kehamilan Ibu {{ item.nama_ibu }}</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Table with stripped rows -->
                                                            <table class="table table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-start">Tinggi Badan Bumil</td>
                                                                        <td>:</td>
                                                                        <td class="text-start">{{ item.tb }} cm</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-start">Berat Badan</td>
                                                                        <td>:</td>
                                                                        <td class="text-start">{{ item.bb }} kg</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-start">Lingkar Lengan Bumil</td>
                                                                        <td>:</td>
                                                                        <td class="text-start">{{ item.lila }} cm</td>
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
                                        <td class="text-center">{{ item.created_at }}</td>
                                        <td>
                                            <div class="text-center">
                                                <router-link :to="{ name: 'form-edit-bumil', params: { id: item.id } }" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></router-link>
                                                <button @click="deleteData(item.id)" type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
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
            pemeriksaanBumil: {},
            kehamilan: {},
            ortu: {},
            search: "",
        };
    },
    mounted() {
        this.getPemeriksaanBumil();
        this.getKehamilan();
        this.getIdOrtu();
    },
    methods: {
        getIdOrtu: function () {
            axios.get("/api/ortu").then((response) => {
                this.ortu = response.data.data;
                // console.log(this.ortu);
            });
        },
        getPemeriksaanBumil: function () {
            axios.get("/api/pemeriksaan-bumil").then((response) => {
                this.pemeriksaanBumil = response.data;
                // console.log(this.pemeriksaanBumil);
            });
        },
        getKehamilan: function () {
            axios.get("/api/kehamilan").then((response) => {
                this.kehamilan = response.data.data;
            });
        },
        deleteData: function (id) {
            this.$swal
                .fire({
                    title: "Anda yakin?",
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, Hapus data ini!",
                    cancelButtonText: "Batal",
                })
                .then((result) => {
                    if (result.value) {
                        this.axios.delete("/api/pemeriksaan-bumil/" + id).then((response) => {
                            this.$swal.fire("Terhapus!", "Data Orang Tua berhasil terhapus.", "success");
                        });
                        this.getPemeriksaanBumil();
                    }
                });
        },
    },
};
</script>
