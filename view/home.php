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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- cdn icon link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file  -->
    <link rel="stylesheet" href="../css/home.css">

</head>

<body>

    <!-- home section start here  -->

    <section class="home" id="home">
        <div class="homeContent">
            <h2>Kue Lezat Untuk Semua Orang</h2>
            <p>Kue-kue kami menghadirkan kombinasi sempurna antara cita rasa manis yang memanjakan lidah</p>
            <div class="home-btn">
                <a href="#blogs"><button>Lihat Kue</button></a>
            </div>
        </div>
    </section>

    <!-- home section end here  -->

    <!-- blogs section start here  -->

    <section class="blogs" id="blogs">

        <div class=" swiper blogs-row">
            <div class="swiper-wrapper">

                <div class=" swiper-slide box">
                    <div class="img">
                        <div class="border-img">
                            <div class="product-churros"></div>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Churros Coklat</h3>
                        <p>Churros adalah makanan penutup yang terkenal dan berasal dari Spanyol. Asal usulnya dapat ditelusuri hingga ke negara-negara Eropa abad ke-16, di mana makanan yang mirip dengan churros ditemukan dalam budaya Mesoamerika.</p>
                        <p>Konon, churros pertama kali dibuat oleh nelayan Spanyol yang mengarungi samudra Atlantik. Mereka menggunakan adonan tepung terigu sederhana yang dimasukkan ke dalam tabung kertas dan digoreng hingga kecokelatan. Makanan ini kemudian mendapatkan popularitas di Spanyol dan menjadi hidangan yang dijual di pasar dan acara-acara keagamaan.</p>
                        <a href="#detailProdukChurros" class="btn churros">Lebih Detail</a>
                    </div>
                </div>

                <div class=" swiper-slide box">
                    <div class="img">
                        <div class="border-img">
                            <div class="product-donat"></div>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Donat Mini</h3>
                        <p>Donat (adonan bulat) adalah penganan yang digoreng, dibuat dari adonan tepung terigu, gula pasir, kuning telur, ragi roti, dan mentega. Donat yang paling umum adalah donat dengan bentuk seperti cincin dan ada lubang di tengahnya, biasanya ditaburi dengan mesis atau gula halus. Sedangkan donat dengan bentuk bundar diisi isian manis, seperti selai, jelly, krim, cokelat, dan custard.
                            <br>
                            Donat sama sekali berbeda dengan bagel—mulai dari bahan pembuatan, teknik pembuatan hingga cara menghidangkan, dan juga toping yang digunakan walaupun keduanya memiliki bentuk yang hampir sama.
                        </p>
                        <a href="#detailProdukDonat" class="btn donat">Lebih Detail</a>
                    </div>
                </div>

                <div class=" swiper-slide box">
                    <div class="img">
                        <div class="border-img">
                            <div class="product-kulitLumpia"></div>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Keripik Kulit Lumpia</h3>
                        <p>Makanan khas Semarang yang terkadang dieja sebagai “lun pia” ini adalah sejenis jajanan tradisional perpaduan Tionghoa-Jawa. Tapi tak banyak yang tahu, bahwa lumpia Semarang ini memiliki sejarah panjang, hingga akhirnya menjadi makanan yang digemari masyarakat.
                            <br>
                            Lumpia menjadi makanan khas Semarang bermula dari perkawinan kuliner Tiongkok dan Jawa sejak ratusan lalu.
                            Sajian bercitarasa manis nan gurih berisi rebung, ayam, udang dan digulung kulit tipis berbahan dasar terigu ini menghiasi di setiap sudut ibu kota Provinsi Jawa Tengah, Semarang. Kudapan ini begitu populer dari dijajakan di kaki lima, restoran, hingga menjadi buah tangan khas kota ini.
                        </p>
                        <a href="#detailProdukLumpia" class="btn lumpia">Lebih Detail</a>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="detail-churros" id="detailProdukChurros">
            <h1>Churros Coklat</h1>
            <p>Churros adalah makanan penutup yang terkenal dan berasal dari Spanyol. Asal usulnya dapat ditelusuri hingga ke negara-negara Eropa abad ke-16, di mana makanan yang mirip dengan churros ditemukan dalam budaya Mesoamerika.
                <br>
                Konon, churros pertama kali dibuat oleh nelayan Spanyol yang mengarungi samudra Atlantik. Mereka menggunakan adonan tepung terigu sederhana yang dimasukkan ke dalam tabung kertas dan digoreng hingga kecokelatan. Makanan ini kemudian mendapatkan popularitas di Spanyol dan menjadi hidangan yang dijual di pasar dan acara-acara keagamaan.
                <br>
                Churros pun menyebar ke Amerika Latin dan negara-negara lain di seluruh dunia melalui kolonialisasi Spanyol. Di beberapa tempat, churros disajikan dengan aneka saus atau dilumuri dengan gula dan kayu manis untuk memberikan rasa manis yang khas.
                <br>
                Hingga saat ini, churros masih menjadi makanan penutup yang populer di Spanyol dan banyak negara di seluruh dunia. Mereka sering disajikan panas dan segar sebagai hidangan penutup atau camilan yang lezat. Bentuk panjang dan bergelombang dari churros menjadikannya mudah untuk dicelupkan ke dalam saus cokelat atau krim.
                <br>
                Dengan sejarah dan warisan yang kaya, churros terus memikat orang-orang dengan kelezatan dan tekstur garingnya. Makanan ini telah menjadi ikonik dan menjadi favorit di berbagai festival makanan, karnaval, dan acara sosial di seluruh dunia.
            </p>
            <!-- <button class="like">Suka</button> -->
            <a href="#blogs"><button class="close-churros">Tutup</button></a>
        </div>

        <div class="detail-donat" id="detailProdukDonat">
            <h1>Donat Mini</h1>
            <p>Donat bisa dibentuk dengan menyatukan kedua sisi adonan berbentuk persegi panjang hingga membentuk cincin atau menggunakan pemotong otomatis yang sekaligus membuat lubang di tengah adonan donat. Lubang pada donat berbentuk cincin dulunya dimaksudkan agar donat cepat matang sewaktu digoreng. Adonan donat yang tersisa sewaktu membuat donat berbentuk cincin sering dijual sebagai doughnut hole atau dicampurkan lagi ke dalam adonan untuk membuat donat baru.
                <br>
                Adonan donat terdiri dari dua jenis, adonan yang dibangunkan dengan ragi seperti adonan roti, dan adonan kental seperti adonan kue. Donat dari adonan tepung yang memakai ragi biasanya kadar lemak 25% dari berat donat, sedangkan donat adonan cake mengandung kadar lemak 20%. Donat dari adonan cake digoreng selama 90 detik bolak-balik di dalam minyak bersuhu antara 190℃ hingga 198℃. Sedangkan donat dari adonan tepung yang dibangunkan oleh ragi memerlukan waktu penggorengan yang lebih lama (sekitar 150 detik) di dalam minyak bersuhu 182℃ hingga 190℃.
                <br>
                Setelah matang, permukaan donat bisa dihias dengan taburan gula icing atau gula halus bercampur bubuk kayu manis bisa juga ditaburi dengan meses, dicelup glasir berupa campuran madu dan gula, disiram coklat cair dan ditaburi coklat butir beraneka warna di atasnya. Selai, jelly atau custard yang menjadi isi donat disuntikkan dengan alat spuit.
                <br>
                Gerai donat dan toko roti memiliki banyak variasi bentuk donat, mulai dari donat berbentuk kuku beruang, persegi panjang yang disebut long john, gelang yang merupakan untaian beberapa bulatan kecil (Pon de ring, merek dagang Mister Donut), hingga donat berbentuk seperti tali yang berpilin (crullers). Donat berukuran sekali suap dinamakan Munchkin di Dunkin' Donuts atau sebagai Timbit di restoran Tim Hortons Kanada.
                <br>
                Donat sangat lekat dengan kebudayaan Amerika seperti halnya hamburger. Di Amerika Utara sampai tercipta stereotip polisi patroli sebagai pemakan donat. Gerai donat sering buka sepanjang malam dan polisi sering mengunjungi gerai donat yang menyediakan donat dan kopi gratis. Homer Simpson dan Kepala Polisi Clancy Wiggum dalam film kartun The Simpsons adalah penggemar berat makan donat
            </p>
            <!-- <button class="like">Suka</button> -->
            <a href="#blogs"><button class="close-donat">Tutup</button></a>
        </div>

        <div class="detail-lumpia" id="detailProdukLumpia">
            <h1>Keripik Kulit Lumpia</h1>
            <p>Penamaan lumpia atau lunpia berasal dari dialek Hokkian, “lun” atau “lum” berarti lunak dan “pia” artinya kue. Pada awalnya lumpia Semarang tidak digoreng, sehingga sesuai dengan makna lumpia, kue yang lunak. Modifikasi ini terjadi ketika kuliner Tiongkok dan Jawa berpadu. Citarasa lumpia yang manis juga bagian dari penyesuaian lidah masyarakat setempat. Dirangkum dari banyak sumber, makanan khas kota Semarang ini hadir pertama kali pada abad ke 19 dan merupakan salah satu contoh perpaduan budaya asli Tiong Hoa-Jawa yang serasi dalam cita rasa.
                <br>
                Semua bermula saat Tjoa Thay Joe yang lahir di Fujian, memutuskan untuk hijrah dan tinggal di Semarang dengan membuka bisnis makanan khas Tiong Hoa berupa makanan pelengkap berisi daging babi dan rebung. Tjoa Thay Joe kemudian bertemu dengan Mbak Wasih, orang asli Jawa yang juga berjualan makanan yang hampir sama, hanya saja rasanya lebih manis dan berisi kentang juga udang.
                <br>
                Seiring waktu bejalan, mereka ternyata saling jatuh cinta dan kemudian menikah. Bisnis yang dijalankan pun akhirnya dilebur menjadi satu dengan sentuhan perubahan yang malah makin melengkapi kesempurnaan rasa makanan lintas budaya ini. Isi dari kulit lumpia diubah menjadi ayam atau udang yang dicampur dengan rebung, serta dibungkus dengan kulit lumpia khas Tiong Hoa. Keunggulannya adalah udang dan telurnya yang tidak amis, rebungnya manis, serta kulit lumpia yang renyah jika digoreng.
                <br>
                Jajanan ini biasanya dipasarkan di Olympia Park, pasar malam Belanda tempat biasa mereka berjualan kala itu. Oleh karena itu makanan ini dikenal dengan nama lumpia. Usahanya makin besar, hingga dapat diteruskan oleh anak-anaknya, Siem Gwan Sing, Siem Hwa Noi yang membuka cabang di Mataram, dan Siem Swie Kiem yang meneruskan usaha warisan ayahnya di Gang Lombok no 11.
                <br>
                Tanpa disangka, lumpia buatan mereka menjadi primadona di kalangan keturunan Tionghoa maupun masyarakat pribumi. Hingga saat ini, lumpia Semarang dikenal luas hingga seluruh Indonesia. Sajian ini terkenal dengan rasa manis dan gurih yang disajikan dengan saus manis nan kental dengan acar dan lokio. Dalam perkembangannya kini, penyajian lumpia ada dua pilihan, lumpia goreng dan lumpia basah
            </p>
            <!-- <button class="like">Suka</button> -->
            <a href="#blogs"><button class="close-lumpia">Tutup</button></a>
        </div>

    </section>

    <!-- blogs section ends here  -->

    <!-- newsletter section start here  -->

    <section class="newsletter">
        <form action="">
            <h3>Beri saran untuk website ini</h3>
            <input type="email" name="" placeholder="Masukan email mu..." id="" class="box">
            <input type="text" name="" placeholder="Tuliskan saran mu..." id="" class="box">
            <a href="#"><button type="button" class="box2">Kirim</button></a>
        </form>
    </section>

    <!-- newsletter section ends here  -->

    <!-- review section start here  -->
    <section class="review" id="review">
        <div class="heading">
            <h2>Review Pembeli</h2>
        </div>

        <div class="swiper review-row">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="client-review">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, perferendis architecto quasi eveniet aliquam sed?</p>
                    </div>
                    <div class="client-info">
                        <div class="img">
                            <img src="../images/client1.jpg" alt="">
                        </div>
                        <div class="clientDetailed">
                            <h3>Pertiwi</h3>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="client-review">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, perferendis architecto quasi eveniet aliquam sed?</p>
                    </div>
                    <div class="client-info">
                        <div class="img">
                            <img src="../images/client1.jpg" alt="">
                        </div>
                        <div class="clientDetailed">
                            <h3>Pertiwi</h3>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="client-review">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, perferendis architecto quasi eveniet aliquam sed?</p>
                    </div>
                    <div class="client-info">
                        <div class="img">
                            <img src="../images/client1.jpg" alt="">
                        </div>
                        <div class="clientDetailed">
                            <h3>Hardy Devid</h3>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="client-review">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, perferendis architecto quasi eveniet aliquam sed?</p>
                    </div>
                    <div class="client-info">
                        <div class="img">
                            <img src="../images/client1.jpg" alt="">
                        </div>
                        <div class="clientDetailed">
                            <h3>Hardy Devid</h3>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends here  -->

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
    <script src="../js/home.js"></script>

</body>

</html>