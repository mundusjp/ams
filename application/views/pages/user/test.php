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
        <!-- Ini working space teman teman                                  -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-4">
            <div class="card">
              <div class="card-body">
                <!-- ============================================================== -->
                <!-- tinggal masukin kodingan html disini                           -->
                <!-- ============================================================== -->
                <div id="ProfilePicture"class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myProfileModal" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <h4>Overflowing text to show scroll behavior</h4>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <center class="m-t-30"> <img src="<?php echo base_url('assets/vertical/images/users/5.jpg')?>" alt="default" class="img-responsive img-circle" width="150" data-toggle="modal" data-target="#ProfilePicture"/>
                    <h4 class="card-title m-t-10"><?php echo $user['username'];?></h4>
                    <h5 class="card-subtitle">NIPP.<?php echo $user['nipp'];?></h5>
                    <h6 class="card-subtitle font-weight-bold"> <?php echo $user['jabatan'];?></h6>
                </center>
                <a><h6 class="text-right text-primary">Edit</h6>
              </div>
              <div>
                <hr> </div>
              <div class="card-body">
                <h6><?php echo $user['nama'];?></h6><small class="text-muted p-t-30 db">Full Name</small>
                <h6><?php echo $user['email'];?></h6> <small class="text-muted">Email address </small>
                <h6><?php echo $user['no_hp'];?></h6> <small class="text-muted p-t-30 db">Address</small>
                <h6><?php echo $user['alamat'];?></h6><small class="text-muted p-t-30 db">Address</small>
                <br/>
              </div>
            </div>
          </div>
          <!-- Column -->
          <div class="col-lg-8 col-xlg-9 col-md-7">
              <div class="card">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs profile-tab" role="tablist">
                      <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                      <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#log" role="tab">Recent Activities</a> </li>
                  </ul>
                  <div class="tab-content">
                  <!-- Setting -->
                        <div class="tab-pane active" id="settings" role="tabpanel">
                          <div class="card-body">
                            <br>
                            <h4 class="card-title m-t-10"> Edit Profile </h4>
                            <br>
                            <!-- ====================================== -->
                            <!-- ======== Form General Profile ======== -->
                            <!-- ====================================== -->
                            <?php echo form_open('user/editprofile/'.$user['id_user']); ?>
                            <form class="form-horizontal form-material">
                              <div class="form-group">
                                  <label class="col-md-12">Full Name</label>
                                  <div class="col-md-12">
                                      <input type="text" placeholder="<?php echo $user['nama'];?>" class="form-control form-control-line">
                                    </div>
                              </div>
                              <div class="form-group">
                                <label for="example-email" class="col-md-12">Email</label>
                                  <div class="col-md-12">
                                      <input type="email" placeholder="<?php echo $user['email'];?>" class="form-control form-control-line" name="example-email" id="example-email">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-12">Phone Number</label>
                                  <div class="col-md-12">
                                      <input type="text" placeholder="<?php echo $user['no_hp'];?>" class="form-control form-control-line">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-12">Address</label>
                                  <div class="col-md-12">
                                      <input type="text" placeholder="<?php echo $user['alamat'];?>" class="form-control form-control-line">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-sm-12">
                                      <button class="btn btn-success">Update Profile</button>
                                  </div>
                                </div>
                            </form>
                            <?php echo form_close(); ?>
                            <div>
                              <hr> </div>
                            <!-- ====================================== -->
                            <!-- ========     Form Password    ======== -->
                            <!-- ====================================== -->
                            <br>
                            <h4 class="card-title m-t-10"> Edit Password </h4>
                            <br>
                            <?php echo form_open('user/editpassword/'.$user['id_user']); ?>
                            <form class="form-horizontal form-material">
                              <div class="form-group">
                                  <label class="col-md-12">Type your Old Password</label>
                                  <div class="col-md-12">
                                      <input type="password" class="form-control form-control-line">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-12">New Password</label>
                                  <div class="col-md-12">
                                      <input type="password" class="form-control form-control-line">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-12">Confirm New Password</label>
                                  <div class="col-md-12">
                                      <input type="password" class="form-control form-control-line">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-sm-12">
                                      <button class="btn btn-success">Update Password</button>
                                  </div>
                                </div>
                            </form>
                            <?php echo form_close(); ?>
                            </div>
                          </div>
                  <!-- Logs -->
                      <div class="tab-pane" id="log" role="tabpanel">
                          <div class="card-body">
                              <div class="profiletimeline">
                                  <div class="sl-item">
                                      <div class="sl-left"> <img src="<?php echo base_url('assets/vertical/images/users/1.jpg')?>" alt="user" class="img-circle" /> </div>
                                      <div class="sl-right">
                                          <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                              <p>assign a new task <a href="javascript:void(0)"> Design weblayout</a></p>
                                              <div class="row">
                                                  <div class="col-lg-3 col-md-6 m-b-20"><img src="<?php echo base_url('assets/vertical/images/big/img1.jpg" class="img-responsive radius')?>" /></div>
                                                  <div class="col-lg-3 col-md-6 m-b-20"><img src="<?php echo base_url('assets/vertical/images/big/img2.jpg" class="img-responsive radius')?>" /></div>
                                                  <div class="col-lg-3 col-md-6 m-b-20"><img src="<?php echo base_url('assets/vertical/images/big/img3.jpg" class="img-responsive radius')?>" /></div>
                                                  <div class="col-lg-3 col-md-6 m-b-20"><img src="<?php echo base_url('assets/vertical/images/big/img4.jpg" class="img-responsive radius')?>" /></div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="sl-item">
                                      <div class="sl-left"> <img src="<?php echo base_url('assets/vertical/images/users/2.jpg')?>" alt="user" class="img-circle" /> </div>
                                      <div class="sl-right">
                                          <div> <a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                              <div class="m-t-20 row">
                                                  <div class="col-md-3 col-xs-12"><img src="<?php echo base_url('assets/vertical/images/big/img1.jpg')?>" alt="user" class="img-responsive radius" /></div>
                                                  <div class="col-md-9 col-xs-12">
                                                      <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> <a href="javascript:void(0)" class="btn btn-success"> Design weblayout</a></div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="sl-item">
                                      <div class="sl-left"> <img src="<?php echo base_url('assets/vertical/images/users/3.jpg" alt="user" class="img-circle')?>" /> </div>
                                      <div class="sl-right">
                                          <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                              <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                          </div>

                                      </div>
                                  </div>
                                  <hr>
                                  <div class="sl-item">
                                      <div class="sl-left"> <img src="<?php echo base_url('assets/vertical/images/users/4.jpg')?>" alt="user" class="img-circle" /> </div>
                                      <div class="sl-right">
                                          <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                              <blockquote class="m-t-10">
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                              </blockquote>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Column -->
        </div>
        <!-- Row -->

        <!-- ============================================================== -->
        <!-- Ini adalah akhir dari working space. No more coding below      -->
        <!-- ============================================================== -->
