<h2>Edit User</h2>

<form action="<?php echo URL; ?>/hewan/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['hewan_id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['nama']; ?>" required></td>
        </tr>
        <tr>
            <td>JENIS</td>
            <td><input type="text" name="jenis" value="<?php echo $data['row']['jenis']; ?>" required></td>
        </tr>
        <tr>
            <td>WARNA</td>
            <td><input type="text" name="warna" value="<?php echo $data['row']['warna']; ?>" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="harga" value="<?php echo $data['row']['harga']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>