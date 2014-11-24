<?php $this->load->view('inc/header');?>
<body><div id="wrapper">

        <?php $this->load->view('inc/nav');?>

        <div id="page-wrapper">

            <div class="container-fluid page {{ pageClass }}" data-ng-view="">

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

<?php $this->load->view('inc/footer');?>