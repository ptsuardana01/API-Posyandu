<template>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Tambah Balita</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'dashboard' }"><i class="bi bi-house-door"></i></router-link>
                    </li>
                    <li class="breadcrumb-item active">
                        <router-link :to="{ name: 'balita' }">Balita</router-link>
                    </li>
                    <li class="breadcrumb-item active">
                        <router-link :to="{ name: 'form-balita' }">Tambah Balita</router-link>
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
                            <h5 class="card-title">Form Tambah Balita</h5>

                            <!-- Vertical Form -->
                            <form class="row g-3" @submit.prevent="save">
                                <div class="col-12">
                                    <label for="nama" class="form-label">Nama Balita</label>
                                    <input type="text" class="form-control" id="nama" v-model="balita.nama" />
                                </div>

                                <div class="col-12">
                                    <label for="tmpt_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tmpt_lahir" v-model="balita.tmpt_lahir" />
                                </div>

                                <div class="col-12">
                                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgl_lahir" v-model="balita.tgl_lahir" />
                                </div>

                                <div class="col-12">
                                    <label for="jk" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" aria-label="Default select example" id="jk" v-model="balita.jk">
                                        <option selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="0">Perempuan</option>
                                        <option value="1">Laki-Laki</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="stts_balita" class="form-label">Status Balita</label>
                                    <select class="form-select" aria-label="Default select example" id="stts_balita" v-model="balita.stts_balita">
                                        <option selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="0">Meninggal</option>
                                        <option value="1">Hidup</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="tgl_meninggal" class="form-label">Tanggal Meninggal</label>
                                    <input type="date" class="form-control" id="tgl_meninggal" v-if="balita.stts_balita == 1" disabled v-model="balita.tgl_meninggal" />
                                    <input type="date" class="form-control" id="tgl_meninggal" v-if="balita.stts_balita == 0" v-model="balita.tgl_meninggal" />
                                </div>

                                <div class="col-12">
                                    <label for="id_ortu" class="form-label">Nama Ibu</label>
                                    <select class="form-select" aria-label="Default select example" id="id_ortu" v-model="balita.id_ortu">
                                        <option selected disabled>nama Ibu Balita</option>
                                        <option :value="ortu.id" v-for="(ortu, index) in ortu" :key="index">{{ ortu.nama_ibu }}</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="id_kader_balita" class="form-label">Nama Petugas Posyandu</label>
                                    <select class="form-select" aria-label="Default select example" id="id_kader_balita" v-model="balita.id_kader_balita">
                                        <option selected disabled>Nama Petugas yang bertugas</option>
                                        <option :value="kader.id" v-for="(kader, index) in kader" :key="index">{{ kader.nama }}</option>
                                    </select>
                                </div>

                                <div class="">
                                    <button type="submit" class="btn btn-primary">Save</button>
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
            balita: {
                nama: "",
                tmpt_lahir: "",
                tgl_lahir: "",
                jk: "",
                stts_balita: "",
                tgl_meninggal: "",
                id_ortu: "",
                id_kader_balita: "",
            },
            ortu: {},
            kader: {},
        };
    },
    mounted() {
        this.getIdOrtu();
        this.getIdKader();
        axios.get("/api/balita/" + this.$route.params.id, this.balita).then((response) => {
            // console.log(response.data);
            this.balita.nama = response.data.nama;
            this.balita.tmpt_lahir = response.data.tmpt_lahir;
            this.balita.jk = response.data.jk;
            this.balita.stts_balita = response.data.stts_balita;
            this.balita.tgl_meninggal = response.data.tgl_meninggal;
            this.balita.id_ortu = response.data.id_ortu;
            this.balita.id_kader_balita = response.data.id_kader_balita;
            // console.log(this.balita);
        });
    },
    methods: {
        getIdOrtu: function () {
            axios.get("/api/ortu").then((response) => {
                this.ortu = response.data.data;
                // console.log(this.ortu);
                // console.log(response.all);
            });
        },
        getIdKader: function () {
            axios.get("/api/kader").then((response) => {
                this.kader = response.data.data;
                // console.log(this.kader);
            });
        },
        save(e) {
            e.preventDefault();
            if (this.$route.params.id) {
                axios.put("/api/balita/" + this.$route.params.id, this.balita).then((response) => {
                    this.$swal.fire({ title: "Success!", text: response.data.message, icon: "success", timer: 1000 });
                    this.$router.push({ name: "balita" });
                });
            } else {
                axios.post("/api/balita", this.balita).then((response) => {
                    this.$swal.fire({ title: "Success!", text: response.data.message, icon: "success", timer: 1000 });
                    this.balita = response.data.data;

                    this.$router.push({ name: "balita" });
                });
            }
        },
    },
};
</script>
