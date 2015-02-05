<!DOCTYPE html>
<html class="no-js">
    <head>
       <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The Pattern Library</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!--<link rel="shortcut icon" href="../favicon.ico"> -->
        <!-- Place Stylesheets here -->
        <link rel="stylesheet" href="css/min/site.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body class="offcanvas-push">
        <!-- offcanvas menu containers -->
        <div class="offcanvas-menu offcanvas-vertical-menu offcanvas-left" id="site-menu-left">
            <div class="sidebar">
                <div class="brand-logo">
                    <h1>The Pattern Factory</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="#intro-section"><i class="fa fa-arrow-circle-up fa-fw"></i>Top</a></li>
                        <li><a href="#getstarted-section"><i class="fa fa-play fa-fw"></i>Get Started</a></li>
                        <li><a href="#settings-section"><i class="fa fa-cogs fa-fw"></i> Settings</a></li>
                        <li><a href="#reset-section"><i class="fa fa-file-o fa-fw"></i> Resets</a></li>
                        <li><a href="#grid-section"><i class="fa fa-columns fa-fw"></i> Grid</a></li>
                        <li><a href="#typography-section"><i class="fa fa-font fa-fw"></i> Typography</a></li>
                        <li><a href="#forms-section"><i class="fa fa-pencil-square-o fa-fw"></i> Forms</a></li>
                        <li><a href="#navigation-section"><i class="fa fa-compass fa-fw"></i> Navigation</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- end offcanvas containers -->
        <div id="site-content" class="offcanvas-container">
            <header id="site-header">
                <h1>The Pattern Factory</h1>
                <h2 class="h1">Pattern Library</h2>
                 <nav id="responsive-menubar" class="offcanvas-menubar">
                    <button id="menuShowLeft" class="toggle-nav"><i class="fa fa-bars fa-fw fa-lg"></i></button>
                    <button id="menuPushLeft" class="toggle-nav"><i class="fa fa-bars fa-fw fa-lg"></i></button>
                </nav>
            </header>
            <main id="site-main">
                <!-- intro-section -->
                <section id="intro-section" class="page-section">
                    <header>
                        <h3 class="h2">Welcome</h3>
                    </header>
                    <article>
                        <p>
                            Welcome to The Pattern Factory Project Starter Framework. This Pattern Library is a by product of several CSS code snippets that were copied and pasted when a new project commenced. With our move to SASS and responsive design principles, a new modular workflow was required that takes advantage of atomic elements that can be easily imported to create new UI's quickly, without requiring a fresh start to each project.
                        </p>

                        <p>
                            The Pattern Factory are solving a internal problem by designing and documenting this framework as a reference site. This helps future users (currently only one staff member!) find a quick reference to UI and code examples.
                        </p>
                        <p>
                            The benefits of doing this include:
                            <ul>
                                <li>We can reuse code instead of starting from scratch</li>
                                <li>We can maintain our code be seeing each pattern in one place</li>
                                <li>Website wireframes, mockups and browser designs can be created quickly to show show clients</li>
                            </ul>
                        </p>
                        <p>
                            Our Pattern Library is both a learning tool and a starting point. We only add new patterns as they are needed and in some cases do not include anything and everything. This Pattern Library is not intended to be like Bootstrap and other UI frameworks that include everything you would possibly need but instead provide a solid starting point for projects. If you have cloned this project from github you will find that this library is specific to our needs and if you use it you may well have to change large amounts of code. Most of the patterns in this library are tutorials, best practices and/or elements that clients requested that had to be learned.
                        </p>
                    </article>
                    <footer>
                        <p><a href="#site-content"><i class="fa fa-level-up fa-fw"></i> Back to top</a></p>
                    </footer>
                </section>
                <!-- getstarted-section -->
                <section id="getstarted-section" class="page-section">
                    <header>
                        <h3 class="h2">Get Started</h3>
                    </header>
                    <article>
                        <p>
                            In order to get started with Cohesion, you will need to create a local version of the site using Mamp, then follow the instructions below depending on what type of development you are doing.
                        </p>
                        <h3>Static HTML5</h3>
                        <p>
                            In order to add Cohesion to a static HTML5 website you will need to create a local version of the site using Mamp Pro. Once created add a public_html folder and .htacess file to redirect all requests to the public_html folder. Clone Cohesion into the public_html folder and then create a new branch of the Github repo (ie: www.thepatternlibrary.co.uk), then commit and code.
                        </p>
                        <h3>Wordpress</h3>
                            <p>
                                In order to add Cohesion to a Wordpress theme, add the amazing <a href="http://themble.com/bones/">Bones Theme</a> to the themes folder and delete the Sass folder. Once deleted clone the Github repo into the Sass folder.
                            </p>
                            <p>
                                <strong>Please Note - This method is a temporary measure and a wordpress version of Cohesion is in the works. This will make theming for Wordpress a quicker and more enjoyable process </strong>
                            </p>
                        </article>
                         <h3>CodeIgniter</h3>
                            <p>
                                In order to add Cohesion to a CodeIgniter project, add the Cohesion project files to the assets folder.</p>
                            </p>
                            <p>
                                <strong>Please Note - This method is a temporary measure and a CodeIgnitor version of Cohesion is in the works. </strong>
                            </p>
                    </article>
                    <hr />
                    <article>
                        <div class="first">
                            <p><strong>The Folder Structure For Cohesion is:</strong></p>
