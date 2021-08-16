<?php
if(count($_POST)>0) {
    $email = $_POST['email'];
    $name = $_POST['name'];

    $dir = 'sqlite:./db/data.db';
    $dbh = new PDO($dir, 'user','password', array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false,));

    $query = "INSERT INTO 'mail' ('email','name') VALUES ('$email','$name')";
    $dbh->query($query);

    ChromePhp::log("done");
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="application/css/main.css"/>
        <link rel="stylesheet" href="application/css/all.css"/>
        <link rel="stylesheet" href="application/css/bootstrap.css"/>
        <link rel="stylesheet" href="application/css/x3dom.css"/>

        <script src="application/js/signUp.js"></script>

        <title>Final 3D App</title>
    </head>
    <body id="bodyColor">
        
        <!-- Header with logo -->
        <nav>
            <div id="header" class="logo">
                <h1 id="title1"><?php echo $data[0]['content']; ?></h1>
                <h2 id="title2"><?php echo $data[1]['content']; ?></h2>
                <h3 id="title3"><?php echo $data[2]['content']; ?></h3>
                <h4 id="title4"><?php echo $data[3]['content']; ?></h4>
                <h5 id="title5"><?php echo $data[4]['content']; ?></h5>
                
            </div>
        </nav>
        <!-- Navigation bar -->
        <div id="navigationBar">
            <nav class="navbar navbar-expand-sm justify-content-center">
                <button class="navbar-toggler navbar-dark collapsed" type="button" data-toggle="collapse" data-target="#myNavBar" aria-expanded="false" id="menuButton">
                    <span class="navbar-toggler-icon">Menu</span>
                </button>
                <div class="navbar-collapse collapse" id="myNavBar">
                    <ul id="navBar" class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#" onclick="swap('home')">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" onclick="swap('about')">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" onclick="swap('models')">Models</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" onclick="swap('gallery')">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" id="myModal">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Contents -->
        <div class="container" id="mainContainer">
            <!-- Contact -->
            <div id="contact" style="display: none;">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p id="contactText1"><?php echo $data[17]['content']; ?></p>
                    <p id="contactText2"><?php echo $data[18]['content']; ?></p>
                    <p id="contactText3"><?php echo $data[19]['content']; ?></p>
                </div>
            </div>
            <!-- Home Page -->
            <div id="home" class="mainContent" style="display: block;">
                <div class="row">
                    <div class="col-sm-12" id="slideshow">
                        <div class="slideshow-container">
                            <div class="slides fade">
                                <div id="slide1" class="numbertext">1/3</div>
                                <img src="application/assets/images/fanta1.jpg" style="width:100%">
                            </div>
                            <div class="slides fade">
                                <div id="slide2" class="numbertext">2/3</div>
                                <img src="application/assets/images/fanta2.jpg" style="width:100%">
                            </div>
                            <div class="slides fade">
                                <div id="slide3" class="numbertext">3/3</div>
                                <img src="application/assets/images/fanta3.jpg" style="width:100%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="mainLogos">
                    <div class="col-sm-4" id="fantaImage"> 
                        <img onclick="popup('fantaInfo')" src="application/assets/images/fanta.jpg" style="width:99%; border-radius:50%" />
                    </div>
                    <div class="col-sm-4" id="zeroImage">
                        <img onclick="popup('zeroInfo')" src="application/assets/images/zero.jpg" style="width:98%; border-radius:50%" />
                    </div>
                    <div class="col-sm-4" id="cokeImage">
                        <img onclick="popup('cokeInfo')" src="application/assets/images/coca_cola.jpg" style="width:99%; border-radius:50%" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12" id="fantaInfo" style="display: none; margin-top: 30px; text-align: center;">
                        <h1><?php echo $data[5]['content']; ?></h1>
                        <p id="fantaPara" style="color:black;"><?php echo $data[6]['content']; ?></p>
                        <img src="application/assets/images/fantaFounded.jpg" style="width:50%" />
                        <p style="color:black;"><?php echo $data[7]['content']; ?></p>
                        <a id="fantaRef" style="color:black;" href="https://www.coca-cola.co.uk/brands/fanta"><?php echo $data[8]['content']; ?></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12" id="zeroInfo" style="display: none; margin-top: 30px; text-align: center;">
                        <h1>
                            <?php echo $data[9]['content']; ?>
                        </h1>
                        <p id="zeroPara" style="color:black;"><?php echo $data[10]['content']; ?></p>
                        <img src="application/assets/images/cokezeroFounded.jpg" style="width:50%" />
                        <p style="color:black;"><?php echo $data[11]['content']; ?></p>
                        <a id="zeroRef" style="color:black;" href="https://www.coca-cola.co.uk/brands/coca-cola-zero-sugar"><?php echo $data[12]['content']; ?></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12" id="cokeInfo" style="display: none; margin-top: 30px; text-align: center;">
                        <h1><?php echo $data[13]['content']; ?></h1>
                        <p id="cokePara" style="color:black;"><?php echo $data[14]['content']; ?></p>
                        <img src="application/assets/images/cokeFounded.jpg" style="width:50%" />
                        <p style="color:black;"><?php echo $data[15]['content']; ?></p>
                        <a id="cokeRef" style="color:black;" href="https://www.coca-cola.co.uk/brands/coca-cola-original-taste"><?php echo $data[16]['content']; ?></a>
                    </div>
                </div>
            </div>
            <!-- About -->
            <div id="about" style="display: none;">
                <h1 id="aboutText" style="text-align: center;">About</h1>
                <div class="row">
                    <div class="col-sm-6" style="height: 100%; width:100%; text-align: center">
                        <span id="fantaVideo" class="vertical-center"><?php echo $data[24]['content']; ?></span>
                    </div>
                    <div class="col-sm-6">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/aEJt_j0Ilqc" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6" id="flickr">
                        <div id="flickrImages">
                            <h1 id="title"></h1>
                            <h2 id="link"></h2>
                            <div id="images"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                         <span id="zeroImage" class="vertical-center"><?php echo $data[25]['content']; ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <span id="colaSong" class="vertical-center"><?php echo $data[26]['content']; ?></span>
                    </div>
                    <div class="col-sm-6">
                        <iframe src="https://open.spotify.com/embed/track/1HrMWH5GUdK6Yi94rbANJA?theme=0" width="100%" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe
                    </div>
                </div>
                </div>
            </div>
            <div id="models" class="main_contents" style="display: none;">
                <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
                    <!-- Camera section -->
                <div class="row">
                    <div class="col-sm-10">
                        <div class="card text-left" style="width: 100%; margin: 3px;">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a id="navFanta" class="nav-link active" onclick="fantaScene();" href="#"><?php echo $data[20]['content']; ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="navCokeZero" class="nav-link" onclick="zeroScene();" href="#"><?php echo $data[21]['content']; ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="navCoke" class="nav-link" onclick="cokeScene();" href="#"><?php echo $data[22]['content']; ?></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="model3D">
                                    <x3d id="wire">
                                        <scene>
                                            <switch whichchoice="0" id='SceneSwitch'>
                                                <transform>
                                                    <inline namespacename="model" mapdeftoid="true" onclick="animateModel();" url="application/assets/x3d/fantacan.x3d"></inline>
                                                </transform>
                                                <transform>
                                                    <inline namespacename="model" mapdeftoid="true" onclick="animateModel();" url="application/assets/x3d/cokezerobottle.x3d"></inline>
                                                </transform>
                                                <transform>
                                                    <inline namespacename="model" mapdeftoid="true" onclick="animateModel();" url="application/assets/x3d/cokeglass.x3d"></inline>
                                                </transform>
                                            </switch>
                                        </scene>
                                    </x3d>
                                </div>
                                <div>
                                    <p id="modelInfo"><?php echo $data[23]['content']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card text-left"  style="margin: 3px;">
                            <div class="card-header">
                                <div class="card-body">
                                    <div class="btn-group-vertical" style="height: 100%;">
                                        <button type="button" onclick="modelInteract('cameraInteract');" class="btn btn-primary">Camera</button>
                                        <button type="button" onclick="modelInteract('renderInteract');" class="btn btn-primary" style="margin-top: 10%">Render</button>
                                        <button type="button" onclick="modelInteract('lightInteract');" class="btn btn-primary" style="margin-top: 10%">Lighting</button>
                                        <button type="button" onclick="modelInteract('navInteract');" class="btn btn-primary" style="margin-top: 10%">Navigation</button>
                                        <button type="button" onclick="modelInteract('animationInteract');" class="btn btn-primary" style="margin-top: 10%">Animation</button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="row" id="cameraInteract" style="display: none;">
                    <div class="col-sm-12">
                        <div class="card text-left  style=" margin: 3px;"">
                            <div class="card-header">
                                <div class="card-body">
                                    <div class="card-Title x3dCamera_Subtitle drinksText">
                                        <p><?php echo $data[27]['content']; ?></p>
                                        <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Front</a>
                                        <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                                        <a href="#" class="btn btn-primary btn-responsive" onclick="cameraLeft();">Left</a>
                                        <a href="#" class="btn btn-primary btn-responsive" onclick="cameraRight();">Right</a>
                                        <a href="#" class="btn btn-primary btn-responsive" onclick="cameraTop();">Top</a>
                                        <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBottom();">Bottom</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="renderInteract" style="display: none;">
                    <div class="col-sm-12">
                        <div class="card text-left  style=" margin: 3px;"">
                            <div class="card-header">
                                <div class="card-body">
                                    <div class="card-Title x3dCamera_Subtitle drinksText">
                                        <p><?php echo $data[28]['content']; ?></p>
                                        <a href="#" id="renderSwitch" class="btn btn-success btn-responsive" onclick="wireframe();">Default</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="lightInteract" style="display: none;">
                    <div class="col-sm-12">
                        <div class="card text-left  style=" margin: 3px;"">
                            <div class="card-header">
                                <div class="card-body">
                                    <div class="card-Title x3dCamera_Subtitle drinksText">
                                        <p><?php echo $data[29]['content']; ?></p>
                                        <a href="#" id="lightSwitch" class="btn btn-primary btn-responsive" onclick="toggleLights();">On</a>
                                        <a href="#" class="btn btn-secondary btn-responsive" onclick="toggleOmni2();">Light 1</a>
                                        <a href="#" class="btn btn-secondary btn-responsive" onclick="toggleOmni3();">Light 2</a>
                                        <a href="#" class="btn btn-secondary btn-responsive" onclick="toggleOmni4();">Light 3</a>
                                        <a href="#" class="btn btn-secondary btn-responsive" onclick="toggleOmni5();">Light 4</a>
                                        <a href="#" class="btn btn-secondary btn-responsive" onclick="toggleOmni6();">Light 5</a>
                                        <a href="#" class="btn btn-secondary btn-responsive" onclick="toggleOmni7();">Light 6</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="navInteract" style="display: none;">
                    <div class="col-sm-12">
                        <div class="card text-left  style=" margin: 3px;"">
                            <div class="card-header">
                                <div class="card-body">
                                    <div class="card-Title x3dCamera_Subtitle drinksText">
                                        <p><?php echo $data[30]['content']; ?></p>
                                        <a href="#" id="navSwitch" class="btn btn-primary btn-responsive" onclick="toggleNav();">Examine</a>
                                        <a href="#" class="btn btn-secondary btn-responsive" onclick="navExamine();">Examine</a>
                                        <a href="#" class="btn btn-secondary btn-responsive" onclick="navWalk();">Walk</a>
                                        <a href="#" class="btn btn-secondary btn-responsive" onclick="navFly();">Fly</a>
                                        <a href="#" class="btn btn-secondary btn-responsive" onclick="navHeli();">Helicopter</a>
                                        <a href="#" class="btn btn-secondary btn-responsive" onclick="navLookAt();">Look At</a>
                                        <a href="#" class="btn btn-secondary btn-responsive" onclick="navGame();">Game</a>
                                        <a href="#" class="btn btn-secondary btn-responsive" onclick="navNone();">None</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="animationInteract" style="display: none;">
                    <div class="col-sm-12">
                        <div class="card text-left  style=" margin: 3px;"">
                            <div class="card-header">
                                <div class="card-body">
                                    <div class="card-Title x3dCamera_Subtitle drinksText">
                                        <p><?php echo $data[31]['content']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- 3D image gallery -->
                    <div class="col-sm-12" style="top: 20px;">
                        <div class="card text-left">
                            <div class="card-header gallery-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" onclick="swap('gallery');" href="#">Gallery</a>
                                </li>
                            </div>
                            <div class="card-body">
                                <div class="card-title title_gallery drinksText"></div>
                                <div class="gallery" id="galleryText"></div>
                                <div class="row">
                                    <div class="gallery" id="galleryText"></div>
                                </div>
                                <!-- Mini gallery images -->
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img src="application/assets/images/renderimages/fanta.jpg" style="width: 100%;"/>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="application/assets/images/renderimages/cokezero.jpg" style="width: 100%;"/>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="application/assets/images/renderimages/cokeglass.jpg" style="width: 100%;" />
                                    </div>
                                </div>
                                <div class="card-text description_gallery drinksText"></div>
                            </div>
                        </div> 
                    </div> 
                </div>
            </div>
            <!-- Gallery -->
            <div id="gallery" style="display: none;">
                <div class="row">
                    <div class="gallery" id="galleryTitle"></div>
                </div>
                <!-- Mini gallery images -->
                <div class="row">
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/fanta.jpg" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/fanta2.jpg" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/fanta3.jpg" style="width: 100%;"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/fanta4.jpg" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/fanta5.jpg" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokezero.jpg" style="width: 96%;" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokezero2.jpg" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokezero3.jpg" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokezero4.jpg" style="width: 100%;"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokezero5.jpg" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokeglass.jpg" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokeglass2.jpg" style="width: 100%;"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokeglass3.jpg" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokeglass4.jpg" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokeglass5.jpg" style="width: 100%;"/>
                    </div>
                </div>
            </div>

            <!-- Mailing System -->
            <div id="mailing" style="display: none;">
                <div>
                    <h1>Mailing List</h1>
                    <p>Welcome to the mailing list for regular updates about the new information about Fanta, Coke Zero and Coca Cola</p>
                    <button id="mailingButton" onclick="mailingSystem('signUp')" class="btn btn-primary p-2">Sign Up</button>
                    <button id="mailingButton" onclick="mailingSystem('updateEmail')" class="btn btn-primary p-2">Update Email</button>
                    <button id="mailingButton" onclick="mailingSystem('checkName')" class="btn btn-primary p-2">Check Name</button>
                    <button id="mailingButton" onclick="mailingSystem('deleteEmail')" class="btn btn-primary p-2">Delete Email</button>
                    <button id="mailingButton" onclick="mailingSystem('resetDatabase')" class="btn btn-primary p-2">Reset Database (Admin)</button>
                </div>
                <div class="row">
                    <div class="col-sm-12" id="signUp" style="display: none; margin-top: 30px; text-align: center;">
                        <form method="post">
                            <div class="form-group" action="">
                                <label for="emailInput">Email Address</label>
                                <input type="email" class="form-control" id="emailInput" placeholder="Enter an email address" />
                            </div>
                            <div class="form-group">
                                <label for="nameInput">Name</label>
                                <input type="text" class="form-control" id="nameInput" placeholder="Enter your name" />
                            </div>
                            <button id="signUpSubmit" type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12" id="updateEmail" style="display: none; margin-top: 30px; text-align: center;"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12" id="checkName" style="display: none; margin-top: 30px; text-align: center;"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12" id="deleteEmail" style="display: none; margin-top: 30px; text-align: center;"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12" id="resetDatabase" style="display: none; margin-top: 30px; text-align: center;">
                        
                        <div class="form-group">
                            <label for="adminCode">Admin Code</label>
                            <input type="number" class="form-control" id="adminCode" placeholder="Enter Admin Code" />
                            <small id="adminGuide" class="form-text text-muted">Admin code required to reset database.</small>
                        </div>
                    </div>
                </div>
             </div>
            <!-- Statement of originality -->
            <div id="originality" style="display: none;">
                <p>These web pages are submitted as part requirement for the degree of Computer Science with Artifical Intelligence at the University of Sussex. They are the product of my own labour except where indicated in the web page content. These web pages or contents may be freely copied and distributed provided the source is acknowledged</p>
            </div>
            <!-- References -->
            <div id="references" style="display: none;">
                <p>References</p>
                <a href="https://www.w3schools.com/howto/howto_js_slideshow.asp">1: W3Schools for slideshow on home page</a><br>
                <a href="https://www.w3schools.com/howto/howto_css_modals.asp">2: W3Schools for modal for contact information</a><br>
                <a href="https://www.w3schools.com/howto/howto_css_modals.asp">3: W3Schools for ...</a><br>
                <a href="https://www.youtube.com/watch?v=aEJt_j0Ilqc&t=30s">4: Youtube for video media source on about screen</a><br>
                <a href="https://www.flickr.com/photos/tags/cokezero/">5: Flickr service for automatic randomly picked image media source on about screen</a><br>
                <a href="https://developer.spotify.com/documentation/widgets/">6: Spotify widget for audio media source on about screen</a><br>
                <a href="https://www.coca-cola.co.uk/brands">7: Coca Cola website for descriptions of Fanta, Coke Zero and Coca Cola</a><br>
            </div>
            <!-- Extensions -->
            <div id="extensions" style="display: none;">
                <h1>Overview of website</h1>
                <p>Logo made up of 5 different header elements and uses a custom font</p>
                <p>Home page consists of a slideshow and three logo icons which upon click will use content swapping to show details about the brand</p>
                <p>About page consists of an embedded youtube video, a flickr image search result and an embedded spotify song</p>
                <p>Models page consists of the three different models which uses content swapping to switch between. There are many different interactions available from lights, camera angles, render and nagivation types and animations</p>
                <p>Gallery consists of a variety of different looks to models</p>
                <p>Contact gives information about creater of website and how to reach</p>
                <p>Footer contains a lot of useful links. Firstly there are 5 different visual styles available and simply clicking on a different colour square will change look. Links to github, statement of originality and references can all be found there. VRML Models provides a link to download versions of the models to be opened in instantplayer. Mailing list is an additional feature which allows for user to sign up for email updates to do with websites content</p>

                <h1>Extensions</h1>
                <p>Overview of the areas of my website that extended the objectives of the coursework</p>
                <h2>SQLite database</h2>
                <p>SQLite database used to store descriptions, titles and model interactions. Values gathered by controller from model and passed to view.</p>
                <h2>Model Interactions</h2>
                <p>Render and Navigation modes switched between using singular button with dynamically changing text value</p>
                <p>Light switch included which can switch all lights between on, dimmed mode or off</p>
                <p>Added extra navigation options in Helicopter, Look At and Game</p>
                <p>Animation included upon click</p>
            </div>
            <!-- End of section -->
        </div>
        
        <!-- Footer -->
        <nav id="footerColor" class="navbar navbar-expand-sm footer">
            <div class="container-fluid justify-content-center">
                <div class="navbar-text copyright ">
                    <button id="foot2" class="btn btn-primary p-2 rounded-0" style="background-color: orange;" onclick="changeColor('orange');"></button>
                    <button id="foot2" class="btn btn-primary p-2 rounded-0" style="background-color: red;" onclick="changeColor('red');"></button>
                    <button id="foot2" class="btn btn-primary p-2 rounded-0" style="background-color: blue;" onclick="changeColor('blue');"></button>
                    <button id="foot2" class="btn btn-primary p-2 rounded-0" style="background-color: green;" onclick="changeColor('green');"></button>
                    <button id="foot2" class="btn btn-primary p-2 rounded-0" style="background-color: lightgrey;" onclick="changeColor('grey');"></button>

                    <p id="foot">&copy 2021 Student 184504 3D App</p>
                    <a id="foot" href="https://github.com/sam33872/Web3DResit">Github</a>
                    <a id="foot" onclick="swap('originality')">Statement of Originality</a>
                    <a id="foot" onclick="swap('references')">References</a>
                    <a id="foot" href="application/assets/vrml.zip" download>VRML Models</a>
                    <a id="foot" onclick="swap('extensions')">Extensions</a>

                    <button id="mailList" class="btn btn-primary p-2" onclick="swap('mailing')"  style="background-color: orange; color: black; ">Mailing List</button>
                </div>
            </div>
        </nav> 

        <script src="application/js/jquery-3.4.1.js"></script>
        <script src="application/js/popper.min.js"></script>
        <script src="application/js/bootstrap.min.js"></script>
        <script src="application/js/flickrService.js"></script>
        <script src="application/js/slideshow.js"></script>
        <script src="application/js/contentSwap.js"></script>
        <script src="application/js/backgroundChange.js"></script>
        <script src="application/js/modelInteractions.js"></script>
        <script src="application/js/x3dom.js"></script>
    </body>
</html>