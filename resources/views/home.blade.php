<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300;400;500;600;700&family=Fahkwang:wght@200;300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  
  <style>
    body {
      position: relative;
      width: 100%;
      height: 100vh;
      margin: 0;
    }
    #hero{
      position: relative; 
      height: 100vh;
      color: white;

    }
    #hero img{
      position: absolute;
      top: 0;
      z-index: -1;
      object-fit: cover;
      width: 100%;
      height: 100vh;
      filter: brightness(70%);
    }
    #hero .hero-content{
      position: absolute;
      top: 0;
      
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center
      
    }
    #hero .center-text{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
    }
    #hero .center-text h1{
      margin: 0.5rem 0;
      font-family: 'Cormorant', serif;
      font-size: 5rem;
    }
    #hero .center-text .line{
      height: 0.07rem;
      width: 80%;
      background-color: white;
    }
    #hero .center-text h3{
      font-family: 'Fahkwang', sans-serif;
      font-weight: 200;
    }

    #hero .hero-btn{
      position: absolute;
      bottom: 2rem;
      right: 2rem;
    }
    #hero .hero-btn button{
      width: 10rem;
      height: 3rem;
      background-color: transparent;
      color: white;
      border: 0.1rem solid white;
    }

    main {
      margin: 4rem 8rem 6rem 8rem;
      font-family: 'Roboto', sans-serif;
    }
    section {
      margin-bottom: 4rem;
    }
    section h2{
      margin: 0 0 1rem 0; 
      font-size: 2.5rem;
    }
    .category-list {
      display: flex;
    }
    .category-content{
      position: relative;
      width: 22rem;
      height: 4.5rem;
      border: none;
      margin-right: 2rem;
    }
    .category-content img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 1.5rem;
      filter: brightness(50%);
    }
    .category-content p{
      position: absolute;
      bottom: 0.2rem;
      right: 1rem;
      color: white;
      font-size: 1.3rem;
      margin: 0;
    }

    .explore {
      /* background-color: #00B2FF; */

    }
    .explore-container {
      display: flex;
      flex-wrap: wrap;
      row-gap: 4rem;
      justify-content: space-between;
    }
    .explore-content {
      position: relative;
      background-color: antiquewhite;
      width: 20rem;
      height: 20rem;
    }
    .explore-content img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: brightness(70%);
    }
    .explore-content p{
      position: absolute;
      bottom: 0.2rem;
      left: 1rem;
      height: 3.3rem;
      color: white;
      font-size: 1.3rem;
      margin: 0;
      white-space: normal;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    .explore-content .floating-detail {
      display: none;
    }
    .explore-content .floating-detail-active {
      display: block;
      background-color: #00B2FF;
    }

    footer{
      background-color: lightgray;
      height: 3rem;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
  <link rel="stylesheet" href="{{URL::asset('css/')}}">
</head>
<body>
  @include('/components/navbar')

  <div id="hero">
    <img src="{{url('images/stone-wang-2BZ5vmNgyb8-unsplash.jpg')}}" alt="">
    <div class="hero-content">
      <div class="center-text">
        <h1>PANDA MERAH</h1>
        <div class="line"></div>
        <h3>Hal unik tentang panda merah</h3>
      </div>
    </div>
    <div class="hero-btn">
      <button class="generate-btn">Generate Random Fact</button>
    </div>
  </div>

  <main>
    <section id="category">
      <h2>Category</h2>
      <div class="category-list">
        <div class="category-content">
          <img src="{{url('images/pavan-gupta-_HzlOHmboSk-unsplash.jpg')}}" alt="">
          <p>Budaya</p>
        </div>
        <div class="category-content">
          <img src="{{url('images/pavan-gupta-_HzlOHmboSk-unsplash.jpg')}}" alt="">
          <p>Makanan dan Minuman</p>
        </div>
        <div class="category-content">
          <img src="{{url('images/pavan-gupta-_HzlOHmboSk-unsplash.jpg')}}" alt="">
          <p>Sejarah</p>
        </div>

      </div>
    </section>

    <section class="explore">
      <h2>Explore</h2>
      <div class="explore-container">
        <div class="explore-content">
          <a href="/post">
            <img src="{{url('images/pavan-gupta-_HzlOHmboSk-unsplash.jpg')}}" alt="">
            <p>Asal nama nusantara adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, iusto mollitia optio atque perferendis explicabo exercitationem nobis adipisci inventore accusamus illo illum? Exercitationem earum libero consectetur corrupti ullam eius cupiditate.</p>
            <div class="floating-detail">
              <span>by ranfa | May 19, 2022</span>
              <p>Asal nama nusantara adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, iusto mollitia optio atque perferendis explicabo exercitationem nobis adipisci inventore accusamus illo illum? Exercitationem earum libero consectetur corrupti ullam eius cupiditate.</p>
            </div>
          </a>
        </div>
        <div class="explore-content">
          <a href="/post">
            <img src="{{url('images/pavan-gupta-_HzlOHmboSk-unsplash.jpg')}}" alt="">
            <p>Asal nama nusantara adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, iusto mollitia optio atque perferendis explicabo exercitationem nobis adipisci inventore accusamus illo illum? Exercitationem earum libero consectetur corrupti ullam eius cupiditate.</p>
            <div class="floating-detail">
              <span>by ranfa | May 19, 2022</span>
              <p>Asal nama nusantara adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, iusto mollitia optio atque perferendis explicabo exercitationem nobis adipisci inventore accusamus illo illum? Exercitationem earum libero consectetur corrupti ullam eius cupiditate.</p>
            </div>
          </a>
        </div>
        <div class="explore-content">
          <a href="/post">
            <img src="{{url('images/pavan-gupta-_HzlOHmboSk-unsplash.jpg')}}" alt="">
            <p>Asal nama nusantara adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, iusto mollitia optio atque perferendis explicabo exercitationem nobis adipisci inventore accusamus illo illum? Exercitationem earum libero consectetur corrupti ullam eius cupiditate.</p>
            <div class="floating-detail">
              <span>by ranfa | May 19, 2022</span>
              <p>Asal nama nusantara adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, iusto mollitia optio atque perferendis explicabo exercitationem nobis adipisci inventore accusamus illo illum? Exercitationem earum libero consectetur corrupti ullam eius cupiditate.</p>
            </div>
          </a>
        </div>
        <div class="explore-content">
          <a href="/post">
            <img src="{{url('images/pavan-gupta-_HzlOHmboSk-unsplash.jpg')}}" alt="">
            <p>Asal nama nusantara adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, iusto mollitia optio atque perferendis explicabo exercitationem nobis adipisci inventore accusamus illo illum? Exercitationem earum libero consectetur corrupti ullam eius cupiditate.</p>
            <div class="floating-detail">
              <span>by ranfa | May 19, 2022</span>
              <p>Asal nama nusantara adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, iusto mollitia optio atque perferendis explicabo exercitationem nobis adipisci inventore accusamus illo illum? Exercitationem earum libero consectetur corrupti ullam eius cupiditate.</p>
            </div>
          </a>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>created </p>
  </footer>

  <script>
    function myFunction() {
      var element = document.getElementById("myDIV");
      element.classList.toggle("mystyle");
    }
  </script>
</body>
</html>