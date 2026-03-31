<!-- VIEW: Halaman Invois | VIEW: Invoice Page -->
<!-- Paparan ini menerima data $invois daripada Controller untuk dipaparkan kepada pengguna | This display receives $invois data from Controller to be displayed to users -->

<h1 class="page-title">Invois Tempahan Biskut Klasik</h1>
<div class="invoice-box">
    <div class="invoice-header">
        <div class="invoice-info">
            <strong>Kepada:</strong><br>
            <!-- htmlspecialchars digunakan untuk keselamatan bagi mengelakkan serangan XSS | htmlspecialchars used for security to prevent XSS attacks -->
            <?= htmlspecialchars($invois['nama_pelanggan']) ?>
        </div>
        <div class="invoice-info invoice-info-right">
            <strong>No. Invois:</strong> <?= htmlspecialchars($invois['no_invois']) ?><br>
            <strong>Tarikh:</strong> <?= htmlspecialchars($invois['tarikh']) ?>
        </div>
    </div>

    <table class="invoice-table">
        <thead>
            <tr>
                <th class="table-cell table-header">Produk</th>
                <th class="table-cell table-header">Saiz</th>
                <th class="table-cell table-header text-right">Harga</th>
                <th class="table-cell table-header text-center">Kuantiti</th>
                <th class="table-cell table-header text-right">Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <!-- Menggelung (Looping) setiap item tempahan yang dihantar dalam array $invois['items'] | Looping through each booking item sent in the $invois['items'] array -->
            <?php foreach ($invois['items'] as $item): ?>
                <tr>
                    <td class="table-cell"><?= htmlspecialchars($item['nama_produk']) ?></td>
                    <td class="table-cell"><?= htmlspecialchars($item['saiz']) ?></td>
                    <td class="table-cell text-right">RM <?= number_format($item['harga_seunit'], 2) ?></td>
                    <td class="table-cell text-center"><?= $item['kuantiti'] ?></td>
                    <td class="table-cell text-right">RM <?= number_format($item['jumlah_harga'], 2) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <!-- Memaparkan jumlah keseluruhan tempahan | Displaying overall booking total -->
            <tr>
                <td colspan="4" class="table-cell total-label-cell">Jumlah Besar</td>
                <td class="table-cell total-amount-cell">RM <?= number_format($invois['jumlah_besar'], 2) ?></td>
            </tr>
        </tfoot>
    </table>

    <div class="invoice-note">
        <p>* Sila cetak invois ini dan serahkan semasa mengambil tempahan.</p>
        <p>* Bayaran boleh dibuat secara tunai atau imbas Kod QR semasa pengambilan.</p>
    </div>

    <!-- Butang tindakan untuk mencetak menggunakan fungsi JavaScript tetingkap (window.print) | Action button to print using JavaScript window function (window.print) -->
    <div class="action-buttons">
        <button onclick="window.print()" class="print-btn">Cetak Invois</button>
    </div>
</div>