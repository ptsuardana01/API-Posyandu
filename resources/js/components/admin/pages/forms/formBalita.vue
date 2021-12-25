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
                            <form class="row g-3" @submit.prevent="save"></form>
                            <!-- Vertical Form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>
