<!-- begin::main content -->
<main class="main-content">

    <div class="container">
        <!-- begin::page header -->
        <div class="page-header d-md-flex align-items-center justify-content-between">
            <div>
                <h3>App Setting</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard');?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Configuration</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- end::page header -->

        <?php $msg=$this->session->flashdata('msg'); if($msg){  ?>
            <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible admin-msg" data-dismiss="alert" aria-hidden="true">
                <strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?>
            </div> 	
        <?php } ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="companyTab" data-toggle="tab" href="#company" role="tab" aria-controls="company" aria-selected="true">Company Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="emailTab" data-toggle="tab" href="#emailSetting" role="tab" aria-controls="emailSetting" aria-selected="false">Email Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="socialTab" data-toggle="tab" href="#social" role="tab" aria-controls="social" aria-selected="false">Social Media</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="seoTab" data-toggle="tab" href="#seo" role="tab" aria-controls="seo" aria-selected="false">Seo Setting</a>
                            </li>
                        </ul>
                        <br>
                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade active show" id="company" role="tabpanel" aria-labelledby="companyTab">
                                <form method="post"  enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="web_company_name">Company Name</label>
                                        <input type="text" class="form-control" name="web_company_name"  value="<?php echo $this->website->web_company_name; ?>" aria-describedby="emailHelp" placeholder="Enter Company Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="web_hour_of_operation">Hours Of Operation</label>
                                        <input type="text" class="form-control" name="web_hour_of_operation"  value="<?php echo $this->website->web_hour_of_operation; ?>" placeholder="Operation Hours">
                                    </div>

                                    <div class="form-group">
                                        <label for="web_company_logo">Company Logo</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="web_company_logo">
                                            <img src="<?php echo site_url('uploads/website/logo/').$this->website->web_company_logo;?>" style="height:60px" class="img-thumbnail">
                                            <input type="hidden" name="web_company_logo" value="<?php echo $this->website->web_company_logo; ?>"/>
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="form-group">
                                        <label for="web_favicon_icon">Favicon Icon</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="web_favicon_icon">
                                            <img src="<?php echo site_url('uploads/website/favicon/').$this->website->web_favicon_icon;?>"  style="height:60px" class="img-thumbnail">
                                            <input type="hidden" name="web_favicon_icon" value="<?php echo $this->website->web_favicon_icon; ?>"/>
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="form-group">
                                        <label for="web_site_url">Site URL</label>
                                        <input type="text" class="form-control" name="web_site_url"  value="<?php echo $this->website->web_site_url; ?>" placeholder="Enter Site Url">
                                    </div>

                                    <div class="form-group">
                                        <label for="web_address">Branch Address</label>
                                        <textarea class="form-control" id="web_address" name="web_address"><?php echo $this->website->web_address; ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="web_addressmap">Google Map Link</label>
                                        <textarea class="form-control" id="web_addressmap" name="web_addressmap"><?php echo $this->website->web_addressmap; ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="web_country">Country</label>
                                        <input type="text" class="form-control" id="web_country" name="web_country" value="<?php echo $this->website->web_country; ?>" placeholder="Enter Country">
                                    </div>

                                    <div class="form-group">
                                        <label for="web_pincode">Pincode</label>
                                        <input type="number" max-length="6" class="form-control" id="web_pincode" placeholder="Password" value="<?php echo $this->website->web_pincode; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="web_support_contact">Customer Support</label>
                                        <input type="text" class="form-control" id="web_support_contact" name="web_support_contact" placeholder="Enter Customer Support" value="<?php echo $this->website->web_support_contact; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="web_support_email">Support (24*7)</label>
                                        <input type="email" class="form-control" id="web_support_email" name="web_support_email" value="<?php echo $this->website->web_support_email; ?>" placeholder="Customer Support Email Address">
                                    </div>

                                    <div class="form-group">
                                        <label for="web_copy_right">Footer Copy Right</label>
                                        <input type="text" class="form-control" id="web_copy_right" name="web_copy_right" value="<?php echo $this->website->web_copy_right; ?>" placeholder="Enter Company Copyright">
                                    </div>

                                    <button type="submit" class="btn btn-primary waves-effect waves-button waves-light  pull-right" style="background: #3f5ae1;border-color: #3f5ae1;

