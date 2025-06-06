

<?php $__env->startSection('css'); ?>
	<!-- Data Table CSS -->
	<link href="<?php echo e(URL::asset('plugins/datatable/datatables.min.css')); ?>" rel="stylesheet" />
	<!-- Sweet Alert CSS -->
	<link href="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('Prepaid Plans')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa-solid fa-sack-dollar mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('admin.finance.dashboard')); ?>"> <?php echo e(__('Finance Management')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="#"> <?php echo e(__('Prepaid Plans')); ?></a></li>
			</ol>
		</div>
		<div class="page-rightheader">
			<a href="<?php echo e(route('admin.finance.prepaid.create')); ?>" class="btn btn-primary mt-1"><?php echo e(__('Create New Prepaid Plan')); ?></a>
		</div>
	</div>	
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-xm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('All Prepaid Plans')); ?></h3>
				</div>
				<div class="card-body pt-2">
					<!-- SET DATATABLE -->
					<table id='prepaidAdminTable' class='table' width='100%'>
							<thead>
								<tr>
									<th width="12%"><?php echo e(__('Plan Name')); ?></th>
									<th width="10%"><?php echo e(__('Status')); ?></th>									
									<th width="10%"><?php echo e(__('Words')); ?></th>																																																																																						
									<th width="10%"><?php echo e(__('Images')); ?></th>																																																																																						
									<th width="10%"><?php echo e(__('Characters')); ?></th>																																																																																						
									<th width="10%"><?php echo e(__('Minutes')); ?></th>																																																																																						
									<th width="10%"><?php echo e(__('Pricing Plan')); ?></th>
									<th width="7%"><?php echo e(__('Featured')); ?></th>
									<th width="10%"><?php echo e(__('Created On')); ?></th>
									<th width="10%"><?php echo e(__('Actions')); ?></th>
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
			var table = $('#prepaidAdminTable').DataTable({
				"lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
				responsive: true,
				colReorder: true,
				"order": [[ 0, "desc" ]],
				language: {
					"emptyTable": "<div><br><?php echo e(__('There are no prepaid plans yet')); ?></div>",
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
				ajax: "<?php echo e(route('admin.finance.prepaid')); ?>",
				columns: [
					{
						data: 'custom-name',
						name: 'custom-name',
						orderable: false,
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
						data: 'custom-images',
						name: 'custom-images',
						orderable: true,
						searchable: true
					},
					{
						data: 'custom-characters',
						name: 'custom-characters',
						orderable: true,
						searchable: true
					},
					{
						data: 'custom-minutes',
						name: 'custom-minutes',
						orderable: true,
						searchable: true
					},
					{
						data: 'custom-frequency',
						name: 'custom-frequency',
						orderable: true,
						searchable: true
					},
					{
						data: 'custom-featured',
						name: 'custom-featured',
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
						orderable: false,
						searchable: false
					},
				]
			});


			// DELETE PLAN
			$(document).on('click', '.deletePlanButton', function(e) {

				e.preventDefault();

				Swal.fire({
					title: '<?php echo e(__('Confirm Prepaid Plan Deletion')); ?>',
					text: '<?php echo e(__('It will permanently delete this prepaid plan')); ?>',
					icon: 'warning',
					showCancelButton: true,
					confirmButtonText: '<?php echo e(__('Delete')); ?>',
					reverseButtons: true,
				}).then((result) => {
					if (result.isConfirmed) {
						var formData = new FormData();
						formData.append("id", $(this).attr('id'));
						$.ajax({
							headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
							method: 'post',
							url: 'prepaid/delete',
							data: formData,
							processData: false,
							contentType: false,
							success: function (data) {
								if (data == 'success') {
									Swal.fire('<?php echo e(__('Prepaid Plan Deleted')); ?>', '<?php echo e(__('Prepaid plan has been successfully deleted')); ?>', 'success');	
									$("#prepaidAdminTable").DataTable().ajax.reload();								
								} else {
									Swal.fire('<?php echo e(__('Delete Failed')); ?>', '<?php echo e(__('There was an error while deleting this plan')); ?>', 'error');
								}      
							},
							error: function(data) {
								Swal.fire('Oops...','Something went wrong!', 'error')
							}
						})
					} 
				})
			});

		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/infiniteideas/public_html/app.infiniteideas.ai/resources/views/admin/finance/plans/prepaid/index.blade.php ENDPATH**/ ?>