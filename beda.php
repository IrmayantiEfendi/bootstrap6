<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Zipper - Responsive HTML Template</title>
<!--

Template 2084 Zipper

http://www.tooplate.com/view/2084-zipper

-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/tooplate-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
   <?php 
   include 'koneksi.php';
    ?>

        <div class="container-fluid">
            <!-- Navigation -->        
            <div class="tm-nav">
                <nav class="navbar">

                    <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar"></button> <!-- &#9776; ☰ -->
                    <div class="collapse navbar-toggleable-sm text-xs-center tm-navbar" id="tmNavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item active selected">
                                <a class="nav-link current" href="#home">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Form</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            
            <section class="tm-section tm-section-home tm-flex-center" id="home">                
                
                <div class="tm-hero">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="text-uppercase tm-hero-title">Ade Irmayanti</h1>
                            <p class="tm-hero-subtitle">best destination to explore...</p>
                        </div>
                    </div>
                </div>                

            </section>
            


            <!-- Section 5 -->
            <section class="tm-section tm-section-contact" id="contact">
                <div class="tm-page-content-width">
                    <div class="tm-bg-black-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact tm-content-box  tm-content-box-right">
                        <h2 class="tm-section-title">Complete The Blank</h2>
                        
                        <!-- contact form -->
                        <form action="" method="post" class="tm-contact-form">

                            <div class="form-group">
                                <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Your Name"  required/>
                            </div>
                
                            <div class="form-group">                                                        
                                <select style="width: 380px; opacity:30.30" name="Kelas" >
                                 <option>--Kelas--</option>
                                 <option>X</option>
                                 <option>XI</option>
                                 <option>XII</option>
                                </select>
                            </div>                                                        
                            
                            <div class="form-group">
                                <input type="text" id="notelp" name="notelp" class="form-control" placeholder="Your contact number" required/>
                            </div> 
                            <div class="form-group">
                                <select style="width: 380px;" name="peminatan">
                                    <option>--Pilih Peminatan--</option>
                                    <option>Java Programming</option>
                                    <option>Web Design</option>
                                    <option>Animation</option>
                                    <option>Design Grapichs</option>
                                </select>
                            </div>

                            <button type="submit" class="tm-submit-btn">Submit</button>  
                        <?php 
                                    $nama = @$_POST['contact_name'];
                                    $kls = @$_POST['kelas'];
                                    $no = @$_POST['notelp'];
                                    $minat=@$_POST['peminatan'];
                                if(isset($_POST['sub']))
                                    { 
                                    $sql    = 'insert into situs values ("'.$nama.'","'.$kls.'","'.$no.'","'.$minat.'")';
                                    $query  = mysqli_query($db_link,$sql);
                                    }
                         ?>
                        </form>  
                    </div>
                </div>
                <div class="tm-bg-black-translucent tm-copyright-div">
                    <p class="tm-copyright-text">Copyright &copy; 2017 Teletorami - Design: Tooplate</p>
                </div>                
            </section>

        </div>
        
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="js/jquery.singlePageNav.min.js"></script>  <!-- Single page nav (https://github.com/ChrisWojcik/single-page-nav) -->
        
        <script>     
          
            // Check scroll position and add/remove background to navbar
            function checkScrollPosition() {
                
                if($(window).width() < 767) {
                    $(".tm-nav").removeClass("scroll");
                    return;
                }

                if($(window).scrollTop() > 50) {
                  $(".tm-nav").addClass("scroll");
              } else {        
                  $(".tm-nav").removeClass("scroll");
              }
            }

            $(document).ready(function () {   
                // Single page nav
                $('.tm-nav').singlePageNav({
                    offset: 57,
                    filter: ':not(.external)',
                    updateHash: true        
                });

                checkScrollPosition();

                // navbar
                $('.navbar-toggle').click(function(){
                    $('.main-menu').toggleClass('show');
                });

                $('.main-menu a').click(function(){
                    $('.main-menu').removeClass('show');
                });
            });

            $(window).on("scroll", function() {
                checkScrollPosition();    
            });

            $('#tmNavbar a').click(function(){
                $('#tmNavbar').collapse('hide');
            });

        </script>             

</body>
</html>