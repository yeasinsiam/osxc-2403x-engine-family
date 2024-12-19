
<!--[ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue"> 
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        <a href="<?=base_url();?>" class="b-brand">
            <!-- ========   change your logo hear   ============ -->
            <img src="<?=base_url();?>assets/images/logo.png" alt="" class="logo">
            <img src="<?=base_url();?>assets/images/logo-icon.png" alt="" class="logo-thumb">
        </a>
        <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                <div class="search-bar">
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav navbar-right ml-auto">
            <li>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a> 
                </div>
            </li>
            <li><a href="#"><i class="feather icon-message-square"></i></a> </li>
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="feather icon-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <?php if(empty($this->loginuser->mst_picture)){?>
                                                    <img src="<?=base_url();?>assets/images/default-avatar.png" class="img-radius" alt="profile-image">
                                                  <?php }else{?>
                                                    <img src="<?=base_url('uploads/members/').$this->loginuser->mst_picture;?>" class="img-radius" alt="profile-image">
                                                  <?php }?>
                            
                            <span><?php echo $this->login->mst_fname.' '.$this->login->mst_lname;?></span>
                            <!-- <a href="login.php" class="dud-logout" title="Logout">
                                <i class="feather icon-log-out"></i>
                            </a> -->
                        </div>
                        <ul class="pro-body">
                            <li><a href="<?=base_url('dashboard/profile');?>" class="dropdown-item"><i class="feather icon-user"></i>My Account</a></li>
                            <li><a href="<?=base_url('login/logout');?>" class="dropdown-item"><i class="feather icon-log-out"></i> Logout</a></li> 
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>  
</header>
<!-- [ Header ] end -->