<section id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                <div class="card-header">
                        <h2>List Data dospem</h2>
                </div>          
<hr>
 
<table class="table">
    <thead align="center">
    <tr><th>ID USULAN</th>
        <th>NIM</th>
        <th>PRODI</th>
        <th>GOLONGAN</th>
        <th>JUDUL</th>
        <th>PENGERJAAN</th>
        <th>DESKRIPSI</th>
        <th>DOSEN PEMBIMBING
        <th>TGL INPUT</th></th>
        <th colspan="2"></th></tr>
    </thead>
    <tbody>
    <?php
    foreach ($review as $b){
        echo "<tr>
            <td>$b->id_usulan</td>
            <td>$b->nim</td>
            <td>$b->prodi</td>
            <td>$b->golongan</td>
            <td>$b->judul</td>
            <td>$b->pengerjaan</td>
            <td>$b->deskripsi</td>
            <td>$b->dosen_pembimbing</td>
            <td>$b->tgl_input</td>
            <td>".anchor('list_dospem/'.$b->nim,'EDIT')."</td>
            </tr>";
    }
    
    
    ?>
    </tbody>
    <!-- <?php
    echo $review['usulan_ta_mhs'];
    ?> -->
</table>
</div>
</div>
</div>
</section>