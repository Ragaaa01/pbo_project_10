<h2>Input User</h2>

<form action="<?php echo URL; ?>/hewan/save" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>JENIS</td>
            <td><input type="text" name="jenis" required></td>
        </tr>
        <tr>
            <td>WARNA</td>
            <td><input type="text" name="warna" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="harga" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>