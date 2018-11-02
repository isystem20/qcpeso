<div class="wrapper">
            <!-- Page Header-->
            <section class="module-page-title bg-gray">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="page-title-desc">
                                <h1 class="page-title-heading">PROFILE</h1>
                                <!--p This theme will shake your world.-->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Components</a></li>
                                <li class="breadcrumb-item active">Documentation</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Header end-->

            <section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div id="introduction">
                                <div class="mb-5">
                                    <h5>Introduction</h5>
                                    <p class="lead text-justify">Thank you for purchasing our template. This documentation will help to familiarise you with how Boomerang template is structured and how to use the template features. At times, you may need further assistance if something is either not covered, or clear in the documentation. Please feel free to email here: web-master72[at]yandex.com</p>
                                </div>
                            </div>
                            <div id="whatsincluded">
                                <div class="mb-5">
                                    <hr class="mb-5">
                                    <h5>What’s included</h5>
                                    <p class="lead text-justify">Within your Bootstrap theme you’ll find the following directories and files, grouping common resources and providing both compiled and minified distribution files, as well as raw source files.</p>
                                </div>
                                <div class="mb-5">
                                    <pre><code class="language-markup">theme/
  ├── gulpfile.js
  ├── package.json
  ├── docs/
  ├── app/
  │   ├── assets/
  │   │   ├── css/
  │   │   ├── fonts/
  │   │   ├── images/
  │   │   ├── js/
  │   │   ├── scss/
  │   │   └── video/
  │   ├── include/
  │   │   ├── mixins/
  │   │   └── templates/
  │   │        └── navigation/
  │   │        │    ├── navigation-single.pug
  │   │        │    ├── navigation.pug
  │   │        ├── footer.pug
  │   │        ├── layout.pug
  │   │        ├── off-canvas.pug
  │   │        └── sidebar.pug
  ├── dist/
  │   ├── assets/
  │   │   ├── css/
  │   │   ├── fonts/
  │   │   ├── images/
  │   │   ├── js/
  │   │   ├── scss/
  │   │   └── video/</code></pre>
                                </div>
                            </div>
                            <div id="gettingstarted">
                                <div class="mb-5">
                                    <hr class="mb-5">
                                    <h5>Getting started</h5>
                                    <p class="lead text-justify">The template is using Gulp to automate the development and build processes. All you should do to start your project is to open the terminal in the root directory (where the package.json file is located) and enter fallowing commands.</p>
                                </div>
                                <div class="mb-5">
                                    <pre><code class="language-markup">npm install -g gulp

&lt;!-- When you&rsquo;re done, make sure you&rsquo;ve installed the rest of the theme&rsquo;s dependencies: --&gt;

npm install

&lt;!-- Start. Be aware that this replaces existing &quot;dist&quot; files, so proceed with caution. --&gt;

gulp</code></pre>
                                    <p>*Note. You should already have <a href="https://nodejs.org/en/">Node</a> installed in your machine to build the project.</p>
                                </div>
                            </div>
                            <div id="pugtemplateengine">
                                <div class="mb-5">
                                    <hr class="mb-5">
                                    <h5>Pug template engine</h5>
                                    <p class="lead text-justify">Pug is a high performance template engine heavily influenced by Haml and implemented with JavaScript for node and browsers. You can visit official site for <a href="https://pugjs.org/">more info</a>. We strongly recommend you to use Pug.</p>
                                </div>
                            </div>
                            <div id="basictemplate">
                                <div class="mb-5">
                                    <hr class="mb-5">
                                    <h5>Basic template</h5>
                                    <p class="lead">Copy the example below into a new PUG file to get started with it.</p>
                                </div>
                                <div class="mb-5">
                                    <pre><code class="language-pug">extends include/templates/layout

block vars
   - var header_transparent = false;

append css

append content
   h1 Hello, world!</code></pre>
                                </div>
                            </div>
                            <div id="pugmixins">
                                <div class="mb-5">
                                    <hr class="mb-5">
                                    <h5>Pug Mixins</h5>
                                    <p class="lead">Here is an example how you can use Pug mixins. All available mixins you can find in file "app/include/mixins/mixins.pug"</p>
                                </div>
                                <div class="mb-5">
                                    <pre><code class="language-pug">extends include/templates/layout

block vars
   - var header_transparent = false;

append css

