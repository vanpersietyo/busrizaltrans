<!DOCTYPE html>
<html lang="en">
<head>
    <title>invoice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/print-invoice.css')?>">
</head>
<body>

<section class="layout invoice">
    <div class="container-fluid">


        <header class="row">
<!--            <div class="col-xs-3 logo"><img src="image/logo-di-invoice.png" style="width: 100px" alt="Image"></div>-->
            <div class="col-xs-12 title text-center"><h1>Invoice Reservasi Bus</h1></div>
        </header>

        <hr>
        <section class="row box">
            <div class="col-xs-12">
                <p class="nama-agen text-bold">Hai Nama Agen,</p>
                <p>Terima kasih telah melakukan pemesanan untuk layanan Reservasi Bus Rizal Trans.<br>
                    Berikut informasi terkait pesanan anda yang dibuat pada 28 November 2017.</p>
            </div>
        </section>
        <hr>

        <section class="row box">
            <div class="col-xs-6 box1"><span class="box-1a">Status pesanan</span><span class="box-1b">Unpaid</span></div>
            <div class="col-xs-6 box1"><span class="box-1a">Kode Booking</span><span class="box-1b">EFSA43</span></div>
            <div class="col-xs-6 box2"><span class="box-2a">Tanggal Tagihan</span><span class="box-2b">24 September 2018 20:30 WIB</span></div>
            <div class="col-xs-6 box2"><span class="box-2a">Jatuh Tempo</span><span class="box-2b">25 September 2018 20:30 WIB</span></div>
        </section>

        <section class="row box">
            <div class="title">Informasi Pesanan:</div>
            <div class="col-md-4 col-xs-4">
                <ul class="list-none right">
                    <li>Nama Bus</li>
                    <li>Keberangkatan</li>
                    <li>Durasi</li>
                    <li>Jumlah Seat</li>
                </ul>
            </div>
            <div class="col-md-8 col-xs-8">
                <ul class="list-none">
                    <li>Jelajah Ranah Minang</li>
                    <li>25 Oktober 2017</li>
                    <li>7 Hari 6 Malam</li>
                    <li>60 Seat</li>
                </ul>
            </div>
        </section>

        <section class="row box">
            <div class="title">DATA PEMESAN:</div>
            <div class="col-md-4 col-xs-4">
                <ul class="list-none right">
                    <li>Nama</li>
                    <li>Alamat</li>
                    <li>Email</li>
                    <li>Telepon</li>
                    <li>Metode Pembayaran</li>
                    <li>Harga Total</li>
                    <li>Sisa Pembayaran</li>
                </ul>
            </div>
            <div class="col-md-8 col-xs-8">
                <ul class="list-none">
                    <li>Zainal Amri</li>
                    <li>Simolawang 5 No.10 Surabaya</li>
                    <li>zainal.darmawisata@gmail.com</li>
                    <li>081703324122</li>
                    <li>DP 50%</li>
                    <li>Rp. 3.500.000</li>
                    <li>Rp. 1.750.000</li>
                </ul>
            </div>
        </section>

        <section class="row box gray">
            <div class="col-md-6 box2"><span class="box-2a">Metode Pembayaran</span><span class="box-2b">BCA Virtual Account 7910200060052878<br>
  Mandiri Virtual Account 100010152878</span></div>
            <div class="col-md-6 box1"><span class="box-1a">Total Pembayaran</span><span class="box-1b">Rp. 1.750.867</span></div>
        </section>

        <section class="row">
            <hr>
            <div class="col-xs-12">
                Info pembayaran yang perlu diketahui untuk pemrosesan pesanan:<br>
                <ul>
                    <li>Maksimal pembayaran 1 hari setelah reservasi</li>
                    <li>Lakukan pembayaran sesegera mungkin untuk memastikan ketersediaan paket yang diinginkan.</li>
                    <li>Pastikan melakukan pembayaran sesuai jumlah tagihan.</li>
                    <li>Lakukan Konfirmasi pembayaran jika sudah melakukan transfer ke rekening perusahaan</li>
                    <li>Lakukan Pelunasan H-1 sebelum keberangkatan</li>
                    <li>Pesanan yang pembayarannya diterima, akan diproses selama hari kerja.</li>
                    <li>Anda bisa masuk dan login di User Panel - Transaksi - Tour untuk melihat dan membayarkan invoice.</li>
                    <li>Lakukan Transfer Pada Kondisi Bank online untuk mempercepat tim kami melakukan validasi</li>
                </ul>
                <br>Jika ada pertanyaan terkait pemesanan Anda, silahkan menghubungi
                081357874401 (WA)
            </div>
        </section>


        <footer class="row">
            <div class="col-xs-12"><span class="text-bold">BUS RIZAL TRANS</span><br>
                Jl Mayjen Bambang Yuwono No 121,Balongbendo Sidoarjo, Jawa Timur<br>
                Telp: 081357874401 (WA)</div>
        </footer>


    </div>

    <section class="row box text-center">
        <div class="col-md-12"><small><i>Email ini ditujukan hanya untuk Zainal Amri karena telah melakukan pemesanan Bus di Rizal Trans.<br> Harap berhati-hati karena kami tidak pernah memberikan nomor telepon dan rekening bank pribadi.</i></small></div>
    </section>

</section>

</body>
</html>
