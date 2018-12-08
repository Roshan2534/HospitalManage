
<?php
	//$this -> load -> session();
	//session_start();
//print_r($this->session->userdata['logged_in']);
if (isset($this->session->userdata['logged_in'])) {
	$name = ($this->session->userdata['logged_in']['name']);
	$username = ($this->session->userdata['logged_in']['username']);
	} else {
	header("location: login");
    }
print_r($patient_data);
?>

	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand"><span class="navbar-logo"><i class="ion-ios-cloud"></i></span> <b>Sukham</b> Hospital</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<button type="button" class="navbar-toggle p-0 m-r-5" data-toggle="collapse" data-target="#top-navbar">
					    <span class="fa-stack fa-lg text-inverse">
                            <i class="fa fa-square-o fa-stack-2x m-t-2"></i>
                            <i class="ion-ios-gear fa-stack-1x"></i>
                        </span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin navbar-collapse -->
                <div class="collapse navbar-collapse pull-left" id="top-navbar">
                    <ul class="nav navbar-nav">
                        
                        <li>
                            <a href="<?php echo base_url() ?>opd_form">
                                <i class="ion-ios-people m-r-5 f-s-20 pull-left"></i> OPD
                            </a>
						</li>
						<li>
                            <a href="<?php echo base_url() ?>ipd_form">
                                <i class="ion-ios-people m-r-5 f-s-20 pull-left"></i> IPD
                            </a>
                        </li>
                        
                    </ul>
                </div>
				<!-- end navbar-collapse -->
				
				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					
					
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<span class="user-image online">
								<img src="assets/img/user-13.jpg" alt="" /> 
							</span>
							<span class="hidden-xs"><?=$name?></span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
							<li><a href="javascript:;">Setting</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo base_url() ?>logout">Log Out</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
        
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="assets/img/user-13.jpg" alt="" /></a>
						</div>
						<div class="info">
							<?=$name?>
							<small><?=$username?></small>
						</div>
					</li>
                    
					<li>
						<a href="<?php echo base_url() ?>opd_details">
						    <i class="ion-ios-pulse-strong"></i> 
						    <span>OPD</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url() ?>ipd_details">
						    <i class="ion-ios-pulse-strong"></i> 
						    <span>IPD</span>
						</a>
                    </li>
                    
                    <li>
						<a href="<?php echo base_url() ?>visiting_faculty">
						    <i class="ion-ios-pulse-strong"></i> 
						    <span>Visiting Faculty</span>
						</a>
					</li>
                   
				</ul>
				<!-- end sidebar user -->
	
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
        <div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Form Stuff</a></li>
				<li class="active">Form Elements</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Deposit Form</h4>
                        </div>
                        <div class="panel-body">
                            <form  action="<?=base_url()?>Ipd/ipdAddDepo" method="post" class="form-horizontal col-sm-8 col-sm-offset-2">
                                <input class="hidden" value="<?=$patient_data['ipd_number'];?>" name="ipd_number">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">IPD Number</label>
                                    <div class="col-md-9">
                                        <input name="receipt_number" type="text" class="form-control" value="<?=$patient_data['ipd_number'];?>" disabled />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Patient Name</label>
                                    <div class="col-md-9">
                                        <input  type="text" class="form-control" value="<?=$patient_data['patient_name'];?>" disabled />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Date of Admission </label>
                                    <div class="col-md-9">
                                        <input  type="text" class="form-control" value="<?=$patient_data['date_of_addmission'];?>" disabled />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Ward  </label>
                                    <div class="col-md-9">
                                        <input  type="text" class="form-control" value="<?=$patient_data['ward'];?>" disabled />
                                    </div>
                                </div>
                                
                                <br>
                                <h4 class="text-center">Deposit </h4>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Deposit Amount (In Numbers)</label>
                                    <div class="col-md-6">
                                        <input  name="amount" type="number" class="form-control" />
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Deposit Amount (In Words)</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control onlytext" />
                                    </div>
                                </div>   
<br><br>
                             <div class="row">
                                    <div style="margin-left:0px;" class="col-sm-4"> 
                                    
                                    <label class="col-md-6 control-label">Approved By  </label>
                                    <div class="col-md-8">
                                        <input  type="text" class="form-control"  />
                                    </div>
                             
                                    </div>
                                    <div class="col-sm-4">
                                    
                                    <label class="col-md-6 control-label">Verified By  </label>
                                    <div class="col-md-8">
                                        <input  type="text" class="form-control"  />
                                    </div>

                                    </div>
                                    <div class="col-sm-4">
                                    
                                    <label class="col-md-6 control-label">Deposited By  </label>
                                    <div class="col-md-8">
                                        <input  type="text" class="form-control"  />
                                    </div>
                                    
                                    </div>
                                </div>                                    
                            
                            </div>

                            <br><br>

                            
                                </div>
                               
                               
                                
                                
                                
                                <div  class="form-group text-center">
                                    
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-sm btn-success">Add Deposit</button>
                                    </div>
                                </div>
                                <br>
                               
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
                <!-- begin col-6 -->
              
            </div>
            <!-- end row -->
           
            <!-- end row -->
            <!-- begin row -->
            
            <!-- end row -->
		</div>

        <!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>


    
	<!-- end page container -->
	

