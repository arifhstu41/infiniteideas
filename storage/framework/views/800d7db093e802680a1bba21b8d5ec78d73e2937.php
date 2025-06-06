

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER-->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('Finance Dashboard')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa-solid fa-sack-dollar mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('admin.finance.dashboard')); ?>"> <?php echo e(__('Finance Management')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="#"> <?php echo e(__('Finance Dashboard')); ?></a></li>
			</ol>
		</div>
	</div>
	<!--END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>						
	<!-- TOP BOX INFO -->
	<div class="row">		
		<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-bold"><?php echo e(__('Total Income')); ?> <span class="text-muted">(<?php echo e(__('Current Month')); ?>)</span></p>
							<h2 class="mb-0"><span class="number-font fs-20"><?php echo config('payment.default_system_currency_symbol'); ?><?php echo e(number_format((float)$total_data_monthly['income_current_month'][0]['data'], 2)); ?></span><span class="ml-2 text-muted fs-11 data-percentage-change"><span class="fs-12" id="income_difference"></span> <?php echo e(__('this month')); ?></span></h2>
						</div>
						<span class="text-success fs-40 mt-m1"><i class="fa-solid fa-circle-dollar"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-12 mr-1"><?php echo e(__('Last Month')); ?>:</span>
							<span class="number-font fs-12"><i class="fa fa-chain mr-1 text-success"></i><?php echo config('payment.default_system_currency_symbol'); ?><?php echo e(number_format((float)$total_data_monthly['income_past_month'][0]['data'], 2, '.', '')); ?></span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-12 mr-1"><?php echo e(__('Current Year')); ?>:</span>
							<span class="number-font fs-12"><i class="fa fa-bookmark mr-1 text-success"></i><?php echo config('payment.default_system_currency_symbol'); ?><?php echo e(number_format((float)$total_data_yearly['total_income'][0]['data'], 2, '.', '')); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-bold"><?php echo e(__('Total Spending')); ?> <span class="text-muted">(<?php echo e(__('Current Month')); ?>)</span></p>
							<h2 class="mb-0"><span class="number-font fs-20">$<?php echo e(number_format((float)$total_data_monthly['spending_current_month'], 3, '.', '')); ?></span><span class="ml-2 text-muted fs-11 data-percentage-change"><span class="fs-12" id="spending_change"></span> <?php echo e(__('this month')); ?></span></h2>
						</div>
						<span class="text-danger fs-40 mt-m1"><i class="fa-solid fa-circle-dollar-to-slot"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-12 mr-1"><?php echo e(__('Last Month')); ?>:</span>
							<span class="number-font fs-12"><i class="fa fa-chain mr-1 text-danger"></i>$<?php echo e(number_format((float)$total_data_monthly['spending_past_month'], 3, '.', '')); ?></span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-12 mr-1"><?php echo e(__('Current Year')); ?>:</span>
							<span class="number-font fs-12"><i class="fa fa-bookmark mr-1 text-danger"></i>$<?php echo e(number_format((float)$total_data_yearly['total_spending'], 3, '.', '')); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END TOP BOX INFO -->

	<!-- CHART JS GRAPH ANALYSIS -->
	<div class="row mt-3">
		<div class="col-lg-12 col-md-12">
			<div class="card overflow-hidden border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('Income Analysis')); ?> <span class="text-muted">(<?php echo e(__('Current Year')); ?>)</span></h3>
				</div>
				<div class="card-body">
					<div class="row mb-5 mt-2">	
						<div class="col-xl-3 col-12 ">
							<p class=" mb-1 fs-12"><?php echo e(__('Total Income')); ?></p>
							<h3 class="mb-0 fs-20 number-font"><?php echo config('payment.default_system_currency_symbol'); ?><?php echo e(number_format((float)$total_data_yearly['total_income'][0]['data'], 2, '.', '')); ?></h3>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="">
								<canvas id="chart-income-dashboard" class="h-330"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END CHART JS GRAPH ANALYSIS -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	<!-- Chart JS -->
	<script src="<?php echo e(URL::asset('plugins/chart/chart.min.js')); ?>"></script>
	<script type="text/javascript">
		$(function() {
	
			'use strict';
			
			let incomeData = JSON.parse(`<?php echo $chart_data['total_income']; ?>`);
			let incomeDataset = Object.values(incomeData);
			let delayed;

			let ctx = document.getElementById('chart-income-dashboard');
			new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['<?php echo e(__('Jan')); ?>', '<?php echo e(__('Feb')); ?>', '<?php echo e(__('Mar')); ?>', '<?php echo e(__('Apr')); ?>', '<?php echo e(__('May')); ?>', '<?php echo e(__('Jun')); ?>', '<?php echo e(__('Jul')); ?>', '<?php echo e(__('Aug')); ?>', '<?php echo e(__('Sep')); ?>', '<?php echo e(__('Oct')); ?>', '<?php echo e(__('Nov')); ?>', '<?php echo e(__('Dec')); ?>'],
					datasets: [{
						label: '<?php echo e(__('Total Income')); ?> (<?php echo e(config('payment.default_system_currency')); ?>) ',
						data: incomeDataset,
						backgroundColor: '#007bff',
						borderWidth: 1,
						borderRadius: 20,
						barPercentage: 0.5,
						fill: true
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false,
						labels: {
							display: false
						}
					},
					responsive: true,
					animation: {
						onComplete: () => {
							delayed = true;
						},
						delay: (context) => {
							let delay = 0;
							if (context.type === 'data' && context.mode === 'default' && !delayed) {
								delay = context.dataIndex * 50 + context.datasetIndex * 5;
							}
							return delay;
						},
					},
					scales: {
						y: {
							stacked: true,
							ticks: {
								beginAtZero: true,
								font: {
									size: 10
								},
								stepSize: 500,
							},
							grid: {
								color: '#ebecf1',
								borderDash: [3, 2]                            
							}
						},
						x: {
							stacked: true,
							ticks: {
								font: {
									size: 10
								}
							},
							grid: {
								color: '#ebecf1',
								borderDash: [3, 2]                            
							}
						},
					},
					plugins: {
						tooltip: {
							cornerRadius: 10,
							padding: 15,
							backgroundColor: '#000000',
							titleColor: '#FF9D00',
							yAlign: 'bottom',
							xAlign: 'center',
						},
						legend: {
							position: 'bottom',
							labels: {
								boxWidth: 10,
								font: {
									size: 10
								}
							}
						}
					}
					
				}
			});


			// Percentage Difference				
			var income_current_month = JSON.parse(`<?php echo $percentage['income_current']; ?>`);			
			var income_past_month = JSON.parse(`<?php echo $percentage['income_past']; ?>`);
			var spending_current_month = JSON.parse(`<?php echo $percentage['spending_current']; ?>`);	
			var spending_past_month = JSON.parse(`<?php echo $percentage['spending_past']; ?>`);

			(income_current_month[0]['data'] == null) ? income_current_month = 0 : income_current_month = income_current_month[0]['data'];
			(income_past_month[0]['data'] == null) ? income_past_month = 0 : income_past_month = income_past_month[0]['data'];

			var income_current_total = parseInt(income_current_month);	
			var income_past_total = parseInt(income_past_month);
			var spending_current_total = parseInt(spending_current_month);
			var spending_past_total = parseInt(spending_past_month);

			var income_change = mainPercentageDifference(income_past_total, income_current_total);
			var spending_change = mainPercentageDifference(spending_past_month, spending_current_month);

			document.getElementById('income_difference').innerHTML = income_change;
			document.getElementById('spending_change').innerHTML = spending_change;

			function mainPercentageDifference(past, current) {
				if (past == 0) {
					var change = (current == 0) ? '<span class="text-muted"> 0%</span>' : '<span class="text-success"><i class="fa fa-caret-up"></i> 100%</span>';   					
					return change;
				} else if(current == 0) {
					var change = (past == 0) ? '<span class="text-muted"> 0%</span>' : '<span class="text-danger"><i class="fa fa-caret-down"></i> 100%</span>';
					return change;
				} else if(past == current) {
					var change = '<span class="text-muted"> 0%</span>';
					return change; 
				}

				var difference = current - past;
    			var difference_value, result;

				var totalDifference = Math.abs(difference);
				var change = (totalDifference/past) * 100;				

				if (difference > 0) { result = '<span class="text-success"><i class="fa fa-caret-up"></i> ' + change.toFixed(1) + '%</span>'; }
				else if(difference < 0) {result = '<span class="text-danger"><i class="fa fa-caret-down"></i> ' + change.toFixed(1) + '%</span>'; }
				else { difference_value = '<span class="text-muted"> ' + change.toFixed(1) + '%</span>'; }				

				return result;
			}
		});		
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/infiniteideas/public_html/app.infiniteideas.ai/resources/views/admin/finance/dashboard/index.blade.php ENDPATH**/ ?>