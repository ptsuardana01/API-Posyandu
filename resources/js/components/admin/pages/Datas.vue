<template>
   <table class="table table-striped">
      <thead>
         <tr>
            <th scope="col">Kd_Kader</th>
            <th scope="col">Nama</th>
            <th scope="col">NIK</th>
            <th scope="col">TTL</th>
            <th scope="col">Alamat</th>
            <th scope="col">Telp</th>
            <th scope="col">Email</th>
            <th scope="col">Aksi</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <th scope="row">KD_01</th>
            <td>Putu Suratnyana</td>
            <td>1234567890123456</td>
            <td>Singaraja, 08-09-1995</td>
            <td>Singaraja</td>
            <td>081786625435</td>
            <td>pas@gmail.com</td>
            <td>
               <div class="">
                  <a href="" class="btn btn-warning">Edit</a>
                  <button type="button" class="btn btn-danger">Delete</button>
               </div>
            </td>
         </tr>
         <tr>
            <th scope="row">KD_01</th>
            <td>Putu Suratnyana</td>
            <td>1234567890123456</td>
            <td>Singaraja, 08-09-1995</td>
            <td>Singaraja</td>
            <td>081786625435</td>
            <td>pas@gmail.com</td>
            <td>
               <div class="">
                  <a href="" class="btn btn-warning">Edit</a>
                  <button type="button" class="btn btn-danger">Delete</button>
               </div>
            </td>
         </tr>
      </tbody>
   </table>
</template>

<script>
export default {
   mounted() {
      axios.get("/api/kader").then((response) => {
         console.log(response);
      });
   },
};
</script>
