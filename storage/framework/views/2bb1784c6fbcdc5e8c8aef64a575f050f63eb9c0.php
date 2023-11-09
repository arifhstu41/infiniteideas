<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('plugins/slick/slick.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(URL::asset('plugins/slick/slick-theme.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('plugins/aos/aos.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(URL::asset('plugins/animatedheadline/jquery.animatedheadline.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
    <div class="container">
        <div class="row">

            <nav class="navbar navbar-expand-lg navbar-light w-100" id="navbar-responsive">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img id="brand-img"  src="<?php echo e(URL::asset('img/brand/logo.png')); ?>" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse section-links" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link scroll active" href="#main-wrapper"><?php echo e(__('Home')); ?> <span class="sr-only">(current)</span></a>
                        </li>	
                        <?php if(config('frontend.features_section') == 'on'): ?>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#features-wrapper"><?php echo e(__('Features')); ?></a>
                            </li>
                        <?php endif; ?>	
                        <?php if(config('frontend.pricing_section') == 'on'): ?>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#prices-wrapper"><?php echo e(__('Pricing')); ?></a>
                            </li>
                        <?php endif; ?>							
                        <?php if(config('frontend.faq_section') == 'on'): ?>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#faq-wrapper"><?php echo e(__('FAQs')); ?></a>
                            </li>
                        <?php endif; ?>	
                        <?php if(config('frontend.blogs_section') == 'on'): ?>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#blog-wrapper"><?php echo e(__('Blogs')); ?></a>
                            </li>
                        <?php endif; ?>										
                    </ul>

                    <?php if(Route::has('login')): ?>
                        <div id="login-buttons">
                            <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(route('user.templates')); ?>" class="action-button dashboard-button pl-5 pr-5"><?php echo e(__('Dashboard')); ?></a>
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>" class="" id="login-button"><?php echo e(__('Sign In')); ?></a>

                                <?php if(config('settings.registration') == 'enabled'): ?>
                                    <?php if(Route::has('register')): ?>
                                        <a href="<?php echo e(route('register')); ?>" class="ml-2 action-button register-button pl-5 pr-5"><?php echo e(__('Sign Up')); ?></a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </nav>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

        <section id="main-wrapper">
            
            <div class="h-100vh justify-center min-h-screen" id="main-background">

                <div class="container h-100vh ">
                    <div class="row h-100vh vertical-center">
                        <div class="col-sm-12 upload-responsive">
                            <div class="text-container text-center">
                                <h6 class="mb-4 fs-14" data-aos="fade-up" data-aos-delay="100" data-aos-once="true" data-aos-duration="400"><i class="fa-sharp fa-solid fa-sparkles mr-1"></i> <?php echo e(__('Meet')); ?>, <?php echo e(config('app.name')); ?></span></h6>
                                <h1 data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="500"><?php echo e(__('Ultimate AI Creator')); ?></span></h1>
                                <div class="word-container" data-aos="fade-up" data-aos-delay="300" data-aos-once="true" data-aos-duration="600">
                                    <h1 class="ah-headline">
                                      <span class="ah-words-wrapper text-center">
                                        <b class="is-visible"><?php echo e(__('Article Generator')); ?></b>
                                        <b><?php echo e(__('Content Improver')); ?></b>
                                        <b><?php echo e(__('Blog Contents')); ?></b>
                                        <b><?php echo e(__('Ad Creations')); ?></b>
                                        <b><?php echo e(__('Text to Speech')); ?></b>
                                        <b><?php echo e(__('And Many More!')); ?></b>
                                      </span>
                                    </h1>
                                  </div>
                                <p class="fs-16" data-aos="fade-up" data-aos-delay="400" data-aos-once="true" data-aos-duration="700"><?php echo e(__('One platform to generate all AI contents & AI Voiceovers')); ?></p>

                                <a href="<?php echo e(route('register')); ?>" class="btn-primary-frontend btn-frontend-scroll-effect mb-2" id="top-main-button"  data-aos="fade-up" data-aos-delay="500" data-aos-once="true" data-aos-duration="800">
                                    <div>
                                        <span><?php echo e(__('Start Creating for Free')); ?></span>
                                        <span><?php echo e(__('Start Creating for Free')); ?></span>
                                    </div>
                                </a>
                                <div>
                                    <span class="fs-12" data-aos="fade-up" data-aos-delay="900" data-aos-once="true" data-aos-duration="1300"><?php echo e(__('No credit card required')); ?></span>
                                </div>
                                <div class="text-center d-flex mx-auto justify-content-center mt-5" data-aos="fade-up" data-aos-delay="600" data-aos-once="true" data-aos-duration="900">
                                    <div class="happy-customers">
                                        <div class="customer-avatars">
                                            <img src="<?php echo e(URL::asset('img/frontend/customers/1.png')); ?>" alt="" class="small-avatar">
                                            <img src="<?php echo e(URL::asset('img/frontend/customers/2.png')); ?>" alt="" class="small-avatar overlap">
                                            <img src="<?php echo e(URL::asset('img/frontend/customers/3.png')); ?>" alt="" class="small-avatar overlap">
                                            <img src="<?php echo e(URL::asset('img/frontend/customers/4.png')); ?>" alt="" class="small-avatar overlap">
                                            <img src="<?php echo e(URL::asset('img/frontend/customers/5.png')); ?>" alt="" class="small-avatar overlap">
                                        </div>
                                        <div>
                                            <span class="fs-12">12,577 <?php echo e(__('Happy Customers')); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                
                    </div>           
                </div>

            </div> 
            
            <div class="container-fluid" id="curve-container">
                <div class="curve-box">
                    <div class="overflow-hidden">
                        <svg class="curve" width="1440" height="105" viewBox="0 0 1440 105" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                            <path d="M0 0C240 68.7147 480 103.072 720 103.072C960 103.072 1200 68.7147 1440 0V104.113H0V0Z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </section>


        <!-- SECTION - STEPS
        ========================================================-->
        <section id="steps-wrapper">

            <div class="container pt-9 text-center">

                <!-- SECTION TITLE -->
                <div class="row mb-6">
                    <div class="title">
                        <p class="m-2"><?php echo e(__('Start Writing in 3 Easy Steps')); ?></p>
                        <h3><span><?php echo e(__('How')); ?> </span><?php echo e(__('does it work?')); ?></h3>                        
                    </div>
                </div> <!-- END SECTION TITLE --> 
                              
            </div> <!-- END CONTAINER -->

            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">
                        <div class="steps-box-wrapper">
                            <div class="steps-box">
                                <div class="step-number-big">
                                    <p>1</p>
                                </div>
                                <div class="step-number">
                                    <h6><?php echo e(__('Step 1')); ?></h6>
                                </div>
                                <div class="step-title">
                                    <h2><?php echo e(__('Select a writing tool')); ?></h2>
                                </div>
                                <div class="step-description">
                                    <p><?php echo e(__('Choose from a wide array of AI tools to write social media ads, hero sections, blog posts, essays, etc...')); ?></p>
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="500">
                        <div class="steps-box-wrapper">
                            <div class="steps-box">
                                <div class="step-number-big">
                                    <p class="right-space">2</p>
                                </div>
                                <div class="step-number">
                                    <h6><?php echo e(__('Step 2')); ?></h6>
                                </div>
                                <div class="step-title">
                                    <h2><?php echo e(__('Tell us what to write about')); ?></h2>
                                </div>
                                <div class="step-description">
                                    <p><?php echo e(__('Explain with as many details as possible to the AI what you would like to write about.')); ?></p>
                                </div>
                            </div>   
                        </div>                     
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="300" data-aos-once="true" data-aos-duration="600">
                        <div class="steps-box-wrapper">
                            <div class="steps-box">
                                <div class="step-number-big">
                                    <p class="right-space">3</p>
                                </div>
                                <div class="step-number">
                                    <h6><?php echo e(__('Step 3')); ?></h6>
                                </div>
                                <div class="step-title">
                                    <h2><?php echo e(__('Generate AI content')); ?></h2>
                                </div>
                                <div class="step-description">
                                    <p><?php echo e(__('Our highly trained AI understands your details and generate unique and human-like content in seconds.')); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </section> <!-- END SECTION STEPS -->
      

        <!-- SECTION - FEATURES
        ========================================================-->
        <?php if(config('frontend.features_section') == 'on'): ?>
            <section id="features-wrapper">

                <?php echo adsense_frontend_features_728x90(); ?>

                
                <div class="container pt-7 text-center">

                    <!-- SECTION TITLE -->
                    <div class="row mb-6">
                        <div class="title">
                            <p class="m-2"><?php echo e(__('Discover available AI tools')); ?></p>
                            <h3><?php echo e(__('The')); ?><span> <?php echo e(__('Ultimate Power')); ?> </span><?php echo e(__('of AI')); ?></h3>                        
                        </div>
                    </div> <!-- END SECTION TITLE --> 
                                  
                </div> <!-- END CONTAINER -->


                <div class="container">    
                    
                    <div class="row">
    
                        <div class="col-lg-12 col-md-12 col-sm-12" data-aos="zoom-in" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">                
                            <div class="features-nav-menu">
                                <div class="features-nav-menu-inner">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="ai-chat-tab" data-bs-toggle="tab" data-bs-target="#ai-chat" type="button" role="tab" aria-controls="ai-chat" aria-selected="true"><?php echo e(__('AI Chat Bots')); ?></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="ai-content-tab" data-bs-toggle="tab" data-bs-target="#ai-content" type="button" role="tab" aria-controls="ai-content" aria-selected="false"><?php echo e(__('AI Contents')); ?></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="ai-image-tab" data-bs-toggle="tab" data-bs-target="#ai-image" type="button" role="tab" aria-controls="ai-image" aria-selected="false"><?php echo e(__('AI Images')); ?></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="ai-voiceover-tab" data-bs-toggle="tab" data-bs-target="#ai-voiceover" type="button" role="tab" aria-controls="ai-voiceover" aria-selected="false"><?php echo e(__('AI Voiceovers')); ?></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="ai-speech-tab" data-bs-toggle="tab" data-bs-target="#ai-speech" type="button" role="tab" aria-controls="ai-speech" aria-selected="false"><?php echo e(__('AI Speech to Text')); ?></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="ai-code-tab" data-bs-toggle="tab" data-bs-target="#ai-code" type="button" role="tab" aria-controls="ai-code" aria-selected="false"><?php echo e(__('AI Codes')); ?></button>
                                        </li>
			
                                    </ul>
                                </div>
                            </div>					
                        </div>
                
                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                            <div class="pt-6">
                                <div class="features-panel">
                
                                    <div class="tab-content" id="myTabContent">
                
                                        <div class="tab-pane fade show active" id="ai-chat" role="tabpanel" aria-labelledby="ai-chat">
                                            <div class="row features-outer-wrapper">

                                                <div class="col-lg-6 col-md-6 col-sm-12 pl-6 pr-6 align-middle" data-aos="fade-right" data-aos-delay="200" data-aos-once="true" data-aos-duration="500">                                                    
                                                    <div class="features-inner-wrapper text-center">                                                                  
                                                    
                                                        <div class="feature-title">
                                                            <h6 class="fs-12 mb-5"><i class="fa-solid fa-message-captions mr-2 purple-icon"></i><?php echo e(__('AI Chat Bots')); ?></h6>
                                                            <h4 class="mb-5 fs-30"><?php echo e(__('Creative Virtual AI Assistants')); ?></h4>                                                            
                                                        </div>	

                                                        <div class="feature-description">
                                                            <p class="mb-6"><?php echo e(__('We have trained our AI Chat Bots with the knowledge of industry experts and conversion experts so you can be sure it knows how to do its job and answer all your questions instantly and provide requested information')); ?></p>
                                                        </div>

                                                        <div class="feature-footer text-center">
                                                            <p class="fs-12"><?php echo e(__('Powered By OpenAi')); ?></p>
                                                        </div>
                                                        
                                                    </div>                                                                                                  						
                                                </div>	

                                                <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-left" data-aos-delay="300" data-aos-once="true" data-aos-duration="600">
                                                    <div class="feature-image-wrapper">
                                                        <img src="<?php echo e(URL::asset('img/frontend/features/chat.webp')); ?>" alt="">
                                                    </div>
                                                    <div class="feature-footer text-center">
                                                        <p class="fs-12 text-muted"><?php echo e(__('Train. Deploy. Enjoy.')); ?></p>
                                                    </div>
                                                </div>
                
                                            </div>	
                                        </div>

                                        <div class="tab-pane fade" id="ai-content" role="tabpanel" aria-labelledby="ai-content">
                                            <div class="row features-outer-wrapper">

                                                <div class="col-lg-6 col-md-6 col-sm-12 pl-6 pr-6 align-middle">                                                    
                                                    <div class="features-inner-wrapper text-center">                                                                  
                                                    
                                                        <div class="feature-title">
                                                            <h6 class="fs-12 mb-5"><i class="fa-solid fa-microchip-ai yellow-icon mr-2"></i><?php echo e(__('AI Content Generation')); ?></h6>
                                                            <h4 class="mb-5 fs-30 number-font"><?php echo e(__('Create amazing content 10X faster')); ?></h4>                                                            
                                                        </div>	

                                                        <div class="feature-description">
                                                            <p class="mb-6"><?php echo e(config('app.name')); ?> <?php echo e(__('can help you with a variety of writing tasks, from writing blog post, creating better resumes and job descriptions to composing emails and social media content, and many more. With 70+ templates, we can save you time and improve your writing skills.')); ?></p>
                                                        </div>

                                                        <div class="feature-footer text-center">
                                                            <p class="fs-12"><?php echo e(__('Powered By OpenAi')); ?></p>
                                                        </div>
                                                        
                                                    </div>                                                                                                  						
                                                </div>	

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="feature-image-wrapper">
                                                        <img src="<?php echo e(URL::asset('img/frontend/features/main-templates.png')); ?>" alt="">
                                                    </div>
                                                    <div class="feature-footer text-center">
                                                        <p class="fs-12 text-muted"><?php echo e(__('Select. Create. Download.')); ?></p>
                                                    </div>
                                                </div>
                
                                            </div>	
                                        </div>

                                        <div class="tab-pane fade" id="ai-image" role="tabpanel" aria-labelledby="ai-image">
                                            <div class="row features-outer-wrapper">

                                                <div class="col-lg-6 col-md-6 col-sm-12 pl-6 pr-6 align-middle">                                                    
                                                    <div class="features-inner-wrapper text-center">                                                                  
                                                    
                                                        <div class="feature-title">
                                                            <h6 class="fs-12 mb-5"><i class="fa-solid fa-camera-viewfinder blue-icon mr-2"></i><?php echo e(__('AI Image Creation')); ?></h6>
                                                            <h4 class="mb-5 fs-30 number-font"><?php echo e(__('Use AI to create any art or image')); ?></h4>                                                            
                                                        </div>	

                                                        <div class="feature-description">
                                                            <p class="mb-6"><?php echo e(__('Are you looking for a tool to help you create unique beautiful artwork and images quickly and easily? Look no further! Our AI-powered software makes it simple to generate high-quality art and images with just a few clicks. With our intuitive interface and powerful technology, you can create stunning visuals in minutes instead of hours.')); ?></p>
                                                        </div>

                                                        <div class="feature-footer text-center">
                                                            <p class="fs-12"><?php echo e(__('Powered By OpenAi DALL-E 2 & Stable Diffusion')); ?></p>
                                                        </div>
                                                        
                                                    </div>                                                                                                  						
                                                </div>	

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="feature-image-wrapper">
                                                        <img src="<?php echo e(URL::asset('img/frontend/features/image.webp')); ?>" alt="">
                                                    </div>
                                                </div>
                
                                            </div>	
                                        </div>

                                        <div class="tab-pane fade" id="ai-voiceover" role="tabpanel" aria-labelledby="ai-voiceover">
                                            <div class="row features-outer-wrapper">

                                                <div class="col-lg-6 col-md-6 col-sm-12 pl-6 pr-6 align-middle">                                                    
                                                    <div class="features-inner-wrapper text-center">                                                                  
                                                    
                                                        <div class="feature-title">
                                                            <h6 class="fs-12 mb-5"><i class="fa-solid fa-waveform-lines yellow-icon mr-2"></i><?php echo e(__('AI Voiceover Synthesize')); ?></h6>
                                                            <h4 class="mb-5 fs-30 number-font"><?php echo e(__('Make studio-quality voiceovers in minutes')); ?></h4>                                                            
                                                        </div>	

                                                        <div class="feature-description">
                                                            <p class="mb-6"><?php echo e(__('Truly human emotions in every voice over generated, breathing life into your voice overs. Our AI voices have elements that make a voice sound NATURAL and have all the expressions and tone inflections that are needed to make people more engaged in your content')); ?></p>
                                                        </div>

                                                        <div class="feature-footer text-center">
                                                            <p class="fs-12"><?php echo e(__('Powered By Azure & GCP')); ?></p>
                                                        </div>
                                                        
                                                    </div>                                                                                                  						
                                                </div>	

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="feature-image-wrapper">
                                                        <img src="<?php echo e(URL::asset('img/frontend/features/voiceover.webp')); ?>" alt="">
                                                    </div>
                                                    <div class="feature-footer text-center">
                                                        <p class="fs-12 text-muted"><?php echo e(__('Select. Type. Listen.')); ?></p>
                                                    </div>
                                                </div>
                
                                            </div>	
                                        </div>

                                        <div class="tab-pane fade" id="ai-speech" role="tabpanel" aria-labelledby="ai-speech">
                                            <div class="row features-outer-wrapper">

                                                <div class="col-lg-6 col-md-6 col-sm-12 pl-6 pr-6 align-middle">                                                    
                                                    <div class="features-inner-wrapper text-center">                                                                  
                                                    
                                                        <div class="feature-title">
                                                            <h6 class="fs-12 mb-5"><i class="fa-solid fa-music blue-icon mr-2"></i><?php echo e(__('AI Speech to Text Transcribe')); ?></h6>
                                                            <h4 class="mb-5 fs-30 number-font"><?php echo e(__('Transcribe accurately your audio')); ?></h4>                                                            
                                                        </div>	

                                                        <div class="feature-description">
                                                            <p class="mb-6"><?php echo e(__('Accurately transcribe audio content in various formats. Enable transcription of your audio files in multiple languages, as well as translation from those languages into English.')); ?></p>
                                                        </div>

                                                        <div class="feature-footer text-center">
                                                            <p class="fs-12"><?php echo e(__('Powered By OpenAi Whisper')); ?></p>
                                                        </div>
                                                        
                                                    </div>                                                                                                  						
                                                </div>	

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="feature-image-wrapper">
                                                        <img src="<?php echo e(URL::asset('img/frontend/features/transcribe.webp')); ?>" alt="">
                                                    </div>
                                                    <div class="feature-footer text-center">
                                                        <p class="fs-12 text-muted"><?php echo e(__('Choose. Upload. Transcribe.')); ?></p>
                                                    </div>
                                                </div>
                
                                            </div>	
                                        </div>

                                        <div class="tab-pane fade" id="ai-code" role="tabpanel" aria-labelledby="ai-code">
                                            <div class="row features-outer-wrapper">

                                                <div class="col-lg-6 col-md-6 col-sm-12 pl-6 pr-6 align-middle">                                                    
                                                    <div class="features-inner-wrapper text-center">                                                                  
                                                    
                                                        <div class="feature-title">
                                                            <h6 class="fs-12 mb-5"><i class="fa-solid fa-square-code black-icon mr-2"></i><?php echo e(__('AI Code Generation')); ?></h6>
                                                            <h4 class="mb-5 fs-30 number-font"><?php echo e(__('Write code like a Pro')); ?></h4>                                                            
                                                        </div>	

                                                        <div class="feature-description">
                                                            <p class="mb-6"><?php echo e(__('Generate complex algorithms simply by using natural language to explain what you are after, we will take care rest for you. Write code like Pro in Python, Flutter, PHP, JavaScript, Ruby and other programming languages.')); ?></p>
                                                        </div>

                                                        <div class="feature-footer text-center">
                                                            <p class="fs-12"><?php echo e(__('Powered By OpenAi')); ?></p>
                                                        </div>
                                                        
                                                    </div>                                                                                                  						
                                                </div>	

                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="feature-image-wrapper">
                                                        <img src="<?php echo e(URL::asset('img/frontend/features/code.webp')); ?>" alt="">
                                                    </div>
                                                    <div class="feature-footer text-center">
                                                        <p class="fs-12 text-muted"><?php echo e(__('Think. Generate. Use.')); ?></p>
                                                    </div>
                                                </div>
                
                                            </div>	
                                        </div>
                                    
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                
                    </div>
            
    
                </div>

            </section>
        <?php endif; ?>
        

        <!-- SECTION - BANNER
        ========================================================-->
        <section id="info-banner">
            <div class="container">
                
                <!-- SECTION TITLE -->
                <div class="row pl-7">
                    <div class="title">
                        <h3><?php echo e(__('What else is')); ?><span> <?php echo e(__('there?')); ?> </span></h3>                        
                    </div>
                </div> <!-- END SECTION TITLE -->          

                <div class="row justify-content-center pl-7 pr-7 pt-1 pb-5">
                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">
                        <div class="info-box mr-3 d-flex">
                            <div class="info-text text-center w-80">
                                <h4><?php echo e(__ ('Advanced')); ?></h4>
                                <h4><?php echo e(__ ('Analytics')); ?></h4>
                                <p class="fs-12 mt-2 w-90 mx-auto"><?php echo e(__('Closely monitor and control your AI usage')); ?></p>
                            </div>
                            <div class="info-img text-right w-100">
                                <img src="<?php echo e(URL::asset('img/frontend/customers/extra-monitoring.webp')); ?>" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="500">
                        <div class="info-box ml-3 mr-3 team-wrapper">                            
                            <img src="<?php echo e(URL::asset('img/frontend/customers/extra1.webp')); ?>" alt="" class="team-image-1">
                            <img src="<?php echo e(URL::asset('img/frontend/customers/extra2.webp')); ?>" alt="" class="team-image-2">
                            <img src="<?php echo e(URL::asset('img/frontend/customers/extra3.webp')); ?>" alt="" class="team-image-3">
                            <img src="<?php echo e(URL::asset('img/frontend/customers/extra4.webp')); ?>" alt="" class="team-image-4">
                            
                            <div class="team-text text-center">
                                <h4><?php echo e(__ ('Team')); ?></h4>
                                <h4><?php echo e(__ ('Management')); ?></h4>
                                <p class="fs-12 mt-2 w-90 mx-auto"><?php echo e(__('Collaborate with your team to create your desired dream content')); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="300" data-aos-once="true" data-aos-duration="600">
                        <div class="info-box mr-3 d-flex">
                            <div class="info-text pl-4 text-center w-80">
                                <h4><?php echo e(__ ('Project')); ?></h4>
                                <h4><?php echo e(__ ('Management')); ?></h4>
                                <p class="fs-12 mt-2 w-90 mx-auto"><?php echo e(__('Organize your creative projects')); ?></p>
                            </div>
                            <div class="info-img text-right w-100">
                                <img src="<?php echo e(URL::asset('img/frontend/customers/extra-project.webp')); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION - TEMPLATES
        ========================================================-->
        <section id="templates-wrapper">

            <?php echo adsense_frontend_features_728x90(); ?>

            

            <div class="container pt-9 text-center">

                <!-- SECTION TITLE -->
                <div class="row mb-6">
                    <div class="title">
                        <p class="m-2"><?php echo e(__('Custom Templates')); ?></p>
                        <h3><span> <?php echo e(__('Unlimited Templates')); ?> </span><?php echo e(__('to get started')); ?></h3>                        
                    </div>
                </div> <!-- END SECTION TITLE --> 
                              
            </div> <!-- END CONTAINER -->

            <div class="container">    
                    
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12" data-aos="zoom-in" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">                
                        <div class="templates-nav-menu">
                            <div class="template-nav-menu-inner">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true"><?php echo e(__('All Templates')); ?></button>
                                    </li>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(strtolower($category->name) != 'other'): ?>
                                            <li class="nav-item category-check" role="presentation">
                                                <button class="nav-link" id="<?php echo e($category->code); ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo e($category->code); ?>" type="button" role="tab" aria-controls="<?php echo e($category->code); ?>" aria-selected="false"><?php echo e(__($category->name)); ?></button>
                                            </li>
                                        <?php endif; ?>									
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(strtolower($category->name) == 'other'): ?>
                                        <li class="nav-item category-check" role="presentation">
                                            <button class="nav-link" id="<?php echo e($category->code); ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo e($category->code); ?>" type="button" role="tab" aria-controls="<?php echo e($category->code); ?>" aria-selected="false"><?php echo e(__($category->name)); ?></button>
                                        </li>
                                    <?php endif; ?>									
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>				
                                </ul>
                            </div>
                        </div>					
                    </div>
            
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <div class="pt-2">
                            <div class="favorite-templates-panel show-templates">
            
                                <div class="tab-content" id="myTabContent">
            
                                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                        <div class="row templates-panel">
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(strtolower($category->name) != 'other'): ?>
                                                    <div class="col-12 templates-panel-group <?php if($loop->first): ?> <?php else: ?>  mt-3 <?php endif; ?>">
                                                        <h6 class="fs-14 font-weight-bold text-muted"><?php echo e(__($category->name)); ?></h6>
                                                        <h4 class="fs-12 text-muted"><?php echo e(__($category->description)); ?></h4>
                                                    </div>						
                            
                                                    <?php $__currentLoopData = $other_templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($template->group == $category->code): ?>
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="template">                                                                        
                                                                    <div class="card <?php if($template->package == 'professional'): ?> professional <?php elseif($template->package == 'premium'): ?> premium <?php elseif($template->favorite): ?> favorite <?php endif; ?>" id="<?php echo e($template->template_code); ?>-card" onclick="window.location.href='<?php echo e(url('user/templates/original-template')); ?>/<?php echo e($template->slug); ?>'">
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
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
                                                    
                                                    <?php $__currentLoopData = $custom_templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($template->group == $category->code): ?>
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="template">                                                                       
                                                                    <div class="card <?php if($template->package == 'professional'): ?> professional <?php elseif($template->package == 'premium'): ?> premium <?php elseif($template->favorite): ?> favorite <?php endif; ?>" id="<?php echo e($template->template_code); ?>-card" onclick="window.location.href='<?php echo e(url('user/templates')); ?>/<?php echo e($template->slug); ?>/<?php echo e($template->template_code); ?>'">
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
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>	
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>		
            
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(strtolower($category->name) == 'other'): ?>
                                                    <div class="col-12 templates-panel-group <?php if($loop->first): ?> <?php else: ?>  mt-3 <?php endif; ?>">
                                                        <h6 class="fs-14 font-weight-bold text-muted"><?php echo e(__($category->name)); ?></h6>
                                                        <h4 class="fs-12 text-muted"><?php echo e(__($category->description)); ?></h4>
                                                    </div>					
                            
                                                    <?php $__currentLoopData = $other_templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($template->group == $category->code): ?>
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="template">                                                                        
                                                                    <div class="card <?php if($template->package == 'professional'): ?> professional <?php elseif($template->package == 'premium'): ?> premium <?php elseif($template->favorite): ?> favorite <?php endif; ?>" id="<?php echo e($template->template_code); ?>-card" onclick="window.location.href='<?php echo e(url('user/templates/original-template')); ?>/<?php echo e($template->slug); ?>'">
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
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
                                                    
                                                    <?php $__currentLoopData = $custom_templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($template->group == $category->code): ?>
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="template">                                                                      
                                                                    <div class="card <?php if($template->package == 'professional'): ?> professional <?php elseif($template->package == 'premium'): ?> premium <?php elseif($template->favorite): ?> favorite <?php endif; ?>" id="<?php echo e($template->template_code); ?>-card" onclick="window.location.href='<?php echo e(url('user/templates')); ?>/<?php echo e($template->slug); ?>/<?php echo e($template->template_code); ?>'">
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
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>	
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
                                        </div>	
                                    </div>
            
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="tab-pane fade" id="<?php echo e($category->code); ?>" role="tabpanel" aria-labelledby="<?php echo e($category->code); ?>-tab">
                                            <div class="row templates-panel">
                        
                                                <?php $__currentLoopData = $other_templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($template->group == $category->code): ?>
                                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                                            <div class="template">                                                                    
                                                                <div class="card <?php if($template->package == 'professional'): ?> professional <?php elseif($template->package == 'premium'): ?> premium <?php elseif($template->favorite): ?> favorite <?php endif; ?>" id="<?php echo e($template->template_code); ?>-card" onclick="window.location.href='<?php echo e(url('user/templates/original-template')); ?>/<?php echo e($template->slug); ?>'">
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
                                                    <?php endif; ?>									
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>		
            
                                                <?php $__currentLoopData = $custom_templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($template->group == $category->code): ?>
                                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                                            <div class="template">                                                                   
                                                                <div class="card <?php if($template->package == 'professional'): ?> professional <?php elseif($template->package == 'premium'): ?> premium <?php elseif($template->favorite): ?> favorite <?php endif; ?>" id="<?php echo e($template->template_code); ?>-card" onclick="window.location.href='<?php echo e(url('user/templates')); ?>/<?php echo e($template->slug); ?>/<?php echo e($template->template_code); ?>'">
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
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
                                
            
                                </div>
                                
                                <div class="show-templates-button">
                                    <a href="#">
                                        <span><?php echo e(__('Show More')); ?> <i class="ml-2 fs-10 fa-solid fa-chevrons-down"></i></span>
                                        <span><?php echo e(__('Show Less')); ?> <i class="ml-2 fs-10 fa-solid fa-chevrons-up"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
        

            </div>

        </section>


        <!-- SECTION - BENEFITS
        ========================================================-->
        <section id="benefits-wrapper">

            <div class="container pt-9"> 
                
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="fade-right" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">                        
                        <div class="title">
                            <p class="m-2"><?php echo e(__('Features List')); ?></p>
                            <h3><span> <?php echo e(__('Only platform')); ?> </span><?php echo e(__('that you will ever need')); ?></h3>     
                            <h6 class="font-weight-normal fs-14 mb-4"><?php echo e(__('We have you covered from all AI Text & Audio generation aspects to allow you to focus only on your content creation')); ?></h6>                    
                            <a href="<?php echo e(route('register')); ?>" class="btn-primary-frontend-small btn-frontend-scroll-effect mb-2">
                                <div>
                                    <span><?php echo e(__('Try Creating for Free')); ?></span>
                                    <span><?php echo e(__('Try Creating for Free')); ?></span>
                                </div>
                            </a>
                        </div>                                               
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="zoom-in" data-aos-delay="200" data-aos-once="true" data-aos-duration="500">
                        <div class="benefits-box-wrapper text-center">
                            <div class="benefit-box">
                                <div class="benefit-image">
                                    <img src="<?php echo e(URL::asset('img/frontend/features/templates.webp')); ?>" alt="">
                                </div>
                                <div class="benefit-title">
                                    <h6><?php echo e(__('Customize Templates')); ?></h6>
                                </div>
                                <div class="benefit-description">
                                    <p><?php echo e(__('Create and train your unique custom template and enjoy')); ?></p>
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="zoom-in" data-aos-delay="300" data-aos-once="true" data-aos-duration="500">
                        <div class="benefits-box-wrapper text-center">
                            <div class="benefit-box">
                                <div class="benefit-image">
                                    <img src="<?php echo e(URL::asset('img/frontend/features/languages.webp')); ?>" alt="">
                                </div>
                                <div class="benefit-title">
                                    <h6><?php echo e(__('Variety of Languages')); ?></h6>
                                </div>
                                <div class="benefit-description">
                                    <p><?php echo e(__('Generate AI content in more than 54 languages and increasing')); ?></p>
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="zoom-in" data-aos-delay="400" data-aos-once="true" data-aos-duration="500">
                        <div class="benefits-box-wrapper text-center">
                            <div class="benefit-box">
                                <div class="benefit-image">
                                    <img src="<?php echo e(URL::asset('img/frontend/features/voiceover-languages.webp')); ?>" alt="">
                                </div>
                                <div class="benefit-title">
                                    <h6><?php echo e(__('144+ AI Voiceover Languages')); ?></h6>
                                </div>
                                <div class="benefit-description">
                                    <p><?php echo e(__('Wide variety of languages and dialects for AI Voiceovers')); ?></p>
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="zoom-in" data-aos-delay="500" data-aos-once="true" data-aos-duration="500">
                        <div class="benefits-box-wrapper text-center">
                            <div class="benefit-box">
                                <div class="benefit-image">
                                    <img src="<?php echo e(URL::asset('img/frontend/features/voices.webp')); ?>" alt="">
                                </div>
                                <div class="benefit-title">
                                    <h6><?php echo e(__('Mix up to 20 voices')); ?></h6>
                                </div>
                                <div class="benefit-description">
                                    <p><?php echo e(__('Select from more than 540+ AI Neural Voices and mix in a single text synthesize task')); ?></p>
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="zoom-in" data-aos-delay="600" data-aos-once="true" data-aos-duration="500">
                        <div class="benefits-box-wrapper text-center">
                            <div class="benefit-box">
                                <div class="benefit-image">
                                    <img src="<?php echo e(URL::asset('img/frontend/features/ssml.webp')); ?>" alt="">
                                </div>
                                <div class="benefit-title">
                                    <h6><?php echo e(__('SSML & Tones')); ?></h6>
                                </div>
                                <div class="benefit-description">
                                    <p><?php echo e(__('Configure flow of the speech & text with SSML tags and tones')); ?></p>
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="zoom-in" data-aos-delay="700" data-aos-once="true" data-aos-duration="500">
                        <div class="benefits-box-wrapper text-center">
                            <div class="benefit-box">
                                <div class="benefit-image">
                                    <img src="<?php echo e(URL::asset('img/frontend/features/gateways.webp')); ?>" alt="">
                                </div>
                                <div class="benefit-title">
                                    <h6><?php echo e(__('Convenient Payments')); ?></h6>
                                </div>
                                <div class="benefit-description">
                                    <p><?php echo e(__('12 different payment gateways that you can use at anytime')); ?></p>
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="zoom-in" data-aos-delay="800" data-aos-once="true" data-aos-duration="500">
                        <div class="benefits-box-wrapper text-center">
                            <div class="benefit-box">
                                <div class="benefit-image">
                                    <img src="<?php echo e(URL::asset('img/frontend/features/referral.webp')); ?>" alt="">
                                </div>
                                <div class="benefit-title">
                                    <h6><?php echo e(__('Earn with Referrals')); ?></h6>
                                </div>
                                <div class="benefit-description">
                                    <p><?php echo e(__('Bring your friends and earn when they subscribe')); ?></p>
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="zoom-in" data-aos-delay="900" data-aos-once="true" data-aos-duration="500">
                        <div class="benefits-box-wrapper text-center">
                            <div class="benefit-box">
                                <div class="benefit-image">
                                    <img src="<?php echo e(URL::asset('img/frontend/features/security.webp')); ?>" alt="">
                                </div>
                                <div class="benefit-title">
                                    <h6><?php echo e(__('Enhanced Security and Support')); ?></h6>
                                </div>
                                <div class="benefit-description">
                                    <p><?php echo e(__('Secure 2FA authentication and 24/7 customer support to address any concerns')); ?></p>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    
                </div>
            </div>

        </section>

        <!-- SECTION - IMAGES
        ========================================================-->
        <section id="images-wrapper">

            <div class="container-fluid m-0 pl-0 pr-0">
                <div class="slider-container">
                    <div class="halo"></div>
                    
                        <div class="slider-image-container left-60">
                            <div class="track-horizontal left1">
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/78.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/77.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/76.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/75.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/74.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/73.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/72.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/78.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/77.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/76.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/75.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/74.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/73.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/72.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left2">
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/71.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/70.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/69.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/68.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/67.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/66.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/65.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/6.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/5.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/71.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/70.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/69.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/68.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/67.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/66.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/65.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/6.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/5.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left3">
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/64.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/63.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/62.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/61.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/60.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/59.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/58.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/64.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/63.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/62.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/61.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/60.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/59.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/58.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left4">
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/57.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/56.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/55.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/54.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/53.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/52.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/51.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/8.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/7.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/57.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/56.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/55.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/54.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/53.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/52.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/51.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/8.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/7.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left5">
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/50.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/49.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/48.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/47.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/46.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/45.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/44.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/10.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/9.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/50.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/49.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/48.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/47.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/46.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/45.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/44.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/10.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/9.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                        <div class="marquee-slider-content">
                            <div class="m-marquee-slider-content bottom"></div>
                            <div class="m-marquee-slider-content"></div>
                            <h2><?php echo e(__('Visualize your ')); ?> <span class="text-primary"><?php echo e(__('Dream')); ?></span></h2>
                            <h2 class="mb-6 visualize-responsize"><?php echo e(__('Create AI Art and Images with Text')); ?></h2>
                            <a href="<?php echo e(route('register')); ?>" target="_blank" class="btn-primary-frontend btn-frontend-scroll-effect mb-2">
                                <div>
                                    <span><?php echo e(__('Start Creating Now')); ?></span>
                                    <span><?php echo e(__('Start Creating Now')); ?></span>
                                </div>
                            </a>
                            <span class="text-muted fs-12"><?php echo e(__('No credit card required')); ?></span>
                        </div>
                  
                        <div class="slider-image-container right-60">
                            <div class="track-horizontal left1">
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/43.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/42.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/41.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/40.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/39.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/38.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/37.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/43.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/42.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/41.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/40.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/39.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/38.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/37.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left2">
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/36.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/35.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/34.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/33.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/32.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/31.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/30.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/36.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/35.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/34.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/33.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/32.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/31.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/30.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left3">
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/29.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/28.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/27.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/26.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/25.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/4.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/3.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/2.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/1.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/29.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/28.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/27.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/26.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/25.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/4.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/3.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/2.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/1.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left4">
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/24.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/23.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/22.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/21.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/20.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/19.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/18.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/24.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/23.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/22.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/21.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/20.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/19.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/18.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left5">
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/17.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/16.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/15.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/14.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/13.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/12.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/11.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/17.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/16.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/15.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/14.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/13.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/12.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="<?php echo e(URL::asset('img/frontend/gallery/11.webp')); ?>" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                    <div class="slider-overlay-top"></div>
                    <div class="slider-overlay-top bottom"></div>
                </div>
            </div>


        </section> <!-- END SECTION BANNER -->


        <!-- SECTION - PRICING
        ========================================================-->
        <?php if(config('frontend.pricing_section') == 'on'): ?>
            <section id="prices-wrapper">

                <div class="container pt-9 text-center">

                    <!-- SECTION TITLE -->
                    <div class="row mb-6">
                        <div class="title">
                            <p class="m-2"><?php echo e(__('Our Pricing')); ?></p>
                            <h3 class="mb-4"><span> <?php echo e(__('Simple')); ?></span> <?php echo e(__('Pricing')); ?>, <span><?php echo e(__('Unbeatable')); ?></span> <?php echo e(__('Value')); ?></h3>     
                            <h6 class="font-weight-normal fs-14 text-center"><?php echo e(__('Subscribe to your preferred Subscription Plan or Top Up your credits and get started')); ?></h6>                   
                        </div>
                    </div> <!-- END SECTION TITLE --> 
                                  
                </div> <!-- END CONTAINER -->

                <div class="container">
                    
                    <div class="row">
                        <div class="card-body">			
			
                            <?php if($monthly || $yearly || $prepaid || $lifetime): ?>
                
                                <div class="tab-menu-heading text-center">
                                    <div class="tabs-menu">								
                                        <ul class="nav">
                                            <?php if($prepaid): ?>						
                                                <li><a href="#prepaid" class="<?php if(!$monthly && !$yearly && $prepaid): ?> active <?php else: ?> '' <?php endif; ?>" data-bs-toggle="tab"> <?php echo e(__('Prepaid Packs')); ?></a></li>
                                            <?php endif; ?>							
                                            <?php if($monthly): ?>
                                                <li><a href="#monthly_plans" class="<?php if(($monthly && $prepaid && $yearly) || ($monthly && !$prepaid && !$yearly) || ($monthly && $prepaid && !$yearly) || ($monthly && !$prepaid && $yearly)): ?> active <?php else: ?> '' <?php endif; ?>" data-bs-toggle="tab"> <?php echo e(__('Monthly Plans')); ?></a></li>
                                            <?php endif; ?>	
                                            <?php if($yearly): ?>
                                                <li><a href="#yearly_plans" class="<?php if(!$monthly && !$prepaid && $yearly): ?> active <?php else: ?> '' <?php endif; ?>" data-bs-toggle="tab"> <?php echo e(__('Yearly Plans')); ?></a></li>
                                            <?php endif; ?>		
                                            <?php if($lifetime): ?>
                                                <li><a href="#lifetime" class="<?php if(!$monthly && !$yearly && !$prepaid &&  $lifetime): ?> active <?php else: ?> '' <?php endif; ?>" data-bs-toggle="tab"> <?php echo e(__('Lifetime Plans')); ?></a></li>
                                            <?php endif; ?>							
                                        </ul>
                                    </div>
                                </div>
                
                            
                
                                <div class="tabs-menu-body">
                                    <div class="tab-content">
                
                                        <?php if($prepaid): ?>
                                            <div class="tab-pane <?php if((!$monthly && $prepaid) && (!$yearly && $prepaid)): ?> active <?php else: ?> '' <?php endif; ?>" id="prepaid">
                
                                                <?php if($prepaids->count()): ?>
                                                                    
                                                    <div class="row justify-content-md-center">
                                                    
                                                        <?php $__currentLoopData = $prepaids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prepaid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>																			
                                                            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
                                                                <div class="price-card pl-3 pr-3 pt-2 mb-6">
                                                                    <div class="card p-4 pl-5 prepaid-cards <?php if($prepaid->featured): ?> price-card-border <?php endif; ?>">
                                                                        <?php if($prepaid->featured): ?>
                                                                            <span class="plan-featured-prepaid"><?php echo e(__('Most Popular')); ?></span>
                                                                        <?php endif; ?>
                                                                        <div class="plan prepaid-plan">
                                                                            <div class="plan-title"><?php echo e($prepaid->plan_name); ?> </div>
                                                                            <div class="plan-cost-wrapper mt-2 text-center mb-3 p-1"><span class="plan-cost"><?php if(config('payment.decimal_points') == 'allow'): ?> <?php echo e(number_format((float)$prepaid->price, 2)); ?> <?php else: ?> <?php echo e(number_format($prepaid->price)); ?> <?php endif; ?></span><span class="prepaid-currency-sign text-muted"><?php echo e($prepaid->currency); ?></span></div>
                                                                            <p class="fs-12 mb-3 text-muted"><?php echo e(__('Included Credits')); ?></p>	
                                                                            <div class="credits-box">
                                                                                <?php if($prepaid->words != 0): ?> <p class="fs-12 mt-2 mb-0"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <?php echo e(__('Words Included')); ?>: <span class="ml-2 font-weight-bold text-primary"><?php echo e(number_format($prepaid->words)); ?></span></p><?php endif; ?>
                                                                                 <?php if($prepaid->images != 0): ?> <p class="fs-12 mt-2 mb-0"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <?php echo e(__('Images Included')); ?>: <span class="ml-2 font-weight-bold text-primary"><?php echo e(number_format($prepaid->images)); ?></span></p><?php endif; ?>
                                                                                 <?php if($prepaid->characters != 0): ?> <p class="fs-12 mt-2 mb-0"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <?php echo e(__('Characters Included')); ?>: <span class="ml-2 font-weight-bold text-primary"><?php echo e(number_format($prepaid->characters)); ?></span></p><?php endif; ?>																							
                                                                                 <?php if($prepaid->minutes != 0): ?> <p class="fs-12 mt-2 mb-0"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <?php echo e(__('Minutes Included')); ?>: <span class="ml-2 font-weight-bold text-primary"><?php echo e(number_format($prepaid->minutes)); ?></span></p><?php endif; ?>	
                                                                            </div>
                                                                            <div class="text-center action-button mt-2 mb-2">
                                                                                <a href="<?php echo e(route('register')); ?>" class="btn btn-primary-pricing"><?php echo e(__('Select Package')); ?></a> 
                                                                            </div>																								                                                                          
                                                                        </div>							
                                                                    </div>	
                                                                </div>							
                                                            </div>										
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>						
                
                                                    </div>
                
                                                <?php else: ?>
                                                    <div class="row text-center">
                                                        <div class="col-sm-12 mt-6 mb-6">
                                                            <h6 class="fs-12 font-weight-bold text-center"><?php echo e(__('No Prepaid plans were set yet')); ?></h6>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                
                                            </div>			
                                        <?php endif; ?>	
                
                                        <?php if($monthly): ?>	
                                            <div class="tab-pane <?php if(($monthly && $prepaid) || ($monthly && !$prepaid) || ($monthly && !$yearly)): ?> active <?php else: ?> '' <?php endif; ?>" id="monthly_plans">
                
                                                <?php if($monthly_subscriptions->count()): ?>		
                
                                                    <div class="row justify-content-md-center">
                
                                                        <?php $__currentLoopData = $monthly_subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>																			
                                                            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
                                                                <div class="pt-2 ml-2 mr-2 h-100 prices-responsive">
                                                                    <div class="card p-5 mb-4 pl-7 pr-7 h-100 price-card <?php if($subscription->featured): ?> price-card-border <?php endif; ?>">
                                                                        <?php if($subscription->featured): ?>
                                                                            <span class="plan-featured"><?php echo e(__('Most Popular')); ?></span>
                                                                        <?php endif; ?>
                                                                        <div class="plan">			
                                                                            <div class="plan-title"><?php echo e($subscription->plan_name); ?></div>																						
                                                                            <p class="plan-cost mb-5"><?php echo config('payment.default_system_currency_symbol'); ?><?php if(config('payment.decimal_points') == 'allow'): ?><?php echo e(number_format((float)$subscription->price, 2)); ?> <?php else: ?><?php echo e(number_format($subscription->price)); ?> <?php endif; ?><span class="fs-12 text-muted"><span class="mr-1">/</span> <?php echo e(__('per month')); ?></span></p>
                                                                            <div class="text-center action-button mt-2 mb-5">
                                                                                <a href="<?php echo e(route('register')); ?>" class="btn btn-primary-pricing"><?php echo e(__('Subscribe Now')); ?></a>                                               														
                                                                            </div>
                                                                            <p class="fs-12 mb-3 text-muted"><?php echo e(__('Included Features')); ?></p>																		
                                                                            <ul class="fs-12 pl-3">		
                                                                                <?php if($subscription->words != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->words); ?></span> <span class="plan-feature-text"><?php echo e(__('words / month')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->images != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->images); ?></span> <span class="plan-feature-text"><?php echo e(__('images / month')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->minutes != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->minutes); ?></span> <span class="plan-feature-text"><?php echo e(__('minutes / month')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->characters != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->characters); ?></span> <span class="plan-feature-text"><?php echo e(__('characters / month')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->team_members != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->team_members); ?></span> <span class="plan-feature-text"><?php echo e(__('team members')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->chat_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Chats Feature')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->image_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Images Feature')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->voiceover_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Voiceover Feature')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->transcribe_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Speech to Text Feature')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->code_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Code Feature')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->team_members): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('Team Members Option')); ?></span></li> <?php endif; ?>
                                                                                <?php $__currentLoopData = (explode(',', $subscription->plan_features)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <?php if($feature): ?>
                                                                                        <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <?php echo e($feature); ?></li>
                                                                                    <?php endif; ?>																
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>															
                                                                            </ul>																
                                                                        </div>					
                                                                    </div>	
                                                                </div>							
                                                            </div>										
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                                                    </div>	
                                                
                                                <?php else: ?>
                                                    <div class="row text-center">
                                                        <div class="col-sm-12 mt-6 mb-6">
                                                            <h6 class="fs-12 font-weight-bold text-center"><?php echo e(__('No Subscriptions plans were set yet')); ?></h6>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>					
                                            </div>	
                                        <?php endif; ?>	
                                        
                                        <?php if($yearly): ?>	
                                            <div class="tab-pane <?php if(($yearly && $prepaid) && ($yearly && !$prepaid) && ($yearly && !$monthly)): ?> active <?php else: ?> '' <?php endif; ?>" id="yearly_plans">
                
                                                <?php if($yearly_subscriptions->count()): ?>		
                
                                                    <div class="row justify-content-md-center">
                
                                                        <?php $__currentLoopData = $yearly_subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>																			
                                                            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
                                                                <div class="pt-2 ml-2 mr-2 h-100 prices-responsive">
                                                                    <div class="card p-5 mb-4 pl-7 pr-7 h-100 price-card <?php if($subscription->featured): ?> price-card-border <?php endif; ?>">
                                                                        <?php if($subscription->featured): ?>
                                                                            <span class="plan-featured"><?php echo e(__('Most Popular')); ?></span>
                                                                        <?php endif; ?>
                                                                        <div class="plan">			
                                                                            <div class="plan-title"><?php echo e($subscription->plan_name); ?></div>																						
                                                                            <p class="plan-cost mb-5"><?php echo config('payment.default_system_currency_symbol'); ?><?php if(config('payment.decimal_points') == 'allow'): ?><?php echo e(number_format((float)$subscription->price, 2)); ?> <?php else: ?><?php echo e(number_format($subscription->price)); ?> <?php endif; ?><span class="fs-12 text-muted"><span class="mr-1">/</span> <?php echo e(__('per year')); ?></span></p>
                                                                            <div class="text-center action-button mt-2 mb-5">
                                                                                <a href="<?php echo e(route('register')); ?>" class="btn btn-primary-pricing"><?php echo e(__('Subscribe Now')); ?></a>                                               														
                                                                            </div>
                                                                            <p class="fs-12 mb-3 text-muted"><?php echo e(__('Included Features')); ?></p>																	
                                                                            <ul class="fs-12 pl-3">		
                                                                                <?php if($subscription->words != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->words); ?></span> <span class="plan-feature-text"><?php echo e(__('words / month')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->images != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->images); ?></span> <span class="plan-feature-text"><?php echo e(__('images / month')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->minutes != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->minutes); ?></span> <span class="plan-feature-text"><?php echo e(__('minutes / month')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->characters != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->characters); ?></span> <span class="plan-feature-text"><?php echo e(__('characters / month')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->team_members != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->team_members); ?></span> <span class="plan-feature-text"><?php echo e(__('team members')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->chat_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Chats Feature')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->image_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Images Feature')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->voiceover_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Voiceover Feature')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->transcribe_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Speech to Text Feature')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->code_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Code Feature')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->team_members): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('Team Members Option')); ?></span></li> <?php endif; ?>
                                                                                <?php $__currentLoopData = (explode(',', $subscription->plan_features)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <?php if($feature): ?>
                                                                                        <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <?php echo e($feature); ?></li>
                                                                                    <?php endif; ?>																
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>															
                                                                            </ul>																
                                                                        </div>					
                                                                    </div>	
                                                                </div>							
                                                            </div>											
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                                                    </div>	
                                                
                                                <?php else: ?>
                                                    <div class="row text-center">
                                                        <div class="col-sm-12 mt-6 mb-6">
                                                            <h6 class="fs-12 font-weight-bold text-center"><?php echo e(__('No Subscriptions plans were set yet')); ?></h6>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>					
                                            </div>
                                        <?php endif; ?>	
                                        
                                        <?php if($lifetime): ?>
                                            <div class="tab-pane <?php if((!$monthly && $lifetime) && (!$yearly && $lifetime)): ?> active <?php else: ?> '' <?php endif; ?>" id="lifetime">

                                                <?php if($lifetime_subscriptions->count()): ?>                                                    
                                                    
                                                    <div class="row justify-content-md-center">
                                                    
                                                        <?php $__currentLoopData = $lifetime_subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>																			
                                                            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
                                                                <div class="pt-2 ml-2 mr-2 h-100 prices-responsive">
                                                                    <div class="card p-5 mb-4 pl-7 pr-7 h-100 price-card <?php if($subscription->featured): ?> price-card-border <?php endif; ?>">
                                                                        <?php if($subscription->featured): ?>
                                                                            <span class="plan-featured"><?php echo e(__('Most Popular')); ?></span>
                                                                        <?php endif; ?>
                                                                        <div class="plan">			
                                                                            <div class="plan-title"><?php echo e($subscription->plan_name); ?></div>																						
                                                                            <p class="plan-cost mb-5"><?php echo config('payment.default_system_currency_symbol'); ?><?php if(config('payment.decimal_points') == 'allow'): ?><?php echo e(number_format((float)$subscription->price, 2)); ?> <?php else: ?><?php echo e(number_format($subscription->price)); ?> <?php endif; ?><span class="fs-12 text-muted"><span class="mr-1">/</span> <?php echo e(__('for lifetime')); ?></span></p>
                                                                            <div class="text-center action-button mt-2 mb-5">
                                                                                <a href="<?php echo e(route('register')); ?>" class="btn btn-primary-pricing"><?php echo e(__('Subscribe Now')); ?></a>                                               														
                                                                            </div>
                                                                            <p class="fs-12 mb-3 text-muted"><?php echo e(__('Included Features')); ?></p>																	
                                                                            <ul class="fs-12 pl-3">		
                                                                                <?php if($subscription->words != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->words); ?></span> <span class="plan-feature-text"><?php echo e(__('words / month')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->images != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->images); ?></span> <span class="plan-feature-text"><?php echo e(__('images / month')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->minutes != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->minutes); ?></span> <span class="plan-feature-text"><?php echo e(__('minutes / month')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->characters != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->characters); ?></span> <span class="plan-feature-text"><?php echo e(__('characters / month')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->team_members != 0): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold"><?php echo e($subscription->team_members); ?></span> <span class="plan-feature-text"><?php echo e(__('team members')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->chat_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Chats Feature')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->image_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Images Feature')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->voiceover_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Voiceover Feature')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->transcribe_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Speech to Text Feature')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->code_feature): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('AI Code Feature')); ?></span></li> <?php endif; ?>
                                                                                <?php if($subscription->team_members): ?> <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text"><?php echo e(__('Team Members Option')); ?></span></li> <?php endif; ?>
                                                                                <?php $__currentLoopData = (explode(',', $subscription->plan_features)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <?php if($feature): ?>
                                                                                        <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <?php echo e($feature); ?></li>
                                                                                    <?php endif; ?>																
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>															
                                                                            </ul>																
                                                                        </div>					
                                                                    </div>	
                                                                </div>							
                                                            </div>											
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>					

                                                    </div>

                                                <?php else: ?>
                                                    <div class="row text-center">
                                                        <div class="col-sm-12 mt-6 mb-6">
                                                            <h6 class="fs-12 font-weight-bold text-center"><?php echo e(__('No lifetime plans were set yet')); ?></h6>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>

                                            </div>	
                                        <?php endif; ?>	
                                    </div>
                                </div>
                            
                            <?php else: ?>
                                <div class="row text-center">
                                    <div class="col-sm-12 mt-6 mb-6">
                                        <h6 class="fs-12 font-weight-bold text-center"><?php echo e(__('No Subscriptions or Prepaid plans were set yet')); ?></h6>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="text-center">
                                <p class="mb-0 mt-2"><i class="fa-solid fa-shield-check text-success mr-2"></i><span class="text-muted fs-12"><?php echo e(__('PCI DSS Compliant')); ?></span></p>
                            </div>
                
                        </div>
                    </div>
                
                </div>
        
            </section>
        <?php endif; ?>


         <!-- SECTION - BANNER
        ========================================================-->
        <section id="banner-wrapper">

            <div class="container">

                <!-- SECTION TITLE -->
                <div class="mb-7 text-center">

                    <h6><?php echo e(__('Join the 10.000+ Companies trusting')); ?> <?php echo e(config('app.name')); ?></h6>

                </div> <!-- END SECTION TITLE -->

                <div class="row" id="partners">
                            
                    <div class="partner" data-aos="flip-down" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="<?php echo e(URL::asset('img/frontend/logos/logo-1.svg')); ?>" alt="partner">
                            </div>
                        </div>	
                    </div>    
                    
                    <div class="partner" data-aos="flip-down" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="<?php echo e(URL::asset('img/frontend/logos/logo-2.svg')); ?>" alt="partner">
                            </div>
                        </div>	
                    </div> 

                    <div class="partner" data-aos="flip-down" data-aos-delay="300" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="<?php echo e(URL::asset('img/frontend/logos/logo-3.svg')); ?>" alt="partner">
                            </div>
                        </div>	
                    </div> 

                    <div class="partner" data-aos="flip-down" data-aos-delay="400" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="<?php echo e(URL::asset('img/frontend/logos/logo-4.svg')); ?>" alt="partner">
                            </div>
                        </div>	
                    </div> 

                    <div class="partner" data-aos="flip-down" data-aos-delay="500" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="<?php echo e(URL::asset('img/frontend/logos/logo-5.svg')); ?>" alt="partner">
                            </div>
                        </div>	
                    </div> 

                    <div class="partner" data-aos="flip-down" data-aos-delay="600" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="<?php echo e(URL::asset('img/frontend/logos/logo-6.svg')); ?>" alt="partner">
                            </div>
                        </div>	
                    </div> 

                    <div class="partner" data-aos="flip-down" data-aos-delay="600" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="<?php echo e(URL::asset('img/frontend/logos/logo-3.svg')); ?>" alt="partner">
                            </div>
                        </div>	
                    </div> 
                </div>
            </div>

        </section> <!-- END SECTION BANNER -->


        <!-- SECTION - REVIEWS
        ========================================================-->
        <?php if(config('frontend.reviews_section') == 'on'): ?>
            <section id="reviews-wrapper">

                <div class="container text-center">

                    <!-- SECTION TITLE -->
                    <div class="row mb-7">
                        <div class="title">
                            <p class="m-2 white"><?php echo e(__('Testimonials & Reviews')); ?></p>
                            <h3 class="white"><?php echo e(__('Be one of our')); ?> <span> <?php echo e(__('Happy Customers')); ?> </span></h3>                        
                        </div>
                    </div> <!-- END SECTION TITLE --> 
                                
                </div> <!-- END CONTAINER -->

                <div class="container">

                    <?php if($review_exists): ?>
                        <div class="reviews-card-wrapper">                               
                            <div class="review-list-wrapper">
                                <div class="reviews-list">
                                    
                                    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <?php if($review->row == 'first'): ?>
                                            <div class="review-card-scroll w-inline-block">
                                                <div class="hori-between-div">
                                                    <div class="horizontal-div mb-4">
                                                        <img src="<?php echo e(URL::asset($review->image_url)); ?>" loading="lazy" class="reviewer-portrait">
                                                        <div>
                                                            <div class="reviewer-name"><?php echo e(__($review->name)); ?></div>
                                                            <div class="reviewer-title"><?php echo e(__($review->position)); ?></div>
                                                        </div>                                                        
                                                        <div class="reviewer-star">
                                                            <span class="fs-11 mr-1"><?php echo e($review->rating); ?></span><i class="fa-solid fa-star fs-9 text-yellow"></i>
                                                        </div>                                              
                                                    </div>                                    
                                                </div>
                                                <p class="review-text"><i class="fa-solid fa-quote-left mr-2"></i><?php echo e(__($review->text)); ?><i class="fa-solid fa-quote-right ml-2"></i></p>
                                            </div>
                                        <?php endif; ?>                                        
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                                <div class="reviews-list">
                                    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <?php if($review->row == 'first'): ?>
                                            <div class="review-card-scroll w-inline-block">
                                                <div class="hori-between-div">
                                                    <div class="horizontal-div mb-4">
                                                        <img src="<?php echo e(URL::asset($review->image_url)); ?>" loading="lazy" class="reviewer-portrait">
                                                        <div>
                                                            <div class="reviewer-name"><?php echo e(__($review->name)); ?></div>
                                                            <div class="reviewer-title"><?php echo e(__($review->position)); ?></div>
                                                        </div>
                                                        <div class="reviewer-star">
                                                            <span class="fs-11 mr-1"><?php echo e($review->rating); ?></span><i class="fa-solid fa-star fs-9 text-yellow"></i>
                                                        </div> 
                                                    </div>                                    
                                                </div>
                                                <p class="review-text"><i class="fa-solid fa-quote-left mr-2"></i><?php echo e(__($review->text)); ?><i class="fa-solid fa-quote-right ml-2"></i></p>
                                            </div>
                                        <?php endif; ?>                                        
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>

                            <?php if($review_second_exists): ?>
                                <div class="review-list-wrapper second">
                                    <div class="reviews-list">
                                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                            <?php if($review->row == 'second'): ?>
                                                <div class="review-card-scroll w-inline-block">
                                                    <div class="hori-between-div">
                                                        <div class="horizontal-div mb-4">
                                                            <img src="<?php echo e(URL::asset($review->image_url)); ?>" loading="lazy" class="reviewer-portrait">
                                                            <div>
                                                                <div class="reviewer-name"><?php echo e(__($review->name)); ?></div>
                                                                <div class="reviewer-title"><?php echo e(__($review->position)); ?></div>
                                                            </div>
                                                            <div class="reviewer-star">
                                                                <span class="fs-11 mr-1"><?php echo e($review->rating); ?></span><i class="fa-solid fa-star fs-9 text-yellow"></i>
                                                            </div> 
                                                        </div>                                    
                                                    </div>
                                                    <p class="review-text"><i class="fa-solid fa-quote-left mr-2"></i><?php echo e(__($review->text)); ?><i class="fa-solid fa-quote-right ml-2"></i></p>
                                                </div>
                                            <?php endif; ?>                                        
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="reviews-list">
                                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                            <?php if($review->row == 'second'): ?>
                                                <div class="review-card-scroll w-inline-block">
                                                    <div class="hori-between-div">
                                                        <div class="horizontal-div mb-4">
                                                            <img src="<?php echo e(URL::asset($review->image_url)); ?>" loading="lazy" class="reviewer-portrait">
                                                            <div>
                                                                <div class="reviewer-name"><?php echo e(__($review->name)); ?></div>
                                                                <div class="reviewer-title"><?php echo e(__($review->position)); ?></div>
                                                            </div>
                                                            <div class="reviewer-star">
                                                                <span class="fs-11 mr-1"><?php echo e($review->rating); ?></span><i class="fa-solid fa-star fs-9 text-yellow"></i>
                                                            </div> 
                                                        </div>                                    
                                                    </div>
                                                    <p class="review-text"><i class="fa-solid fa-quote-left mr-2"></i><?php echo e(__($review->text)); ?><i class="fa-solid fa-quote-right ml-2"></i></p>
                                                </div>
                                            <?php endif; ?>                                        
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            <?php endif; ?>                           
                            
                        </div>
                    <?php else: ?>
                        <div class="row text-center">
                            <div class="col-sm-12 mt-6 mb-6">
                                <h6 class="fs-12 font-weight-bold text-center"><?php echo e(__('No customer reviews were published yet')); ?></h6>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>


            </section> <!-- END SECTION BANNER -->
        <?php endif; ?>


        <!-- SECTION - FAQ
        ========================================================-->
        <?php if(config('frontend.faq_section') == 'on'): ?>
            <section id="faq-wrapper">   

                <div class="container pt-9 text-center">

                    <!-- SECTION TITLE -->
                    <div class="row mb-7">
                        <div class="title">
                            <p class="m-2"><?php echo e(__('Frequently Asked Questions')); ?></p>
                            <h3 class="mb-4"><span> <?php echo e(__('Got Questions?')); ?> </span><?php echo e(__('We have you covered')); ?></h3> 
                            <h6 class="font-weight-normal fs-14 text-center"><?php echo e(__('We are always here to provide full support and clear any doubts that you might have')); ?></h6>                        
                        </div>
                    </div> <!-- END SECTION TITLE --> 
                                  
                </div> <!-- END CONTAINER -->

                <div class="container">

                    <div class="row">
        
                        <?php if($faq_exists): ?>                          
        
                            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div id="accordion" data-aos="fade-left" data-aos-delay="200" data-aos-once="true" data-aos-duration="700">
                                        <div class="card">
                                            <div class="card-header" id="heading<?php echo e($faq->id); ?>">
                                                <h5 class="mb-0">
                                                <span class="btn btn-link faq-button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo e($faq->id); ?>" aria-expanded="false" aria-controls="collapse-<?php echo e($faq->id); ?>">
                                                    <i class="fa-solid fa-messages-question fs-14 text-muted mr-2"></i> <?php echo e(__($faq->question)); ?>

                                                </span>
                                                </h5>
                                                <i class="fa-solid fa-plus fs-10"></i>
                                            </div>
                                        
                                            <div id="collapse-<?php echo e($faq->id); ?>" class="collapse" aria-labelledby="heading<?php echo e($faq->id); ?>" data-bs-parent="#accordion">
                                                <div class="card-body">
                                                    <?php echo __($faq->answer); ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                        <?php else: ?>
                            <div class="row text-center">
                                <div class="col-sm-12 mt-6 mb-6">
                                    <h6 class="fs-12 font-weight-bold text-center"><?php echo e(__('No FAQ answers were published yet')); ?></h6>
                                </div>
                            </div>
                        <?php endif; ?>
            
                    </div>        
                </div>
        
            </section> <!-- END SECTION FAQ -->
        <?php endif; ?>


        <!-- SECTION - BLOGS
        ========================================================-->
        <?php if(config('frontend.blogs_section') == 'on'): ?>
            <section id="blog-wrapper">

                <div class="container pt-9 text-center">

                    <!-- SECTION TITLE -->
                    <div class="row mb-7">
                        <div class="title">
                            <p class="m-2"><?php echo e(__('Stay up to Date')); ?></p>
                            <h3><?php echo e(__('Our Latest')); ?> <span><?php echo e(__('Blogs')); ?></span></h3>                        
                        </div>
                    </div> <!-- END SECTION TITLE --> 
                                  
                </div> <!-- END CONTAINER -->

                <div class="container">

                    <?php if($blog_exists): ?>
                        
                        <!-- BLOGS -->
                        <div class="row" id="blogs">
                            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="blog" data-aos="zoom-in" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">			
                                <div class="blog-box">
                                    <div class="blog-img">
                                        <a href="<?php echo e(route('blogs.show', $blog->url)); ?>"><img src="<?php echo e(URL::asset($blog->image)); ?>" alt="Blog Image"></a>
                                        <span><?php echo e($blog->created_by); ?></span>
                                    </div>
                                    <div class="blog-info mt-0">
                                        <h6 class="blog-date text-left mt-1 mb-4"><?php echo e(date('F j, Y', strtotime($blog->created_at))); ?></h6>
                                        <h5 class="blog-title fs-20 text-left mb-4"><a href="<?php echo e(route('blogs.show', $blog->url)); ?>"><?php echo e(__($blog->title)); ?></a></h5>  
                                        <h6><a href="<?php echo e(route('blogs.show', $blog->url)); ?>"><?php echo e(__('Read More')); ?></a> <i class="fa-solid fa-chevrons-right"></i></h6>                                   
                                    </div>
                                </div>                        
                            </div> 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div> 
                        

                        <!-- ROTATORS BUTTONS -->
                        <div class="blogs-nav">
                            <a class="blogs-prev"><i class="fa fa-chevron-left"></i></a>
                            <a class="blogs-next"><i class="fa fa-chevron-right"></i></a>                                
                        </div>

                    <?php else: ?>
                        <div class="row text-center">
                            <div class="col-sm-12 mt-6 mb-6">
                                <h6 class="fs-12 font-weight-bold text-center"><?php echo e(__('No blog articles were published yet')); ?></h6>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="text-center blog-all mt-6">
                        <a href="#"><?php echo e(__('Show more')); ?> <i class="fa-solid fa-chevrons-right fs-10"></i></a>
                    </div>

                </div> <!-- END CONTAINER -->

                <?php echo adsense_frontend_blogs_728x90(); ?>

                
            </section> <!-- END SECTION BLOGS -->
        <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(URL::asset('plugins/slick/slick.min.js')); ?>"></script>  
    <script src="<?php echo e(URL::asset('plugins/aos/aos.js')); ?>"></script> 
    <script src="<?php echo e(URL::asset('plugins/animatedheadline/jquery.animatedheadline.min.js')); ?>"></script> 
    <script src="<?php echo e(URL::asset('js/frontend.js')); ?>"></script>  
    <script type="text/javascript">
		$(function () {

            $('.word-container').animatedHeadline({
                animationType: "slide",
                animationDelay: 2500,
                barAnimationDelay: 3800,
                barWaiting: 800,
                lettersDelay: 50,
                typeLettersDelay: 150,
                selectionDuration: 500,
                typeAnimationDelay: 1300,
                revealDuration: 600,
                revealAnimationDelay: 1500
            });

            AOS.init();

		});    
    </script>

    <?php if(config('services.google.recaptcha.enable') == 'on'): ?>
         <!-- Google reCaptcha JS -->
        <script src="https://www.google.com/recaptcha/api.js?render=<?php echo e(config('services.google.recaptcha.site_key')); ?>"></script>
        <script>
            grecaptcha.ready(function() {
                grecaptcha.execute('<?php echo e(config('services.google.recaptcha.site_key')); ?>', {action: 'contact'}).then(function(token) {
                    if (token) {
                    document.getElementById('recaptcha').value = token;
                    }
                });
            });
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
        
        
       
        
       
    


<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/infiniteideas/public_html/app.infiniteideas.ai/resources/views/home.blade.php ENDPATH**/ ?>