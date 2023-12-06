<?php

namespace App\Models;

use App\Core\Model;

class Hewan extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_hewan";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $nama = $_POST['nama'];
            $jenis = $_POST['jenis'];
            $warna = $_POST['warna'];
            $harga = $_POST['harga'];

            $sql = "INSERT INTO tb_hewan
            SET nama=:nama, jenis=:jenis, warna=:warna, harga=:harga";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":jenis", $jenis);
            $stmt->bindParam(":warna", $warna);
            $stmt->bindParam(":harga", $harga);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_hewan WHERE hewan_id=:hewan_id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":hewan_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $nama = $_POST['nama'];
            $jenis = $_POST['jenis'];
            $warna = $_POST['warna'];
            $harga = $_POST['harga'];
            $id = $_POST['id'];

            if (!empty($password)) {
                  $sql = "UPDATE tb_hewan
                  SET nama=:nama, jenis=:jenis, warna=:warna, harga=:harga
                  WHERE hewan_id=:hewan_id";
            } else {
                  $sql = "UPDATE tb_hewan
                  SET nama=:nama, jenis=:jenis, warna=:warna, harga=:harga
                  WHERE hewan_id=:hewan_id";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":jenis", $jenis);
            $stmt->bindParam(":warna", $warna);
            $stmt->bindParam(":harga", $harga);
            $stmt->bindParam(":hewan_id", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_hewan WHERE hewan_id=:hewan_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":hewan_id", $id);
            $stmt->execute();
      }
}
