<h2>Input Post</h2>

<form action="<?php echo URL; ?>/posts/save" method="post">
    <table>
        <tr>
            <td>GOLONGAN</td>
            <td>
                <select name="gol_id">
                    <?php foreach ($data['optcat'] as $opt) { ?>
                    <option value="<?php echo $opt['gol_id']; ?>"><?php echo $opt['gol_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="pel_name" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td>
                <textarea name="pel_alamat" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="pel_hp" required></td>
        </tr>
        <tr>
            <td>NO KTP</td>
            <td><input type="text" name="pel_ktp" required></td>
        </tr>
        <tr>
            <td>SERI</td>
            <td><input type="text" name="pel_seri" required></td>
        </tr>
        <tr>
            <td>METERAN</td>
            <td><input type="text" name="pel_meteran" required></td>
        </tr>
        <tr>
            <td>STATUS AKTIF</td>
            <td>
                <select name="pel_aktif">
                    <option value="Y">YA</option>
                    <option value="N">TIDAK</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>USER</td>
            <td><input type="text" name="user_id" required>
                <input type="submit" name="btn_save" value="SAVE">
            </td>
        </tr>
    </table>
</form>