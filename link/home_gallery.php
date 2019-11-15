<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>adlensture</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="../style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">

</head>

<body>

    <!-------------------------------- Nav Bar -------------------------------->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../index.html"><img class="mynavbar_brand" src="../scr/logo/logo2.png" alt="..."></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.html">หน้าแรก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home_category.html">หมวดหมู่</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home_blog_post.html">บทความ</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="home_gallery.php">แกลอรี<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home_about.html">เกี่ยวกับ</a>
                </li>
            </ul>
        </div>
    </nav>


    <!----------------------------------- Gallery Contents ----------------------------------->

    <div class="container-fluid">
        <div class="my_container_gallery">
            <div class="row">
                <?php
                echo "<div class='col-sm-3'>";
                for ($i = 1; $i <= 19; $i++) {
                    echo "<img id='myImg' class='img_gallery myImages' src='../scr/gallery/col1/" . $i . ".jpg'>";
                }
                echo "</div>";
                echo "<div class='col-sm-3'>";
                for ($i = 1; $i <= 20; $i++) {
                    echo "<img id='myImg' class='img_gallery myImages' src='../scr/gallery/col2/" . $i . ".jpg'>";
                }
                echo "</div>";
                echo "<div class='col-sm-3'>";
                for ($i = 1; $i <= 19; $i++) {
                    echo "<img id='myImg' class='img_gallery myImages' src='../scr/gallery/col3/" . $i . ".jpg'>";
                }
                echo "</div>";
                echo "<div class='col-sm-3'>";
                for ($i = 1; $i <= 16; $i++) {
                    echo "<img id='myImg' class='img_gallery myImages' src='../scr/gallery/col4/" . $i . ".jpg'>";
                }
                echo "</div>";
                ?>
            </div>

            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
            </div>
        </div>
    </div>

    <br><br><br><br><br><br>

    <!----------------------------------- Back to Top Button ----------------------------------->

    <a id="button"></a>


    <!----------------------------------- JS Link ----------------------------------->

    <script src="../myjs.js"></script>

    <!-- Smooth Scroll -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Back to Top Button -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/9d6eac584e.js" crossorigin="anonymous"></script>

    <!----------------------------------- Footer ----------------------------------->

    <footer>
        <h6 class="text-center">copyright © adlensture</h6>

        <div class="unlinks">
            <a target="_blank" href="https://www.facebook.com/iloveadlensture/"><i class="fab fa-facebook-square fa-lg my_footer"></i></a>
            <a target="_blank" href=mailto:adlenstureofficial@gmail.com?><i class="fas fa-envelope fa-lg my_footer"></i></a>
            <a target="_blank" href="https://github.com/suphakit01/adlensture"><i class="fab fa-github-square fa-lg my_footer"></i></a>
        </div>
    </footer>


    <!----------------------------------- Back to Top Button ----------------------------------->

    <a id="button"></a>


    <!----------------------------------- Click Full Screen IMG ----------------------------------->

    <script>
        // create references to the modal...
        var modal = document.getElementById('myModal');
        // to all images -- note I'm using a class!
        var images = document.getElementsByClassName('myImages');
        // the image in the modal
        var modalImg = document.getElementById("img01");

        // Go through all of the images with our custom class
        for (var i = 0; i < images.length; i++) {
            var img = images[i];
            // and attach our click listener for this image.
            img.onclick = function(evt) {
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }
        }

        var span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>



    <!----------------------------------- JS Link ----------------------------------->

    <script src="myjs.js"></script>

    <!-- Smooth Scroll -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Back to Top Button -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/9d6eac584e.js" crossorigin="anonymous"></script>
</body>

</html>