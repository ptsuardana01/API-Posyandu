<template>
    <div
        class="w-full h-24 flex items-center justify-between bg-pink-100 sm:items-center px-40 sm:pt-0 shadow-md fixed z-10"
    >
        <div class="flex items-center">
            <img class="h-12" src="/img/Logo.png" alt="" />
        </div>
        <div class="hidden top-0 right-0 px-8 py-4 sm:block space-x-8">
            <router-link
                class="text-sm text-pink-700 font-bold hover:text-indigo-500 motion-reduce:transform-none transition duration-700"
                :to="{ name: 'Homepage' }"
                >Homepage</router-link
            >
            <a
                class="text-sm text-pink-700 font-bold hover:text-indigo-500 motion-reduce:transform-none transition duration-700"
                href="#tentang"
                >Tentang</a
            >

            <router-link
                :to="{ name: 'Registrasi' }"
                class="text-sm text-pink-700 font-bold hover:text-indigo-500 motion-reduce:transform-none transition duration-700"
                >Data Diri</router-link
            >

            <router-link
                :to="{ name: 'Registrasi' }"
                class="text-sm text-pink-700 font-bold hover:text-indigo-500 motion-reduce:transform-none transition duration-700"
                >Statistik Posyandu</router-link
            >

            <router-link
                :to="{ name: 'Registrasi' }"
                class="ml-4 text-sm text-pink-700 font-bold hover:text-indigo-500 motion-reduce:transform-none transition duration-700"
                >Register</router-link
            >

            <button
                @click="logout()"
                class="text-sm text-pink-700 transition hover:text-indigo-500 duration-700 transform hover:scale-150 motion-reduce:transform-none"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-power"
                    viewBox="0 0 16 16"
                >
                    <path d="M7.5 1v7h1V1h-1z" />
                    <path
                        d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"
                    />
                </svg>
            </button>
        </div>
    </div>
</template>

<script>
export default {
    methods: {
        logout() {
            axios.post("/logout").then((response) => {
                window.location.href = "/";
            });
        },
    },
};
</script>
