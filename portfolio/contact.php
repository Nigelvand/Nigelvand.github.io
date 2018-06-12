<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=now">
    <title>Contact</title>

    <!-- bootstrap css -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- normal css-->
    <link rel="stylesheet" href="css/style.css">
    <!-- css voor animated text -->
    <link rel="stylesheet" href="css/text.css">
    <!-- css voor contact pagina-->
    <link rel="stylesheet" href="css/contact.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">

</head>
<body>
<!-- begin nav bar -->

<nav class="navbar navbar-default load nav-down">


    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Nigel van Duijvendijk</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="work.php">My work</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

</nav>


<div id="background"><img src="afbeeldingen/mountain.jpg" class="stretch" alt="" />
</div>
<!-- Eind nav bar -->
<!--Begin van content blok 1-->
<div class="band1 contact">
    <div class="index-content load3">
        <section id="contact">
            <div class="section-content">
                <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with me</span></h1>
                <h3>Or call me on 0612345678</h3>
            </div>
            <div class="contact-section">
                <div class="container">
                    <form METHOD="post" ACTION="mailto:nigelvand@hotmail.com">
                        <row>
                        <div class="col-md-6 form-line col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputUsername">Your name</label>
                                <input type="text" class="form-control" id="" placeholder=" Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">Email Address</label>
                                <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email ">
                            </div>
                            <div class="form-group">
                                <label for="telephone">Mobile No.</label>
                                <input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for ="description"> Message</label>
                                <textarea  class="form-control" id="description" placeholder="Enter Your Message"></textarea>
                            </div>
                            <div>

                                <button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
                            </div>
                        </row>
                        </div>
                    </form>
                </div>
        </section>

        <div class="seatext">
            <div class='console-container load2 sea'><span id='text'></span><div class='console-underscore' id='console'>&#95;</div><p>in a sea of ordinary, make sure your website i set apart from the competition</p></div>

        </div>
    </div>
</div>




<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/scroll.js"></script>
<script src="js/text.js"></script>
<script src="js/load.js"></script>

</body>
</html>