<?php //File structure - indentation removed because its a bit silly ?>
<ul>
    <li><i class="fa fa-folder-open fa-fw"></i> cohesion
        <ul>
            <li><i class="fa fa-folder-open fa-fw"></i> bower_components
                <ul>
                    <li><i class="fa fa-folder-o fa-fw"></i> breakpoint-sass</li>
                    <li><i class="fa fa-folder-o fa-fw"></i> font-awesome</li>
                    <li><i class="fa fa-folder-o fa-fw"></i> sassy-maps</li>
                    <li><i class="fa fa-folder-o fa-fw"></i> ..ect</li>
                </ul>
            </li>
            <li><i class="fa fa-folder-open fa-fw"></i> css
                <ul>
                    <li><i class="fa fa-folder-open-o fa-fw"></i> min
                        <ul>
                            <li><i class="fa fa-file-o fa-fw"></i> site-min.css</li>
                        </ul>
                    </li>
                    <li><i class="fa fa-folder-o fa-fw"></i> vendor</li>
                </ul>
            </li>
            <li><i class="fa fa-folder fa-fw"></i> images</li>
            <li><i class="fa fa-folder-open fa-fw"></i> js
                <ul>
                    <li><i class="fa fa-folder-open-o fa-fw"></i> libs
                        <ul>
                            <li><i class="fa fa-file-o fa-fw"></i> offcanvas.js</li>
                            <li><i class="fa fa-file-o fa-fw"></i> sticky-header.js</li>
                            <li><i class="fa fa-file-o fa-fw"></i> ..etc</li>
                        </ul>
                    </li>
                    <li><i class="fa fa-folder-open-o fa-fw"></i> min
                        <ul>
                            <li><i class="fa fa-file-o fa-fw"></i> scripts-min.js</li>
                        </ul>
                    </li>
                    <li><i class="fa fa-folder-open-o fa-fw"></i> vendor
                        <ul>
                            <li><i class="fa fa-file-o fa-fw"></i> modernizer.js</li>
                            <li><i class="fa fa-file-o fa-fw"></i> ..etc</li>
                        </ul>
                    </li>
                    <li><i class="fa fa-file-o fa-fw"></i> scripts.js</li>
                </ul>
            </li>
            <li><i class="fa fa-folder-open fa-fw"></i> sass
                <ul>
                     <li><i class="fa fa-folder-open fa-fw"></i> global
                        <ul>
                            <li><i class="fa fa-folder-open fa-fw"></i> base
                                <ul>
                                    <li><i class="fa fa-file-o fa-fw"></i> _reset.scss</li>
                                    <li><i class="fa fa-file-o fa-fw"></i> _typography.scss</li>
                                </ul>
                            </li>
                            <li><i class="fa fa-folder-open fa-fw"></i> modules
                                <ul>
                                    <li><i class="fa fa-folder-open fa-fw"></i> offcanvas
                                        <ul>
                                            <li><i class="fa fa-file-o fa-fw"></i> _base.scss</li>
                                            <li><i class="fa fa-file-o fa-fw"></i> _left-panel.scss</li>
                                            <li><i class="fa fa-file-o fa-fw"></i> _right-panel.scss</li>
                                            <li><i class="fa fa-file-o fa-fw"></i> _top-panel.scss</li>
                                            <li><i class="fa fa-file-o fa-fw"></i> _bottom-panel.scss</li>
                                            <li><i class="fa fa-file-o fa-fw"></i> ..ect</li>
                                        </ul>
                                    </li>
                                    <li><i class="fa fa-folder-open fa-fw"></i> navigation
                                        <ul>
                                            <li><i class="fa fa-file-o fa-fw"></i> _base.scss</li>
                                            <li><i class="fa fa-file-o fa-fw"></i> _fixed-header.scss</li>
                                            <li><i class="fa fa-file-o fa-fw"></i> _sidebar.scss</li>
                                            <li><i class="fa fa-file-o fa-fw"></i> _horizontal-nav.scss</li>
                                            <li><i class="fa fa-file-o fa-fw"></i> _vertical-nav.scss</li>
                                            <li><i class="fa fa-file-o fa-fw"></i> ..ect</li>
                                        </ul>
                                    </li>
                                </ul>

                            </li>
                            <li><i class="fa fa-folder-open fa-fw"></i> partials
                                <ul>
                                    <li><i class="fa fa-file-o fa-fw"></i> _forms.scss</li>
                                    <li><i class="fa fa-file-o fa-fw"></i> _links.scss</li>
                                    <li><i class="fa fa-file-o fa-fw"></i> _lists.scss</li>
                                    <li><i class="fa fa-file-o fa-fw"></i> _page-section.scss</li>
                                    <li><i class="fa fa-file-o fa-fw"></i> ..ect</li>
                                </ul>
                            </li>
                            <li><i class="fa fa-folder-open fa-fw"></i> vendor
                                <ul>
                                    <li><i class="fa fa-file-o fa-fw"></i> _normalize.scss</li>
                                    <li><i class="fa fa-file-o fa-fw"></i> ..ect</li>
                                </ul>
                            </li>
                        </ul>
                     </li>
                     <li><i class="fa fa-folder-open fa-fw"></i> site
                        <ul>
                            <li><i class="fa fa-folder-open fa-fw"></i> layout
                                <ul>
                                    <li><i class="fa fa-file-o fa-fw"></i> _footer.scss</li>
                                    <li><i class="fa fa-file-o fa-fw"></i> _header.scss</li>
                                    <li><i class="fa fa-file-o fa-fw"></i> _page.scss</li>
                                    <li><i class="fa fa-file-o fa-fw"></i> _grid.scss</li>
                                    <li><i class="fa fa-file-o fa-fw"></i> ..ect</li>
                                </ul>
                            </li>
                            <li><i class="fa fa-folder-open fa-fw"></i> pages
                                <ul>
                                    <li><i class="fa fa-file-o fa-fw"></i> _home.scss</li>
                                    <li><i class="fa fa-file-o fa-fw"></i> _about.scss</li>
                                    <li><i class="fa fa-file-o fa-fw"></i> _contact.scss</li>
                                    <li><i class="fa fa-file-o fa-fw"></i> ..ect</li>
                                </ul>
                            </li>
                            <li><i class="fa fa-folder-open fa-fw"></i> settings
                                <ul>
                                    <li><i class="fa fa-file-o fa-fw"></i> _settings.scss</li>
                                </ul>
                            </li>
                        </ul>
                     </li>
                     <li><i class="fa fa-file-o fa-fw"></i> site.scss</li>
                </ul>
            </li>
            <li><i class="fa fa-folder-open fa-fw"></i> templates
                <ul>
                    <li><i class="fa fa-file-o fa-fw"></i> _starter.scss</li>
                    <li><i class="fa fa-file-o fa-fw"></i> _offcanvas.scss</li>
                    <li><i class="fa fa-file-o fa-fw"></i> _blog.scss</li>
                    <li><i class="fa fa-file-o fa-fw"></i> _email.scss</li>
                    <li><i class="fa fa-file-o fa-fw"></i> ..ect</li>
                </ul>
            </li>
            <li><i class="fa fa-file-o fa-fw"></i> humans.txt</li>
            <li><i class="fa fa-file-o fa-fw"></i> index.php</li>
            <li><i class="fa fa-file-o fa-fw"></i> robots.txt</li>
        </ul>
    </li>
