<template>
    <div
        class="w-full pt-20 pb-1 pl-0 lg:pl-2 flex justify-center items-center"
    >
        <div class="lg:w-1/2">
            <img class="w-5/6 py-12" src="/img/Asset Ibu Hamil 1.png" alt="" />
        </div>
        <div class="leading-loose lg:w-1/2">
            <form class="p-24 bg-white rounded shadow-xl1">
                <p class="text-2xl text-pink-800 pb-4 font-bold text-center">
                    Registrasi Konsultasi
                </p>

                <p
                    class="text-lg text-gray-800 font-medium py-4 font-bold text-pink-600"
                >
                    Konsultasi
                </p>
                <select
                    class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"
                    name="jk"
                    id="jk"
                >
                    <option value="" selected disabled>
                        Pilih Jenis Konsultasi
                    </option>
                    <option value="0">Konsultasi Kehamilan</option>
                    <option value="1">Imunisasi</option>
                </select>

                <div class="pb-4 pt-4">
                    <label class="block text-sm text-pink-600" for="nama"
                        >Nama</label
                    >
                    <input
                        class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"
                        id="nama"
                        name="nama"
                        type="text"
                        required=""
                        placeholder="Masukkan Nama Anda"
                    />
                </div>
                <div class="pb-4">
                    <label class="block text-sm text-pink-600" for="nik"
                        >NIK</label
                    >
                    <input
                        class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"
                        id="nik"
                        name="nik"
                        type="text"
                        required=""
                        placeholder="Masukkan NIK Anda"
                    />
                </div>
                <div class="flex w-full gap-4">
                    <div class="pb-4 w-1/2">
                        <label
                            class="block text-sm text-pink-600"
                            for="tgl_lahir"
                            >Tanggal Lahir</label
                        >
                        <input
                            class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"
                            id="tgl_lahir"
                            name="tgl_lahir"
                            type="date"
                            required=""
                            placeholder="Masukkan Tanggal Lahir Anda"
                        />
                    </div>
                    <div class="pb-4 w-1/2">
                        <label class="block text-sm text-pink-600" for="jk"
                            >Jenis Kelamin</label
                        >
                        <select
                            class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"
                            name="jk"
                            id="jk"
                        >
                            <option value="" selected disabled>
                                Pilih Jenis Kelamin
                            </option>
                            <option value="0">Wanita</option>
                            <option value="1">Pria</option>
                        </select>
                    </div>
                </div>
                <div class="flex w-full gap-4">
                    <div class="pb-4 w-1/2">
                        <label class="block text-sm text-pink-600" for="email"
                            >Email</label
                        >
                        <input
                            class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"
                            id="email"
                            name="email"
                            type="text"
                            required=""
                            placeholder="Masukan Email Anda"
                        />
                    </div>
                    <div class="pb-4 w-1/2">
                        <label class="block text-sm text-pink-600" for="no_hp"
                            >No Ponsel</label
                        >
                        <input
                            class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"
                            id="no_hp"
                            name="no_hp"
                            type="text"
                            required=""
                            placeholder="Masukan No Ponsel Anda"
                        />
                    </div>
                </div>
                <div class="pb-4">
                    <label class="block text-sm text-pink-600" for="alamat"
                        >Alamat</label
                    >
                    <textarea
                        class="w-full px-5 py-4 text-gray-700 bg-gray-200 rounded"
                        name="alamat"
                        placeholder="Masukan Alamat Anda"
                        cols="30"
                        rows="3"
                    ></textarea>
                </div>

                <div class="mt-6">
                    <button
                        class="hover:bg-green-300 cursor-pointer transition duration-700 bg-green-500 transform hover:scale-110 hover:text-pink-600 motion-reduce:transform-none w-44 py-5 px-7 rounded-md font-bold text-white"
                        type="Daftar"
                    >
                        Daftar
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
