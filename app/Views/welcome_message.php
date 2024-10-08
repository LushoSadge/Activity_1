<?php

use CodeIgniter\Database\BaseUtils;
?>
<?= $this->extend('layout/main_layout') ?>

<?= $this->section('title') ?>
<title>GameWorld</title>
<?= $this->endSection('title') ?>
<?= $this->section('css') ?>
<?= $this->include('css/index_css') ?>
<?= $this->endSection('css') ?>

<?= $this->section('content') ?>
<section>
  <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg row5">
      <div class="header col-lg-9 p-3 p-lg-5 pt-lg-3">
        <h1 class="headings display-4 fw-bold lh-1 text-body-emphasis">Elevate Your Gaming Journey with Jethro's Barbie
          World’s Exclusive Collection</h1>
        <p class="lead mt-4">Explore a vast selection of Barbie-themed games and limited-edition collectibles, both
          in-game
          and physical. Whether you're looking for the latest titles or rare, one-of-a-kind
          items, Jethro's Barbie World has everything you need to showcase your passion for Barbie and
          stand out in the community.</p>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden">
            <img class="img-pin rounded-lg-1" src="<?= base_url('assets/images/home/homebarbie.png') ?>">
        </div>
    </div>

    <div class="container mt-5">
      <h2 class="pb-2 border-bottom">Jethro's Barbie Dolls</h2>
      <div class="row designs row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-3">
        <div class="col">
          <div class="card shadow-sm">
            <div class="card shadow">
              <img
                src="https://image.api.playstation.com/vulcan/ap/rnd/202405/2306/e940c07107a4cefbbedbbd53451e26f0dbf292dcfab6c307.png"
                alt="">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="card shadow">
              <img src="https://i.ebayimg.com/images/g/kLYAAOSwuwJkNaXz/s-l1200.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="card shadow">
              <img
                src="https://preview.redd.it/metaphor-refantazio-high-quality-poster-v0-tx2vj1xvl8wc1.jpeg?auto=webp&s=5d6dd13ff191638e666fdefaf0ec361cc73d70bd"
                alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="container-btn text-center mt-4">
        <a class="viewProducts" href="product.html">
          <button>Look at my Barbie Dolls</button>
        </a>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="album py-5 bg-body-tertiary">
    <h2 class="t-title">What Barbie enthusiasts say!</h2>
    <div class="container testimonial">
      <div class="text-box t1">"Jethro's Barbie World is a dream come true for Barbie fans! I found the perfect
        Barbie-themed games and exclusive collectibles that I couldn’t get anywhere else. The experience was seamless,
        and the selection is incredible. Jethro's Barbie World is my go-to for all things Barbie!" <span><br><br>-
          Dreya, Barbie Enthusiast</span></div>
      <div class="text-box t1">"I’m amazed at the limited-edition Barbie items available on Jethro's Barbie World. From
        exclusive in-game skins to real-life collectibles, they have everything a Barbie fan could dream of. Every
        purchase adds something special to my collection, whether I’m in-game or disp
        laying it at home!" <span><br><br>- Andrea, Happy Customer</span></div>
      <div class="text-box t1">"As a collector of Barbie memorabilia, Jethro's Barbie World’s limited-edition releases
        have been a game-changer. I’ve added exclusive in-game items and physical collectibles to my collection that I
        couldn’t find anywhere else. Jethro's Barbie World has truly leveled up my Barbie collection!" <span><br><br>-
          Emily, Barbie Collector</span></div>
    </div>
  </div>
</section>

<section class = "row5">
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row row1 flex-lg-row align-items-center g-5 py-5 ml-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img
          src="https://figurama-collectors.com/cdn/shop/products/03_76c2425f-2309-4248-998c-1264c4d37f13_5000x.png?v=1677490686"
          class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class=" coming-soon col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Unlock Exclusive Collectibles with GameWorld</h1>
        <p class="lead">Something big is coming to GameWorld! Get ready for the release of new limited-edition
          games and rare collectibles, both in-game and physical. Stay tuned for the launch, and be among the
          first to get your hands on these one-of-a-kind items!</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection('content') ?>