</ul>
<?php //File structure - indentation removed because its a bit silly ?>
                        </div>
                        <div class="last">
                            <p><strong>Please Note</strong></p>
                            <p>
                                Cohesion is compiled using Codekit and the bower_components folder is added by
                                Codekit and any other assets you add will be installed into this folder.
                                <a href="http://breakpoint-sass.com">Breakpoint-sass</a> and <a href="http://fontawesome.io">Font Awesome</a> are included
                                by default and I am sure as more utilities and libraries are discovered they
                                will be included.
                            </p>
                            <p>
                                The css folder is where Codekit compiles the minified Sass to. This resides in
                                the min folder. The vendor folder is where you put all your 3rd party non Sass
                                stylesheets.
                            </p>

                        </div>
                    </article>
                    <footer>
                        <p><a href="#site-content"><i class="fa fa-level-up fa-fw"></i> Back to top</a></p>
                    </footer>
                </section>

                 <section id="settings-section" class="page-section">
                    <header>
                        <h3 class="h2">Settings</h3>
                    </header>
                </section>

                <section id="reset-section">
                    <header>
                        <h3 class="h2">Reset</h3>
                    </header>
                    <footer>
                        <p><a href="#site-content"><i class="fa fa-level-up fa-fw"></i> Back to top</a></p>
                    </footer>
                </section>

                <section id="grid-section">
                    <header>
                        <h3 class="h2">Grid</h3>
                    </header>
                    <footer>
                        <p><a href="#site-content"><i class="fa fa-level-up fa-fw"></i> Back to top</a></p>
                    </footer>
                </section>

                <section id="typography-section" class="page-section">
                    <header>
                        <h3 class="h2">Typography</h3>
                    </header>
                    <article>
                        <p>
                            Our Type has a body font of  106.25% and a line height of 1.5ems. This can be altered
                            within the settings file. Our Typography was taken and modified from the excellent  <a href="http://jwebcat.github.io/kraken-sass/grid.html">Kraken-sass</a>
                            created by jwebcat. Other great resources include <a href="http://lamb.cc/typograph/">Iain Lamb</a> and
                            <a href="http://type-scale.com">Type Scale</a>, which are handy tools for getting your type and vertical rhythm correct
                            and take much of the maths away from this.
                        </p>
                        <h3 class="h2"><strong>Headings</strong></h3>
                        <div class="first">
                            <h1>h1. Heading 1</h1>
                            <h2>h2. Heading 2</h2>
                            <h3>h3. Heading 3</h3>
                            <h4>h4. Heading 4</h4>
                            <h5>h5. Heading 5</h5>
                            <h6>h6. Heading 6</h6>
                        </div>
                        <div class="last">
                            <p>Cohesion includes styling for h1 through to h6 headings</p>
                        </div>
                    </article>
                    <article>
                        <h3 class="h2"><strong>Body Text</strong></h3>
                        <div class="first">
                            <p>
                                Default text
                                <br />
                                <span class="text-muted">Muted Text</span>
                                <br />
                                <span class="text-warning">Warning Text</span>
                                <br />
                                <span class="text-success">Success Text</span>
                                <br />
                                <span class="text-error">Error Text</span>
                                <br />
                                <span class="text-small">Small Text</span>
                                <br />
                                <span class="text-tall">Tall Text</span>
                                <br />
                                <a href="#">Hyperlinks</a>
                                <br />
                                <strong>Bold</strong> and <em>Italics</em>
                            </p>
                        </div>
                        <div class="last">
                        </div>
                    </article>
                    <article>
                        <h3 class="h2"><strong>Lists</strong></h3>
                        <div class="first">
                        </div>
                        <div class="last">
                        </div>
                    </article>
                    <footer>
                        <p><a href="#site-content"><i class="fa fa-level-up fa-fw"></i> Back to top</a></p>
                    </footer>
                </section>

                <section id="forms-section">
                    <header>
                        <h3 class="h2">Forms</h3>
                    </header>
                    <footer>
                        <p><a href="#site-content"><i class="fa fa-level-up fa-fw"></i> Back to top</a></p>
                    </footer>
                </section>

                <section id="navigation-section" class="page-section">
                    <header>
                        <h3 class="h2">Navigation</h3>
                        <nav class="nav nav-horizontal">
                            <ul>
                                <li><a href="">Horizontal</a></li>
                                <li><a href="">Vertical</a></li>
                                <li><a href="">Tabs</a></li>
                                <li><a href="">Sidebar</a></li>
                            </ul>
                        </nav>
                    </header>

                    <article>
                        <h3>Horizontal Navs</h3>
                    </article>

                    <article>
                        <h3>Vertical Navs</h3>
                    </article>

                     <article>
                        <h3>Tabs</h3>
                    </article>

                     <article>
                        <h3>Sidebar</h3>
                    </article>

                    <footer>
                        <p><a href="#site-content"><i class="fa fa-level-up fa-fw"></i> Back to top</a></p>
                    </footer>
                </section>

            </main>
            <footer id="site-footer">
                <p>&copy; The Pattern Factory <?php echo date('Y'); ?></p>
            </footer>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/min/scripts-min.js"></script>
    </body>
</html>