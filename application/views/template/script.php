
	<!-- sweetalert -->
    <script src="<?=base_url('assets/third_party/').'sweetalert/dist/sweetalert2.all.min.js'?>"></script>
    <script src="<?=base_url('assets/third_party/').'sweetalert/dist/sweetalert2.min.js'?>"></script>
	<!-- .sweetalert -->
    
    <script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/bootstrap-datepicker.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/custom-navigation.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/custom-date-picker.js')?>"></script>

    <script>
        $(document).ready(function(){
            $('.support-content').hide();
            $('a.btn-support').click(function(e){
                e.stopPropagation();
                $('.support-content').slideToggle();
            });
            $('.support-content').click(function(e){
                e.stopPropagation();
            });
            $(document).click(function(){
                $('.support-content').slideUp();
            });
        });
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5bd52c03476c2f239ff6511b/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
  </body>
</html>