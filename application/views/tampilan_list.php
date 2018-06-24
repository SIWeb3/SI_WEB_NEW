<section id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                <div class="card-header">
                        <h2>List Data Mahasiswa</h2>
                </div>          
<hr>
 
<table class="table">
    <thead align="center">
    <tr><th>NIM</th>
        <th>NAMA</th>
        <th>PRODI</th>
        <th>GOLONGAN</th>
        <th>OPSI</th>
        <th colspan="2"></th></tr>
    </thead>
    <tbody>
    <?php
    foreach ($review as $b){
        echo "<tr>
            <td>$b->nim</td>
            <td>$b->nama</td>
            <td>$b->prodi</td>
            <td>$b->golongan</td>
            <td>".anchor('list_mahasiswa/edit/'.$b->nim,'EDIT')."</td>
            </tr>";
    }
    
    
    ?>
    </tbody>
    <!-- <?php
    echo $review['data_mahasiswa'];
    ?> -->
</table>
</div>
</div>
</div>
</section>