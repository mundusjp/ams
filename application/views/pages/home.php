<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Home</h4>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- GETTING STARTED -->
        <!-- ============================================================== -->
        <style>
          a.link { color: #FFFFFF; }
          a.link:hover { color: #dddddd; }
        </style>
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <!-- column -->
              <div class="col-md-12">
                <div class="card text-center">
                  <div class="card-body ">
                    <!-- contents -->
                    <h2 class="text-primary"> Getting Started </h2>
                    <p> Get to know about this system first before you can use it smoothly!</p>
                    <div class="row">
                      <!-- <h4 class="text-primary font-weight-bold"> What would you like to do?</h4> -->
                      <div class="col-md-12"><div class="row">
                      <div class="col-md-3">
                        <div class="card">
                          <img class="card-img" height="300" src="<?php echo base_url('assets/vertical/images/custom/terima.jpg')?>">
                          <div class="card-img-overlay card-inverse">
                            <span class="display-2"><a class="link" href="<?php echo base_url('getstarted/masuk')?>"><i class="icon-social-dropbox" style="
                              /* color: white; */
                              font-size: 100px;
                              position: absolute;
                              top: 50%;
                              left: 50%;
                              transform: translate(-50%, -50%);
                              -ms-transform: translate(-50%, -50%);
                              text-align: center;"><h3 class="font-weight-bold">Barang Masuk</h3></i></a>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card">
                          <img class="card-img" height="300" src="<?php echo base_url('assets/vertical/images/custom/perbaiki.jpg')?>">
                          <div class="card-img-overlay card-inverse">
                            <span class="display-2"><a class="link" href="<?php echo base_url('getstarted/perawatan')?>"><i class="icon-wrench" style="
                              /* color: white; */
                              font-size: 100px;
                              position: absolute;
                              top: 50%;
                              left: 50%;
                              transform: translate(-50%, -50%);
                              -ms-transform: translate(-50%, -50%);
                              text-align: center;"><h3 class="font-weight-bold">Perawatan Barang </h3></i></a>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card">
                          <img class="card-img" height="300" src="<?php echo base_url('assets/vertical/images/custom/expired.jpg')?>">
                          <div class="card-img-overlay card-inverse">
                            <span class="display-2"><a class="link" href="<?php echo base_url('getstarted/kadaluarsa')?>"><i class="icon-close" style="
                              /* color: white; */
                              font-size: 100px;
                              position: absolute;
                              top: 50%;
                              left: 50%;
                              transform: translate(-50%, -50%);
                              -ms-transform: translate(-50%, -50%);
                              text-align: center;"><h3 class="font-weight-bold">Barang Kadaluarsa</h3></i></a>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card">
                          <img class="card-img" height="300" src="<?php echo base_url('assets/vertical/images/custom/update.jpg')?>">
                          <div class="card-img-overlay card-inverse">
                            <div class="overlay">
                            <span class="display-2"><a class="link" href="<?php echo base_url('getstarted/perbaharui')?>"><i class="icon-refresh" style="
                              /* color: white; */
                              font-size: 100px;
                              position: absolute;
                              top: 50%;
                              left: 50%;
                              transform: translate(-50%, -50%);
                              -ms-transform: translate(-50%, -50%);
                              text-align: center;"><h3 class="font-weight-bold">Perbaharui Stock</h3></a></i>
                            </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div></div></div>
                    <!-- ./contents -->
                  </div>
                </div>
              </div>
              <!-- ./ column -->
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- END OF GETTING STARTED -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- ABAIKAN!! HANYA DEMO -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <!-- column -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">BARANG KADALUWARSA</h5>
                                <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                    <span class="display-5 text-danger"><i class="icon-close"></i></span>
                                    <a href="<?php echo base_url('expired/index')?>" class="display-5 ml-auto">
                                      <?php
                                      echo $count;?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">BUTUH STOK ULANG</h5>
                                <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                    <span class="display-5 text-purple"><i class="icon-basket-loaded"></i></span>
                                            <a href="<?php echo base_url('kebutuhan/index')?>" class="display-5 ml-auto">
                                            <?php
                                            $status = $this->session->userdata('level');
                                            if ($status == 1){
                                                    echo $count_kebutuhan;
                                                  }
                                                  else if ($status == 2){
                                                    echo $count_kebutuhan2;
                                                  }?>
                                              </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">JUMLAH VENDOR</h5>
                                <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                    <span class="display-5 text-primary"><i class="icon-folder-alt"></i></span>
                                    <a href="javscript:void(0)" class="display-5 ml-auto">311</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">TOTAL BARANG</h5>
                                <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                    <span class="display-5 text-success"><i class="icon-wallet"></i></span>
                                    <a href="javscript:void(0)" class="display-5 ml-auto">117</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                </div>
            </div>
            <div class="col-lg-6">
              <!-- <div class="row">
                <div class="col-lg-12">
                <div class="news-slide m-b-15">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="active carousel-item">
                                <div class="overlaybg"><img src="<?php echo base_url('/assets/vertical/images/news/news1.jpg')?>" class="img-fluid" /></div>
                                <div class="news-content carousel-caption"><span class="label label-danger label-rounded">Primary</span>
                                    <h4>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h4> <a href="javascript:void(0)" class="btn btn-rounded btn-secondary">Read More</a></div>
                            </div>
                            <div class="carousel-item">
                                <div class="overlaybg"><img src="<?php echo base_url('/assets/vertical/images/news/news1.jpg')?>" /></div>
                                <div class="news-content carousel-caption"><span class="label label-primary label-rounded">Primary</span>
                                    <h4>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h4> <a href="javascript:void(0)" class="btn btn-rounded btn-secondary">Read More</a></div>
                            </div>
                            <div class="carousel-item">
                                <div class="overlaybg"><img src="<?php echo base_url('/assets/vertical/images/news/news1.jpg')?>" /></div>
                                <div class="news-content carousel-caption"><span class="label label-success label-rounded">Primary</span>
                                    <h4>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h4> <a href="javascript:void(0)"class="btn btn-rounded btn-secondary">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              </div> -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="card" style="
    height: 400px;
    overflow-y: scroll;
    overflow-x:hidden;">
                      <div class="card-body">
                          <h5 class="card-title">USER RECENT ACTIVITIES</h5>
                          <div class="steamline m-t-40">
                          <?php $now = date_default_timezone_set('Asia/Jakarta'); ?>
                          <?php $status = $this->session->userdata('level');
                                if($user['status']==1){
                                    $ev=$eventlog;
                                }
                                else if($user['status']==2){
                                    $ev=$eventlog2;
                                }
                                if (count($ev)){
                                    foreach($ev as $e){?>
                                        <?php $user_image = !empty($e['photo']) ? $e['photo'] : 'manager.png'; ?>
                              <div class="sl-item">
                                  <div class="sl-left"> <img src="<?php echo base_url("assets/vertical/images/users/".$user_image)?>" alt="default" class="img-circle" /> </div>
                                  <div class="sl-right">
                                  <?php $this->load->helper('date'); ?>
                                  <?php $post_date = strtotime($e['eventTime']); ?>
                                  
                                      <div class="font-medium"><?php echo $e['nama'] ?> <span class="sl-date"><?php echo timespan($post_date, $now) . ' ago';?></span></div>
                                      <div class="desc"><?php echo $e['event'] ?> <?php echo $e['eventDesc'] ?></div>
                                  </div>
                              </div>
                              <?php }
                                } ?>
                          </div>
                      </div>
                  </div>
              </div>
              </div>
            </div>

        </div>

        <!-- ============================================================== -->
        <!-- Ini working space teman teman. Tinggal tambah table dkk-->
        <!-- ============================================================== -->
        <!-- <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body"> -->
                <!-- ============================================================== -->
                <!-- tinggal uncomment dan masukin kodingan html disini             -->
                <!-- ============================================================== -->


              <!-- </div>
            </div>
          </div>
        </div> -->




        <!-- ============================================================== -->
        <!-- Ini adalah akhir dari working space. No more coding below      -->
        <!-- ============================================================== -->
