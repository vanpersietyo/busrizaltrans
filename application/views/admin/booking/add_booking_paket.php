<?php
/**
 * Created by PhpStorm.
 * User: tipk
 * Date: 19/10/2018
 * Time: 10:00
 */
?>

<style>
    .collapsing {
        width: 1px;
        white-space: nowrap;
    }
</style>

<div id="result_ajax"></div>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?=$title?>
        <small>By Paket</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <form onsubmit="proses_add_booking()" action="javascript:void(0)" method="post" onchange="change_button_cek()" id="dataform">

        <div class="row">

            <!-- /.col (left) -->
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Data Pemesan</h3>
                    </div>
                    <div class="box-body">

                        <input type="hidden" name="kode_customer" id="kode_customer" value="0">
                        <div class="form-group">
                            <label for="namaPemesan">Nama Pemesan</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Masukkan Nama Pemesan" name="nama" id="namaPemesan">
                                <span class="input-group-btn">
                                            <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-pemesan"><i class="fa fa-search"></i></button>
                                            <button type="button" class="btn btn-danger btn-flat" onclick="hapus_data_pemesan()"><i class="fa fa-times"></i></button>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="AlamatPemesan">Alamat</label>
                            <input type="text" id="AlamatPemesan" class="form-control" name="alamat" placeholder="Masukkan Alamat" >
                        </div>
                        <div class="form-group">
                            <label for="telppemesan">No Telp</label>
                            <input id="telppemesan" type="text" maxlength="13" class="form-control" name="telepon"  placeholder="No Telepon Pemesan" >
                        </div>
                        <div class="form-group">
                            <label for="CatatanPemesan">Catatan Pemesan</label>
                            <input id="CatatanPemesan" name="catatan" type="text" class="form-control"  placeholder="Masukkan Catatan Pemesan">
                        </div>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col (right) -->

            <!-- /.col (left) -->
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Data Bus</h3>
                    </div>

                    <div class="box-body">

                        <div class="form-group">

                            <div class="row">
                                <div class="col-lg-9">

                                    <label for="namaPemesan">Pilih Armada</label>

                                    <select class="selectpicker form-control" id="KodeArmada" name="kode_armada" data-show-subtext="true" data-live-search="true">
                                        <?php
                                        $i = 1;
                                        foreach ($armada->result() as $tujuan){ ?>
                                            <option value="<?=$tujuan->kode_armada?>" ><?=$tujuan->kode_armada.' - '.$tujuan->nama_armada.' ('.$tujuan->kapasitas_armada.' Penumpang)'?></option>
                                            <?php

                                        }
                                        ?>
                                    </select>

                                </div>
                                <div class="col-lg-3">

                                    <label for="exampleInputPassword1">Jumlah Armada</label>
                                    <input type="number" class="form-control" id="JumlahArmada" value="1" name="qty">

                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group">

                            <div class="row">
                                <div class="col-lg-6">

                                    <label>Dari Lokasi:</label>
                                    <select data-live-search-placeholder="Cari Kota" class="selectpicker form-control" name="kota_awal" data-show-subtext="true" data-live-search="true">
                                        <?php
                                        $i = 1;
                                        foreach ($kota_awal->result() as $tujuan){ ?>
                                            <option value="<?=$tujuan->nama_kota_awal?>"><?=$tujuan->nama_kota_awal?></option>
                                            <?php

                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-6">

                                    <label>Ke Lokasi:</label>
                                    <select data-live-search-placeholder="Cari Kota" class="selectpicker form-control" name="kota_tujuan" data-show-subtext="true" data-live-search="true">
                                        <?php
                                        $i = 1;
                                        foreach ($kota_tujuan->result() as $tujuan){ ?>
                                            <option value="<?=$tujuan->nama_kota_tujuan?>"><?=$tujuan->nama_kota_tujuan?></option>
                                            <?php

                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group">

                            <div class="row">
                                <div class="col-lg-6">

                                    <label>Dari Tanggal:</label>
                                    <input autocomplete="off" placeholder="DD/MM/YYYY" type="text" class="form-control" name="tanggal_awal" id="datepicker" data-date-format="dd/mm/yyyy">
                                </div>
                                <div class="col-lg-6">



                                    <div class="row">
                                        <div class="col-lg-8">

                                            <label>Sampai Tanggal:</label>
                                            <input autocomplete="off" placeholder="DD/MM/YYYY" type="text" onchange="hitung_hari()" class="form-control" name="tanggal_akhir" id="datepicker2" data-date-format="dd/mm/yyyy">
                                        </div>

                                        <div class="col-lg-4">

                                            <label for="exampleInputPassword1">Hari </label>
                                            <input type="text" class="form-control" id="HariBooking" name="durasi" readonly="readonly" value="0">

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="exampleInputPassword1">Tagihan </label>
                                    <input onchange="hitungtagihan()" onfocus="$(this).select()" type="tel" leng class="form-control Tagihan" id="Tagihan" name="tagihan" value="0">
                                </div>
                                <div class="col-lg-6">
                                    <label for="exampleInputPassword1">Potongan / Diskon</label>
                                    <input onchange="hitungtagihan()" onfocus="$(this).select()" type="tel" class="form-control PotonganDiskon" id="PotonganDiskon" name="potongan" value="0" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->

                    </div>
                    <!-- /.box body-->
                </div>

            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body">

                        <div class="form-group">

                            <div class="row">
                                <div class="col-lg-3">
                                    <label for="exampleInputPassword1">Total Tagihan</label>
                                    <input type="text" class="form-control" id="TotalTagihan" name="total_tagihan" readonly="readonly" value="0">

                                </div>
                                <div class="col-lg-3">

                                    <label for="namaPemesan">Pembayaran</label>

                                    <select class="form-control" name="status_pembayaran" id="StatusPembayaran" onchange="ganti_metode_pembayaran()" >
                                        <option value="1" >Belum Bayar</option>
                                        <option value="2" >DP (25%)</option>
                                        <option value="3" >LUNAS</option>
                                    </select>

                                </div>

                                <div class="col-lg-3">
                                    <label for="exampleInputPassword1">Nominal Pembayaran</label>
                                    <input type="text" class="form-control" id="Pembayaran" name="nominal_pembayaran" readonly="readonly" value="0">

                                </div>

                                <div class="col-lg-3">
                                    <label for="exampleInputPassword1">Sisa Tagihan</label>
                                    <input type="text" class="form-control" id="SisaTagihan" name="sisa_tagihan" readonly="readonly" value="0">

                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group">

                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="exampleInputPassword1">Keterangan Booking</label>
                                    <input type="text" class="form-control" name="keterangan_booking" id="KeteranganBooking" placeholder="Masukkan Keterangan Booking. Ex:Sby-Jkt 4 Hari 2 Malam">
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <div class="box box-primary">

                    <div class="box-body">

                        <a type="button" href="<?= site_url('admin/booking.html')?>" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>

                    </div>

                </div>

            </div>
        </div>

    </form>

</section>


<div class="modal modal-md fade" id="modal-pemesan">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-center bg-primary" >
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-white" style="color: black">List Pemesan</h4>
            </div>
            <div class="modal-body">
                <div class="table-responsive">

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Pilih</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Catatan</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        foreach ($pemesan->result() as $key) {?>
                            <tr>
                                <td><a href="#" data-dismiss="modal" class="btn btn-info" onclick="caripemesan('<?=$key->kode_customer?>','<?=$key->nama?>','<?=$key->alamat?>','<?=$key->telepon?>','<?=$key->catatan?>')"> pilih </a> </td>
                                <td ><?=$key->kode_customer?></td>
                                <td class="collapsing"><?=$key->nama?></td>
                                <td ><?=$key->alamat?></td>
                                <td ><?=$key->telepon?></td>
                                <td ><?=$key->catatan?></td>
                            </tr>
                        <?php }
                        ?>


                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer text-center bg-primary">
                <button type="button" class="btn btn-outline" data-dismiss="modal" autofocus="autofocus">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<script>

    function proses_add_booking(){//keyup,change
//        var namaPemesan = document.getElementById("namaPemesan").value;

        $.ajax({
            type: "POST",
            url : "<?php echo site_url('admin/proses_add_booking');?>",
            data: $('#dataform').serialize(),
            success: function(data){
                $('#result_ajax').html(data);
            },
            error: function(data){
                alert('error');
            },
        });
    };

    function change_button_cek(){
//        alert('tes');
//        document.getElementById("CatatanPemesan").value = 'tes' ;
    };

    function hitung_hari(){

        $.ajax({
            type: "POST",
            url : "<?php echo site_url('admin/booking/count_days');?>",
            data: $('#dataform').serialize(),
            success: function(data){
                document.getElementById("HariBooking").value = data ;
            },
            error: function(data){
                alert('error');
            },
        });

    };

    //datepicker
    $(function() {
        $( "#datepicker" ).datepicker();
        $( "#datepicker2" ).datepicker();
    });

    //untuk mengambil value dari modal customer
    function caripemesan(a,b,c,d,e) {
        var a;
        var b;
        var c;
        var d;
        var e;
        document.getElementById("kode_customer").value  = a;
        document.getElementById("namaPemesan").value    = b;
        document.getElementById("AlamatPemesan").value  = c ;
        document.getElementById("telppemesan").value    = d ;
        document.getElementById("CatatanPemesan").value = e ;
        $("#namaPemesan").attr('readonly','readonly');
        $("#AlamatPemesan").attr('readonly','readonly');
        $("#telppemesan").attr('readonly','readonly');
        $("#CatatanPemesan").attr('readonly','readonly');
    }

    //untuk mengisi total tagihan
    function hitungtagihan() {
        var a;
        var b;
        var c;
        a = converttoint(document.getElementById("Tagihan").value);
        b = converttoint(document.getElementById("PotonganDiskon").value);
        // alert(a + ' - ' + b);
        c = a-b;
        document.getElementById("TotalTagihan").value  = convertToRupiah(c) ;
        ganti_metode_pembayaran();
    }

    //hitung sisa tagihan
    function hitungsisatagihan() {
        var a = converttoint(document.getElementById("TotalTagihan").value);
        var b = converttoint(document.getElementById("Pembayaran").value);
        var c = a-b;
        document.getElementById("SisaTagihan").value  = convertToRupiah(c);
    }


    //untuk gatni metode pembayaran
    function ganti_metode_pembayaran(){

        var a=document.getElementById("StatusPembayaran").value;
        var b=converttoint(document.getElementById("TotalTagihan").value);

        if(a==1){
            document.getElementById("Pembayaran").value=0;
            $("#Pembayaran").attr('readonly','readonly');
        } else if (a==2) {
            document.getElementById("Pembayaran").value=convertToRupiah(b*0.25);
            $("#Pembayaran").attr('readonly','readonly');

        }else if (a==3) {
            document.getElementById("Pembayaran").value=convertToRupiah(b);
            $("#Pembayaran").attr('readonly','readonly');

        }else {
            document.getElementById("Pembayaran").value=1234567890;
            $("#Pembayaran").attr('readonly','readonly');
        }
        hitungsisatagihan();
    };

    //untuk mengambil value dari modal customer
    function CariBus(a,b) {
        var a;
        var b;
        document.getElementById("NamaBus").value  = a + ' - ' + b;
        document.getElementById("KodeArmada").value  = a ;
        $("#NamaBus").attr('readonly','readonly');
    }

    //fungsi untuk konversi titik
    function converttoint(money) {
        a=money.replace(/\,/g, '');
        b=parseInt(a);
        return b;
    }

    //fungsi untuk konversi ke format rupiah
    function convertToRupiah(angka)
    {
        var rupiah = '';
        var angkarev = angka.toString().split('').reverse().join('');
        for(var i = 0; i < angkarev.length; i++)
            if(i%3 == 0) rupiah += angkarev.substr(i,3)+',';
        return rupiah.split('',rupiah.length-1).reverse().join('');
    }

    function hapus_data_pemesan() {
        document.getElementById("kode_customer").value  = 0;
        document.getElementById("namaPemesan").value    = '';
        document.getElementById("AlamatPemesan").value  = '';
        document.getElementById("telppemesan").value    = '';
        document.getElementById("CatatanPemesan").value = '';
        $("#namaPemesan").removeAttr('readonly');
        $("#AlamatPemesan").removeAttr('readonly');
        $("#telppemesan").removeAttr('readonly');
        $("#CatatanPemesan").removeAttr('readonly');
    }


    //datatable untuk modals customer
    $(function () {
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : true,
            'ordering'    : true,
            'info'        : false
        })
    })


    //icheck checkbox
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
        });
    });

    //format uang rupiah
    $(document).ready(function(){
        $('.PotonganDiskon').mask('0,000,000,000,000', {reverse: true});
        $('.Tagihan').mask('0,000,000,000,000', {reverse: true});
    });

</script>