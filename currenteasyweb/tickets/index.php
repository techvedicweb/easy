<!DOCTYPE html>
<html lang="en">
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      	 <?php include("../include/top-nav.php"); ?>
        <?php include("../include/right-nav.php"); ?>
       
        <div class="right_col" role="main">
		    <div class="row">
			   <div class="col-sm-5 col-md-4 col-lg-3 col-xs-12 margin-top-10">
				  <div class="x_panel tile">
					<div class="x_title">
					  <h2>Filter Tickets</h2>
					  <ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa icon-up-open"></i></a></li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa icon-wrench"></i></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Settings 1</a>
							</li>
							<li><a href="#">Settings 2</a>
							</li>
						  </ul>
						</li>
						<li><a class="close-link"><i class="fa icon-cancel"></i></a></li>
					  </ul>
					  <div class="clearfix"></div>
					</div>
					<div class="x_content">
						<ul class="list-right-open">
							<li><a href="#">All Tickets</a></li>
							<li><a href="#">Incidents</a></li>
							<li><a href="#">Service Requests</a></li>
						</ul>
                           <h5 class="weight-600 padding-top-10">Agents</h5>
					        <form action="#" class="checkList">
							  <div>
								<input type="checkbox" id="test1" />
								<label for="test1">Me</label>
							  </div>
							  <div>
								<input type="checkbox" id="test2" />
								<label for="test2">Account Admin</label>
							  </div>
							  <div>
								<input type="checkbox" id="test3" />
								<label for="test3">Rachel</label>
							  </div>
							  <div>
								<input type="checkbox" id="test4" />
								<label for="test4">Unassigned</label>
							  </div>
							   <h5 class="weight-600 padding-top-10">Requesters</h5>	
							    <input type="text" class="form-control" placeholder="Name or Email">
								<h5 class="weight-600 padding-top-10">Departments</h5> 
                                <div class="form-group">
								  <select class="select2_multiple form-control" multiple="multiple">
									<option>Choose option</option>
									<option>Option one</option>
									<option>Option two</option>
									<option>Option three</option>
									<option>Option four</option>
									<option>Option five</option>
									<option>Option six</option>
								  </select>
							    </div>
                             	<h5 class="weight-600 padding-top-10">Groups</h5> 
                                <div class="form-group">
									<select class="select2_group form-control">
										<option selected="selected" value="">Select Groups Name</option>
										<optgroup label="Alaskan/Hawaiian Time Zone">
										  <option value="AK">Alaska</option>
										  <option value="HI">Hawaii</option>
										</optgroup>
										<optgroup label="Pacific Time Zone">
										  <option value="CA">California</option>
										  <option value="NV">Nevada</option>
										  <option value="OR">Oregon</option>
										  <option value="WA">Washington</option>
										</optgroup>
										<optgroup label="Mountain Time Zone">
										  <option value="AZ">Arizona</option>
										  <option value="CO">Colorado</option>
										  <option value="ID">Idaho</option>
										  <option value="MT">Montana</option>
										  <option value="NE">Nebraska</option>
										  <option value="NM">New Mexico</option>
										  <option value="ND">North Dakota</option>
										  <option value="UT">Utah</option>
										  <option value="WY">Wyoming</option>
										</optgroup>
								    </select>
							    </div>
								<h5 class="weight-600 padding-top-10">Created</h5> 
                                <div class="form-group">
								  <select class="select2_single form-control" tabindex="-1">
									<option>&nbsp;</option>
									<option value="AK">Alaska</option>
									<option value="HI">Hawaii</option>
									<option value="CA">California</option>
									<option value="NV">Nevada</option>
									<option value="OR">Oregon</option>
									<option value="WA">Washington</option>
									<option value="AZ">Arizona</option>
									<option value="CO">Colorado</option>
									<option value="ID">Idaho</option>
									<option value="MT">Montana</option>
									<option value="NE">Nebraska</option>
									<option value="NM">New Mexico</option>
									<option value="ND">North Dakota</option>
									<option value="UT">Utah</option>
									<option value="WY">Wyoming</option>
									<option value="AR">Arkansas</option>
									<option value="IL">Illinois</option>
									<option value="IA">Iowa</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
									<option value="LA">Louisiana</option>
									<option value="MN">Minnesota</option>
									<option value="MS">Mississippi</option>
									<option value="MO">Missouri</option>
									<option value="OK">Oklahoma</option>
									<option value="SD">South Dakota</option>
									<option value="TX">Texas</option>
								  </select>
							    </div>
                                 <h5 class="weight-600 padding-top-10">Due by</h5>
								  <div>
									<input type="checkbox" id="overdue" />
									<label for="overdue">Overdue</label>
								  </div>
								  <div>
									<input type="checkbox" id="today" />
									<label for="today">Today</label>
								  </div>
								  <div>
									<input type="checkbox" id="tomorrow" />
									<label for="tomorrow">Tomorrow</label>
								  </div>
								  <div>
									<input type="checkbox" id="next" />
									<label for="next">Next 8 hours</label>
								  </div>
                                  <h5 class="weight-600 padding-top-10">Source</h5>
                                  <div class="form-group">
								  <select class="select2_group form-control">
										<option selected="selected" value="">Select Source Name</option>
										<optgroup label="Alaskan/Hawaiian Time Zone">
										  <option value="AK">Alaska</option>
										  <option value="HI">Hawaii</option>
										</optgroup>
										<optgroup label="Pacific Time Zone">
										  <option value="CA">California</option>
										  <option value="NV">Nevada</option>
										  <option value="OR">Oregon</option>
										  <option value="WA">Washington</option>
										</optgroup>
								    </select>
							    </div>								  
							</form>
						
					</div>
				  </div>
               </div>
			   <div class="col-sm-7 col-md-8 col-lg-9 margin-top-10">
				  <div class="x_panel tile">
					<div class="x_title">
					 <div class="row">
					    <div class="col-lg-7">
						 <div class="btn-group">
						  <button type="button" class="btn btn-success btn-round">My Open and Pending Tickets</button>
						  <button type="button" class="btn btn-success btn-round dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a>
							</li>
							<li><a href="#">Another action</a>
							</li>
							<li><a href="#">Something else here</a>
							</li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a>
							</li>
						  </ul>
						</div>
						</div>
						<div class="col-lg-5 text-right MrTpMd-10">
						 <a href="<?php echo WEB_ROOT;?>tickets/new.php" class="btn btn-round btn-dark">New Incident</a>
						 <a href="javascript:void(0)" data-toggle="modal" data-target="#request1" class="btn btn-danger btn-round button1">Request Item</a>
						</div>
					 </div>
					
					   <div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="panel panel-default noBorderRadius noShadow">
						    <div class="panel-heading">
							    <form action="#" class="checkList">
						             <input type="checkbox" id="checkPanel" />
								     <label for="checkPanel">&nbsp;</label>&nbsp;&nbsp;
									 <a href="javascript:void(0)" class="btn btn-default btn-round"> Pick Up </a>
									 <a href="javascript:void(0)" class="btn btn-default btn-round"> Assign to Agent </a>
									 <a href="javascript:void(0)" class="btn btn-default btn-round"> close </a>
									 <a href="javascript:void(0)" data-toggle="modal" data-target="#bulkAction" class="btn btn-default btn-round"> Bulk Action </a>
									 <a href="javascript:void(0)" data-toggle="modal" data-target="#merge" class="btn btn-default btn-round"> Merge </a>
									 <a href="javascript:void(0)" class="btn btn-default btn-round"> Flag Spam </a>
									 <a href="javascript:void(0)" class="btn btn-default btn-round"> Delete </a>
								</form>
						    </div>
							<div class="panel-body">
							  <p class="text-center h3 line-height-35 padding-60">You don't have anything to see in My Open and Pending Tickets. 
							  <br><a href="#" class="green">View New & My Open Tickets</a> or <a href="#" class="green">All Tickets</a></p>
							</div>
						</div>
					</div>
				  </div>
               </div>
			</div>

        </div>
        <?php include("../include/footer.php"); ?>
      </div>
    </div>
  <div class="modal fade" id="bulkAction" role="dialog">
    <div class="modal-dialog">
      <form action="#" class="checkList">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Bulk Actions</h4>
        </div>
        <div class="modal-body">
            <div class="row">
			        <div class="col-sm-4 col-xs-12 padding-top-10">
				    	<p>
							<input type="checkbox" id="status" />
							<label for="status">Status</label>
						</p>				
					    <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select> 
				    </div>
					<div class="col-sm-4 col-xs-12 padding-top-10">
				    	<p>
							<input type="checkbox" id="priority" />
							<label for="priority">Priority</label>
						</p>				
					    <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select> 
				    </div>
					<div class="col-sm-4 col-xs-12 padding-top-10">
				    	<p>
							<input type="checkbox" id="group" />
							<label for="group">Group</label>
						</p>				
					    
						 <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select> 
						
				    </div>
			</div>
			<div class="row padding-top-10 padding-bottom-10">
			        <div class="col-sm-4 col-xs-12 padding-top-10">
				    	<p>
							<input type="checkbox" id="assign1" />
							<label for="assign1">Assigned to</label>
						</p>				
					    <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select> 
				    </div>
					<div class="col-sm-4 col-xs-12 padding-top-10">
				    	<p>
							<input type="checkbox" id="department" />
							<label for="department">Department</label>
						</p>				
					    <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select> 
				    </div>
					<div class="col-sm-4 col-xs-12 padding-top-10">
				    	<p>
							<input type="checkbox" id="tag" />
							<label for="tag">Tags</label>
						</p>				
					    
						 <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select> 
						
				    </div>
			</div>
			    <p class="padding-top-10">
					<input type="checkbox" id="bulk" />
					<label for="bulk">Add Bulk Reply</label>
				</p>
			
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> 
		  <button type="button" class="btn btn-dark" data-dismiss="modal">Update</button>
        </div>
      </div>
      </form>
    </div>
  </div>
  <div class="modal fade" id="merge" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Merge Tickets</h4>
        </div>
        <div class="modal-body">
		  <p>0 tickets selected (Conversations from the merged tickets will be added to the primary ticket)<p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> 
		  <button type="button" class="btn btn-dark" data-dismiss="modal">Continue</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="request1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content noBorderRadius">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Request Item</h4>
		    <div class="media padding-bottom-10">
			    <div class="media-left padding-top-5">
				     Search 
				</div>
				<div class="media-body">
				     <div class="input-group">
						<input class="form-control" placeholder="Search for..." type="text">
						<span class="input-group-btn">
						<button class="btn btn-success" type="button"><i class="icon-search"></i> Search</button>
						</span> 
					 </div>
				</div>
			</div>
			<div class="weight-600">SELECT ITEM <i class="icon-angle-double-right green"></i> PLACE REQUEST</div>
        </div>
        <div class="modal-body">
		  <!-- start -->
		     <div class="row">
					<div class="col-md-3 col-sm-4 col-xs-12 verticalTab-nav">
					    <ul class="navList">
							<li class="active"><span>Hardware</span></li>
							<li><span>Software</span></li>
							<li><span>User</span></li>
							<li><span>Data</span></li>
							<li><span>Application </span></li>
						</ul>
					</div>
					<div class="col-md-9 col-sm-8 col-xs-12 verticalTab-content">
					    <div class="tab-wrap active noPadding noBorder">
						    <div class="acc-heading"><span>Tickets</span></div>
						    <div class="acc-content">
						        <!-- start -->
								    <ul class="reportList">
										<li>
											<a href="javascript:avoid(0)" data-parent="#accordion" data-toggle="collapse" data-target="#mac">Apple iMac</a>
											<div id="mac" class="collapse margin-top-20">
												<div class="row">
												    <div class="col-sm-4">
													     <img src="../images/mac.png" alt="">
													</div>
													<div class="col-sm-8">
													     <h3>Apple iMac</h3>
														 <p><strong>$ 1099.00</strong><i class="icon-clock-alt text-red"></i><span class="text-red p-xs">Approximately available in 48 hours</span></p>
														 <p class="p-xs">27-inch (diagonal) LED-backlit display with IPS technology; 2560*1440 resolution with support. <a href="#" class="green">View More</a> </p>
														 <p>
														     <label>Tags</label>
                                                             <input type="text" class="form-control">
				                                         </p>
													</div>
												</div>
										    </div>
										</li>
										<li>
											<a href="javascript:avoid(0)" data-parent="#accordion" data-toggle="collapse" data-target="#apple"">Apple MacBook</a>
											<div id="apple" class="collapse margin-top-20">
												<div class="row">
												    <div class="col-sm-4">
													     <img src="../images/mac.png" alt="">
													</div>
													<div class="col-sm-8">
													     <h3>Apple iMac</h3>
														 <p><strong>$ 1099.00</strong><i class="icon-clock-alt text-red"></i><span class="text-red p-xs">Approximately available in 48 hours</span></p>
														 <p class="p-xs">27-inch (diagonal) LED-backlit display with IPS technology; 2560*1440 resolution with support. <a href="#" class="green">View More</a> </p>
														 <p>
														     <label>Tags</label>
                                                             <input type="text" class="form-control">
				                                         </p>
													</div>
												</div>
										    </div>
										</li>
								</ul>
								<!-- end -->
						    </div>
						</div>
					    <div class="tab-wrap">
						    <div class="acc-heading"><span>Changes</span></div>
						    <div class="acc-content">
						        <ul class="reportList">
								     <li>
										<a href="#">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
									<li>
										<a href="#">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
								</ul>
						    </div>
						  </div>
					    <div class="tab-wrap">
						    <div class="acc-heading"><span>Assets</span></div>
						    <div class="acc-content">
						        <ul class="reportList">
								    <li>
										<a href="#">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
									<li>
										<a href="#">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
									<li>
										<a href="#">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
									<li>
										<a href="#">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
								</ul>
						    </div>
					    </div>
						<div class="tab-wrap">
						    <div class="acc-heading"><span>Changes</span></div>
						    <div class="acc-content">
						        <ul class="reportList">
								     <li>
										<a href="#">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
									<li>
										<a href="#">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
								</ul>
						    </div>
						  </div>
					    <div class="tab-wrap">
						    <div class="acc-heading"><span>Assets</span></div>
						    <div class="acc-content">
						        <ul class="reportList">
								    <li>
										<a href="#">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
									<li>
										<a href="#">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
									<li>
										<a href="#">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
									<li>
										<a href="#">Agent ticket summary</a><br>
										Compare the performance of agents based on ticket response and resolution
									</li>
								</ul>
						    </div>
					    </div>
					</div>
				</div>
		  <!-- end -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> 
		  <button type="button" class="btn btn-dark" data-dismiss="modal">Continue</button>
        </div>
      </div>
    </div>
  </div>
   </body>
</html>