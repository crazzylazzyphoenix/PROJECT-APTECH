<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <a class="logo" href="home.php"><img src="logo.png" alt=""></a>
        <a class="active" href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="shop.php"><i class="fa fa-fw fa-tag"></i> Shop</a>
        <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
    </div>

    <div class="hero-image">
    <div class="hero-text">
        <h1>Whoever said that money can't buy happiness, simply didn't know where to go shopping</h1>
        <p>Bo Derek</p>
    </div>
    </div>
    
    <section class="home-contact">

    <div class="content">
        <h3>Have any questions?</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque cumque exercitationem repellendus, amet ullam voluptatibus?</p>
        <a href="contact.php" class="white-btn">Contact us</a>
    </div>

    </section>

    <section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>Contact info</h3>
            <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
            <p> <i class="fas fa-phone"></i> +111-222-3333 </p>
            <p> <i class="fas fa-envelope"></i> anh.tt.2197@aptechlearning.edu.vn </p>
            <p> <i class="fas fa-map-marker-alt"></i> 54 Lê Thanh Nghị </p>
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <p class="credit"> &copy; copyright  @ <?php echo date('Y'); ?> by <span>Nhóm 03</span> </p>

    </section>

    <div id="googleMap" style="width:100%;height:400px;"></div>

    <script>
    function myMap() {
    var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

</body>
</html>
