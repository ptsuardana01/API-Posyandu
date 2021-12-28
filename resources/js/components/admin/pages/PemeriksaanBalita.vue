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
                            <router-link class="btn btn-success" style="margin-top: 1.5rem" :to="{ name: 'form-pemeriksaan-balita' }">
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
                                        <th scope="col">Tempat, Tanggal Lahir</th>
                                        <th scope="col" class="text-center">Status Balita</th>
                                        <th scope="col" class="text-center">Tanggal Meninggal</th>
                                        <th scope="col" class="text-center">Petugas Posyandu</th>
                                        <th scope="col" class="text-center">Data Pemeriksaan</th>
                                        <th scope="col" class="text-center">Waktu Data Masuk</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in pemeriksaanBalita" :key="index">
                                        <th scope="row">{{ index + 1 }}</th>
                                        <td>{{ item.nama }}</td>
                                        <td>
                                            {{ item.tmpt_lahir }},
                                            <br />
                                            {{ item.tgl_lahir }}
                                        </td>
                                        <td class="text-center">
                                            <p v-if="item.stts_balita == 0" class="badge bg-secondary">Meninggal</p>
                                            <p v-if="item.stts_balita == 1" class="badge bg-light text-dark">Hidup</p>
                                        </td>
                                        <td class="text-center">
                                            <p v-if="item.stts_balita == 1">-</p>
                                            <p v-if="item.stts_balita == 0">{{ item.tgl_meninggal }}</p>
                                        </td>
                                        <td class="text-center">
                                            {{ item.id_kader_balita }}
                                        </td>
                                        <td class="text-center">
                                            <!-- Vertically centered Modal -->
                                            <button type="button" class="btn btn-info" data-bs-toggle="modal" :data-bs-target="'#verticalycentered' + index"><i class="bi bi-info-circle"></i></button>
                                            <div class="modal fade" :id="'verticalycentered' + index" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Data Pemeriksaan Kehamilan Ibu {{ item.nama }}</h5>
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
                                                                        <td class="text-start">{{ item.lk }} cm</td>
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
                                                <router-link :to="{ name: 'edit-pemeriksaan-balita', params: { id: item.id } }" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></router-link>
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
            balita: {},
            pemeriksaanBalita: {},
            search: "",
        };
    },
    mounted() {
        this.getPemeriksaanBalita();
    },
    methods: {
        getPemeriksaanBalita: function () {
            axios.get("/api/pemeriksaan-balita").then((response) => {
                this.pemeriksaanBalita = response.data;
                //console.log(this.pemeriksaanBalita);
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
                        this.axios.delete("/api/pemeriksaan-balita/" + id).then((response) => {
                            this.$swal.fire("Terhapus!", "Data Balita berhasil terhapus.", "success");
                        });
                        this.getPemeriksaanBalita();
                    }
                });
        },
    },
};
</script>
