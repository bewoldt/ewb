<?php $title="Calendar" ?>

<!-- Document Head -->
<?php include 'includes/doc_head.php'; ?>

<body>
    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <div class="banner-container">
        <div class="banner banner-home">
            <span></span>
        </div>
    </div>
    
    <div class="container main-content">
        <div class="title"><h1>Calendar</h1></div>
        <iframe src="https://www.google.com/calendar/embed?src=en.usa%23holiday%40group.v.calendar.google.com&ctz=America/Chicago" style="border: 0; padding: 30px;" width="100%" height="700" frameborder="0" scrolling="no"></iframe>
        <h2 class="text-center">Field Notes</h2>
        <img src="images/hr_wh.png" style="margin-bottom: -72px;margin-left: auto; margin-right: auto;">
        <br>
        <div class="row-fluid"style="background: url(http://subtlepatterns.com/patterns/linedpaper.png);border-top: 1px solid #ccc;padding: 50px 0;">
            <div class="span5 offset1">
                <article>
                    <h3><a href="#">Blog Post Title</a></h3>
                    <h6>Written by <a href="#">John Smith</a> on August 12, 2012.</h6>
                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <p><a href="#">Continue Reading</a></p>
                </article>
            </div>
            <div class="span5">
                <article>
                    <h3><a href="#">Blog Post Title</a></h3>
                    <h6>Written by <a href="#">John Smith</a> on August 12, 2012.</h6>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Maecenas faucibus mollis interdum. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a href="#">Continue Reading</a></p>
                </article>
            </div>
        </div>
    </div><!-- end .container -->
    

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    
    <!-- Document End -->
    <?php include 'includes/doc_end.php'; ?>