<template>
    <div class="bg-white h-full py-24">
        <div id="beranda">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div
                        class="bg-white overflow-hidden shadow-sm sm:rounded-lg"
                    >
                        <div
                            class="p-6 bg-gray-100 font-bold border-b border-gray-200 shadow-lg text-center animate-pulse"
                        >
                            You're logged in!
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="flex text-5xl justify-center items-center font-bold text-pink-400 bg-white sm:rounded md:rounded-lg shadow-lg w-full"
            >
                <div class="flex items-center justify-center pr-44">
                    Pos Layanan Terpadu (POSYANDU)<br />
                    Demi Generasi Muda Yang Maju !
                </div>
                <div>
                    <img class="w-82" src="/img/Breastfeeding (1).gif" alt="" />
                </div>
            </div>
            <div class="flex items-center justify-center mt-4 mb-40">
                <div class="p-8 bg-white w-4/5 shadow-lg rounded-lg">
                    <div class="">
                        <h1 class="text-4xl font-bold text-pink-400">
                            Cari data anda !
                        </h1>
                        <p class="text-xl mb-4">Cari Data Anda :</p>
                    </div>
                    <form class="flex gap-5" action="">
                        <input
                            class="py-2 px-4 w-1/4 bg-gray-100 shadow-md rounded-lg"
                            type="text"
                            placeholder="Masukan Nama Orangtua"
                        />
                        <input
                            class="py-2 px-4 w-1/4 bg-gray-100 shadow-md rounded-lg"
                            type="text"
                            placeholder="NIK Orangtua balita"
                        />
                        <input
                            class="py-2 px-4 w-1/4 bg-gray-100 shadow-md rounded-lg"
                            type="text"
                            placeholder="Nama Balita"
                        />
                        <button
                            class="rounded-lg bg-blue-100 w-52 px-7 py-4 font-bold text-lg shadow-lg hover:bg-indigo-500 cursor-pointer transition duration-700 transform hover:scale-110 motion-reduce:transform-none hover:text-white"
                            data-bs-toggle="modal"
                            data-bs-target="#largeModal"
                        >
                            Cari
                        </button>
                        <div class="modal fade" id="largeModal" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                        ></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    Data Anda
                                                </h5>

                                                <!-- Pills Tabs -->
                                                <ul
                                                    class="nav nav-pills mb-3"
                                                    id="pills-tab"
                                                    role="tablist"
                                                >
                                                    <li
                                                        class="nav-item"
                                                        role="presentation"
                                                    >
                                                        <button
                                                            class="nav-link active"
                                                            id="pills-home-tab"
                                                            data-bs-toggle="pill"
                                                            data-bs-target="#pills-home"
                                                            type="button"
                                                            role="tab"
                                                            aria-controls="pills-home"
                                                            aria-selected="true"
                                                        >
                                                            Data Orangtua
                                                        </button>
                                                    </li>
                                                    <li
                                                        class="nav-item"
                                                        role="presentation"
                                                    >
                                                        <button
                                                            class="nav-link"
                                                            id="pills-profile-tab"
                                                            data-bs-toggle="pill"
                                                            data-bs-target="#pills-profile"
                                                            type="button"
                                                            role="tab"
                                                            aria-controls="pills-profile"
                                                            aria-selected="false"
                                                        >
                                                            Data Balita
                                                        </button>
                                                    </li>
                                                    <li
                                                        class="nav-item"
                                                        role="presentation"
                                                    >
                                                        <button
                                                            class="nav-link"
                                                            id="pills-contact-tab"
                                                            data-bs-toggle="pill"
                                                            data-bs-target="#pills-contact"
                                                            type="button"
                                                            role="tab"
                                                            aria-controls="pills-contact"
                                                            aria-selected="false"
                                                        >
                                                            Data Pemeriksaan
                                                            Bumil & Balita
                                                        </button>
                                                    </li>
                                                </ul>
                                                <div
                                                    class="tab-content pt-2"
                                                    id="myTabContent"
                                                >
                                                    <div
                                                        class="tab-pane fade show active"
                                                        id="pills-home"
                                                        role="tabpanel"
                                                        aria-labelledby="home-tab"
                                                    >
                                                        <table
                                                            class="table table-borderless" v-for="(ortu, index) in ortu.data" :key="index"
                                                        >
                                                            <tbody>
                                                                <tr>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        Nama Ibu
                                                                    </td>
                                                                    <td>:</td>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        {{ ortu.nama_ibu }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        Nama
                                                                        Ayah
                                                                    </td>
                                                                    <td>:</td>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        {{ortu.nama_ayah }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        NIK Ibu
                                                                    </td>
                                                                    <td>:</td>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        {{ortu.nik_ibu }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        NIK Ayah
                                                                    </td>
                                                                    <td>:</td>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        {{ortu.nik_ayah}}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        Tempat
                                                                        Lahir
                                                                        Ibu
                                                                    </td>
                                                                    <td>:</td>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        {{ortu.tmpt_lahir_ibu}}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        Tempat
                                                                        Lahir
                                                                        Ayah
                                                                    </td>
                                                                    <td>:</td>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        {{ortu.tmpt_lahir_ayah}}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        Tanggal
                                                                        Lahir
                                                                        Ibu
                                                                    </td>
                                                                    <td>:</td>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        {{ortu.tgl_lahir_ibu}}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        Tanggal
                                                                        Lahir
                                                                        Ayah
                                                                    </td>
                                                                    <td>:</td>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        {{ortu.tgl_lahir_ayah}}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        Status
                                                                        Ibu
                                                                        Hamil
                                                                    </td>
                                                                    <td>:</td>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        {{ortu.stts_bumil}}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        Tanggal
                                                                        Meninggal
                                                                    </td>
                                                                    <td>:</td>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        {{ortu.tgl_meninggal}}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        Alamat
                                                                    </td>
                                                                    <td>:</td>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        {{ortu.alamat}}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        No
                                                                        Telepon
                                                                    </td>
                                                                    <td>:</td>
                                                                    <td
                                                                        class="text-start"
                                                                    >
                                                                        {{ortu.telp}}
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div
                                                        class="tab-pane fade"
                                                        id="pills-profile"
                                                        role="tabpanel"
                                                        aria-labelledby="profile-tab"
                                                    >
                                                        <tbody>
                                                            <tr>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    Nama Balita
                                                                </td>
                                                                <td>:</td>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    {{}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    Tempat Lahir
                                                                </td>
                                                                <td>:</td>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    {{}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    Tanggal
                                                                    Lahir
                                                                </td>
                                                                <td>:</td>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    {{}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                   Jenis Kelamin
                                                                </td>
                                                                <td>:</td>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    {{}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    Setatus Balita
                                                                </td>
                                                                <td>:</td>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    {{}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    Tanggal Meninggal
                                                                </td>
                                                                <td>:</td>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    {{}}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </div>
                                                    <div
                                                        class="tab-pane fade"
                                                        id="pills-contact"
                                                        role="tabpanel"
                                                        aria-labelledby="contact-tab"
                                                    >
                                                        <tbody>
                                                            <h1>Pemeriksaan Ibu Hamil</h1>
                                                            <tr>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    Tinggi Badan
                                                                </td>
                                                                <td>:</td>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    {{}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    Berat Badan
                                                                </td>
                                                                <td>:</td>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    {{}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                   Lingkar Lengan
                                                                </td>
                                                                <td>:</td>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    {{}}
                                                                </td>
                                                            </tr>

                                                            <h1>Pemeriksaan Balita</h1>

                                                            <tr>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                   Tinggi Badan
                                                                </td>
                                                                <td>:</td>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    {{}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    Berat Badan
                                                                </td>
                                                                <td>:</td>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    {{}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    Lingkar Kepala
                                                                </td>
                                                                <td>:</td>
                                                                <td
                                                                    class="text-start"
                                                                >
                                                                    {{}}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </div>
                                                </div>
                                                <!-- End Pills Tabs -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button
                                            type="button"
                                            class="btn btn-secondary"
                                            data-bs-dismiss="modal"
                                        >
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Large Modal-->
                    </form>
                </div>
            </div>

            <div id="tentang" class="h-full">
                <h1
                    class="text-2xl pt-5 pb-12 text-pink-500 font-bold flex items-center justify-center"
                >
                    Informasi untuk Anda
                </h1>
                <div class="px-24 grid grid-cols-2 bg-gray-100">
                    <div class="flex items-center justify-center">
                        <img
                            class="w-1/2 p-12"
                            src="/img/Asset scroll.png"
                            alt="images not found"
                        />
                    </div>
                    <div class="flex items-center justify-center">
                        <div class="text-right">
                            <h1 class="text-4xl text-pink-300 font-bold">
                                Manfaat ASI bagi Balita
                            </h1>
                            <p class="">
                                Para ahli telah sepakat bahwa ASI merupakan
                                asupan terbaik bagi bayi karena mengandung
                                banyak nutrisi penting yang dibutuhkan bayi
                                dalam tumbuh kembangnya. Kandungannya mulai dari
                                vitamin, protein, lemak, karbohidrat, dan
                                berbagai mineral penting lainnya. Mengingat
                                begitu penting dan banyaknya manfaat ASI,
                                pemerintah mengeluarkan peraturan tentang ASI
                                eksklusif selama 6 bulan pertama.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="px-24 grid grid-cols-2">
                        <div class="flex items-center justify-center">
                            <div class="">
                                <h1 class="text-4xl text-pink-300 font-bold">
                                    5 MEJA POSYANDU
                                </h1>
                                <p class="">
                                    Meja 1 Pendaftaran balita, ibu hamil, ibu
                                    menyusui;<br />
                                    Meja 2 Penimbangan dan pengukuran balita;<br />
                                    Meja 3 Pencatatan hasil penimbangan dan
                                    pengukuran;<br />
                                    Meja 4 Penyuluhan dan Pelayanan gizi bagi
                                    ibu balita, ibu hamil dan ibu menyusui;
                                    dan.<br />
                                    Meja 5 Pelayanan kesehatan, KB dan
                                    Imunisasi.<br />
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center justify-center">
                            <img
                                class="w-1/2 p-16"
                                src="/img/Asset Posyandu 1.png"
                                alt="images not found"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            s: "",
            ortu: {},
            balita: {},
            pemeriksaanBumil: {},
            pemeriksaanBalita: {},
        };
    },
    mounted() {
        this.getOrtu();
        this.getBalita();
        this.getpemeriksaanBumil();
        this.getpemeriksaanBalita();
    },
    methods: {
        getOrtu: function (page = 1) {
            this.axios
                .get("/api/ortu?page=" + page + "&search=" + this.s)
                .then((response) => {
                    this.ortu = response.data;
                    console.log(this.ortu);
                });
        },
        getBalita: function (page = 1) {
            this.axios
                .get("/api/balita?page=" + page + "&search=" + this.s)
                .then((response) => {
                    this.balita = response.data;
                    console.log(this.balita);
                });
        },
        getpemeriksaanBumil: function () {
            this.axios.get("/api/pemeriksaan-bumil").then((response) => {
                this.pemeriksaanBumil = response.data;
                console.log(this.pemeriksaanBumil);
            });
        },
        getpemeriksaanBalita: function () {
            this.axios.get("/api/pemeriksaan-balita").then((response) => {
                this.pemeriksaanBalita = response.data;
                console.log(this.pemeriksaanBalita);
            });
        },
    },
};
</script>

<style scoped>
* {
    scroll-behavior: smooth;
}
body {
    font-family: "Nunito", sans-serif;
}
</style>
