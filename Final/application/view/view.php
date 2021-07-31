<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="application/css/main.css"/>
        <link rel="stylesheet" href="application/css/all.css"/>
        <link rel="stylesheet" href="application/css/bootstrap.css"/>
        <link rel="stylesheet" href="application/css/x3dom.css"/>
        <title>Final 3D App</title>
    </head>
    <body id="bodyColor">
        
        <!-- Header with logo -->
        <nav>
            <div class="logo">
                <h1>Fanta</h1>
                <h2>Bold</h2>
                <h3>Choice</h3>
                <h4>Bold</h4>
                <h5>Taste</h5>
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
                    <p id="contactText1"></p>
                    <p id="contactText2"></p>
                    <p id="contactText3"></p>
                </div>
            </div>
            <!-- Home Page -->
            <div id="home" class="mainContent" style="display: block;">
                <div class="row">
                    <div class="col-sm-4" id="flickr">
                        <div id="flickrImages">
                            <h1 id="title"></h1>
                            <h2 id="link"></h2>
                            <div id="images"></div>
                        </div>
                    </div>
                    <div class="col-sm-8" id="slideshow">
                        <div class="slideshow-container">
                            <div class="slides fade">
                                <div id="slide1" class="numbertext"></div>
                                <img src="application/assets/images/fanta1.jpg" style="width:100%">
                                <div id="slide1text" class="text"></div>
                            </div>
                            <div class="slides fade">
                                <div id="slide2" class="numbertext"></div>
                                <img src="application/assets/images/fanta2.jpg" style="width:100%">
                                <div id="slide2text" class="text"></div>
                            </div>
                            <div class="slides fade">
                                <div id="slide3" class="numbertext"></div>
                                <img src="application/assets/images/fanta3.jpg" style="width:100%">
                                <div id="slide3text" class="text"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="mainLogos">
                    <div class="col-sm-4" id="fantaImage">
                        <a href="https://www.coca-cola.co.uk/brands/fanta" >
                            <div id="fantaLogoText" class="logotext"></div>
                            <img src="application/assets/images/fanta.jpg" style="width:99%" />
                        </a>
                    </div>
                    <div class="col-sm-4" id="zeroImage">
                        <a href="https://www.coca-cola.co.uk/brands/coca-cola-zero-sugar">
                            <div id="zeroLogoText" class="logotext"></div>
                            <img src="application/assets/images/zero.jpg" style="width:100%" />
                        </a>
                    </div>
                    <div class="col-sm-4" id="cokeImage">
                        <a href="https://www.coca-cola.co.uk/brands/coca-cola-original-taste">
                            <div id="cokeLogoText" class="logotext"></div>
                            <img src="application/assets/images/coca_cola.jpg" style="width:100%" />
                        </a>
                    </div>
                </div>
            </div>
            <!-- About -->
            <div id="about" style="display: none;">
                <p id="aboutText"></p>
            </div>
            <div id="models" class="main_contents" style="display: none;">
                <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
                    <!-- Camera section -->
                <div class="row">
                    <div class="col-3">
                        <div class="row"> 
                                <div class="card text-left  style="margin: 3px;"">
                                    <div class="card-header">
                                        <ul class="nav nav-tabs card-header-tabs">
                                        <!-- Dropdown nav-tab -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                                            <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                                            <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                                            <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                                            <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                                            <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                                            <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                                            </div>
                                        </li>
                                        </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-Title x3dCamera_Subtitle drinksText">
                                            <h3>Camera Views</h3>
                                            </div>                            
                                            <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                                            <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                                            <a href="#" class="btn btn-primary btn-responsive" onclick="cameraLeft();">Left</a>
                                            <a href="#" class="btn btn-primary btn-responsive" onclick="cameraRight();">Right</a>
                                            <div class="card-text x3dCameraDescription drinksText">
                                            <p id="cameraText"></p>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <!-- Column for the animation controls -->
                            <div class="row">
                                <div class="card text-left"  style="margin: 3px;">
                                    <div class="card-header">
                                        <ul class="nav nav-tabs card-header-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Animation</a>
                                        </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-Title x3dAnimationSubtitle drinksText">
                                        <h3>Animation Options</h3>
                                        </div>
                                        <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">Spin Left</a>
                                        <a href="#" class="btn btn-outline-light btn-responsive">Spin Right</a>
                                        <a href="#" class="btn btn-outline-light btn-responsive">Spin Up</a>
                                        <a href="#" class="btn btn-outline-light btn-responsive">Spin Down</a>
                                        <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                                        <div class="card-text x3dAnimationDescription drinksText">
                                            <p id="animationText"></p>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                    </div>
                    <div class="col-6">
                        <div class="row" id="row">
                        <!-- X3D Model -->
                            <div class="card text-left" style="width: 100%; margin: 3px;">
                                <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                    <a id="navFanta" class="nav-link active" onclick="fantaScene();" href="#"></a>
                                    </li>
                                    <li class="nav-item">
                                    <a id="navCokeZero" class="nav-link" onclick="zeroScene();" href="#"></a>
                                    </li>
                                    <li class="nav-item">
                                    <a id="navCoke" class="nav-link" onclick="cokeScene();" href="#"></a>
                                    </li>
                                </ul>
                                </div>
                                <div class="card-body">
                                    <div class="model3D">
                                        <x3d id="wire">
                                            <scene>
                                                <Switch whichChoice="0" id='SceneSwitch'>
                                                <transform>
                                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="application/assets/x3d/fantacan.x3d" > </inline>
                                                </transform>
                                                <transform>
                                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="application/assets/x3d/cokezerobottle.x3d"> </inline>
                                                </transform>
                                                <transform>
                                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="application/assets/x3d/cokeglass.x3d"> </inline>
                                                </transform>
                                            </Switch>
                                            </scene>
                                        </x3d>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>         
                    <div class="col-3">
                        <!-- Column for the render type and lighting controls -->
                        <div class="row" id="row">
                            <div class="card text-left" style="margin: 3px;">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                                        <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" onclick="wireframe();">Change Render</a>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="card-Title x3dRendersubtitle drinksText">
                                    <h3>Render and Lighting Options</h3>
                                    </div>
                                    <a href="#" class="btn btn-success btn-responsive"  onclick="toggleOmni2();">Light 1</a>
                                    <a href="#" class="btn btn-success btn-responsive"  onclick="toggleOmni3();">Light 2</a>
                                    <a href="#" class="btn btn-success btn-responsive"  onclick="toggleOmni4();">Light 3</a>
                                    <a href="#" class="btn btn-success btn-responsive"  onclick="toggleOmni5();">Light 4</a>
                                    <a href="#" class="btn btn-success btn-responsive"  onclick="toggleOmni6();">Light 5</a>
                                    <a href="#" class="btn btn-success btn-responsive"  onclick="toggleOmni7();">Light 6</a>
                                    <div class="card-text x3dRenderDescription drinksText">
                                        <p id="renderText"></p>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <!-- Navigation Type-->
                            <div class="row"> <!-- here-->
                            <div class="card text-left" style="margin: 3px;">
                                <div class="card-body">
                                    <div class="card-Title x3dMovement_Subtitle drinksText">
                                    <h3>Navigation Types</h3>
                                    </div>                            
                                    <a href="#" class="btn btn-success btn-responsive" onclick="navExamine();">Examine</a>
                                    <a href="#" class="btn btn-primary btn-responsive" onclick="navWalk();">Walk</a>
                                    <a href="#" class="btn btn-primary btn-responsive" onclick="navFly();">Fly</a>
                                    <a href="#" class="btn btn-primary btn-responsive" onclick="navNone();">None</a>
                                    <div class="card-text x3dMovementDescription drinksText">
                                    <p id="navText"></p>
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
                                            <img src="application/assets/images/renderimages/fanta.png" style="width: 100%;"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <img src="application/assets/images/renderimages/cokezero.png" style="width: 100%;"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <img src="application/assets/images/renderimages/cokeglass.png" style="width: 100%;" />
                                        </div>
                                    </div>
                                    <div class="card-text description_gallery drinksText"></div>
                                </div>
                            </div> 
                        </div> 
                    </div>
                </div>
            </div>
            <div id="gallery" style="display: none;">
                <div class="row">
                    <div class="gallery" id="galleryTitle"></div>
                </div>
                <!-- Mini gallery images -->
                <div class="row">
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/fanta.png" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/fanta2.png" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/fanta3.png" style="width: 100%;"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/fanta4.png" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/fanta5.png" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokezero.png" style="width: 96%;" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokezero2.png" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokezero3.png" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokezero4.png" style="width: 100%;"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokezero5.png" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokeglass.png" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokeglass2.png" style="width: 100%;"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokeglass3.png" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokeglass4.png" style="width: 100%;"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="galleryComponent" src="application/assets/images/renderimages/cokeglass5.png" style="width: 100%;"/>
                    </div>
                </div>
            </div>
        </div>
        
        <nav id="footerColor" class="navbar navbar-expand-sm footer">
          <div class="container-fluid">   
              <div class="navbar-text float-left copyright">
                  <p><span class="align-baseline">&copy 2021 Student 3D App</span></p>
              </div>
              <a href="statementOfOriginality.html">Statement of Originality</a>
              <a href="references.html">References</a>
          </div>
        </nav> 

        <script src="application/js/popper.min.js"></script>
        <script src="application/js/jquery-3.4.1.js"></script>
        <script src="application/js/bootstrap.min.js"></script>
        <script src="application/js/flickrService.js"></script>
        <script src="application/js/slideshow.js"></script>
        <script src="application/js/contentSwap.js"></script>
        <script src="application/js/modelInteractions.js"></script>
        <script src="application/js/x3dom.js"></script>
        <script src="application/js/swap_restyle.js"></script>
        <script src="application/js/getData.js"></script>
    </body>
</html>