<div class="full-container" style="background:rgba(3, 140, 37, 0.4)">
    <div class="container p-t-b-30">

        <form method="post" id="form_newsletter" action="javascript:void(0)" onsubmit="newsletter()">

            <div class="result-content"> </div>
            <div class="row" align="center">
                <div class="col-sm-7">
                    <h4>
                        Daftarkan alamat email Anda sekarang dan jadi yang pertama tahu tentang promo terbaru Rizal Trans by CV RIZAL TRANS SEJAHTERA!
                    </h4>
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Masukkan Email Anda" name="email"/>
                </div>
                <div class="col-sm-2 btn-submit-subscribe">
                    <button type="submit" class="btn btn-green btn-block">Kirim </button>
                </div>
            </div>

        </form>

    </div>
</div>


<script type="text/javascript">

    function newsletter(){
        swal({html : '<div id="fountainG">' +
        '<div id="fountainG_1" class="fountainG"></div>' +
        '<div id="fountainG_2" class="fountainG"></div>' +
        '<div id="fountainG_3" class="fountainG"></div>' +
        '<div id="fountainG_4" class="fountainG"></div>' +
        '<div id="fountainG_5" class="fountainG"></div>' +
        '<div id="fountainG_6" class="fountainG"></div>' +
        '<div id="fountainG_7" class="fountainG"></div>' +
        '<div id="fountainG_8" class="fountainG"></div>' +
        '</div>',
            showCancelButton: false,
            showConfirmButton: false,
            allowOutsideClick: false,});
        setTimeout(function(){
        $.ajax({
            type: "POST",
            url : "<?php echo site_url('newsletter');?>",
            data: $('#form_newsletter').serialize(),
            success: function(result){
                swal.close();
                $('.result-content').html(result)
            },
            error: function(result){
                swal.close();
                $('.result-content').html(result)
            },
        });
        }, 1600);
    };
</script>
