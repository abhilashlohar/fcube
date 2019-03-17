<div align="center"><!--h1>Welcome to Mewar Hi-Tech</h1--></div>
<?php /* foreach($Users as $user){
	  $role_id=$user->role_id;
}  */
?>

<div class="row">
	<div class="col-md-12 col-sm-12">
		<div class="portlet light bordered">
		<!-- BEGIN PAGE HEADER-->
			<!--<h3 class="page-title">
			Dashboard <small>reports & statistics</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a>Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Dashboard</a>
					</li>
				</ul>
				<div class="pull-right tooltips btn btn-fit-height grey-salt active">
				<span class="thin uppercase visible-lg-inline-block"><?php echo date('F  d,  Y');?></span>
				</div>
			</div>-->
			<!-- END PAGE HEADER-->
			
			<?php if(@$user_name=='Admin'){?>
			<div class="portlet-body">
				  <div class="row">
					
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="dashboard-stat green-haze">
							<div class="visual">
								<i class="fa fa-shopping-cart"></i>
							</div>
							<div class="details">
								<div class="number">
									<?php echo @$pending_work_order_count;?>
								</div>
								<div class="desc">
									 Work Orders <small>(Pending)</small>
								</div>
							</div>
							<?php echo $this->Html->link('View More  <i class="m-icon-swapright m-icon-white"></i>',['controller'=>'WorkOrders','action' => 'index/pending'],array('escape'=>false,'class'=>'more')); ?>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="dashboard-stat red-intense">
							<div class="visual">
								<i class="fa fa-bar-chart-o"></i>
							</div>
							<div class="details">
								<div class="number">
									<?php echo @$approved_work_order_count;?>
								</div>
								<div class="desc">
									 JobCard <small>(Pending)</small>
								</div>
							</div>
							<?php echo $this->Html->link('View More  <i class="m-icon-swapright m-icon-white"></i>',['controller'=>'WorkOrders','action' => 'index/yes'],array('escape'=>false,'class'=>'more')); ?>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-comments"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo @$pending_purchaseOrders_count;?>
							</div>
							<div class="desc">
								Purchase Orders <small>(Pending)</small>
							</div>
						</div>
						<?php echo $this->Html->link('View More  <i class="m-icon-swapright m-icon-white"></i>',['controller'=>'PurchaseOrders','action' => 'index/pending'],array('escape'=>false,'class'=>'more')); ?>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo @$po_grn_count;?>
							</div>
							<div class="desc">
								 Purchase orders <small>(GRN Created)</small>
							</div>
						</div>
						<?php echo $this->Html->link('View More  <i class="m-icon-swapright m-icon-white"></i>',['controller'=>'PurchaseOrders','action' => 'index/converted-into-grn'],array('escape'=>false,'class'=>'more')); ?>
					</div>
				</div>
				</div>
				<br>
				<div class="row">
					
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="dashboard-stat green-haze" style="background-color: #6ac4ce;">
							<div class="visual">
								<i class="fa fa-shopping-cart"></i>
							</div>
							<div class="details">
								<div class="number">
									<?php echo @$wo;?>
								</div>
								<div class="desc">
									Account Payment <small style="font-size: 61%;">(Net Received Against WorkOrders)</small>
								</div>
							</div>
							<?php echo $this->Html->link('View More  <i class="m-icon-swapright m-icon-white"></i>',['controller'=>'CustomerPayments','action' => 'index'],array('escape'=>false,'class'=>'more')); ?>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum" style="background-color: #479be4;">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo @$jobCards;?>
							</div>
							<div class="desc">
								 Dispatched Item <small>(Pending)</small>
							</div>
						</div>
						<?php echo $this->Html->link('View More  <i class="m-icon-swapright m-icon-white"></i>',['controller'=>'JobCards','action' => 'index/pending'],array('escape'=>false,'class'=>'more')); ?>
					</div>
				</div>
					
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>