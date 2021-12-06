<template>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <router-link class="nav-link" aria-current="true" to="/data-kader">Datas</router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" to="/add-kader">Add Data</router-link>
      </li>
    </ul>
  </div>
  <div class="card-body">
      <router-view></router-view>
  </div>
</div>
</template>
