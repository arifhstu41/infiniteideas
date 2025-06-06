

<?php $__env->startSection('css'); ?>
	<!-- Data Table CSS -->
	<link href="<?php echo e(URL::asset('plugins/datatable/datatables.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('Purchase History')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard')); ?>"><i class="fa-solid fa-money-check-pen mr-2 fs-12"></i><?php echo e(__('User')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(route('user.purchases')); ?>"> <?php echo e(__('Purchase History')); ?></a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('All Purchase History')); ?></h3>
				</div>
				<div class="card-body pt-2">
					<!-- SET DATATABLE -->
					<table id='myPaymentsTable' class='table' width='100%'>
							<thead>
								<tr>
									<th width="10%"><?php echo e(__('Order ID')); ?></th>
									<th width="10%"><?php echo e(__('Status')); ?></th>
									<th width="10%"><?php echo e(__('Words')); ?></th>	
									<th width="10%"><?php echo e(__('Paid By')); ?></th>											
									<th width="10%"><?php echo e(__('Plan Name')); ?></th>																																						
									<th width="10%"><?php echo e(__('Pricing Plan')); ?></th>																																						
									<th width="10%"><?php echo e(__('Payment Date')); ?></th>
									<th width="5%"><?php echo e(__('Actions')); ?></th>
								</tr>
							</thead>
					</table> <!-- END SET DATATABLE -->
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	<!-- Data Tables JS -->
	<script src="<?php echo e(URL::asset('plugins/datatable/datatables.min.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.all.min.js')); ?>"></script>
	<script type="text/javascript">
		$(function () {

			"use strict";
			
			// INITILIZE DATATABLE
			var table = $('#myPaymentsTable').DataTable({
				"lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
				responsive: true,
				colReorder: true,
				"order": [[ 6, "desc" ]],
				language: {
					"emptyTable": "<div><br><?php echo e(__('You do not have any transactions yet')); ?></div>",
					"info": "<?php echo e(__('Showing page')); ?> _PAGE_ <?php echo e(__('of')); ?> _PAGES_",
					search: "<i class='fa fa-search search-icon'></i>",
					lengthMenu: '_MENU_ ',
					paginate : {
						first    : '<i class="fa fa-angle-double-left"></i>',
						last     : '<i class="fa fa-angle-double-right"></i>',
						previous : '<i class="fa fa-angle-left"></i>',
						next     : '<i class="fa fa-angle-right"></i>'
					}
				},
				pagingType : 'full_numbers',
				processing: true,
				serverSide: true,
				ajax: "<?php echo e(route('user.purchases')); ?>",
				columns: [
					{
						data: 'custom-order',
						name: 'custom-order',
						orderable: true,
						searchable: true
					},
					{
						data: 'custom-status',
						name: 'custom-status',
						orderable: true,
						searchable: true
					},	
					{
						data: 'custom-words',
						name: 'custom-words',
						orderable: true,
						searchable: true
					},
					{
						data: 'custom-gateway',
						name: 'custom-gateway',
						orderable: true,
						searchable: true
					},
					{
						data: 'custom-plan-name',
						name: 'custom-plan-name',
						orderable: false,
						searchable: true
					},
					{
						data: 'custom-frequency',
						name: 'custom-frequency',
						orderable: true,
						searchable: true
					},								
					{
						data: 'created-on',
						name: 'created-on',
						orderable: true,
						searchable: true
					},	
					{
						data: 'actions',
						name: 'actions',
						orderable: true,
						searchable: true
					},					
				]
			});

		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/infiniteideas/public_html/app.infiniteideas.ai/resources/views/user/purchase/index.blade.php ENDPATH**/ ?>