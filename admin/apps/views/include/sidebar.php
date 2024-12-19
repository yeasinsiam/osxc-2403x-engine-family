<!--[ navigation menu ] start -->
<nav class="pcoded-navbar menupos-fixed">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <!--<li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li> -->
                <li class="nav-item"><a href="<?=base_url('dashboard');?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a></li>



                 <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-package"></i></span><span class="pcoded-mtext">Category </span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?=base_url('category');?>">All Category</a></li>
                        <li><a href="<?=base_url('category/add');?>">Add New Category</a></li>
                    </ul>
                </li>


                  <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-camera"></i></span><span class="pcoded-mtext">Products </span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?=base_url('product');?>">All Product</a></li>
                        <li><a href="<?=base_url('product/add');?>">Add New Product</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-camera"></i></span><span class="pcoded-mtext">News </span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?=base_url('news');?>">All News</a></li>
                        <li><a href="<?=base_url('news/add');?>">Add New news</a></li>
                        <li><a href="<?=base_url('news/category');?>">ALL Cate</a></li>
                    </ul>
                </li>


                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-camera"></i></span><span class="pcoded-mtext">Parts </span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?=base_url('part');?>">All Part</a></li>
                        <li><a href="<?=base_url('part/add');?>">Add New Part</a></li>
                         <li><a href="<?=base_url('pcategory');?>">All Category</a></li>
                        <li><a href="<?=base_url('pcategory/add');?>">Add New Category</a></li>
                    </ul>
                </li>


                 <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-package"></i></span><span class="pcoded-mtext">Media </span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?=base_url('media');?>">All Media</a></li>
                        <li><a href="<?=base_url('media/add');?>">Add New Media</a></li>
                    </ul>
                </li>

                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-airplay"></i></span><span class="pcoded-mtext">Frontend </span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?=base_url('slider');?>">Slider</a></li>
                        <!-- <li><a href="<?=base_url('hot-product');?>">Hot Product</a></li>  -->
                        <li><a href="<?=base_url('testimonials');?>">Testimonials</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a href="<?=base_url('message');?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-mail"></i></span><span class="pcoded-mtext">Messages</span></a></li>

                <li class="nav-item"><a href="<?=base_url('page');?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-airplay"></i></span><span class="pcoded-mtext">Content Page</span></a></li>

                <li class="nav-item"><a href="<?=base_url('setting');?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-settings"></i></span><span class="pcoded-mtext">Settings</span></a></li>

                <li class="nav-item"><a href="<?php echo site_url('dashboard/profile');?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">My Account</span></a></li>

                <li class="nav-item"><a href="<?=base_url('login/logout');?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-log-out"></i></span><span class="pcoded-mtext">Logout</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end
