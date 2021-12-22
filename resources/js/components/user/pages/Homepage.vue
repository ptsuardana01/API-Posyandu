<template>
    <div class="bg-white h-screen py-24">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
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
                    <p class="text-xl mb-4">
                        Masukan data untuk mencari jadwal :
                    </p>
                </div>
                <form class="flex gap-5" action="">
                    <input
                        class="py-2 px-4 w-1/4 bg-gray-100 shadow-md rounded-lg"
                        type="text"
                        placeholder="Masukan Nama"
                    />
                    <input
                        class="py-2 px-4 w-1/4 bg-gray-100 shadow-md rounded-lg"
                        type="text"
                        placeholder="Nomor Akte Kelahiran anak anda"
                    />
                    <input
                        class="py-2 px-4 w-1/4 bg-gray-100 shadow-md rounded-lg"
                        type="text"
                        placeholder="NIK Ibu balita"
                    />
                    <button
                        class="rounded-lg bg-blue-100 w-52 px-7 py-4 font-bold text-lg shadow-lg hover:bg-indigo-500 cursor-pointer transition duration-700 transform hover:scale-110 motion-reduce:transform-none hover:text-white"
                    >
                        Cari
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>
