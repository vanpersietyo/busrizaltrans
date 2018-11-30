    <?php $this->load->view('template/head');?>
    <!-- ! header page-->
    <?php $this->load->view('template/sidebar');?>
    <!-- ! header page-->

    <!-- section content-->
    
    <?php $this->load->view($template); ?>
    <!-- ! section content-->

    <!-- footer-->
    <?php $this->load->view('template/footer');?>
    <!-- ! footer-->

    <?php $this->load->view('template/script');?>