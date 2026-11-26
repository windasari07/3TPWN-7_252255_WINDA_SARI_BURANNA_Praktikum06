<aside class="sidebar" id="tambah">
    <h2>Cari buku</h2>
    <form action="index.php" method="get" class="form-buku">
        <p>
            <label for="cari">Kata kunci</label>
            <input type="text" id="cari" name="cari"
                   value="<?= htmlspecialchars($kataCari) ?>">
        </p>
        <button type="submit">Cari</button>
    </form>

    <h2>Kategori</h2>
    <ul>
        <?php foreach ($kategori as $id => $nama): ?>
            <li>
                <a href="index.php?kategori=<?= $id ?>"><?= $nama ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Tambah buku</h2>
    <form action="index.php" method="post" class="form-buku">
        <p>
            <label for="judul">Judul</label>
            <input type="text" id="judul" name="judul" required>
        </p>
        <p>
            <label for="penulis">Penulis</label>
            <input type="text" id="penulis" name="penulis" required>
        </p>
        <p>
            <label for="kategori">Kategori</label>
            <select id="kategori" name="kategori">
                <?php foreach ($kategori as $id => $nama): ?>
                    <option value="<?= $id ?>"><?= $nama ?></option>
                <?php endforeach; ?>
            </select>
        </p>
        <p>
            <label for="tahun">Tahun</label>
            <input type="number" id="tahun" name="tahun"
                   min="1900" max="2026" required>
        </p>
        <p>
            <label for="stok">Stok</label>
            <input type="number" id="stok" name="stok" min="0" required>
        </p>
        <button type="submit" name="simpan">Tambah</button>
    </form>
</aside>
