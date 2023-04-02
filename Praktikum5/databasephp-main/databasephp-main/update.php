<?php
        require_once'dbkoneksi.php';

        if(isset($_GET['id'])){
            $id= $_GET['id'];


          $sql = "SELECT * FROM pelanggan WHERE id =:id";
          $stmt= $conn -> prepare($sql);
          $stmt->bindParam(':id', $id);
          $stmt-> execute();

          $row = $stmt -> fetch (PDO:: FETCH_ASSOC);
        }

?>
<form method="post" >
    <input type="hidden" name="id" value="<?= $row['id']?>">

    <label for="">KODE </label>
    <input type="text" name="nomor" value="<?=$row['nomor']?>"><br>

    <label for="">NAMA </label>
    <input type="text" name="kode" value="<?=$row['nama']?>"><br><br>
    
    <label for="">Jenis Kelamin </label>
        <br>
     <label for="">Laki-Laki </label>
    <input type="radio" name="jk" value="L">
    <label for="">Perempuan </label>
    <input type="radio" name="jk" value="P"><br>

    <label for="">Tempta tanggal lahir</label>
    <input type="text" name="tmp_lahir" value="<?=$row['tmp_lahir']?>"><br>

    <label for=""> tanggal lahir</label>
    <input type="date" name="tgl_lahir" value="<?=$row['tgl_lahir']?>"><br>
    
    <label for="">Email</label>
    <input type="text" name="email" value="<?=$row['email']?>"><br>

    <label for="">Kartu_id</label>
    <input type="text" name="kartu_id" value="<?=$row['kartu_id']?>"><br>
<button type="submit" nama="submit">Save</button>

   
</form>