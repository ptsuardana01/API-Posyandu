<template>
    <div
        class="w-full h-24 flex items-center justify-between bg-pink-100 sm:items-center px-40 sm:pt-0 shadow-md fixed"
    >
        <div class="flex items-center justify-center">
            <img class="h-12" src="img/Logo.png" alt="" />
        </div>

        <div class="hidden top-0 right-0 px-8 py-4 sm:block space-x-8">
            <a
                class="text-sm text-gray-700 dark:text-gray-500 underline"
                href="#beranda"
                >Homepage</a
            >
            <a
                class="text-sm text-gray-700 dark:text-gray-500 underline"
                href="#tentang"
                >Tentang</a
            >

            <a
                href=""
                class="text-sm text-gray-700 dark:text-gray-500 underline"
                >Data Diri</a
            >

            <a
                href=""
                class="text-sm text-gray-700 dark:text-gray-500 underline"
                >Statistik Posyandu</a
            >

            <a
                href=""
                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"
                >Register</a
            >

            <button
                @click="logout()"
                class="text-sm text-gray-700 dark:text-gray-500 underline"
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
                window.location.href = "/login";
            });
        },
    },
};
</script>
