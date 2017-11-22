<!--when we load the view it will load the header,main content and the footer from this file
-->
<?php $this->load->view('includes/header');?>
<!--main content changes so asign it to a variable-->
<?php $this->load->view($main_content);?>

<?php $this->load->view('includes/footer');?>
