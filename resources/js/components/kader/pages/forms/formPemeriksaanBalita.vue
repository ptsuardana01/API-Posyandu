<template>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Tambah Data Pemeriksaan Baltia</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'dashboard' }"><i class="bi bi-house-door"></i></router-link>
                    </li>
                    <li class="breadcrumb-item active">Balita</li>
                    <li class="breadcrumb-item active">
                        <router-link :to="{ name: 'balita' }">Data Pemeriksaan Balita</router-link>
                    </li>
                    <li class="breadcrumb-item active">
                        <router-link :to="{ name: 'form-pemeriksaan-balita' }">Tambah Data Pemeriksaan Balita</router-link>
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
                                        <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="true">Data Balita</button>
                                    </li>
                                    <li class="nav-item flex-fill" role="presentation">
                                        <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile" aria-selected="false">Data Pemeriksaan Balita</button>
                                    </li>
                                </ul>
                                <div class="tab-content pt-2" id="myTabjustifiedContent">
                                    <div class="tab-pane fade show row g-3 active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="col-12">
                                            <label for="nama_bumil" class="form-label">Nama Balita</label>
                                            <select class="form-select" aria-label="Default select example" id="nama_bumil" v-model="pemeriksaanBalita.id_balita">
                                                <option selected disabled>Pilih Nama Balita</option>
                                                <option v-for="(balita, index) in balita" :key="index" :value="balita.id">{{ balita.nama }}</option>
                                            </select>
                                        </div>

                                        <div class="row g-3" v-for="(balita, index) in balita" :key="index">
                                            <!-- <div class="col-12">
                                                <label for="nik" class="form-label">NIK</label>
                                                <input type="text" class="form-control" id="nik" v-if="pemeriksaanBalita.id_balita == balita.id" :value="balita.nik_ibu" />
                                                <input type="text" class="form-control" id="nik" v-if="pemeriksaanBalita.id_balita == !balita.id" disabled />
                                            </div> -->

                                            <!-- <div class="col-12">
                                                <label for="stts_bumil" class="form-label">Status Ibu Hamil</label>
                                                <input type="text" class="form-control" id="stts_bumil" v-if="pemeriksaanBalita.id_bumil == balita.id" :value="balita.stts_bumil" />
                                            </div> -->

                                            <div class="col-12" v-show="pemeriksaanBalita.id_balita == balita.id">
                                                <label for="stts_bumil" class="form-label">Status Balita</label>
                                                <select class="form-select" aria-label="Default select example" id="stts_bumil">
                                                    <option v-if="pemeriksaanBalita.id_balita == !balita.id" :value="balita.stts_balita" selected disabled>Status Balita</option>
                                                    <option v-if="pemeriksaanBalita.id_balita == balita.id" :value="balita.stts_balita" selected disabled>{{ balita.stts_balita }}</option>
                                                </select>
                                            </div>

                                            <div class="col-12" v-show="pemeriksaanBalita.id_balita == balita.id">
                                                <label for="kader" class="form-label">Petugas Posyandu</label>
                                                <select class="form-select" aria-label="Default select example" id="kader">
                                                    <option v-if="pemeriksaanBalita.id_balita == !balita.id" :value="balita.id_kader_balita" selected disabled>Pilih Petugas Posyandu</option>
                                                    <option v-if="pemeriksaanBalita.id_balita == balita.id" :value="balita.id_kader_balita" selected disabled>{{ balita.id_kader_balita }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane row g-3 fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <label for="tb" class="form-label">Tinggi Badan</label>
                                                <input type="number" class="form-control" id="tb" v-model="pemeriksaanBalita.tb" />
                                            </div>

                                            <div class="col-6">
                                                <label for="bb" class="form-label">Berat Badan</label>
                                                <input type="number" class="form-control" id="bb" v-model="pemeriksaanBalita.bb" />
                                            </div>

                                            <div class="col-6">
                                                <label for="lila" class="form-label">Lingkar Kepala</label>
                                                <input type="number" class="form-control" id="lila" v-model="pemeriksaanBalita.lk" />
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
            balita: {},
            pemeriksaanBalita: {
                id_balita: "",
                tb: "",
                bb: "",
                lk: "",
            },
        };
    },
    mounted() {
        this.getIdBalita();
        axios.get("/api/pemeriksaan-balita/" + this.$route.params.id, this.pemeriksaanBalita).then((response) => {
            this.pemeriksaanBalita.id_balita = response.data.id_balita;
            this.pemeriksaanBalita.tb = response.data.tb;
            this.pemeriksaanBalita.bb = response.data.bb;
            this.pemeriksaanBalita.lk = response.data.lk;
            console.log(this.pemeriksaanBalita);
        });
    },
    methods: {
        getIdBalita: function () {
            axios.get("/api/balita").then((response) => {
                this.balita = response.data.data;
                console.log(this.balita);
            });
        },
        save(e) {
            e.preventDefault();
            if (this.$route.params.id) {
                axios.put("/api/pemeriksaan-balita/" + this.$route.params.id, this.pemeriksaanBalita).then((response) => {
                    this.$swal.fire({ title: "Success!", text: response.data.message, icon: "success", timer: 1000 });
                    this.$router.push({ name: "pemeriksaan-balita" });
                });
            } else {
                axios.post("/api/pemeriksaan-balita", this.pemeriksaanBalita).then((response) => {
                    this.$swal.fire({ title: "Success!", text: response.data.message, icon: "success", timer: 1000 });
                    this.pemeriksaanBalita = response.data.data;

                    this.$router.push({ name: "pemeriksaan-balita" });
                });
            }
        },
    },
};
</script>
