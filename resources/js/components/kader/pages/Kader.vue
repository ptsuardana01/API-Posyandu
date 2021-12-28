<template>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Petugas Posyandu</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'dashboard' }"><i class="bi bi-house-door"></i></router-link>
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
                            <router-link class="btn btn-success" style="margin-top: 1.5rem" :to="{ name: 'form-kader' }">
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
                                    <tr v-for="(item, index) in kaders.data" :key="index">
                                        <th scope="row">{{ index + 1 }}</th>
                                        <td>{{ item.kd_kader }}</td>
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
                                                <router-link :to="{ name: 'form-edit-kader', params: { id: item.id } }" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></router-link>
                                                <button @click="deleteData(item.id)" type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                            <pagination :data="this.kaders" @pagination-change-page="getDataKaders" align="right" :show-disabled="false">
                                <span slot="prev-nav">&lt; Previous</span>
                                <span slot="next-nav">Next &gt;</span>
                            </pagination>
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
            search: "",
        };
    },
    mounted() {
        // axios.get("/api/kader").then((response) => {
        //     console.log(response);
        //});
        this.getDataKaders();
    },
    methods: {
        getDataKaders: function (page = 1) {
            axios.get("/api/kader?page=" + page).then((response) => {
                this.kaders = response.data;
                // console.log(this.kaders);
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
                        this.axios.delete("/api/kader/" + id).then((response) => {
                            this.$swal.fire("Terhapus!", "Petugas Posyandu berhasil terhapus.", "success");
                        });
                        this.getDataKaders();
                    }
                });
        },
    },
    watch: {},
};
</script>
