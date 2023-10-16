<section>
<form action="<?= base_url('Web/infotamu'); ?>"
        method="post">
<center>
<table>
            <tr>
                <th colspan="3">
 Input Buku Tamu
</th>
</tr>
<tr>
    <td colspan="3">
        <hr>
    </td>
</tr>
<tr>
    <th>Nama lengkap</th>
    <th>:</th>
    <td>
        <input type="text" name="nama" id="nama">
    </td>
</tr>
<tr>
    <th>Email</th>
    <td>:</td>
    <td>
        <input type="text" name="email" id="email">
    </td>
</tr>
<tr>
    <th>Komentar</th>
    <td>:</td>
    <td>
        <textarea name="komentar" rows="6" cols="21"></textarea>
    </td>
</tr>
 
</td>
</tr>
<tr>
    <td colspan="3" align="center">
        <input type="submit" value="Submit">
    </td>
</tr>
</table>
</center>
</form>
</section>