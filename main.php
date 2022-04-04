<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------ link font awosom -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!------------ link google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet"> 
    <!------------link Bootstarp css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!----------link custom css-->
    <link rel="stylesheet" href="main.css">

    <title>Online Computer Sales and Repair Center</title>
</head>
<body>
    <!-----Navbar start-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
        <a href="index.php" class="navbar-brand">OCSRC</a>
        <span class="navbar-text">Customer's Happiness is our Aim</span>
        <button type="button" class="navbar-toggler" data-toggler="collapse" data-targer="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav pl-6 custom-nav">
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#service" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="requester/user_login.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!--------- Navbar end-->

    <!----Start Jumbotron-->
    <header class="jumbotron back-image" style="background-image: url(resources/banar_images/item1.jpg);">

        <div class="myClass mainHeading">
            <h1 class="text-uppercase text-danger font-weight-bold">Wellcome to OCSRC</h1>
            <p class="font-italic">Customer's Happiness is Our Aim</p>
            <a href="requester/user_login.php" class="btn btn-success mr-4">Login</a>
            <a href="#registration" class="btn btn-danger mr-4">Sign UP</a>
        </div>

    </header>
    <!-------End jumbotron-->

    <!--------Start Introduction-->
    <div class="container">
        <div class="jumbotron">
            <h3 class="text-center">OCSRC Services</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi ducimus fugiat asperiores rerum placeat possimus ad odio, saepe maxime quis quibusdam aperiam enim dicta. Veritatis delectus porro aliquam dolorem. Corporis cumque consectetur facilis voluptatum dolor nisi eos suscipit mollitia pariatur voluptates, distinctio odit nobis iste eveniet vero exercitationem id. Porro odit tempore ducimus rerum consequatur, exercitationem harum voluptates nemo aliquam, in fuga labore doloribus. Sapiente debitis, vitae totam repudiandae qui unde in excepturi officia incidunt earum distinctio nostrum nam architecto quidem quisquam reiciendis autem dolor quod tempore minus porro repellat iusto provident nihil. Delectus alias eum architecto minus obcaecati, molestiae veniam dignissimos natus, libero itaque est, expedita labore error ipsum? Autem perspiciatis sapiente praesentium nisi! Unde esse, vel neque porro dolorem nisi, temporibus exercitationem placeat voluptatem necessitatibus molestiae itaque tempore beatae? Dicta quaerat illum reprehenderit enim vitae natus ipsum recusandae dignissimos, ut in similique veritatis obcaecati? Blanditiis iusto deleniti vero expedita nisi ipsum repellendus vel molestias dolore rem cum quisquam, eum, culpa a ab suscipit, dolorem excepturi dicta. Doloremque unde maiores laboriosam, esse mollitia laudantium! Dolore reprehenderit odit accusamus dolorem. Doloremque distinctio veritatis mollitia odit. At asperiores inventore culpa eum! Tempore, velit! Blanditiis eaque delectus sapiente eum labore commodi minima.</p>
        </div>
    </div>
    <!-------------End Introduction -->
    <!------------Start Service Section--------->
    <div class="container text-center border-bottom" id="service">
        <h2>Our Services</h2>
        <div class="row mt-4">
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
                <h4 class="mt-4">Electronic Applaiances</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
                <h4 class="mt-4">Preventive Maintenance</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
                <h4 class="mt-4">Fault Repair</h4>
            </div>
        </div>
    </div>
    <!---------End Service Section-->

    <!---------------Start Registration Form-------->
    <?php include('userRegistration.php') ?>
    <!---------------End Registration Form--------->

    <!----------- Start Happy Customer's--------->
    <div class="jumbotron bg-danger">
        <div class="container">
            <h2 class="text-center text-white">Happy Customers</h2>
            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="" alt="user 1" class="img-fluid">
                            <h4 class="card-title">Rahul Kumar</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est praesentium officiis odit sit quibusdam minima, iusto minus necessitatibus maxime obcaecati mollitia, nostrum blanditiis beatae voluptate sequi cupiditate, provident iure quod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="" style="border-radius: 100px;" alt="user 2" class="img-fluid">
                            <h4 class="card-title">Rahul Kumar</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptatem natus asperiores, aliquam consequuntur, tenetur, velit in cum cupiditate ipsa corrupti! Placeat eum exercitationem modi ab sint facere fugiat repellendus!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="" style="border-radius: 100px;" alt="user 3" class="img-fluid">
                            <h4 class="card-title">Rahul Kumar</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, quaerat dolorem asperiores eos quos sunt veritatis nobis animi officia non. Vitae modi, quibusdam aperiam harum eos quos deserunt dolorem cumque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="" style="border-radius: 100px;" alt="user 4" class="img-fluid">
                            <h4 class="card-title">Rahul Kumar</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id laborum blanditiis atque, corporis voluptatum sit vitae aperiam fuga possimus asperiores repellat quo iusto. Eum excepturi quod totam minus, cum quisquam!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------End Happy Customer's-->

    <!----------------Start Contact Us-->
    <div class="container" id="contact">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row">
    <!-------Start First column-------->
    <?php include('contactForm.php') ?>
    <!--------End First column------>
            <div class="col-md-4 text-center">
                <strong>Headquater:</strong><br>
                OCSRC pvt Ltd,<br>
                Tejgaon I/A,<br>
                Dhaka-1208 <br>
                Phone:+0220000 <br>
                <a href="#" target="_blank">www.OCSRC.com</a>
            </div>
        </div>
    </div>
    <!----------------- End Contact Us-->

    <!-----------------Start Footer-------->
    <div class="container-fluid bg-dark mt-5 text-white">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-6">
                    <span class="pr-2">Follow Us:</span>
                    <a href="#" target="_blank" class="pr-2 fi-color">
                        <i class="fab fa-facbok-f"></i>
                    </a>
                    <a href="#" target="_blank" class="pr-2 fi-color">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" target="_blank" class="pr-2 fi-color">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" target="_blank" class="pr-2 fi-color">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    <a href="#" target="_blank" class="pr-2 fi-color">
                        <i class="fab fa-rss"></i>
                    </a>
                </div>
                <div class="col-md-6 text-right">
                    <small>Designed by OCSRC It Team &copy; 2022</small>
                    <small class="ml-2"><a href="admin/login.php">Admin Login:</a></small>
                </div>
            </div>
        </div>
    </div>
    <!------------------ End Footer------->
        <!------------link Bootstarp js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>