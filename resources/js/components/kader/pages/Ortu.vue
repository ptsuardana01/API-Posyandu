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
                    <li class="breadcrumb-item active">
                        <router-link :to="{ name: 'ortu' }">Data Orang Tua</router-link>
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
                            <router-link :to="{ name: 'form-ortu' }" class="btn btn-success" style="margin-top: 1.5rem">
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
                                        <th scope="col">Nama Ibu</th>
                                        <th scope="col">Nama Ayah</th>
                                        <th scope="col" class="text-center">NIK Ibu</th>
                                        <th scope="col" class="text-center">NIK Ayah</th>
                                        <th scope="col">TTL Ibu</th>
                                        <th scope="col">TTL Ayah</th>
                                        <th scope="col">Alamat Ortu</th>
                                        <th scope="col" class="text-center">Telpon</th>
                                        <th scope="col" class="text-center">Petugas Posyandu</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in ortus.data" :key="index">
                                        <th scope="row">{{ index + 1 }}</th>
                                        <td>{{ item.nama_ibu }}</td>
                                        <td>{{ item.nama_ayah }}</td>
                                        <td class="text-center">{{ item.nik_ibu }}</td>
                                        <td class="text-center">{{ item.nik_ayah }}</td>
                                        <td>
                                            {{ item.tmpt_lahir_ibu }},
                                            <br />
                                            {{ item.tgl_lahir_ibu }}
                                        </td>
                                        <td>
                                            {{ item.tmpt_lahir_ayah }},
                                            <br />
                                            {{ item.tgl_lahir_ayah }}
                                        </td>
                                        <td>{{ item.alamat }}</td>
                                        <td class="text-center">{{ item.telp }}</td>
                                        <td class="text-center">{{ item.nama_kader }}</td>
                                        <td>
                                            <div class="text-center">
                                                <router-link :to="{ name: 'form-edit-ortu', params: { id: item.id } }" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></router-link>
                                                <button @click="deleteData(item.id)" type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                            <pagination :data="this.ortus" @pagination-change-page="getDataOrtus" class="justify-end"></pagination>
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
            s: "",
        };
    },
    mounted() {
        // axios.get("/api/kader").then((response) => {
        //     console.log(response);
        //});
        this.getDataOrtus();
    },
    watch: {},
    methods: {
        getDataOrtus: function (page = 1) {
            this.axios.get("/api/ortu?page=" + page + "&search=" + this.s).then((response) => {
                this.ortus = response.data;
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
                        this.axios.delete("/api/ortu/" + id).then((response) => {
                            this.$swal.fire("Terhapus!", "Data Orang Tua berhasil terhapus.", "success");
                        });
                        this.getDataOrtus();
                    }
                });
        },
        searchData(e) {
            // console.log(this.s);
            this.getDataOrtus();
        },
    },
};
</script>
