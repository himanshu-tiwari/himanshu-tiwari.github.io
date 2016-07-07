<?php

session_start();

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];

require_once 'helpers/security.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Shivam Enterprises</title>
    <meta name="description" content="shivamEnterprises">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/handheld.css" media="only screen and (max-device width:480px)"/>

    <link href="https://fonts.googleapis.com/css?family=Suez+One" rel="stylesheet">

    
</head>

    

<body data-spy="scroll">
        <header id="home">
        <!--Navbar-->
        <nav class="navbar navbar-inverse navbar-fixed-top navbar-responsive" id="my-navbar" role="navigation">
            <div class="container-fluid">
                <!--Navbar Header-->
                <div class="navbar-header col-md-4">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="#home" class="navbar-brand page-scroll">
                        <img class="img-responsive" src="images/CALANDER SE.png" alt="Company Logo">
                    </a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right container z" id="navbar-collapse">
                    <ul class="nav navbar-nav list">
                        <li class="hidden active">
                            <a href="#page-top"></a>
                        </li>
                        <li><a class="page-scroll" href="#home">Home</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Services <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu">
                               <li class="dropdown-header"></li>

                               <li>
                                <a class="page-scroll trigger service-nav" data-panelId="#offset" href="#offset">Offset Printing</a>
                               </li>

                               <li class="divider"></li>

                               <li>
                                <a class="page-scroll trigger service-nav" data-panelId="#graphic" href="#graphic">Graphic Designing</span></a>
                               </li>

                               <li class="divider"></li>

                               <li>
                                <a class="page-scroll trigger service-nav" data-panelId="#digital" href="#digital">Digital Printing</a>
                               </li>

                               <li class="divider"></li>

                               <li>
                                <a class="page-scroll trigger service-nav" data-panelId="#flex" href="#flex">Flex Printing</a>
                               </li>

                               <li class="divider"></li>

                               <li>
                                <a class="page-scroll trigger service-nav" data-panelId="#magazine" href="#magazine">Magazine Printing</a>
                               </li>

                               <li class="divider"></li>

                               <li>
                                <a class="page-scroll trigger service-nav" data-panelId="#spot" href="#spot">Spot UV</a>
                               </li>

                               <li class="divider"></li>

                               <li>
                                <a class="page-scroll trigger service-nav" data-panelId="#lamination" href="#lamination">Lamination and Binding</a>
                               </li>

                               <li class="divider"></li>

                               <li class="prod-footer"><a href="#products">More Products and services...</a></li>
                          </ul>  
                        </li>
                        <li><a class="page-scroll" href="#about">About Us</a></li>
                        <li><a class="page-scroll" href="#contact">Contact Us</a></li>
                        <li><a class="page-scroll" href="#"></a></li>
                    </ul>
                </div>
                <!--Navbar Header End-->
            </div>
            <!--End Container-->
        </nav>
        <!--Navbar End-->
    </header>

    <!--Jumbotron-->
    <div class="container-fluid jumbotron jumbotron-image">
        <div class="container text-center">
            <h1 class="hero-heading">Shivam Enterprises</h1>
            <p>
                <b class="hero-sub">A Complete Printing Solution Company</b>
            </p>
        </div>
    </div>
    <!--Jumbotron End-->        

    <!--Container-->
    <div class="services container">
        <div class="container-fluid" id="services">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Services</h2>
                </div>
                <!-- <span class="col-md-1"></span> -->
                <div class="carousel slide col-md-12" id="screenshot-carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#screenshot-carousel" data-slide-to="1"></li>
                        <li data-target="#screenshot-carousel" data-slide-to="2"></li>
                        <li data-target="#screenshot-carousel" data-slide-to="3"></li>
                        <li data-target="#screenshot-carousel" data-slide-to="4"></li>
