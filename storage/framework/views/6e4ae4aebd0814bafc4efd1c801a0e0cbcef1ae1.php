

<?php $__env->startSection('css'); ?>
	<!-- Sweet Alert CSS -->
	<link href="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
<!--	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('Dashboard')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard')); ?>"><i class="fa-solid fa-chart-tree-map mr-2 fs-12"></i><?php echo e(__('AI Panel')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__('Dashboard')); ?></a></li>
			</ol>
		</div>
	</div>-->
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
	<!-- USER PROFILE PAGE -->
	
	
	
	
<style>

#dashboard-container { margin-top:12px;}

#dashboard-container h2 { font-size:22px;font-weight:bold;color:#555;}

.favorite-templates-panel 
{
    min-height: 0;
}

.template .favorite 
{
    background-color: #fff;
    border: 1px solid #dbe2eb;
}
.popular-templates-panel .template
{
    margin-top:6px;
}
/*.card { box-shadow:none;}*/
</style>

	<div id="dashboard-container" class="row">



	

		<div class="col-xl-6 col-lg-12 col-sm-12 mt-5">
		    

			<div class="card border-0">
			    
			    <div class="pt-6 pr-6 pl-6">
			        
			        <h2><i class="fa-solid fa-arrow-right mr-2 text-black"></i> Choose a Template</h2>
			         <div class="view-all-link"><a href="/user/templates">View All Templates</a></div>
			    </div>
			    
			    
		       

					<?php if($template_quantity): ?>
					
				    <div class="card-header pt-4 pb-4 border-0">
					<div class="mt-3">
        					<h3 class="card-title mb-2"><i class="fa-solid fa-stars mr-2 text-yellow"></i><?php echo e(__('Favorite Templates')); ?></h3>
        				<!--	<h6 class="text-muted"></h6>-->
        				</div>
        			</div>
        			<div class="card-body pt-2 favorite-templates-panel">
						<div class="row" >

							<?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-lg-6 col-md-12 col-sm-12" id="<?php echo e($template->template_code); ?>">
									<div class="template">
										<a id="<?php echo e($template->template_code); ?>" <?php if($template->favorite): ?> data-tippy-content="<?php echo e(__('Remove from favorite')); ?>" <?php else: ?> data-tippy-content="<?php echo e(__('Select as favorite')); ?>" <?php endif; ?> onclick="favoriteStatus(this.id)"><i class="<?php if($template->favorite): ?> fa-solid fa-stars <?php else: ?> fa-regular fa-star <?php endif; ?> star"></i></a>
										<div class="card <?php if($template->package == 'professional'): ?> professional <?php elseif($template->package == 'premium'): ?> premium <?php elseif($template->favorite): ?> favorite <?php else: ?> border-0 <?php endif; ?>" onclick="window.location.href='<?php echo e(url('user/templates/original-template')); ?>/<?php echo e($template->slug); ?>'">
											<div class="card-body pt-5">
												<div class="template-icon mb-4">
													<?php echo $template->icon; ?>													
												</div>
												<div class="template-title">
													<h6 class="mb-2 fs-15 number-font"><?php echo e(__($template->name)); ?></h6>
												</div>
												<div class="template-info">
													<p class="fs-13 text-muted mb-2"><?php echo e(__($template->description)); ?></p>
												</div>
												<?php if($template->package == 'professional'): ?> 
													<p class="fs-8 btn btn-pro mb-0"><i class="fa-sharp fa-solid fa-crown mr-2"></i><?php echo e(__('Pro')); ?> <?php if($template->new): ?> <p class="fs-8 btn btn-new mb-0 btn-new-pro"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i><?php echo e(__('New')); ?></p> <?php endif; ?></p> 
												<?php elseif($template->package == 'free'): ?>
													<p class="fs-8 btn btn-free mb-0"><i class="fa-sharp fa-solid fa-gift mr-2"></i><?php echo e(__('Free')); ?> <?php if($template->new): ?> <p class="fs-8 btn btn-new mb-0 btn-new-free"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i><?php echo e(__('New')); ?></p> <?php endif; ?></p> 
												<?php elseif($template->package == 'premium'): ?>
													<p class="fs-8 btn btn-yellow mb-0"><i class="fa-sharp fa-solid fa-gem mr-2"></i><?php echo e(__('Premium')); ?> <?php if($template->new): ?> <p class="fs-8 btn btn-new mb-0 btn-new-premium"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i><?php echo e(__('New')); ?></p> <?php endif; ?></p> 
												<?php elseif($template->new): ?>
													<span class="fs-8 btn btn-new mb-0"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i><?php echo e(__('New')); ?></span>
												<?php endif; ?>	
											</div>
										</div>
									</div>							
								</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							<?php $__currentLoopData = $custom_templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-lg-6 col-md- col-sm-12" id="<?php echo e($template->template_code); ?>">
									<div class="template">
										<a id="<?php echo e($template->template_code); ?>" <?php if($template->favorite): ?> data-tippy-content="<?php echo e(__('Remove from favorite')); ?>" <?php else: ?> data-tippy-content="<?php echo e(__('Select as favorite')); ?>" <?php endif; ?> onclick="favoriteStatusCustom(this.id)"><i class="<?php if($template->favorite): ?> fa-solid fa-stars <?php else: ?> fa-regular fa-star <?php endif; ?> star"></i></a>
										<div class="card <?php if($template->package == 'professional'): ?> professional <?php elseif($template->package == 'premium'): ?> premium <?php elseif($template->favorite): ?> favorite <?php else: ?> border-0 <?php endif; ?>" onclick="window.location.href='<?php echo e(url('user/templates')); ?>/<?php echo e($template->slug); ?>/<?php echo e($template->template_code); ?>'">
											<div class="card-body pt-5">
												<div class="template-icon mb-4">
													<?php echo $template->icon; ?>													
												</div>
												<div class="template-title">
													<h6 class="mb-2 fs-15 number-font"><?php echo e(__($template->name)); ?></h6>
												</div>
												<div class="template-info">
													<p class="fs-13 text-muted mb-2"><?php echo e(__($template->description)); ?></p>
												</div>
												<?php if($template->package == 'professional'): ?> 
													<p class="fs-8 btn btn-pro"><i class="fa-sharp fa-solid fa-crown mr-2"></i><?php echo e(__('Pro')); ?></p> 
												<?php elseif($template->package == 'free'): ?>
													<p class="fs-8 btn btn-free"><i class="fa-sharp fa-solid fa-gift mr-2"></i><?php echo e(__('Free')); ?></p> 
												<?php elseif($template->package == 'premium'): ?>
													<p class="fs-8 btn btn-yellow"><i class="fa-sharp fa-solid fa-gem mr-2"></i><?php echo e(__('Premium')); ?></p> 
												<?php endif; ?>
											</div>
										</div>
									</div>							
								</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						</div>
					</div>
					<?php else: ?>
					<!--	<div class="row text-center">
							<div class="col-sm-12">
								<h6 class="text-muted"><a href="<?php echo e(route('user.templates')); ?>" class="text-primary internal-special-links font-weight-bold">View all templates here</a> and click on the star icon to make them your favorite.</h6>
							</div>
						</div>
				-->
					<?php endif; ?>
					
				
			    
	    		<div class="card-header pt-4 pb-4 border-0">
					<div class="mt-3">
						<h3 class="card-title mb-2"><i class="fa-solid fa-fire mr-2 text-yellow"></i>Popular Templates</h3>
					
					</div>
				</div>
				
				
						    
    		    <div class="card-body pt-2 popular-templates-panel">
    
    	            <div class="row" >
    
    					<div class="col-lg-6 col-md-12" id="HXLNA">
    						<div class="template">
    						
    						    <div class="card  border-0 " id="KDGOX-card" onclick="window.location.href='https://app.infiniteideas.ai/user/templates/original-template/blog-ideas'">
									<div class="card-body pt-5">
										<div class="template-icon mb-4">
											<i class="fa-solid fa-message-dots blog-icon"></i>												
										</div>
										<div class="template-title">
											<h6 class="mb-2 fs-15 number-font">Blog Ideas</h6>
										</div>
										<div class="template-info">
											<p class="fs-13 text-muted mb-2">The perfect tool to start writing great articles. Generate creative ideas for your next post</p>
										</div>
												
									</div>
								</div>
    						</div>							
    					</div>
    					<div class="col-lg-6 col-md-12" id="RDJEZ">
    						<div class="template">
    					
    						    <div class="card  border-0 " id="KPAQQ-card" onclick="window.location.href='https://app.infiniteideas.ai/user/templates/original-template/article-generator'">
									<div class="card-body pt-5">
										<div class="template-icon mb-4">
											<i class="fa-solid fa-file-lines main-icon"></i>												
										</div>
										<div class="template-title">
											<h6 class="mb-2 fs-15 number-font">Article Generator</h6>
										</div>
										<div class="template-info">
											<p class="fs-13 text-muted mb-2">Turn a title and outline text into a fully complete high quality article within seconds</p>
										</div>
												
									</div>
								</div>
    						</div>							
    					</div>
    					<div class="col-lg-6 col-md-12" id="SYVKG">
    						<div class="template">
    						
    							<div class="card  border-0 " id="XVNNQ-card" onclick="window.location.href='https://app.infiniteideas.ai/user/templates/original-template/email-follow-up'">
									<div class="card-body pt-5">
										<div class="template-icon mb-4">
											<i class="fa-solid fa-reply-all email-icon"></i>												
										</div>
										<div class="template-title">
											<h6 class="mb-2 fs-15 number-font">Follow-Up Email</h6>
										</div>
										<div class="template-info">
											<p class="fs-13 text-muted mb-2">Create professional email follow up with just few clicks</p>
										</div>
												
									</div>
								</div>
    						</div>							
    					</div>
    					<div class="col-lg-6 col-md-12" id="CHJGF">
    						<div class="template">
    					
    							<div class="card  border-0 " id="NEVUR-card" onclick="window.location.href='https://app.infiniteideas.ai/user/templates/original-template/linkedin-post'">
									<div class="card-body pt-5">
										<div class="template-icon mb-4">
											<i class="fa-brands fa-linkedin-in social-icon"></i>												
										</div>
										<div class="template-title">
											<h6 class="mb-2 fs-15 number-font">LinkedIn Posts</h6>
										</div>
										<div class="template-info">
											<p class="fs-13 text-muted mb-2">Create an interesting linkedin post with the help of AI</p>
										</div>
												
									</div>
								</div>
    						</div>							
    					</div>
    					<div class="col-lg-6 col-md-12" id="XTABO">
    						<div class="template">
    						
    							<div class="card  border-0 " id="CTMNI-card" onclick="window.location.href='https://app.infiniteideas.ai/user/templates/original-template/facebook-ads'">
									<div class="card-body pt-5">
										<div class="template-icon mb-4">
											<i class="fa-brands fa-facebook social-icon"></i>												
										</div>
										<div class="template-title">
											<h6 class="mb-2 fs-15 number-font">Facebook Ads</h6>
										</div>
										<div class="template-info">
											<p class="fs-13 text-muted mb-2">Write Facebook ads that engage your audience and deliver a high conversion rate</p>
										</div>
												
									</div>
								</div>
    						</div>							
    					</div>
    					
						<div class="col-lg-6 col-md-12" id="XTABO">
    						<div class="template">
    						
    						    <div class="card  border-0 " id="WISHV-card" onclick="window.location.href='https://app.infiniteideas.ai/user/templates/original-template/video-scripts'">
									<div class="card-body pt-5">
										<div class="template-icon mb-4">
											<i class="fa-solid fa-film video-icon"></i>												
										</div>
										<div class="template-title">
											<h6 class="mb-2 fs-15 number-font">Video Scripts</h6>
										</div>
										<div class="template-info">
											<p class="fs-13 text-muted mb-2">Quickly create scripts for your videos and start shooting</p>
										</div>
												
									</div>
								</div>
    						</div>							
    					</div>
    					
    					
						<div class="col-lg-6 col-md-12" id="XTABO">
    						<div class="template">
    						
    					        <div class="card  border-0 " id="SXFVD-card" onclick="window.location.href='https://app.infiniteideas.ai/user/templates/original-template/newsletter-generator'">
									<div class="card-body pt-5">
										<div class="template-icon mb-4">
											<i class="fa-solid fa-newspaper web-icon"></i>												
										</div>
										<div class="template-title">
											<h6 class="mb-2 fs-15 number-font">Newsletter Generator</h6>
										</div>
										<div class="template-info">
											<p class="fs-13 text-muted mb-2">Generate a newsletter based on the provided information</p>
										</div>
												
									</div>
								</div>
    						</div>							
    					</div>
    					
    					
						<div class="col-lg-6 col-md-12" id="XTABO">
    						<div class="template">
    						
    						    <div class="card  border-0 " id="ZLKSP-card" onclick="window.location.href='https://app.infiniteideas.ai/user/templates/original-template/video-descriptions'">
									<div class="card-body pt-5">
										<div class="template-icon mb-4">
											<i class="fa-brands fa-youtube video-icon"></i>												
										</div>
										<div class="template-title">
											<h6 class="mb-2 fs-15 number-font">Video Descriptions</h6>
										</div>
										<div class="template-info">
											<p class="fs-13 text-muted mb-2">Write compelling YouTube descriptions to get people interested in your video</p>
										</div>
												
									</div>
								</div>
    						</div>							
    					</div>
    			    </div>
    										
    			</div>
    			

		
			</div>
		</div>
		
		<style>
		
		
		   .dashboard-card-single .heading { 
		      
		        
		        
		    }
		    
		    
		      .dashboard-card-single .description { 
		      
		        font-size:14px;
		        
		    }
	
		    
		    .view-all-link { 
		        display:block;position:absolute; right:32px;top:32px;
		        font-size:14px;
		        
		        
		    }
		    
		    
		</style>
		<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 mt-5">
			<div class="card border-0 dashboard-card-single">
			    <div class="pt-6 pr-6 pl-6">
			        
			        <h2><i class="heading fa-solid fa-arrow-right mr-2 text-black"></i> Ask ChatGPT</h2>
			        <div class="view-all-link"><a href="/user/chat">View All Chatbots</a></div>
			    </div>

				<div class="card-body pt-2">

                    	<div class="template mt-2">			
                            <div class="card " onclick="window.location.href='https://app.infiniteideas.ai/user/chats/ELKTK'">
                                <div class="row">    
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                		<div class="widget-user-imag overflow-hidden mx-auto  text-center">
                                            <img width="100%" alt="User Avatar" class="rounded-circle icon" src="https://app.infiniteideas.ai/chats/qxi3f.png">
                                		</div>
                                    </div>
                                    
                                    <div class="col-lg-9 col-md-8 col-sm-12">
                                    	<div class="p-2 pt-6">
                                		<h6 class="mb-2 fs-15 number-font ">ChatGPT</h6>
                                			<div class="text-muted description">Ask the world's most powerful chatbot about any topic. Save your chats, export them, or download as you need them.</div>
                                		</div>
                                    </div>
                                </div>
                            </div>		
                        </div>
                    <!--
					<?php if($chat_quantity): ?>
						<div class="row" id="templates-panel">

							<?php $__currentLoopData = $favorite_chats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-lg-6 col-md-6 col-sm-12" id="<?php echo e($chat->chat_code); ?>">
									<div class="chat-boxes text-center">
										<a id="<?php echo e($chat->chat_code); ?>" <?php if($chat->favorite): ?> data-tippy-content="<?php echo e(__('Remove from favorite')); ?>" <?php else: ?> data-tippy-content="<?php echo e(__('Select as favorite')); ?>" <?php endif; ?> onclick="favoriteChatStatus(this.id)"><i id="<?php echo e($chat->chat_code); ?>-icon" class="<?php if($chat->favorite): ?> fa-solid fa-stars <?php else: ?> fa-regular fa-star <?php endif; ?> star"></i></a>
										<?php if($chat->category == 'professional'): ?> 
											<p class="fs-8 btn btn-pro"><i class="fa-sharp fa-solid fa-crown mr-2"></i><?php echo e(__('Pro')); ?></p> 
										<?php elseif($chat->category == 'free'): ?>
											<p class="fs-8 btn btn-free"><i class="fa-sharp fa-solid fa-gift mr-2"></i><?php echo e(__('Free')); ?></p> 
										<?php elseif($chat->category == 'premium'): ?>
											<p class="fs-8 btn btn-yellow"><i class="fa-sharp fa-solid fa-gem mr-2"></i><?php echo e(__('Premium')); ?></p> 
										<?php endif; ?>
										<div class="card <?php if($chat->category == 'professional'): ?> professional <?php elseif($chat->category == 'premium'): ?> premium <?php elseif($chat->favorite): ?> favorite <?php else: ?> border-0 <?php endif; ?>" id="<?php echo e($chat->chat_code); ?>-card" onclick="window.location.href='<?php echo e(url('user/chats')); ?>/<?php echo e($chat->chat_code); ?>'">
											<div class="card-body pt-3">
												<div class="widget-user-image overflow-hidden mx-auto mt-3 mb-4"><img alt="User Avatar" class="rounded-circle" src="<?php echo e(URL::asset($chat->logo)); ?>"></div>
												<div class="template-title">
													<h6 class="mb-2 fs-15 number-font"><?php echo e(__($chat->name)); ?></h6>
												</div>
												<div class="template-info">
													<p class="fs-13 text-muted mb-2"><?php echo e(__($chat->sub_name)); ?></p>
												</div>							
											</div>
										</div>
									</div>							
								</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						</div>
					<?php else: ?>
						<div class="row text-center mt-8">
							<div class="col-sm-12">
								<h6 class="text-muted"><?php echo e(__('To add AI chat assitant as your favorite ones, simply click on the start icon on desired')); ?> <a href="<?php echo e(route('user.chat')); ?>" class="text-primary internal-special-links font-weight-bold"><?php echo e(__('AI Chat Assitants')); ?></a></h6>
							</div>
						</div>
					<?php endif; ?>
					-->
				</div>
			</div>
			<style>
			    
			    .dashboard-card-single-icon {font-size:64px;color:#333; |
			</style>
			
			<div class="card border-0 dashboard-card-single">
			    <div class="pt-6 pr-6 pl-6">
			        
			        <h2><i class="heading fa-solid fa-arrow-right mr-2 text-black"></i> Generate Images</h2>
			        <div class="view-all-link"><a href="/user/images">View All Images</a></div>
			    </div>

				<div class="card-body pt-2">

                    	<div class="template mt-2">			
                            <div class="card " onclick="window.location.href='https://app.infiniteideas.ai/user/images'">
                                <div class="row">    
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                		<div class="dashboard-card-single-icon mt-3 mb-4 ml-4 text-center">
                                           <i class="heading fa-solid fa-image mr-2 text-black"></i>
                                		</div>
                                    </div>
                                    
                                    <div class="col-lg-9 col-md-8 col-sm-12">
                                    	<div class="p-2 pt-6">
                                		<h6 class="mb-2 fs-15 number-font ">DALL-E or Stable Diffusion</h6>
                                			<div class="text-muted description">Generate images using the leading for your next social post, blog, e-book, and more using the leading AI image generators.</div>
                                		</div>
                                    </div>
                                </div>
                            </div>		
                        </div>
				</div>
				
			</div>
			
			
			<div class="card border-0 dashboard-card-single">
			    <div class="pt-6 pr-6 pl-6">
			        
			        <h2><i class="heading fa-solid fa-arrow-right mr-2 text-black"></i> Convert Text to Audio</h2>
			        <div class="view-all-link"><a href="/user/document/voiceovers">View All Audio</a></div>
			    </div>

				<div class="card-body pt-2">

                    	<div class="template mt-2">			
                            <div class="card " onclick="window.location.href='https://app.infiniteideas.ai/user/text-to-speech'">
                                <div class="row">    
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                			<div class="dashboard-card-single-icon mt-3 mb-4 ml-4 text-center">
                                           <i class="heading fa-solid fa-waveform-lines mr-2 text-black"></i>
                                		</div>
                                    </div>
                                    
                                    <div class="col-lg-9 col-md-8 col-sm-12">
                                    	<div class="p-2 pt-6">
                                			<h6 class="mb-2 fs-15 number-font ">Google and Azure Text-to-Speech (TTS)</h6>
                                			<div class="text-muted description">Need a voiceover for a video or want to easily generate a podcast, leverage the top AI TTS engines.</div>
                                		</div>
                                    </div>
                                </div>
                            </div>		
                        </div>
				</div>
			</div>
			
			<div class="card border-0 dashboard-card-single">
			    <div class="pt-6 pr-6 pl-6">
			        
			        <h2><i class="heading fa-solid fa-arrow-right mr-2 text-black"></i> Create Audio Transcripts</h2>
			        <div class="view-all-link"><a href="/user/document/transcripts">View All Transcripts</a></div>
			    </div>

				<div class="card-body pt-2">

                    	<div class="template mt-2">			
                            <div class="card " onclick="window.location.href='https://app.infiniteideas.ai/user/speech-to-text'">
                                <div class="row">    
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                		<div class="dashboard-card-single-icon mt-3 mb-4 ml-4 text-center">
                                           <i class="heading fa-solid fa-folder-music mr-2 text-black"></i>
                                		</div>
                                    </div>
                                    
                                    <div class="col-lg-9 col-md-8 col-sm-12">
                                    	<div class="p-2 pt-6">
                                			<h6 class="mb-2 fs-15 number-font ">Google and Azure Speech-to-Text (STT)</h6>
                                			<div class="text-muted description">Easily convert recorded podcasts or online meetings into a text transcript using the top STT conversion engines. </div>
                                		</div>
                                    </div>
                                </div>
                            </div>		
                        </div>
				</div>
			</div>
			
			<div class="card border-0 dashboard-card-single">
			    <div class="pt-6 pr-6 pl-6">
			        
			        <h2><i class="heading fa-solid fa-arrow-right mr-2 text-black"></i> Generate Code</h2>
			        <div class="view-all-link"><a href="/user/document/codes">View All Code</a></div>
			    </div>

				<div class="card-body pt-2">

                    	<div class="template mt-2">			
                            <div class="card " onclick="window.location.href='https://app.infiniteideas.ai/user/code'">
                                <div class="row">    
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                				<div class="dashboard-card-single-icon mt-3 mb-4 ml-4 text-center">
                                           <i class="heading fa-solid fa-square-code mr-2 text-black"></i>
                                		</div>
                                    </div>
                                    
                                    <div class="col-lg-9 col-md-8 col-sm-12">
                                    	<div class="p-2 pt-6">
                                			<h6 class="mb-2 fs-15 number-font ">Open AI Code Generator</h6>
                                			<div class="text-muted description">No need to code from scratch. Start here to generate snippets of code in 10-plus coding langauges.</div>
                                		</div>
                                    </div>
                                </div>
                            </div>		
                        </div>
				</div>
			</div>
		</div>
		
		






		<div class="col-lg-12 col-md-12 hidden">
			<div class="card border-0">
				<div class="card-body pt-5 pb-5">
					<div class="row mb-6" id="user-dashboard-background">
						<div class="col-lg-4 col-md-4 col-sm-12">
							<h4 class="mb-2 mt-2 font-weight-800 fs-24"><?php echo e(__('Welcome')); ?>, <?php echo e(auth()->user()->name); ?></h4>
							<?php if(is_null(auth()->user()->plan_id)): ?>
								<h6 class="fs-12"><?php echo e(__('Your account is currently part of our')); ?> <span class=" fs-10 btn btn-cancel-black user-dashboard-button ml-2 pl-5 pr-5"><i class="fa-sharp fa-solid fa-gift text-yellow mr-2"></i><?php echo e(__('Free Trial Plan')); ?></span></h6>
								<h6 class="fs-12"><?php echo e(__('Subscribe to one of our plans to get access to all features and benefits')); ?></h6>
								<a href="<?php echo e(route('user.plans')); ?>" class="btn btn-primary yellow mt-2"><i class="fa-solid fa-box-check mr-2"></i><?php echo e(__('Upgrade Now')); ?></a>
							<?php else: ?>
								<h6 class="fs-12"><?php echo e(__('You are currently subscribed to our')); ?> <span class=" fs-10 btn btn-primary yellow pl-5 ml-2 pr-5"><i class="fa-sharp fa-solid fa-gem mr-2"></i><?php echo e($subscription); ?> <?php echo e(__('Plan')); ?></span></h6>
							<?php endif; ?>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12">
							<div class="row text-center">
								<div class="col-lg-3 col-md-6 col-sm-6">
									<h6 class="fs-12 mt-3 font-weight-bold"><?php echo e(__('Words Left')); ?></h6>
									<h4 class="mb-3 font-weight-800 text-primary fs-20"><?php echo e(number_format(auth()->user()->available_words + auth()->user()->available_words_prepaid)); ?></h4>										
								</div>
								<div class="col-lg-3 col-md-6 col-sm-6">
									<h6 class="fs-12 mt-3 font-weight-bold"><?php echo e(__('Images Left')); ?></h6>
									<h4 class="mb-3 font-weight-800 text-primary fs-20"><?php echo e(number_format(auth()->user()->available_images + auth()->user()->available_images_prepaid)); ?></h4>										
								</div>						
								<div class="col-lg-3 col-md-6 col-sm-6">
									<h6 class="fs-12 mt-3 font-weight-bold"><?php echo e(__('Characters Left')); ?></h6>
									<h4 class="mb-3 font-weight-800 text-primary fs-20"><?php echo e(number_format(auth()->user()->available_chars + auth()->user()->available_chars_prepaid)); ?></h4>										
								</div>
								<div class="col-lg-3 col-md-6 col-sm-6">
									<h6 class="fs-12 mt-3 font-weight-bold"><?php echo e(__('Minutes Left')); ?></h6>
									<h4 class="mb-3 font-weight-800 text-primary fs-20"><?php echo e(number_format(auth()->user()->available_minutes + auth()->user()->available_minutes_prepaid)); ?></h4>										
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-2 col-md-4 col-sm-12">
							<div class="card overflow-hidden user-dashboard-special-box">
								<div class="card-body d-flex">
									<div class="usage-info w-100">
										<p class=" mb-3 fs-12 font-weight-bold"><?php echo e(__('Documents Created')); ?></p>
										<h2 class="mb-2 number-font fs-16"><?php echo e(number_format($data['contents'])); ?> <span class="text-muted fs-16"><?php echo e(__('contents')); ?></span></h2>
									</div>
									<div class="usage-icon text-right">
										<i class="fa-solid fa-folder-grid"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-12">
							<div class="card overflow-hidden user-dashboard-special-box">
								<div class="card-body d-flex">
									<div class="usage-info w-100">
										<p class=" mb-3 fs-12 font-weight-bold"><?php echo e(__('Words Generated')); ?></p>
										<h2 class="mb-2 number-font fs-16"><?php echo e(number_format($data['words'])); ?> <span class="text-muted fs-16"><?php echo e(__('words')); ?></span></h2>
									</div>
									<div class="usage-icon text-right">
										<i class="fa-solid fa-microchip-ai"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-12">
							<div class="card overflow-hidden user-dashboard-special-box">
								<div class="card-body d-flex">
									<div class="usage-info w-100">
										<p class=" mb-3 fs-12 font-weight-bold"><?php echo e(__('Images Created')); ?></p>
										<h2 class="mb-2 number-font fs-16"><?php echo e(number_format($data['images'])); ?> <span class="text-muted fs-16"><?php echo e(__('images')); ?></span></h2>
									</div>
									<div class="usage-icon text-right">
										<i class="fa-solid fa-image-landscape"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-12">
							<div class="card overflow-hidden user-dashboard-special-box">
								<div class="card-body d-flex">
									<div class="usage-info w-100">
										<p class=" mb-3 fs-12 font-weight-bold"><?php echo e(__('Codes Generated')); ?></p>
										<h2 class="mb-2 number-font fs-16"><?php echo e(number_format($data['codes'])); ?> <span class="text-muted fs-16"><?php echo e(__('codes')); ?></span></h2>
									</div>
									<div class="usage-icon text-right">
										<i class="fa-solid fa-square-code"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-12">
							<div class="card overflow-hidden user-dashboard-special-box">
								<div class="card-body d-flex">
									<div class="usage-info w-100">
										<p class=" mb-3 fs-12 font-weight-bold"><?php echo e(__('Voiceover Tasks')); ?></p>
										<h2 class="mb-2 number-font fs-16"><?php echo e(number_format($data['synthesized'])); ?> <span class="text-muted fs-16"><?php echo e(__('tasks')); ?></span></h2>
									</div>
									<div class="usage-icon text-right">
										<i class="fa-sharp fa-solid fa-waveform-lines"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-12">
							<div class="card overflow-hidden user-dashboard-special-box">
								<div class="card-body d-flex">
									<div class="usage-info w-100">
										<p class=" mb-3 fs-12 font-weight-bold"><?php echo e(__('Audio Transcribed')); ?></p>
										<h2 class="mb-2 number-font fs-16"><?php echo e(number_format($data['transcribed'])); ?> <span class="text-muted fs-16"><?php echo e(__('audio files')); ?></span></h2>
									</div>
									<div class="usage-icon text-right">
										<i class="fa-sharp fa-solid fa-folder-music"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-12 col-md-12 col-xm-12 mt-5 hidden">
			<div class="card border-0">
				<div class="card-header pt-4 border-0">
					<div class="mt-3">
						<h3 class="card-title mb-2"><i class="fa-solid fa-scroll-old mr-2 text-info"></i><?php echo e(__('Word Generation')); ?> <span class="text-muted">(<?php echo e(__('Current Month')); ?>)</span></h3>
						<h6 class="text-muted"><?php echo e(__('Monitor your daily word generation closely')); ?></h6>
					</div>
				</div>
				<div class="card-body pt-2">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="">
								<canvas id="chart-monthly-usage" class="h-330"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- END USER PROFILE PAGE -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	<!-- Chart JS -->
	<script src="<?php echo e(URL::asset('plugins/chart/chart.min.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.all.min.js')); ?>"></script>
	<script>
		$(function() {
	
			'use strict';

			// Total New User Analysis Chart
			var userMonthlyData = JSON.parse(`<?php echo $chart_data['user_monthly_usage']; ?>`);
			var userMonthlyDataset = Object.values(userMonthlyData);
			var ctx = document.getElementById('chart-monthly-usage');
			let delayed1;

			new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'],
					datasets: [{
						label: '<?php echo e(__('Words Generated')); ?> ',
						data: userMonthlyDataset,
						backgroundColor: '#007bff',
						borderWidth: 1,
						borderRadius: 20,
						barPercentage: 0.7,
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
							delayed1 = true;
						},
						delay: (context) => {
							let delay = 0;
							if (context.type === 'data' && context.mode === 'default' && !delayed1) {
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
								stepSize: 50000,
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
						}
					},
					plugins: {
						tooltip: {
							cornerRadius: 10,
							xPadding: 10,
							yPadding: 10,
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

		});

		function favoriteStatus(id) {

			let formData = new FormData();
			formData.append("id", id);

			$.ajax({
				headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
				method: 'post',
				url: 'dashboard/favorite',
				data: formData,
				processData: false,
				contentType: false,
				success: function (data) {

					if (data['status'] == 'success') {
						if (data['set']) {
							Swal.fire('<?php echo e(__('Template Removed from Favorites')); ?>', '<?php echo e(__('Selected template has been successfully removed from favorites')); ?>', 'success');
							document.getElementById(id).style.display = 'none';	
						} else {
							Swal.fire('<?php echo e(__('Template Added to Favorites')); ?>', '<?php echo e(__('Selected template has been successfully added to favorites')); ?>', 'success');
						}
														
					} else {
						Swal.fire('<?php echo e(__('Favorite Setting Issue')); ?>', '<?php echo e(__('There as an issue with setting favorite status for this template')); ?>', 'warning');
					}      
				},
				error: function(data) {
					Swal.fire('Oops...','Something went wrong!', 'error')
				}
			})

			return false;
		}

		function favoriteStatusCustom(id) {

			let formData = new FormData();
			formData.append("id", id);

			$.ajax({
				headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
				method: 'post',
				url: 'dashboard/favoritecustom',
				data: formData,
				processData: false,
				contentType: false,
				success: function (data) {

					if (data['status'] == 'success') {
						if (data['set']) {
							Swal.fire('<?php echo e(__('Template Removed from Favorites')); ?>', '<?php echo e(__('Selected template has been successfully removed from favorites')); ?>', 'success');
							document.getElementById(id).style.display = 'none';	
						} else {
							Swal.fire('<?php echo e(__('Template Added to Favorites')); ?>', '<?php echo e(__('Selected template has been successfully added to favorites')); ?>', 'success');
						}
														
					} else {
						Swal.fire('<?php echo e(__('Favorite Setting Issue')); ?>', '<?php echo e(__('There as an issue with setting favorite status for this template')); ?>', 'warning');
					}      
				},
				error: function(data) {
					Swal.fire('Oops...','Something went wrong!', 'error')
				}
			})

			return false;
		}

		function favoriteChatStatus(id) {

			let icon, card;
			let formData = new FormData();
			formData.append("id", id);

			$.ajax({
				headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
				method: 'post',
				url: 'chat/favorite',
				data: formData,
				processData: false,
				contentType: false,
				success: function (data) {

					if (data['status'] == 'success') {
						if (data['set']) {
							Swal.fire('<?php echo e(__('Chat Bot Removed from Favorites')); ?>', '<?php echo e(__('Selected chat bot has been successfully removed from favorites')); ?>', 'success');
							document.getElementById(id).style.display = 'none';
							icon = document.getElementById(id + '-icon');
							icon.classList.remove("fa-solid");
							icon.classList.remove("fa-stars");
							icon.classList.add("fa-regular");
							icon.classList.add("fa-star");

							card = document.getElementById(id + '-card');
							if(card.classList.contains("professional")) {
								// do nothing
							} else {
								card.classList.remove("favorite");
								card.classList.add('border-0');
							}							
						} else {
							Swal.fire('<?php echo e(__('Chat Bot Added to Favorites')); ?>', '<?php echo e(__('Selected chat bot has been successfully added to favorites')); ?>', 'success');
							icon = document.getElementById(id + '-icon');
							icon.classList.remove("fa-regular");
							icon.classList.remove("fa-star");
							icon.classList.add("fa-solid");
							icon.classList.add("fa-stars");

							card = document.getElementById(id + '-card');
							if(card.classList.contains("professional")) {
								// do nothing
							} else {
								card.classList.add('favorite');
								card.classList.remove('border-0');
							}
						}
														
					} else {
						Swal.fire('<?php echo e(__('Favorite Setting Issue')); ?>', '<?php echo e(__('There as an issue with setting favorite status for this chat bot')); ?>', 'warning');
					}      
				},
				error: function(data) {
					Swal.fire('Oops...','Something went wrong!', 'error')
				}
			})
		}

	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/infiniteideas/public_html/app.infiniteideas.ai/resources/views/user/dashboard/index.blade.php ENDPATH**/ ?>