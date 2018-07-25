<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->

        <nav class="sidebar-nav">
            <?php
                $level = $this->session->userdata('level');
                if($level == '1'){
                    $this->load->view('templates/dashboard/leftbar-master');
                }
                elseif ($level == '2'){
                    $this->load->view('templates/dashboard/leftbar-reporter');
                }
            ?>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
