<?php
$level = mysqli_query($koneksi, "SELECT*FROM level ORDER BY id DESC");
if (isset($_POST['tambah'])) {
    $nama_level = $_POST['nama_level'];

    $insert = mysqli_query($koneksi, "INSERT INTO level (nama_level) 
    VALUES('$nama_level')");
    header("location:?pg=level&tambah=berhasil");
}

$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$editLevel = mysqli_query($koneksi, "SELECT*FROM level WHERE id ='$id'");
$rowLevel = mysqli_fetch_assoc($editLevel);

if (isset($_POST['edit'])) {
    $nama_level = $_POST['nama_level'];


    $update = mysqli_query($koneksi, "UPDATE level SET nama_level='$nama_level' WHERE id='$id'");
    header("location:?pg=level&ubah=berhasil");
}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM level WHERE id='$id'");
    header("location:?pg=level&hapus=berhasil");
}

?>
<div class="mt-5 container">
    <div class="row">
        <div class="col-sm-12">
            <fieldset class="border p-3 border-black border-2">
                <legend class="float-none w-auto px-3"><?php echo isset($_GET['edit']) ? 'Edit' : 'Tambah' ?> Kategori</legend>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Level</label>
                        <input type="text" class="form-control" name="nama_level" placeholder="masukan nama level"
                            value="<?php echo isset($_GET['edit']) ? $rowLevel['nama_level'] : '' ?>">
                    </div>
                    <div>
                        <button name="<?php echo isset($_GET['edit']) ? 'edit' : 'tambah' ?>"
                            type="submit" name="tambah" class="btn btn-primary w-100">submit</button>
                    </div>
        </div>
        </form>
        </fieldset>
    </div>
</div>
</div>