<template>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Tambah Data Pemeriksaan Bumil</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'dashboard' }"><i class="bi bi-house-door"></i></router-link>
                    </li>
                    <li class="breadcrumb-item active">Orang Tua</li>
                    <li class="breadcrumb-item active">
                        <router-link :to="{ name: 'bumil' }">Data Pemeriksaan Bumil</router-link>
                    </li>
                    <li class="breadcrumb-item active">
                        <router-link :to="{ name: 'form-bumil' }">Tambah Data Pemeriksaan Bumil</router-link>
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
                            <h5 class="card-title">Form Tambah Data Pemeriksaan Bumil</h5>

                            <!-- Vertical Form -->
                            <form class="row g-3" @submit.prevent="save">
                                <!-- Default Tabs -->
                                <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                                    <li class="nav-item flex-fill" role="presentation">
                                        <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="true">Data Bumil</button>
                                    </li>
                                    <li class="nav-item flex-fill" role="presentation">
                                        <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile" aria-selected="false">Data Pemeriksaan Bumil</button>
                                    </li>
                                </ul>
                                <div class="tab-content pt-2" id="myTabjustifiedContent">
                                    <div class="tab-pane fade show row g-3 active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="col-12">
                                            <label for="nama_bumil" class="form-label">Nama Ibu Hamil</label>
                                            <select class="form-select" aria-label="Default select example" id="nama_bumil" v-model="pemeriksaanBumil.id_bumil">
                                                <option selected disabled>Pilih Nama Ibu Hamil</option>
                                                <option v-for="(ortu, index) in ortu" :key="index" :value="ortu.id">{{ ortu.nama_ibu }}</option>
                                            </select>
                                        </div>

                                        <div class="row g-3" v-for="(ortu, index) in ortu" :key="index">
                                            <div class="col-12">
                                                <label for="nik" class="form-label">NIK</label>
                                                <input type="text" class="form-control" id="nik" v-if="pemeriksaanBumil.id_bumil == ortu.id" :value="ortu.nik_ibu" />
                                                <input type="text" class="form-control" id="nik" v-if="pemeriksaanBumil.id_bumil == !ortu.id" disabled />
                                            </div>

                                            <!-- <div class="col-12">
                                                <label for="stts_bumil" class="form-label">Status Ibu Hamil</label>
                                                <input type="text" class="form-control" id="stts_bumil" v-if="pemeriksaanBumil.id_bumil == ortu.id" :value="ortu.stts_bumil" />
                                            </div> -->

                                            <div class="col-12">
                                                <label for="stts_bumil" class="form-label">Status Ibu Hamil</label>
                                                <select class="form-select" aria-label="Default select example" id="stts_bumil">
                                                    <option v-if="pemeriksaanBumil.id_bumil == !ortu.id" :value="ortu.stts_bumil" selected disabled>Status Ibu Hamil</option>
                                                    <option v-if="pemeriksaanBumil.id_bumil == ortu.id" :value="ortu.stts_bumil" selected disabled>{{ ortu.stts_bumil }}</option>
                                                </select>
                                            </div>

                                            <div class="col-12">
                                                <label for="kader" class="form-label">Petugas Posyandu</label>
                                                <select class="form-select" aria-label="Default select example" id="kader">
                                                    <option v-if="pemeriksaanBumil.id_bumil == !ortu.id" :value="ortu.stts_bumil" selected disabled>Pilih Petugas Posyandu</option>
                                                    <option v-if="pemeriksaanBumil.id_bumil == ortu.id" :value="ortu.stts_bumil" selected disabled>{{ ortu.nama_kader }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane row g-3 fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <label for="tb" class="form-label">Tinggi Badan</label>
                                                <input type="number" class="form-control" id="tb" v-model="pemeriksaanBumil.tb" />
                                            </div>

                                            <div class="col-6">
                                                <label for="bb" class="form-label">Berat Badan</label>
                                                <input type="number" class="form-control" id="bb" v-model="pemeriksaanBumil.bb" />
                                            </div>

                                            <div class="col-6">
                                                <label for="lila" class="form-label">Lingkar Lengan</label>
                                                <input type="number" class="form-control" id="lila" v-model="pemeriksaanBumil.lila" />
                                            </div>

                                            <div class="">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Default Tabs -->
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
            pemeriksaanBumil: {
                id_bumil: "",
                tb: "",
                bb: "",
                lila: "",
            },
            ortu: {},
        };
    },
    mounted() {
        this.getIdOrtu();
        axios.get("api/pemeriksaan-bumil" + this.$route.params.id, this.pemeriksaanBumil).then((response) => {
            this.pemeriksaanBumil.id_bumil = response.data.id_bumil;
            this.pemeriksaanBumil.tb = response.data.tb;
            this.pemeriksaanBumil.bb = response.data.bb;
            this.pemeriksaanBumil.lila = response.data.lila;
        });
    },
    methods: {
        getIdOrtu: function () {
            axios.get("/api/ortu").then((response) => {
                this.ortu = response.data.data;
                console.log(this.ortu);
            });
        },
        save(e) {
            e.preventDefault();
            if (this.$route.params.id) {
                axios.put("/api/pemeriksaan-bumil/" + this.$route.params.id, this.pemeriksaanBumil).then((response) => {
                    this.$swal.fire({ title: "Success!", text: response.data.message, icon: "success", timer: 1000 });
                    this.$router.push({ name: "bumil" });
                });
            } else {
                axios.post("/api/pemeriksaan-bumil", this.pemeriksaanBumil).then((response) => {
                    this.$swal.fire({ title: "Success!", text: response.data.message, icon: "success", timer: 1000 });
                    this.pemeriksaanBumil = response.data.data;

                    this.$router.push({ name: "bumil" });
                });
            }
        },
    },
};
</script>
