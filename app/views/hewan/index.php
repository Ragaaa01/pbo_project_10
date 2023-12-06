<h2>Users</h2>

<a href="<?php echo URL; ?>/hewan/input" class="btn">Input User</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>JENIS</th>
            <th>WARNA</th>
            <th>HARGA</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['jenis']; ?></td>
                  <td><?php echo $row['warna']; ?></td>
                  <td><?php echo $row['harga']; ?></td>
                  <td><a href="<?php echo URL; ?>/hewan/edit/<?php echo $row['hewan_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/hewan/delete/<?php echo $row['hewan_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>