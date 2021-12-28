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
                            <router-link class="btn btn-success" style="margin-top: 1.5rem" :to="{ name: 'form-balita' }">
                                <i class="bi bi-file-earmark-plus"></i>
                                Tambah Data
                            </router-link>

                            <div class="dataTable-search text-end">
                                <input class="dataTable-input" placeholder="Search..." type="text" v-model="s" />
                                <button class="btn btn-primary" @click="searchData()">Cari</button>
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col" class="text-center">Tempat, Tanggal Lahir</th>
                                        <th scope="col" class="text-center">Gender</th>
                                        <th scope="col" class="text-center">Detail Ortu</th>
                                        <th scope="col" class="text-center">Status Balita</th>
                                        <th scope="col" class="text-center">Tanggal Meninggal</th>
                                        <th scope="col" class="text-center">Petugas Posyandu</th>
                                        <th scope="col" class="text-center">History Pemeriksaan Balita</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in balitas.data" :key="index">
                                        <th scope="row">{{ index + 1 }}</th>
                                        <td>{{ item.nama }}</td>
                                        <td class="text-center">{{ item.tmpt_lahir }}, {{ item.tgl_lahir }}</td>
                                        <td class="text-center">
                                            <p v-if="item.jk == 0">Perempuan</p>
                                            <p v-if="item.jk == 1">Laki-laki</p>
                                        </td>
                                        <td class="text-center">
                                            <!-- Vertically centered Modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" :data-bs-target="'#detailOrtu' + index">
                                                <i class="bi bi-info-circle"></i>
                                            </button>
                                            <div class="modal fade" :id="'detailOrtu' + index" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Detail Orang Tua Balita {{ item.nama }}</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Table with stripped rows -->
                                                            <table class="table table-borderless" v-for="(detail, index) in ortu.data" :key="index">
                                                                <tbody v-show="item.id_ortu == detail.id">
                                                                    <tr>
                                                                        <td class="text-start">Nama Ibu</td>
                                                                        <td>:</td>
                                                                        <td class="text-start">{{ detail.nama_ibu }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-start">Nama Ayah</td>
                                                                        <td>:</td>
                                                                        <td class="text-start">{{ detail.nama_ayah }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-start">Alamat</td>
                                                                        <td>:</td>
                                                                        <td class="text-start">{{ detail.alamat }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-start">No Telepon</td>
                                                                        <td>:</td>
                                                                        <td class="text-start">{{ detail.telp }}</td>
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
                                            <p v-if="item.stts_balita == 0" class="badge bg-secondary">Meniggal</p>
                                            <p v-if="item.stts_balita == 1" class="badge bg-light text-dark">Hidup</p>
                                        </td>
                                        <td class="text-center">
                                            <p v-if="item.stts_balita == 1">-</p>
                                            <p v-if="item.stts_balita == 0">{{ item.tgl_meninggal }}</p>
                                        </td>
                                        <td class="text-center">
                                            {{ item.nama_kader }}
                                        </td>
                                        <td class="text-center">
                                            <!-- Modal Dialog Scrollable -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" :data-bs-target="'#detailPemeriksaan' + index"><i class="bi bi-file-earmark-medical-fill"></i></button>
                                            <div class="modal fade" :id="'detailPemeriksaan' + index" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">History Pemeriksaan Balita {{ item.nama }}</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Table with hoverable rows -->
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Tinggi</th>
                                                                        <th scope="col">Berat</th>
                                                                        <th scope="col">Lingkar Kepala</th>
                                                                        <th scope="col">created_at</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody v-for="(pemeriksaan, no) in pemeriksaanBalita" :key="no">
                                                                    <tr v-show="pemeriksaan.id_balita == item.id">
                                                                        <th scope="row">{{ no + 1 }}</th>
                                                                        <td>{{ pemeriksaan.tb }} cm</td>
                                                                        <td>{{ pemeriksaan.bb }} kg</td>
                                                                        <td>{{ pemeriksaan.lk }} cm</td>
                                                                        <td>{{ pemeriksaan.created_at }}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- End Table with hoverable rows -->
                                                        </div>
                                                        <div class="modal-footer"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Modal Dialog Scrollable-->
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <router-link :to="{ name: 'form-edit-balita', params: { id: item.id } }" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></router-link>
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
            balitas: {},
            kader: {},
            ortu: {},
            pemeriksaanBalita: {},
            tambahPemeriksaan: {
                id_balita: "",
                tb: "",
                bb: "",
                lk: "",
            },

            no: 0,
            s: "",
        };
    },
    mounted() {
        axios.get("/api/balita" + this.$route.params.id, this.tambahPemeriksaan).then((response) => {
            this.tambahPemeriksaan.id_balita = response.data.id_balita;
            this.tambahPemeriksaan.tb = response.data.tb;
            this.tambahPemeriksaan.bb = response.data.bb;
            this.tambahPemeriksaan.lk = response.data.lk;
            // console.log(this.tambahPemeriksaan);
        });
        this.getDataBalitas();
        this.getDetailOrtu();
        this.getPemeriksaanBalita();
    },
    methods: {
        getDataBalitas: function (page = 1) {
            this.axios.get("/api/balita?page=" + page + "&search=" + this.s).then((response) => {
                this.balitas = response.data;
                console.log(this.balitas);
            });
        },
        getDetailOrtu: function (page = 1) {
            axios.get("/api/ortu").then((response) => {
                this.ortu = response.data;
            });
        },
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
                        this.axios.delete("/api/balita/" + id).then((response) => {
                            this.$swal.fire("Terhapus!", "Data Balita berhasil terhapus.", "success");
                        });
                        this.getDataBalitas();
                    }
                });
        },
        searchData(e) {
            // console.log(this.getDataBalitas);
            this.getDataBalitas();
        },
    },
};
