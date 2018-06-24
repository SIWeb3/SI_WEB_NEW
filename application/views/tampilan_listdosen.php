<section id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                <div class="card-header">
                        <h2>List Data Dosen</h2>
                </div>          
<hr>
 
<table class="table">
    <thead align="center">
    <tr><th>NIP</th>
        <th>NAMA DOSEN</th>
        <th>HAK AKSES</th>
        <th>PASSWORD</th>
        <th>PRODI</th>
        <th>NO HP</th>
        <th colspan="2"></th></tr>
    </thead>
    <tbody>
    <?php
    foreach ($review as $b){
        echo "<tr>
            <td>$b->nip</td>
            <td>$b->nama_dosen</td>
            <td>$b->hak_akses</td>
            <td>$b->password</td>
            <td>$b->prodi</td>
            <td>$b->no_hp</td>
            <td>".anchor('list_dosen/edit/'.$b->nip,'EDIT')."</td>
            </tr>";
    }
    
    
    ?>
    </tbody>
    <!-- <?php
    echo $review['data_dosen'];
    ?> -->
</table>
</div>
</div>
</div>
</section>