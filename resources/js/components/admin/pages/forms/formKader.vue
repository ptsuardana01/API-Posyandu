<template>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Petugas Posyandu</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'dashboard' }"><i class="bi bi-house-door"></i></router-link>
                    </li>
                    <li class="breadcrumb-item active">
                        <router-link :to="{ name: 'kader' }">Petugas Posyandu</router-link>
                    </li>
                    <li class="breadcrumb-item active">
                        <router-link :to="{ name: 'form-kader' }">Tambah Petugas Posyandu</router-link>
                    </li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Tambah Petugas Posyandu</h5>

                            <!-- Vertical Form -->
                            <form class="row g-3" @submit.prevent="save">
                                <div class="col-12">
                                    <label for="kd_kader" class="form-label">Kode Petugas Posyandu</label>
                                    <input type="text" class="form-control" id="tmpt_lahir" v-model="kader.kd_kader" />
                                </div>

                                <div class="col-12">
                                    <label for="nama" class="form-label">Nama Petugas Posyandu</label>
                                    <input type="text" class="form-control" id="nama" v-model="kader.nama" />
                                </div>

                                <div class="col-12">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" class="form-control" id="nik" v-model="kader.nik" />
                                </div>

                                <div class="col-6">
                                    <label for="tmpt_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tmpt_lahir" v-model="kader.tmpt_lahir" />
                                </div>

                                <div class="col-6">
                                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgl_lahir" v-model="kader.tgl_lahir" />
                                </div>

                                <div class="col-12">
                                    <label for="jk" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" aria-label="Default select example" id="jk" v-model="kader.jk">
                                        <option selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="0">Wanita</option>
                                        <option value="1">Pria</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" v-model="kader.email" />
                                </div>

                                <div class="col-12">
                                    <label for="telp" class="form-label">Telp</label>
                                    <input type="tel" class="form-control" id="telp" v-model="kader.telp" />
                                </div>

                                <div class="col-12">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" v-model="kader.alamat" />
                                </div>

                                <div class="">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                            <!-- Vertical Form -->
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
            kader: {
                kd_kader: "",
                nama: "",
                nik: "",
                tmpt_lahir: "",
                tgl_lahir: "",
                jk: "",
                email: "",
                telp: "",
                alamat: "",
            },
            error: {},
        };
    },
    mounted() {
        axios.get("/api/kader/" + this.$route.params.id, this.kader).then((response) => {
            // console.log(response.data);
            this.kader.kd_kader = response.data.kd_kader;
            this.kader.nama = response.data.nama;
            this.kader.nik = response.data.nik;
            this.kader.tmpt_lahir = response.data.tmpt_lahir;
            this.kader.tgl_lahir = response.data.tgl_lahir;
            this.kader.jk = response.data.jk;
            this.kader.email = response.data.email;
            this.kader.telp = response.data.telp;
            this.kader.alamat = response.data.alamat;
            // console.log(this.kader);
        });
    },
    methods: {
        save(e) {
            e.preventDefault();
            if (this.$route.params.id) {
                axios.put("/api/kader/" + this.$route.params.id, this.kader).then((response) => {
                    this.$swal.fire({ title: "Success!", text: response.data.message, icon: "success", timer: 1000 });
                    this.$router.push({ name: "kader" });
                });
            } else {
                axios.post("/api/kader", this.kader).then((response) => {
                    this.$swal.fire({ title: "Success!", text: response.data.message, icon: "success", timer: 1000 });
                    this.kader = response.data.data;
                    this.$router.push({ name: "kader" });
                });
            }
        },
    },
};
</script>
