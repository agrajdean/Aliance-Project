<?php 
$page_title = "Блог";
$header_style = "page-header-bg-image";
include_once("header-page.php");?>

<section class="section blog">
      <div class="container">
        <!-- Основной блок слайдера -->
        <div class="swiper blog-slider">
          <!-- Обёртка слайдера -->
          <div class="swiper-wrapper">
            <!-- Слайды -->
            <a href="#" class="swiper-slide blog-card">
              <img
                src="img/blog/blog-photo01.jpg"
                alt="blog-photo01"
                class="blog-card-image"
              />
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <img
                src="img/blog/blog-photo02.jpg"
                alt="blog-photo02"
                class="blog-card-image"
              />
              <h3 class="blog-card-title">
                Сложно сказать, почему жизнь прекрасна
              </h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса
                функционально разнесены на независимые элементы. Безусловно,
                высокотехнологичная...
              </p>
            </a>
            <a href="#" class="blog-card">
              <img
                src="img/blog/blog-photo01.jpg"
                alt="blog-photo01"
                class="blog-card-image"
              />
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- /.section blog -->

<?php include_once("footer.php"); ?>