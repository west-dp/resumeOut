<?php

//$request = ($_GET['lang'] != '') ? $_GET['lang'] : '';
$request = ( !empty( $_GET['lang'] ) ) ? $_GET['lang'] : '';

$city = $job = '';


if($request != '') {

	$vars = explode('/', $request);
	
	$job = (isset($vars[0])) ? $vars[0] : '';
	
	$city = (isset($vars[1])) ? $vars[1] : '';
	
}

$title = 'Remote software development professionals available now';

$description = 'Experienced remote developer talent available to work with your in-house team within 4-6 weeks. Access full-time or part-time specialists from Europe’s largest and most affordable software engineering hub. Scale your software development capabilities while staying lean and agile today!';

$text_block_h1 = '<span>3 easy steps</span><br> to hire developers';

if(($job != '') && ($city == '')) {

	$title = 'Remote '.$job.' available now';
	
	$description = 'Experienced remote '.$job.' talent available to work with your in-house team within 4-6 weeks. Access full-time or part-time specialists from Europe’s largest and most affordable software engineering hub. Scale your software development capabilities while staying lean and agile today!';

	$text_block_h1 = '<span>3 easy steps</span><br> to hire '.$job.'';

} 
else if(($job != '') && ($city != '')) {

	$title = 'Remote '.$job.' available now';
	
	$description = 'Experienced remote '.$job.' talent available to work with your in-house team within 4-6 weeks. Access full-time or part-time specialists from Europe’s largest and most affordable software engineering hub. Scale your software development capabilities while staying lean and agile today!';

	$text_block_h1 = '<span>3 easy steps</span><br> to hire '.$job.'';
}