<!--                         <li data-target="#screenshot-carousel" data-slide-to="6"></li>
                        <li data-target="#screenshot-carousel" data-slide-to="7"></li>
 -->                    </ol>

                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a href="#offset">
                                <img src="images/carousel1.jpg" alt="Image 1" class="center service-img">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#graphic">
                                <img src="images/carousel2.jpg" alt="Image 2" class="center service-img">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#digital">
                                <img src="images/carousel3.jpg" alt="Image 3" class="center service-img">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#bcards">
                                <img src="images/carousel4.jpg" alt="Image 4" class="center service-img">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#magazine">
                                <img src="images/carousel6.jpg" alt="Image 6" class="center service-img">
                            </a>
                        </div>
                    </div>

                    <a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <span class="col-md-1"></span>
                </div>
            </section>

        </div>
    </div>
    <!--End Container-->

    <!--Container-->
    <div class="description">
        <div class="container hidden" id="offset">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Offset Printing</h2>
                </div>
                <div class="container">
                    <p class="col-md-8 text">
                        Offset printing is a commonly used printing technique in which the inked image is transferred (or “offset”) from a plate to a rubber blanket, then to the printing surface. When used in combination with the lithographic  process, which is based on the repulsion of oil and water, the offset technique employs a flat (planographic) image carrier on which the image to be printed obtains ink from ink rollers, while the non-printing area attracts a water-based film (called “fountain solution”), keeping the non-printing areas ink-free. The modern “web” process feeds a large reel of paper through a large press machine in several parts, typically for several metres, which then prints continuously as the paper is fed through.        
                    </p>
                    <img class="service-image col-md-4" src="images/45036918-e449-4028-8eb3-a6125b0826d2.jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="graphic">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Graphic Designing</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                        Graphic design is the process of visual communication and problem-solving through the correct use of typography, space, image and color. <br> Common requirements of graphic design include identity (logos and branding), publications (magazines, newspapers and books), print advertisements, posters, billboards, website graphics and elements, signs and product packaging.                    
                    </p>
                    <img class="service-image col-md-4" src="images/abstract-vintage-background_23-2147553402.jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="digital">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Digital Printing</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                        Digital printing refers to methods of printing from a digital-based image directly to a variety of media. <br> Digital printing has a higher cost per page than more traditional offset printing methods, but this price is usually offset by avoiding the cost of all the technical steps required to make printing plates. It also allows for on-demand printing, short turnaround time, and even a modification of the image (variable data) used for each impression.
                    </p> 
                    <img class="service-image col-md-4" src="images/f029b1b92158e4ef0375ffae3c0c3a3c-abstract-square-vector-background.jpg">   
                </div>
            </section>
        </div>

        <div class="container hidden" id="bcards">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Business Cards</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                       Today, everyone requires a buiseness card. They are shared during formal introductions as a convenience and a memory aid. and if they are designed and printed properly, they can really catch a few eyes you want them to. 
                    </p> 
                    <img class="service-image col-md-4" src="images/black-and-red-business-card-with-stripes_1115-56.jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="flex">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Flex Printing</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                       Flex is a sheet of Poly Vinyl Chloride(PVC) widely used to deliver high quality digital print for outdoor hoardings and banner mainly printed by large color solvent ink printers in CMYK mode. These prints are used instead of hand written banner for its low cost and durability.
                    </p> 
                    <img class="service-image col-md-4" src="images/download.jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="magazine">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Magazine Printing</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                       Magazines are publications, usually periodical publications, that are printed or electronically published.
                    </p> 
                    <img class="service-image col-md-4" src="images/modern-mockup-of-magazine_23-2147552162.jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="spot">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Spot UV</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                       In offset printing, a spot color is any color generated by an ink (pure or mixed) that is printed using a single run. The widespread offset-printing process is composed of four spot colors: Cyan, Magenta, Yellow, and Key (black) commonly referred to as CMYK. More advanced processes involve the use of six spot colors (hexachromatic process), which add Orange and Green to the process (termed CMYKOG). <br>
                       When making a multi-color print with a spot color process, every spot color needs its own lithographic film. All the areas of the same spot color are printed using the same film, hence, using the same lithographic plate. The dot gain, hence the screen angle and line frequency, of a spot color vary according to its intended purpose. Spot lamination and UV coatings are sometimes referred to as 'spot colors', as they share the characteristics of requiring a separate lithographic film and print run.
                    </p> 
                    <img class="service-image col-md-4" src="images/download (1).jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="lamination">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Lamination and Binding</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                       Lamination is the technique of manufacturing a material in multiple layers, so that the composite material achieves improved strength, stability, sound insulation, appearance or other properties from the use of differing materials. <br>
                       Bookbinding is the process of physically assembling a book from an ordered stack of paper sheets. The stack is then bound together along one edge by either sewing with thread through the folds or by a layer of flexible adhesive. Finally, an attractive cover is adhered to the boards and a label with identifying information is attached to the covers along with additional decoration.
                    </p> 
                    <img class="service-image col-md-4" src="images/download (2).jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="tags">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Tags</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                       Our tag printing service is one of the best when it comes to providing service in the field.
                    </p> 
                    <img class="service-image col-md-4" src="images/discount-labels_23-2147509148.jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="htags">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Hang Tags</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                       Our hang tag printing service is one of the best when it comes to providing service in the field.
                    </p> 
                    <img class="service-image col-md-4" src="images/clothing-tags_23-2147512582.jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="labels">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Labels</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                       A label (as distinct from signage) is a piece of paper, polymer, cloth, metal, or other material affixed to a container or product, on which is written or printed information about the product. Information printed directly on a container or article can also be considered labeling.
                    </p> 
                    <img class="service-image col-md-4" src="images/retro-badges-collection-with-yellow-ribbons_1013-29.jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="stickers">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Stickers</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                       A sticker is a type of label: a piece of printed paper or plastic with pressure sensitive adhesive on one side. They can be used for decoration, depending on the situation. They can come in many different shapes, sizes and colours and are put on things such as lunchboxes, in children's rooms, on paper, lockers, notebooks and so on.
                    </p> 
                    <img class="service-image col-md-4" src="images/coming-soon-stickers_23-2147501113.jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="flyers">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Flyers</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                       A flyer is a form of paper advertisement intended for wide distribution and typically posted or distributed in a public place, handed out to individuals or sent through the mail.
                    </p> 
                    <img class="service-image col-md-4" src="images/abstract-blue-business-brochure-with-yellow-details_1035-2158.jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="tshirt">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">T-Shirt Printing</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                       The most common form of commercial T-shirt decoration is screen-printing. In screen-printing, a design is separated into individual colors. Plastisol or water based inks are applied to the shirt through mesh screens which limits the areas where ink is deposited. In most commercial T-shirt printing, the specific colors in the design are used. To achieve a wider color spectrum with a limited number of colors, process printing (using only cyan, magenta, yellow and black ink) or simulated process (using only white, black, red, green, blue, and gold ink) is effective. Process printing is best suited for light colored shirts.
                    </p> 
                    <img class="service-image col-md-4" src="images/music-concept-t-shirt-template_23-2147494284.jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="mug">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Mug Printing</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                       A mug is a type of cup typically used for drinking hot beverages, such as coffee, hot chocolate, soup, or tea. We can easily give you an awesome feel of privacy by providing you with custom printed mugs.
                    </p> 
                    <img class="service-image col-md-4" src="images/keep-calm-and-drink-coffee_23-2147510821.jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="catalog">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Catalog Printing</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                       We can provide you with catalogues having the best designs at the lowest prices possible.
                    </p> 
                    <img class="service-image col-md-4" src="images/blue-and-green-business-brochure_1017-2629.jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="diary">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Diary Printing</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                       A diary (sometimes referred to as journal or notebook) is a record (originally in handwritten format) with discrete entries arranged by date reporting on what has happened over the course of a day or other period.
                    </p> 
                    <img class="service-image col-md-4" src="images/open-diary-and-notebook_23-2147552245.jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="calendar">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Calendar Printing</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                       A diary (sometimes referred to as journal or notebook) is a record (originally in handwritten format) with discrete entries arranged by date reporting on what has happened over the course of a day or other period.
                    </p> 
                    <img class="service-image col-md-4" src="images/open-diary-and-notebook_23-2147552245.jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="brochure">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Brochure Printing</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                        A calendar is a system of organizing days for social, religious, commercial or administrative purposes. This is done by giving names to periods of time, typically days, weeks, months, and years. You can keep one at your desk by getting a custom printed calendar for yourself from us.
                    </p>
                    <img class="service-image col-md-4" src="images/realistic-calendars_23-2147509516.jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="poster">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Poster Printing</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                        Many printing techniques are used to produce posters. While most posters are mass-produced, posters may also be printed by hand or in limited editions. Most posters are printed on one side and left blank on the back, the better for affixing to a wall or other surface. Pin-up sized posters are usually printed on A3 Standard Silk paper in full colour.
                    </p>
                    <img class="service-image col-md-4" src="images/polygonal-poster-template_23-2147543097.jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="cards">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Invitation Cards Printing</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                        Get a special invitation card for the next important function of your life. 
                    </p>
                    <img class="service-image col-md-4" src="images/wedding-invitations-set_1085-320.jpg">
                </div>
            </section>
        </div>

        <div class="container hidden" id="stationary">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Customised Printed Stationary Items</h2>
                </div>
                <div class="container text-center">
                    <p class="col-md-8 text">
                        From pencils to eraasers and from envelopes to pen drive, everything can be printed when you decide to take services from Shivam Enterprises. 
                    </p>
                    <img class="service-image col-md-4" src="images/corporate-identity-template-with-yellow-pattern-for-brandbook-and-guideline_1075-46.jpg">
                </div>
            </section>
        </div>
    </div>
    <!--End Container-->

    <!--Container-->
    <div class="about">
        <div class="container" id="about">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">About Us </h2>
                </div>
                <div class="container" style="float: left">
                    <p class="text">
                        Shivam Enterprises is a brand when it comes to high quality printing related services and products. Shivam Enterprises was established in the year 2002 and since then has been a pioneer in printing and creative designing solutions. We are one of the biggest printing houses in Delhi NCR. The foundation of the 'Shivam Enterprises - A Complete Printing Solution' was laid down by Mr. Hariom Thakur. He built the firm right from the ashes into a name that counts when it comes to printing related services with highly equipped printing technology unit, all over Delhi NCR  and few other states. We have been developing awesome designs and trying to bring them to life with help of printing services for over fourteen years. Moreover, all we have built till now has absolutely been on the belief of our more than forty trusted clients. Shivam Enterprises has expertise in government industries, government press and all other corporates as well.
                    </p>
                </div>
            </section>
        </div>
    <br><br>
    </div>
    <!--End Container-->

    <!--Contact Us-->
    <div class="contact">
        <div class="container" id="contact">
            <section>
                <div class="page-header col-md-12">
                    <h2 class="heading">Contact us</h2>
                </div>

                <?php if(!empty($errors)): ?>
                    <div class="panel">
                        <ul>
                            <li><?php echo implode('</li><li>', $errors);?></li>
                        </ul>
                    </div>
                <?php endif; ?>

                <div class="container text-center">
                    <form action="contact.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Name
                                    </label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required="required"  autocomplete="off" <?php echo isset($fields['name']) ? ' value="' .e($fields['name']). '" ' : ''  ?>/>
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Email Address
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="required" autocomplete="off" <?php echo isset($fields['email']) ? ' value="' .e($fields['email']). '" ' : ''  ?>/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        Subject
                                    </label>
                                    <select id="subject" name="subject" class="form-control" required="required">
                                        <option value="na" selected="">Choose One:</option>
                                        <option value="service">General Customer Service</option>
                                        <option value="suggestions">Suggestions</option>
                                        <option value="product">Product Support</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="message">
                                        Message
                                    </label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                        placeholder="Message">
                                        <?php echo isset($fields['message']) ? e($fields['message']) : ''  ?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                    Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>

                <br>
                <br>
            </section>
        </div>
    </div>
    <!--End Contact Us-->

    <!--Footer-->
        <section class="footer">
            <div class="container">

                <div class="row" style="clear:both;">
                    <div class="col-lg-3  col-md-3 col-sm-3">
                        <div class="footer_dv">
                            <h2 class="heading">Services</h2>
                            <ul class="list">
                               <li class="service-nav" data-panelId="#magazine"><a href="#offset">Offset Printing</a></li>
                               <li class="service-nav" data-panelId="#graphic"><a href="#graphic">Graphic Designing</a></li>
                               <li class="service-nav" data-panelId="#digital"><a href="#digital">Digital Printing</a></li>
                               <li class="service-nav" data-panelId="#magazine"><a href="#magazine">Book Printing</a></li>

                               <li class="service-nav show-service hidden" data-panelId="#magazine"><a href="#magazine">Magazine Printing</a></li>
                               <li class="service-nav show-service hidden" data-panelId="#spot"><a href="#spot">Spot UV</a></li>
                               <li class="service-nav show-service hidden" data-panelId="#lamination"><a href="#lamination">Lamination and Binding</a></li>
                            </ul>
                        </div>
                    </div>
                            
                    <div class="col-lg-3  col-md-3 col-sm-3 hide-service">
                        <div class="footer_dv">
                            <h2 class="heading">Services</h2>
                            <ul class="list">
                               <li class="service-nav" data-panelId="#magazine"><a href="#magazine">Magazine Printing</a></li>
                               <li class="service-nav" data-panelId="#spot"><a href="#spot">Spot UV</a></li>
                               <li class="service-nav" data-panelId="#lamination"><a href="#lamination">Lamination and Binding</a></li>
                               <li class="prod-footer"><a href="#products">Click for more Products and services...</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="hidden col-lg-3  col-md-3 col-sm-3" id="products">
                        <div class="footer_dv">
                            <h2 class="heading">Other Products and Services</h2>
                            <ul class="list">
                               <li class="service-nav" data-panelId="#bcards"><a href="#bcards">Business Cards</a></li>
                               <li class="service-nav" data-panelId="#mug"><a href="#mug">Mug Printing</a></li>
                               <li class="service-nav" data-panelId="#services"><a href="#services">Official Tent and Pla Cards</a></li>
                               <li class="service-nav" data-panelId="#catalog"><a href="#catalog">Catalog Printing</a></li>
                               <li class="service-nav" data-panelId="#diary"><a href="#diary">Diary Printing</a></li>
                               <li class="service-nav" data-panelId="#calendar"><a href="#calendar">Calendar Printing</a></li>
                               <li class="service-nav" data-panelId="#brochure"><a href="#brochure">Brochure Printing</a></li>
                               <li class="service-nav" data-panelId="#poster"><a href="#poster">Poster Printing</a></li>
                               <li class="service-nav" data-panelId="#lamination"><a href="#lamination">Book Printing and Binding</a></li>
                               <li class="service-nav" data-panelId="#tags"><a href="#tags">Tags</a></li>
                               <li class="service-nav" data-panelId="#htags"><a href="#htags">Hang Tags</a></li>
                               <li class="service-nav" data-panelId="#flyers"><a href="#flyers">Flyers</a></li>
                               <li class="service-nav" data-panelId="#cards"><a href="#cards">Invitation Cards</a></li>
                               <li class="service-nav" data-panelId="#labels"><a href="#labels">Labels</a></li>
                               <li class="service-nav" data-panelId="#stickers"><a href="#stickers">Stickers</a></li>
                               <li class="service-nav" data-panelId="#tshirt"><a href="#tshirt">T-Shirt Printing</a></li>
                               <li class="service-nav" data-panelId="#stationary"><a href="#stationary">Customised Printed Stationary Items</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-3 col-sm-3">
                        <div class="footer_dv">
                            <h2 class="heading">Contact Us</h2>
                            <p>Printer customer Support</p>
                            <p>9125772929<br>
                               info@example.com<br>
                               abc@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-3 col-sm-3">
                        <div class="footer_dv">
                            <h2 class="heading">Reach Us</h2>
                            <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyA7QgvEUPTTqtHPCZ7-yMgxFhoKcMLbXi4"></script>
                            <div style="overflow:hidden;height:250px;">
                                <div id="gmap_canvas" style="height:250px;">
                                    <style>
                                        #gmap_canvas img{
                                            max-width:none!important;
                                            background:none!important;
                                            border: 1px solid #ddd;
                                            margin-bottom: 20px;
                                            padding: 20px;
                                        }
                                    </style>
                                    <a class="google-map-code" href="http://www.pblack.de" id="get-map-data">
                                        pure black
                                    </a>
                                </div>
                            </div>
                            <script type="text/javascript"> 
                                function init_map(){
                                    var myOptions = {
                                        zoom:14,
                                        center:new google.maps.LatLng(28.525257,77.2797723),
                                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                    };

                                    map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);

                                    marker = new google.maps.Marker({
                                        map: map,
                                        position: new google.maps.LatLng(28.525257,77.2797723)
                                    });

                                    infowindow = new google.maps.InfoWindow({
                                        content:"<b>Shivam Enterprises</b>" 
                                    });

                                    google.maps.event.addListener(marker, "click", function(){
                                        infowindow.open(map,marker);
                                    });

                                    infowindow.open(map,marker);
                                }

                                google.maps.event.addDomListener(window, 'load', init_map);
                            </script>
                            <p>
                                <br/>DSIDC Sheds, Building No.-Eighty, Okhla Phase I, Okhla Industrial Area<br/> New Delhi
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            
        </section>
    <!--End Footer-->
   
    <!-- JQuery -->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->﻿
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Custom Script-->
    <script type="text/javascript" src="js/custom.js"></script>

</body> 
</html>

<?php

unset($_SESSION['errors']);
unset($_SESSION['fields']);

?>