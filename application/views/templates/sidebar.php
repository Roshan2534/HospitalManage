		<!-- begin #sidebar -->
       <div class="col-sm-2">
       <a  onclick="showbar()" style="z-index:99999;background-color:#3c3c3c; color:white;font-size:40px; padding-bottom:2px; padding-left:10px; padding-right:10px;  margin-top:0px; margin-bottom:30px;">
            <i class="ion-ios-arrow-forward"></i>
        </a>    
       </div> 
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<br>
                    
                    <li>
                    <a onclick="hidebar()" >
                    <i class="ion-ios-arrow-back pull-right"></i>
                    </a>
                     
                    
                    </li>
                    
					<li class="has-sub">
						<a >
                        <b class="caret pull-right"></b>
						    <i class="ion-ios-pulse-strong"></i> 
						    <span>OPD</span>
						</a>
                        <ul class="sub-menu">
							
							<li><a href="<?=base_url()?>opd_form">
                            OPD Form
                            </a></li>
							<li><a href="<?=base_url()?>opd_details">
                            OPD Patients
                            </a></li>
                        </ul>
					</li>
					<li class="has-sub">
						<a >
                        <b class="caret pull-right"></b>
						    <i class="ion-ios-pulse-strong"></i> 
						    <span>IPD</span>
						</a>
                        <ul class="sub-menu">
							
							<li><a href="<?=base_url()?>ipd_form">
                           IPD Form
                            </a></li>
							<li><a href="<?=base_url()?>ipd_details">
                            IPD Patients
                            </a></li>
                        </ul>
					</li>
					<li>
						<a href="<?php echo base_url() ?>visiting_faculty">
						    <i class="ion-ios-pulse-strong"></i> 
						    <span>Visiting Faculty</span>
						</a>
					</li>
                    <li>
						<a href="<?php echo base_url() ?>billing">
						    <i class="ion-ios-pulse-strong"></i> 
						    <span>Billing</span>
						</a>
					</li>
                   
				</ul>
				<!-- end sidebar user -->
              
			</div>
			<!-- end sidebar scrollbar -->
		</div>
       
		<div class="sidebar-bg"></div>