?>

    <!DOCTYPE html>
    <html>

    <head>
        <title><?php echo $title; ?></title>
        <meta charset="utf-8">
        <meta name="description" content="<?php echo $description; ?>" />
        <link rel='stylesheet' href="style.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="http://outsoft.com/wp-content/uploads/2015/02/outsoft-icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="http://mfzy.co/isotope.pkgd.js"></script>
        <!--include img-->
        <link rel="prefetch" href="img/stock1.jpg">
        <link rel="prefetch" href="img/stock2.jpg">
        <link rel="prefetch" href="img/stock3.jpg">
    </head>

    <body>
        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NHDGJS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NHDGJS');</script>
    <!-- End Google Tag Manager-->
        <header>
            <div class="content">
                <a href="http://outsoft.com/" target="_blank"><img class="logo" src="img/outsoft.svg" alt="outsoft" title="outsoft"></a>
            </div>            
            <div class="content">
                    <div class="textBlock">
                        <div class="buttomBlock">
                            <h1><?php echo $text_block_h1; ?></h1>
                            <img src="img/down.png" class="hvr-bob" alt="Hire <?php echo $job; ?>" title="Hire <?php echo $job; ?>">
                        </div>                        
                    </div>
                    <div>
                        <form>
                            <h2><span>FILL in THE FORM</span><br>and interview your<br><?php echo $job; ?> candidate tomorrow</h2>
                            <div class="required-field">
                                <input type="text" name="userName" id="userName" placeholder="Name">
                            </div>
                            <div class="required-field">
                                <input type="text" name="userEmail" id="userEmail" placeholder="Email">
                            </div>
                            <input type="text" name="subject" id="subject" value="New LandingPage" style="display: none;">
                            <input type="hidden" id="zc_gad" name="zc_gad" value=""/>
                            <input type="hidden" id="the_source" name="the_source" value="<?php
                                echo ( array_key_exists('HTTP_REFERER', $_SERVER ) ) ? $_SERVER['HTTP_REFERER'] : '';
                            ?>" />
                            <input type="hidden" id="the_req" name="the_req" value="<?php 
                                echo ( array_key_exists('lang', $_GET ) ) ? $_GET['lang'] : '';
                            ?>" />
                            <div class="required-field">
                                <textarea name="content" id="content" cols="60" rows="1" onkeyup="auto_grow(this)" placeholder="Message"></textarea>
                            </div>
                            <input type="submit" value="Send" disabled="" class="button_click">
                        </form>
                    </div>
            </div>
        </header>
        
        <section class="triangleblock">
            <div class="content">
                <div class="oneBlock">
                    <div class="imgOverlay">
                        <img src="img/triangle.svg" alt="Get <?php echo $job; ?> Resumes" title="Get <?php echo $job; ?> Resumes">
                    </div>
                    <h2>Get<br>Resumes</h2>
                    <div class="circleblock">
                        <p></p>
                    </div>
                    <div class="hoverBlock">
                        <h3>STEP 1.</h3>
                        <p>Having received your request, we assign to you an individual recruitment manager to identify resumes that match your requirements, contact candidates, and arrange initial interviews. It usually takes from 24 to 72 hours to provide you with the first bundle of resumes. We keep searching for new resumes until you are satisfied with your <?php echo $job; ?> candidates. This service is free of charge and no contract is required at this stage.</p>
                    </div>
                </div>
                <div class="twoBlock">
                    <div class="imgOverlay">
                        <img src="img/triangle.svg" alt="Interview <?php echo $job; ?>" title="Interview <?php echo $job; ?>">
                    </div>
                    <h2>Interview<br>Developers</h2>
                    <div class="circleblock">
                        <p></p>
                    </div>
                    <div class="hoverBlock">
                        <h3>STEP 2.</h3>
                        <p>After you have picked resumes that you like, we organize virtual interviews. You, the <?php echo $job; ?> and your Outsoft recruitment manager will be present. All the process, agenda and tests applied are fully under your control, the same as you would recruit internally.</p>
                    </div>
                </div>
                <div class="thereBlock">
                    <div class="imgOverlay">
                        <img src="img/triangle.svg" alt="Hire <?php echo $job; ?>" title="Hire <?php echo $job; ?>">
                    </div>
                    <h2>Hire<br>them</h2>
                    <div class="hoverBlock">
                        <h3>STEP 3.</h3>
                        <p>Outsoft handles all the formalities related to <?php echo $job; ?> in Ukraine and organize working process. Your employees will work using brand new equipment in Outsoft’s excellent office spaces tailored especially for your team. We also cover your staff’s medical insurance, full spectrum of employee care and all office services within our moderate monthly fee.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="fourBlocks">
            <div class="content">
                <div style="background-image: url('img/humanLaptop.jpg');">
                   <img src="img/humanLaptop.jpg" class="positionImgInBlock" alt="Hire <?php echo $job; ?>" title="Hire <?php echo $job; ?>">
                </div>
                <div class="">
                    <h2>HUGE TALENT POOL</h2>
                    <p>We have direct access to best <?php echo $job; ?> of Ukraine’s largest market of software professionals in continental Europe.</p>
                    <div class="clickToForm">REQUEST RESUMES</div>
                </div>
                <div class="">
                    <h2>ATTRACTIVE FEE SCHEDULE</h2>
                    <p>In contrast with recruitment agencies, we charge no finder’s fee for <?php echo $job; ?> hired for you. Our monthly fee of $1500 covers personal medical insurance, rent of office space, computers, office and communication equipment and office services.</p>
                </div>
                <div class="">
                    <img src="img/lang.jpg" class="positionImgInBlock" alt="Hire <?php echo $job; ?>" title="Hire <?php echo $job; ?>">
                    <h2>FREE STAFF REPLACEMENT</h2>
                    <p>We replace the staff you are unhappy with no additional charges. If you decide to cut your staff or replace some <?php echo $job; ?>, we cover all the expenses and legal issues related to staff dismissal.</p>
                </div>
            </div>
            <div class="clickToForm">Get Started</div>
            <p class="hideRequestTitle" style="display: none;"><?php echo $title; ?></p>
        </section>
        
        <div class="after_contact"></div>
        <script src="main.js"></script>
        <script type="text/javascript" src="http://crm.zoho.com/crm/javascript/zcga.js"> </script>
    </body>
    </html>