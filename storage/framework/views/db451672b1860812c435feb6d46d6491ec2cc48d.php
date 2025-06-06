

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
			<h4 class="page-title mb-0"><?php echo e(__('Chat Prompt Manager')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa-solid fa-microchip-ai mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.davinci.dashboard')); ?>"> <?php echo e(__('Davinci Management')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="#"> <?php echo e(__('Chat Prompt Manager')); ?></a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>	
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('All Chat Prompts')); ?></h3>
					<a href="<?php echo e(route('admin.davinci.chat.prompt.create')); ?>" id="createButton" class="btn btn-primary text-right right"><?php echo e(__('Create New Prompt')); ?></a>
				</div>
				<div class="card-body pt-2">
					<!-- BOX CONTENT -->
					<div class="box-content">
						<!-- SET DATATABLE -->
						<table id='allTemplates' class='table' width='100%'>
								<thead>
									<tr>									
										<th width="3%"><?php echo e(__('Prompt Group')); ?></th> 					
										<th width="5%"><?php echo e(__('Title')); ?></th> 										
										<th width="20%"><?php echo e(__('Prompt')); ?></th> 										
										<th width="3%"><?php echo e(__('Status')); ?></th> 										
										<th width="3%"><?php echo e(__('Updated On')); ?></th>	    										 						           	
										<th width="3%"><?php echo e(__('Actions')); ?></th>
									</tr>
								</thead>
						</table> <!-- END SET DATATABLE -->
					</div> <!-- END BOX CONTENT -->	
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
			var table = $('#allTemplates').DataTable({
				"lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
				responsive: {
					details: {type: 'column'}
				},
				colReorder: true,
				language: {
					"emptyTable": "<div><img id='no-results-img' src='<?php echo e(URL::asset('img/files/no-result.png')); ?>'><br>All Categories</div>",
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
				ajax: "<?php echo e(route('admin.davinci.chat.prompt')); ?>",
				columns: [
					{
						data: 'custom-group',
						name: 'custom-group',
						orderable: true,
						searchable: true
					},	
					{
						data: 'title',
						name: 'title',
						orderable: true,
						searchable: true
					},	
					{
						data: 'prompt',
						name: 'prompt',
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
						data: 'updated-on',
						name: 'updated-on',
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


			// ACTIVATE PROMPT
			$(document).on('click', '.activateButton', function(e) {

				e.preventDefault();

				var formData = new FormData();
				formData.append("id", $(this).attr('id'));

				$.ajax({
					headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
					method: 'post',
					url: '/admin/chats/chat/prompt/activate',
					data: formData,
					processData: false,
					contentType: false,
					success: function (data) {
						if (data == 'success') {
							Swal.fire('<?php echo e(__('Chat Prompt Activated')); ?>', '<?php echo e(__('Chat prompt has been activated successfully')); ?>', 'success');
							$("#allTemplates").DataTable().ajax.reload();
						} else {
							Swal.fire('<?php echo e(__('Chat Prompt Already Active')); ?>', '<?php echo e(__('Selected chat prompt is already activated')); ?>', 'warning');
						}      
					},
					error: function(data) {
						Swal.fire({ type: 'error', title: 'Oops...', text: 'Something went wrong!' })
					}
				})

			});


			// DEACTIVATE PROMPT
			$(document).on('click', '.deactivateButton', function(e) {

				e.preventDefault();

				var formData = new FormData();
				formData.append("id", $(this).attr('id'));

				$.ajax({
					headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
					method: 'post',
					url: '/admin/chats/chat/prompt/deactivate',
					data: formData,
					processData: false,
					contentType: false,
					success: function (data) {
						if (data == 'success') {
							Swal.fire('<?php echo e(__('Chat Prompt Deactivated')); ?>', '<?php echo e(__('Chat prompt has been deactivated successfully')); ?>', 'success');
							$("#allTemplates").DataTable().ajax.reload();
						} else {
							Swal.fire('<?php echo e(__('Chat Prompt Already Deactivated')); ?>', '<?php echo e(__('Selected chat prompt is already deactivated')); ?>', 'warning');
						}      
					},
					error: function(data) {
						Swal.fire({ type: 'error', title: 'Oops...', text: 'Something went wrong!' })
					}
				})

			});		


			// DELETE PLAN
			$(document).on('click', '.deleteButton', function(e) {

				e.preventDefault();

				Swal.fire({
					title: '<?php echo e(__('Confirm Prompt Deletion')); ?>',
					text: '<?php echo e(__('It will permanently delete this prompt')); ?>',
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
							url: 'prompt/delete',
							data: formData,
							processData: false,
							contentType: false,
							success: function (data) {
								if (data == 'success') {
									Swal.fire('<?php echo e(__('Prompt Deleted')); ?>', '<?php echo e(__('Prompt has been successfully deleted')); ?>', 'success');	
									$("#allTemplates").DataTable().ajax.reload();								
								} else {
									Swal.fire('<?php echo e(__('Delete Failed')); ?>', '<?php echo e(__('There was an error while deleting this prompt')); ?>', 'error');
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/infiniteideas/public_html/app.infiniteideas.ai/resources/views/admin/davinci/chats/prompt.blade.php ENDPATH**/ ?>