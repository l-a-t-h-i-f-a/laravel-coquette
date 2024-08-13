<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Star</title>
    <link rel="stylesheet" href="{{asset('AllStar')}}/style-landpage.css">
</head>
<body>
    <section>
        <div class="circle"></div>
        <header>
            <a href="#"><img src="{{asset('AllStar')}}/assets/img/logo.png" class="logo"></a>
        </header>
        <div class="content">
            <div class="textBox">
            <h2>Find Your Fluffy Friend <br>It's <span><img src="{{asset('AllStar')}}/assets/img/logo.png" alt="AllStar" style="vertical-align: middle; width: 350px;"></span></h2>
                <p>Selamat datang di toko kami, surga bagi para pecinta boneka dan mainan koleksi! Kami 
                    menawarkan berbagai macam boneka berkualitas tinggi mulai dari plushy yang lembut dan lucu, 
                    nendoroid yang menggemaskan, action figure yang detail, hingga doll yang cantik dan elegan. 
                    Temukan karakter favorit Anda dari berbagai serial anime, film, dan komik terkenal di sini. 
                    Kami berkomitmen untuk memberikan produk terbaik dengan harga yang kompetitif dan layanan 
                    pelanggan yang memuaskan. Jadikan koleksi Anda lebih berwarna dengan boneka-boneka unik 
                    dari toko kami</p>

                <a href="{{ route('login') }}">Get Started</a>
            </div>
            <div class="imgBox">
                <img src="{{asset('AllStar')}}/assets/img/img1.png" class="starbucks">
            </div>
        </div>
        <ul class="thumb">
            <li><a href="#"><img src="{{asset('AllStar')}}/assets/img/thumb1.png" onclick="imgSlider('./assets/img/img1.png'); changeCircleColor('#017143') " ></a></li>
            <li><a href="#"><img src="{{asset('AllStar')}}/assets/img/thumb2.png" onclick="imgSlider('./assets/img/img2.png'); changeCircleColor('#eb7495') " ></a></li>
            <li><a href="#"><img src="{{asset('AllStar')}}/assets/img/thumb3.png" onclick="imgSlider('./assets/img/img3.png'); changeCircleColor('#d752b1') " ></a></li>
        </ul>
        <ul class="sci">
            <li><a href="#"><img src="{{asset('AllStar')}}/assets/img/facebook.png"></a></li>
            <li><a href="#"><img src="{{asset('AllStar')}}/assets/img/twitter.png"></a></li>
            <li><a href="#"><img src="{{asset('AllStar')}}/assets/img/instagram.png"></a></li>
        </ul>
    </section>

    <script type="text/javascript">
        function imgSlider(anything){
            document.querySelector('.starbucks').src = anything;
        }
        function changeCircleColor(color){
            const circle = document.querySelector('.circle');
            circle.style.background = color;
        }

    </script>
</body>
</html>