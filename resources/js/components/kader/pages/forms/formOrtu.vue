<template>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Tambah Orang Tua</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <router-link :to="{ name: 'dashboard' }"><i class="bi bi-house-door"></i></router-link>
                    </li>
                    <li class="breadcrumb-item active">
                        <router-link :to="{ name: 'ortu' }">Orang Tua</router-link>
                    </li>
                    <li class="breadcrumb-item active">
                        <router-link :to="{ name: 'form-ortu' }">Tambah Orang Tua</router-link>
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
                            <h5 class="card-title">Form Tambah Orang Tua</h5>

                            <!-- Vertical Form -->
                            <form class="row g-3" @submit.prevent="save">
                                <!-- Default Tabs -->
                                <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                                    <li class="nav-item flex-fill" role="presentation">
                                        <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="true">Data Bumil</button>
                                    </li>
                                    <li class="nav-item flex-fill" role="presentation">
                                        <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile" aria-selected="false">Data Suami Bumil</button>
                                    </li>
                                </ul>
                                <div class="tab-content pt-2" id="myTabjustifiedContent">
                                    <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="nama_ibu" class="form-label">Nana Ibu</label>
                                                <input type="text" class="form-control" id="nama_ibu" v-model="ortu.nama_ibu" />
                                            </div>

                                            <div class="col-12">
                                                <label for="nik_ibu" class="form-label">NIK Ibu</label>
                                                <input type="text" class="form-control" id="nik_ibu" v-model="ortu.nik_ibu" />
                                            </div>

                                            <div class="col-6">
                                                <label for="tmpt_lahir_ibu" class="form-label">Tempat Lahir Ibu</label>
                                                <input type="text" class="form-control" id="tmpt_lahir_ibu" v-model="ortu.tmpt_lahir_ibu" />
                                            </div>

                                            <div class="col-6">
                                                <label for="tgl_lahir_ibu" class="form-label">Tanggal Lahir Ibu</label>
                                                <input type="date" class="form-control" id="tgl_lahir_ibu" v-model="ortu.tgl_lahir_ibu" />
                                            </div>

                                            <div class="col-12">
                                                <label for="stts_bumil" class="form-label">Status ibu Hamil</label>
                                                <select class="form-select" aria-label="Default select example" id="stts_bumil" v-model="ortu.stts_bumil">
                                                    <option selected disabled>Pilih Status ibu Hamil</option>
                                                    <option value="0">Meninggal</option>
                                                    <option value="1">Hidup</option>
                                                </select>
                                            </div>

                                            <div class="col-12">
                                                <label for="tgl_meninggal" class="form-label">Tanggal Meninggal Ibu</label>
                                                <input type="date" class="form-control" id="tgl_meninggal" v-if="ortu.stts_bumil == 1" disabled v-model="ortu.tgl_meninggal" />
                                                <input type="date" class="form-control" id="tgl_meninggal" v-if="ortu.stts_bumil == 0" v-model="ortu.tgl_meninggal" />
                                            </div>

                                            <div class="col-12">
                                                <label for="id_kader_bumil" class="form-label">Petugas Posyandu</label>
                                                <select class="form-select" aria-label="Default select example" id="id_kader_bumil" v-model="ortu.id_kader_bumil">
                                                    <option selected disabled>Pilih Petugas Posyandu</option>
                                                    <option v-for="(kader, index) in kader" :key="index" :value="kader.id">{{ kader.nama }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="nama_ayah" class="form-label">Nama Ayah</label>
                                                <input type="text" class="form-control" id="nama_ayah" v-model="ortu.nama_ayah" />
                                            </div>

                                            <div class="col-12">
                                                <label for="nik_ayah" class="form-label">NIK Ayah</label>
                                                <input type="text" class="form-control" id="nik_ayah" v-model="ortu.nik_ayah" />
                                            </div>

                                            <div class="col-6">
                                                <label for="tmpt_lahir_ayah" class="form-label">Tempat Lahir Ayah</label>
                                                <input type="text" class="form-control" id="tmpt_lahir_ayah" v-model="ortu.tmpt_lahir_ayah" />
                                            </div>

                                            <div class="col-6">
                                                <label for="tgl_lahir_ayah" class="form-label">Tanggal Lahir Ayah</label>
                                                <input type="date" class="form-control" id="tgl_lahir_ayah" v-model="ortu.tgl_lahir_ayah" />
                                            </div>

                                            <div class="col-12">
                                                <label for="telp" class="form-label">Telp</label>
                                                <input type="tel" class="form-control" id="telp" v-model="ortu.telp" />
                                            </div>

                                            <div class="col-12">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" v-model="ortu.alamat" />
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
            ortu: {
                nama_ibu: "",
                nama_ayah: "",
                nik_ibu: "",
                nik_ayah: "",
                tmpt_lahir_ibu: "",
                tmpt_lahir_ayah: "",
                tgl_lahir_ibu: "",
                tgl_lahir_ayah: "",
                alamat: "",
                telp: "",
                stts_bumil: "",
                tgl_meninggal: "",
                id_kader_bumil: "",
            },
            kader: {},
        };
    },
    mounted() {
        this.getIdKaderBumil(),
            axios.get("/api/ortu/" + this.$route.params.id, this.ortu).then((response) => {
                // console.log(response.data);
                this.ortu.nama_ibu = response.data.nama_ibu;
                this.ortu.nik_ibu = response.data.nik_ibu;
                this.ortu.nama_ayah = response.data.nama_ayah;
                this.ortu.nik_ayah = response.data.nik_ayah;
                this.ortu.tmpt_lahir_ibu = response.data.tmpt_lahir_ibu;
                this.ortu.tmpt_lahir_ayah = response.data.tmpt_lahir_ayah;
                this.ortu.tgl_lahir_ibu = response.data.tgl_lahir_ibu;
                this.ortu.tgl_lahir_ayah = response.data.tgl_lahir_ayah;
                this.ortu.stts_bumil = response.data.stts_bumil;
                this.ortu.tgl_meninggal = response.data.tgl_meninggal;
                this.ortu.id_kader_bumil = response.data.id_kader_bumil;
                this.ortu.alamat = response.data.alamat;
                this.ortu.telp = response.data.telp;
                this.ortu.alamat = response.data.alamat;
                // console.log(this.kader);
            });
    },
    methods: {
        getIdKaderBumil: function () {
            axios.get("/api/kader").then((response) => {
                this.kader = response.data.data;
            });
        },
        save(e) {
            e.preventDefault();
            if (this.$route.params.id) {
                axios.put("/api/ortu/" + this.$route.params.id, this.ortu).then((response) => {
                    this.$swal.fire({ title: "Success!", text: response.data.message, icon: "success", timer: 1000 });
                    this.$router.push({ name: "ortu" });
                });
            } else {
                axios.post("/api/ortu", this.ortu).then((response) => {
                    this.$swal.fire({ title: "Success!", text: response.data.message, icon: "success", timer: 1000 });
                    this.ortu = response.data.data;

                    this.$router.push({ name: "ortu" });
                });
            }
        },
    },
};
</script>
