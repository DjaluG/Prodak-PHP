<?php
//array barang
$barang = [
    [
        'produk' => 'TV',
        'diskon' => 15,
        'harga' => 1600000
    ],
    [
        'produk' => 'Kulkas LG 2 Pintu',
        'diskon' => 30,
        'harga' => 3000000
    ],
    [
        'produk' => 'PC',
        'diskon' => 10,
        'harga' => 2300000
    ]
];

// penjumlahan dari array diatas
if(isset($_POST['kirim'])){
    $produk = $_POST['barang'];
    $jmlProduk = $_POST['total'];

    foreach($barang as $baran){
        if($baran['produk'] === $produk){
            $produkDiskon = $baran['diskon']; // menampilkan diskon

            $totalHarga = ($jmlProduk * $baran['harga']);
            $hasilDiskon = $totalHarga - ($totalHarga * $baran['diskon'] / 100);
        }
    }


}

?>
    <title>Prodak Moment</title>
    <center>
    <form action="" method="POST">
        <table border="1" cellspacing="1" cellpadding="1">
            <tr>
                <td>Barang</td>
                <td>
                    <select name="barang" id="" required>
                        <?php foreach($barang as $baran) :?>
                            <option value="<?= $baran['produk'] ;?>"><?= $baran['produk'] ;?></option>
                        <?php endforeach ;?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Total Prodak</td>
                <td><input type="number" name="total" required></td>
            </tr>
            <tr><td><button type="submit" name="kirim">Submit</button></td></tr>
        </table>
    </form>
    
    
    <?php if(isset($_POST['kirim'])) :?>
        <h3>
            <?= $_POST['barang'] . " * " . $_POST['total'] . " = Rp. " . number_format($totalHarga) ;?></br>
            Setelah diskon <?= $produkDiskon ;?>%  Menjadi Rp. <?= number_format($hasilDiskon) ;?></br>
        </h3>
    <?php endif ;?>
    </center>