append content
   .row
       .col-lg-3.col-md-6
           +IconBox("ti-layout", "Title Text", "Content Text", "text-center", true)
       .col-lg-3.col-md-6
           +IconBox("ti-cup", "Title Text", "Content Text", "text-center", true)
       .col-lg-3.col-md-6
           +IconBox("ti-harddrives", "Title Text", "Content Text", "text-center", true)
       .col-lg-3.col-md-6
           +IconBox("ti-desktop", "Title Text", "Content Text", "text-center", true)</code></pre>
                                </div>
                                <div class="mb-5">
                                    <p class="lead">If you want add changes for all pages just edit "include/templates/layout.pug" file:</p>
                                </div>
                                <div class="mb-5">
                                    <pre><code class="language-pug">include ../mixins/mixins
doctype html
html(lang="en")
   head
       meta(charset="UTF-8")
       meta(name="viewport" content="width=device-width, initial-scale=1.0")
       meta(name="description" content="")
       meta(name="author" content="")

       title Boomerang - Template

       block vars

       block css
           // Favicons
           link(rel="shortcut icon" href="assets/images/favicon.png")
           link(rel="apple-touch-icon" href="assets/images/apple-touch-icon.png")
           link(rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png")
           link(rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png")

           // Web Fonts
           link(href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7cPlayfair+Display:400i" rel="stylesheet")
           link(href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet")

           // Plugins
           link(href="assets/css/plugins.min.css" rel="stylesheet")

           // Template core CSS
           link(href="assets/css/template.css" rel="stylesheet")

   body

       ...

       // Scripts
       script(src="assets/js/custom/jquery-3.2.1.min.js")
       script(src="assets/js/custom/popper.min.js")
       script(src="assets/js/bootstrap/bootstrap.min.js")
       script(src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA0rANX07hh6ASNKdBr4mZH0KZSqbHYc3Q")
       script(src="assets/js/custom/plugins.min.js")
       script(src="assets/js/custom/custom.min.js")</code></pre>
                                </div>
                            </div>
                            <div id="navigation">
                                <div class="mb-5">
                                    <hr class="mb-5">
                                    <h5>Logo Settings</h5>
                                    <p class="lead">Copy the example below into a new PUG file to get started with it.</p>
                                </div>
                                <div class="mb-5">
                                    <pre><code class="language-markap">&lt;!-- Brand --&gt;
&lt;div class=&quot;inner-header&quot;&gt;
   &lt;a class=&quot;inner-brand&quot; href=&quot;index.html&quot;&gt;
       &lt;!-- Text or images --&gt;
       &lt;img class=&quot;brand-dark&quot; src=&quot;assets/images/logo.png&quot; width=&quot;100px&quot; alt=&quot;&quot;&gt;
       &lt;img class=&quot;brand-light&quot; src=&quot;assets/images/logo-light.png&quot; width=&quot;100px&quot; alt=&quot;&quot;&gt;
   &lt;/a&gt;
&lt;/div&gt;</code></pre>
                                    <p>Two images are used for logo, one for default logo (Logo that will display when you are on the top of page) and second for alternate logo (Logo that will display when header will be sticky).</p>
                                </div>
                            </div>
                            <div id="icons">
                                <div class="mb-5">
                                    <hr class="mb-5">
                                    <h5>Icons</h5>
                                    <p>By default, Boomerang makes use of the <a href="http://themify.me/themify-icons">Themify,</a> <a href="http://simplelineicons.com/">Simple Line Icons</a> and <a href="https://fontawesome.com/icons?d=listing&amp;m=free">Font Awesome Free</a> icon sets.</p>
                                    <p>How to use:</p>
                                </div>
                                <div class="mb-5">
                                    <pre><code class="language-markup">&lt;!-- Themify --&gt;
&lt;i class=&quot;ti-spray&quot;&gt;&lt;/i&gt;

&lt;!-- Simple Line Icons --&gt;
&lt;i class=&quot;icon-diamond icons&quot;&gt;&lt;/i&gt;

&lt;!-- Font Awesome --&gt;
&lt;i class=&quot;fab fa-accessible-icon&quot;&gt;&lt;/i&gt;</code></pre>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">Result:</li>
                                        <li class="list-inline-item"><i class="ti-spray"></i></li>
                                        <li class="list-inline-item"><i class="icon-diamond icons"></i></li>
                                        <li class="list-inline-item"><i class="fab fa-accessible-icon"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="googlemap">
                                <div class="mb-5">
                                    <hr class="mb-5">
                                    <h5>Google map</h5>
                                    <p>You need to use YOUR own Google API Key. You can get API Key <a href="https://developers.google.com/maps/documentation/javascript/get-api-key">here</a>.</p>
                                </div>
                                <div class="mb-5">
                                    <pre><code class="language-pug">script(src="assets/js/custom/jquery-3.2.1.min.js")
script(src="assets/js/custom/popper.min.js")
script(src="assets/js/bootstrap/bootstrap.min.js")
script(src="http://maps.googleapis.com/maps/api/js?key=YOURAPIKEYHERE")
script(src="assets/js/custom/plugins.min.js")
script(src="assets/js/custom/custom.min.js")</code></pre>
                                </div>
                            </div>
                            <div id="twitter">
                                <div class="mb-5">
                                    <hr class="mb-5">
                                    <h5>Twitter</h5>
                                    <p class="lead text-justify">The Twitter feed element uses a HTML5 data attribute called 'data-twitter' to determine which feed to display. You can enter your ID. How to do it:</p>
                                </div>
                                <div class="mb-5">
                                    <p>
                                        <ol>
                                            <li>- Go to www.twitter.com and sign in as normal, go to your settings page.</li>
                                            <li>- Go to "Widgets" on the left hand side.</li>
                                            <li>- Create a new widget for what you need eg "user time line" or "search" etc.</li>
                                            <li>- Feel free to check "exclude replies" if you don't want replies in results.</li>
                                            <li>- Now go back to settings page, and then go back to widgets page and</li>
                                            <li>- you should see the widget you just created. Click edit.</li>
                                            <li>- Look at the URL in your web browser, you will see a long number like this: 345735908357048478</li>
                                            <li>- Use this as your ID below instead!</li>
                                        </ol>
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <pre><code class="language-markup">&lt;!-- Twitter widget--&gt;
&lt;aside class=&quot;widget twitter-feed-widget&quot;&gt;
   &lt;div class=&quot;widget-title&quot;&gt;
       &lt;h6&gt;Twitter Feed&lt;/h6&gt;
   &lt;/div&gt;
   &lt;div class=&quot;twitter-feed&quot; data-twitter=&quot;345170787868762112&quot; data-number=&quot;1&quot;&gt;&lt;/div&gt;
&lt;/aside&gt;</code></pre>
                                </div>
                            </div>
                            <div id="contactforms">
                                <div class="mb-5">
                                    <hr class="mb-5">
                                    <h5>Contact Forms</h5>
                                    <p class="lead">Open «assets/php/contact.php» and make the following changes:</p>
                                </div>
                                <div class="mb-5">
                                    <pre><code>// Mail settings
$to = "yourmail@here.com";

// You can put here your email
$header = "From: noreply@neomax.com\r\n";</code></pre>
                                </div>
                                <div class="mb-5">
                                    <p>If contact form not working:</p>
                                </div>
                                <div class="mb-5">
                                    <pre><code>&lt;?php
   mail('you@yourmail.com','Test mail','The mail function is working!');
   echo 'Mail sent!';
?&gt;</code></pre>
                                </div>
                                <div class="mb-5">
                                    <ul>
                                        <li>1. Save this code as mailtest.php</li>
                                        <li>2. change you@yourmail.com to your e-mail address</li>
                                        <li>3. upload mailtest.php to your server</li>
                                        <li>4. open mailtest.php in your browser (http://yourwebsite.com/mailtest.php)</li>
                                        <li>5. check your inbox to see if a test message arrived.</li>
                                    </ul>
                                    <p>If it works:</p>
                                    <ul>
                                        <li>1. double-check your form script for errors (like e-mail address misspelling)</li>
                                        <li>2. use the same e-mail address as your form recipient</li>
                                        <li>3. double-check your SPAM filters and SPAM/Junk/Bulk mailboxes</li>
                                    </ul>
                                    <p>If it not:</p>
                                    <p>Contact your host and ask them to check PHP mail() setting.</p>
                                </div>
                            </div>
                            <div id="scss">
                                <div class="mb-5">
                                    <hr class="mb-5">
                                    <h5>SCSS Changes</h5>
                                    <p class="lead">Create new files for your variables and any other scss changes and add it to the "assets/scss/template.scss" file.</p>
                                </div>
                                <div class="mb-5">
                                    <pre><code class="language-css">@import "bootstrap/functions.scss";
@import "bootstrap/variables.scss";
@import "custom/functions.scss";
@import "variables.scss";
@import "your-variables.scss";
@import "custom/bootstrap.scss";
@import "components.scss";
@import "your-scss-changes.scss";</code></pre>
                                    <p>Now you can add or overwrite Bootstrap and our variables.</p>
                                </div>
                            </div>
                            <div id="css">
                                <div class="mb-5">
                                    <hr class="mb-5">
                                    <h5>CSS Changes</h5>
                                    <p class="lead">If you not use SCSS: Create a new CSS file and add the following <code>&lt;link&gt;</code> to the HTML after the <code>&lt;head&gt;</code> section:</p>
                                </div>
                                <div class="mb-5">
                                    <pre><code class="language-markup">...
&lt;!-- Template core CSS--&gt;
&lt;link href=&quot;assets/css/template.css&quot; rel=&quot;stylesheet&quot;&gt;
&lt;link href=&quot;assets/css/your-css.css&quot; rel=&quot;stylesheet&quot;&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <ul class="nav-sidebar sticky-sidebar">
                                <li><a class="smoothscroll" href="#introduction">Introduction</a></li>
                                <li><a class="smoothscroll" href="#whatsincluded">What’s included</a></li>
                                <li><a class="smoothscroll" href="#gettingstarted">Getting started</a></li>
                                <li><a class="smoothscroll" href="#pugtemplateengine">Pug template engine</a></li>
                                <li><a class="smoothscroll" href="#basictemplate">Basic template</a></li>
                                <li><a class="smoothscroll" href="#pugmixins">Pug Mixins</a></li>
                                <li><a class="smoothscroll" href="#navigation">Logo Settings</a></li>
                                <li><a class="smoothscroll" href="#icons">Icons</a></li>
                                <li><a class="smoothscroll" href="#googlemap">Google map</a></li>
                                <li><a class="smoothscroll" href="#twitter">Twitter</a></li>
                                <li><a class="smoothscroll" href="#contactforms">Contact Forms</a></li>
                                <li><a class="smoothscroll" href="#scss">SCSS changes</a></li>
                                <li><a class="smoothscroll" href="#css">CSS changes</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer-->
            <footer class="footer">
                <div class="footer-widgets">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <!-- Text widget-->
                                <aside class="widget widget-text">
                                    <div class="widget-title">
                                        <h6>About Us</h6>
                                    </div>
                                    <div class="textwidget">
                                        <p>Map where your photos were taken and discover local points of interest. Map where your photos.</p>
                                        <p>
                                            Location: 12 London Avenue, Suite 18<br>
                                            E-mail: support@theme.com<br>
                                            Phone: 8 800 123 4567<br>
                                        </p>
                                        <ul class="social-icons">
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-md-3">
                                <!-- Recent entries widget-->
                                <aside class="widget widget-recent-entries">
                                    <div class="widget-title">
                                        <h6>Recent Posts</h6>
                                    </div>
                                    <ul>
                                        <li><a href="#">Map where your photos were taken and discover local points.</a><span class="post-date">May 8, 2018</span></li>
                                        <li><a href="#">Map where your photos were taken and discover local points.</a><span class="post-date">April 7, 2018</span></li>
                                        <li><a href="#">Map where your photos were taken and discover local points.</a><span class="post-date">September 7, 2018</span></li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-md-3">
                                <!-- Twitter widget-->
                                <aside class="widget twitter-feed-widget">
                                    <div class="widget-title">
                                        <h6>Twitter Feed</h6>
                                    </div>
                                    <div class="twitter-feed" data-twitter="345170787868762112" data-number="1"></div>
                                </aside>
                            </div>
                            <div class="col-md-3">
                                <!-- Recent works-->
                                <aside class="widget widget-recent-works">
                                    <div class="widget-title">
                                        <h6>Portfolio</h6>
                                    </div>
                                    <ul>
                                        <li><a href="#"><img src="<?php echo base_url(); ?>themes/boomerang/assets/images/widgets/1.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo base_url(); ?>themes/boomerang/assets/images/widgets/2.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo base_url(); ?>themes/boomerang/assets/images/widgets/3.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo base_url(); ?>themes/boomerang/assets/images/widgets/7.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo base_url(); ?>themes/boomerang/assets/images/widgets/8.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo base_url(); ?>themes/boomerang/assets/images/widgets/6.jpg" alt=""></a></li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>© 2018 Boomerang, All Rights Reserved. Design with love by <a href="#">2theme</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer end-->
        </div>
        <!-- Wrapper end-->
        