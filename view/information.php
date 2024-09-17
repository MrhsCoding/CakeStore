<?php
require "../model/function.php";
require "navbar.php";
if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeMade</title>

    <!-- swiper link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- cdn icon link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file  -->
    <link rel="stylesheet" href="../css/products.css">

</head>

<body>

    <!-- Search Bar Start -->

    <div class="search">
        <div class="cari">
            <i class="fas fa-search"></i><input type="search" placeholder="Cari Menu">
        </div>
    </div>

    <!-- Search Bar End -->

    <!-- product section start here  -->

    <section class="product" id="product">

        <div class="heading">
            <h2>Berbagai Macam Kue</h2>
        </div>
        <div class="swiper product-row">
            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="img">
                        <div class="border-gambar">
                            <div class="churros"></div>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3>Churros Coklat</h3>
                        <p>Nikmati kenikmatan Spanyol dengan churros kami yang renyah di luar dan lembut di dalam.<br>Melt in your mouth experience!</p>
                        <!-- <div class="orderNow">
                            <button>Pesan Sekarang</button>
                        </div> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="img">
                        <div class="border-gambar">
                            <div class="donat"></div>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3>Donat Mini</h3>
                        <p>Tersedia dalam berbagai rasa menggoda, donat mini kami merupakan teman sempurna untuk memanjakan lidah anda</p>
                        <!-- <div class="orderNow">
                            <button>Pesan Sekarang</button>
                        </div> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="img">
                        <div class="border-gambar">
                            <div class="lumpia"></div>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3>Keripik Lumpia</h3>
                        <p>Hadiahkan diri Anda dengan kegurihan keripik kulit lumpia kami. Rasanya yang renyah pasti akan membuat Anda ketagihan!</p>
                        <!-- <div class="orderNow">
                            <button>Pesan Sekarang</button>
                        </div> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="img">
                        <div class="border-gambar">
                            <div class="lumpia"></div>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3>Keripik Lumpia</h3>
                        <p>Hadiahkan diri Anda dengan kegurihan keripik kulit lumpia kami. Rasanya yang renyah pasti akan membuat Anda ketagihan!</p>
                        <!-- <div class="orderNow">
                            <button>Pesan Sekarang</button>
                        </div> -->
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section class="product" id="product">

        <div class="heading">
            <h2>Berbagai Macam Camilan</h2>
        </div>
        <div class="swiper product-row">
            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="img">
                        <div class="border-gambar">
                            <div class="churros"></div>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3>Churros Coklat</h3>
                        <p>Nikmati kenikmatan Spanyol dengan churros kami yang renyah di luar dan lembut di dalam.<br>Melt in your mouth experience!</p>
                        <!-- <div class="orderNow">
                            <button>Pesan Sekarang</button>
                        </div> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="img">
                        <div class="border-gambar">
                            <div class="donat"></div>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3>Donat Mini</h3>
                        <p>Tersedia dalam berbagai rasa menggoda, donat mini kami merupakan teman sempurna untuk memanjakan lidah anda</p>
                        <!-- <div class="orderNow">
                            <button>Pesan Sekarang</button>
                        </div> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="img">
                        <div class="border-gambar">
                            <div class="lumpia"></div>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3>Keripik Lumpia</h3>
                        <p>Hadiahkan diri Anda dengan kegurihan keripik kulit lumpia kami. Rasanya yang renyah pasti akan membuat Anda ketagihan!</p>
                        <!-- <div class="orderNow">
                            <button>Pesan Sekarang</button>
                        </div> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="img">
                        <div class="border-gambar">
                            <div class="lumpia"></div>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3>Keripik Lumpia</h3>
                        <p>Hadiahkan diri Anda dengan kegurihan keripik kulit lumpia kami. Rasanya yang renyah pasti akan membuat Anda ketagihan!</p>
                        <!-- <div class="orderNow">
                            <button>Pesan Sekarang</button>
                        </div> -->
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section class="product" id="product">

        <div class="heading">
            <h2>Berbagai Macam Jamu</h2>
        </div>
        <div class="swiper product-row">
            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="img">
                        <div class="border-gambar">
                            <div class="churros"></div>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3>Churros Coklat</h3>
                        <p>Nikmati kenikmatan Spanyol dengan churros kami yang renyah di luar dan lembut di dalam.<br>Melt in your mouth experience!</p>
                        <!-- <div class="orderNow">
                            <button>Pesan Sekarang</button>
                        </div> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="img">
                        <div class="border-gambar">
                            <div class="donat"></div>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3>Donat Mini</h3>
                        <p>Tersedia dalam berbagai rasa menggoda, donat mini kami merupakan teman sempurna untuk memanjakan lidah anda</p>
                        <!-- <div class="orderNow">
                            <button>Pesan Sekarang</button>
                        </div> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="img">
                        <div class="border-gambar">
                            <div class="lumpia"></div>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3>Keripik Lumpia</h3>
                        <p>Hadiahkan diri Anda dengan kegurihan keripik kulit lumpia kami. Rasanya yang renyah pasti akan membuat Anda ketagihan!</p>
                        <!-- <div class="orderNow">
                            <button>Pesan Sekarang</button>
                        </div> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="img">
                        <div class="border-gambar">
                            <div class="lumpia"></div>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3>Keripik Lumpia</h3>
                        <p>Hadiahkan diri Anda dengan kegurihan keripik kulit lumpia kami. Rasanya yang renyah pasti akan membuat Anda ketagihan!</p>
                        <!-- <div class="orderNow">
                            <button>Pesan Sekarang</button>
                        </div> -->
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- product section end here  -->

    <!-- footer section start here  -->

    <footer class="footer" id="contact">
        <div class="box-container">
            <div class="mainBox">
                <div class="content">
                    <a href="#"><img src="images/logo.png" alt=""></a>
                    <h1 class="logoName"> HomeMade </h1>
                </div>
                <p>HomeMade, surganya makanan ringan! Kami menawarkan berbagai varian lezat, mulai dari manis yang memanjakan lidah, hingga pedas dan gurih yang menggugah selera. Harga semua produk kami juga telah disesuaikan dengan anggaran anak sekolahan, sehingga semua orang dapat merasakan kenikmatan tak terhingga dari makanan ringan buatan kami</p>
            </div>

            <div class="box">
                <h3>Quick link</h3>
                <a href="#home"> <i class="fas fa-arrow-right"></i>Home</a>
                <a href="#blogs"> <i class="fas fa-arrow-right"></i>Menu</a>
                <a href="#product"> <i class="fas fa-arrow-right"></i>Information</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fas fa-phone"></i>+62 81317022906</a>
                <a href="#"> <i class="fas fa-envelope"></i>ryanhandika712@gmail.com</a>
            </div>

        </div>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-whatsapp"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div>
        <div class="credit">
            thank you for coming here 😊
        </div>
    </footer>

    <!-- swiper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- custom js file  -->
    <script src="../js/products.js"></script>


</body>

</html>