">Save Setting</button>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="emailSetting" role="tabpanel" aria-labelledby="emailTab">
                                <form method="post">

                                    <div class="form-group">	
                                        <select name="web_email_protocal" class="form-control">
                                            <option Value="Email" <?php if($this->website->web_email_protocal=='Email'){echo "selected";} ?>>Email</option>
                                            <option Value="SMTP Email" <?php if($this->website->web_email_protocal=='SMTP Email'){echo "selected";} ?>>SMTP Email</option>
                                        </select>
                                    </div>
                            
                                    <div class="form-group">	
                                        <label for="web_from_email_id">From E-mail ID</label>
                                        <input type="text" class="form-control" id="web_from_email_id" name="web_from_email_id"  value="<?php echo $this->website->web_from_email_id; ?>">
                                    </div>

                                    <div class="form-group">	
                                        <label for="web_bcc_email_id">Bcc E-mail( ',' Separated)</label>
                                        <input type="text" class="form-control" id="web_bcc_email_id" name="web_bcc_email_id"  value="<?php echo $this->website->web_bcc_email_id; ?>" >
                                    </div>

                                    <div class="form-group">	
                                        <label for="web_smtp_host_name">SMTP Connection Type(Like: SSL,TLS)</label>
                                        <input type="text" class="form-control" id="web_email_connection_type" name="web_email_connection_type"  value="<?php echo $this->website->web_email_connection_type; ?>" >
                                    </div>

                                    <div class="form-group">	
                                        <label for="web_smtp_host_name">SMTP Host Name</label>
                                        <input type="text" class="form-control" id="web_smtp_host_name" name="web_smtp_host_name"  value="<?php echo $this->website->web_smtp_host_name; ?>" >
                                    </div>

                                    <div class="form-group">	
                                        <label for="web_smtp_port">SMTP Port</label>
                                        <input type="text" class="form-control" id="web_smtp_port" name="web_smtp_port"  value="<?php echo $this->website->web_smtp_port; ?>" >
                                    </div>

                                    <div class="form-group">	
                                        <label for="web_email_id">Email ID</label>
                                        <input type="text" class="form-control" id="web_email_id" name="web_email_id"  value="<?php echo $this->website->web_email_id; ?>" >
                                    </div>

                                    <div class="form-group">	
                                        <label for="web_email_password">Password</label>
                                        <input type="password" class="form-control" id="web_email_password" name="web_email_password"  value="<?php echo $this->website->web_email_password; ?>" >
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary pull-right" style="background: #3f5ae1;border-color: #3f5ae1;

">Save Setting</button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="socialTab">
                                <form method="post">
                                    
                                    <div class="form-group">	
                                        <label for="web_facebook_link">Facebook Link</label>
                                        <input type="text" class="form-control" id="web_facebook_link" name="web_facebook_link"  value="<?php echo $this->website->web_facebook_link; ?>" >
                                    </div>
                                    
                                    <div class="form-group">	
                                        <label for="web_linkedin_link">Linkedin Link</label>
                                        <input type="text" class="form-control" id="web_linkedin_link" name="web_linkedin_link"  value="<?php echo $this->website->web_linkedin_link; ?>" >
                                    </div>

                                    <div class="form-group">	
                                        <label for="web_instagram_link">Instagram Link</label>
                                        <input type="text" class="form-control" id="web_instagram_link" name="web_instagram_link"  value="<?php echo $this->website->web_instagram_link; ?>" >
                                    </div>
                                
                                    <div class="form-group">	
                                        <label for="web_twitter_link">Twitter Link</label>
                                        <input type="text" class="form-control" id="web_twitter_link" name="web_twitter_link"  value="<?php echo $this->website->web_twitter_link; ?>" >
                                    </div>

                                    <div class="form-group">	
                                        <label for="web_google_plus_link">Google+ Link</label>
                                        <input type="text" class="form-control" id="web_google_plus_link" name="web_google_plus_link"  value="<?php echo $this->website->web_google_plus_link; ?>" >
                                    </div>

                                    <div class="form-group">	
                                        <label for="web_youtube_link">Youtube Link</label>
                                        <input type="text" class="form-control" id="web_youtube_link" name="web_youtube_link"  value="<?php echo $this->website->web_youtube_link; ?>" >
                                    </div>

                                    <div class="form-group">	
                                        <label for="web_pinterest_link">Pinterest Link</label>
                                        <input type="text" class="form-control" id="web_pinterest_link" name="web_pinterest_link"  value="<?php echo $this->website->web_pinterest_link; ?>" >
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary  pull-right"style="background: #3f5ae1;border-color: #3f5ae1;

">Save Setting</button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seoTab">
                                <form method="post">
                                        
                                    <div class="form-group">	
                                        <label for="web_meta_title">Meta Title</label>
                                        <input type="text" class="form-control" id="web_meta_title" name="web_meta_title"  value="<?php echo $this->website->web_meta_title; ?>" >
                                    </div>

                                    <div class="form-group">	
                                        <label for="web_meta_keyword">Meta Keyword</label>
                                        <textarea rows="4" class="form-control" id="web_meta_keyword" name="web_meta_keyword" ><?php echo $this->website->web_meta_keyword; ?></textarea>
                                    </div>

                                    <div class="form-group">	
                                        <label for="web_meta_description">Meta Description</label>
                                        <textarea rows="4" class="form-control" id="web_meta_description" name="web_meta_description" ><?php echo $this->website->web_meta_description; ?></textarea>
                                    </div>
                            
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary  pull-right"style="background: #3f5ae1;border-color: #3f5ae1;

">Save Setting</button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- end::main content -->