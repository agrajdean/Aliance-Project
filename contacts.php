<?php 
$page_title = "Контакты";
$header_style = "page-header-bg-grey";
include_once("header-page.php"); ?> 
<div class="container">
        <div class="contacts-top">
          <a href="tel:+74996861014" class="contacts-phone">+7 (999) 686-10-14</a>
          <div class="footer-info">
            <svg class="address-icon" width="36" height="36">
              <use href="img/sprite.svg#address"></use>
            </svg>
            <address class="contacts-info">
              г. Мосвка, Холодильный пер. 4к1с8
            </address>
          </div>
          <div class="footer-info">
            <svg class="mail-icon" width="36" height="36">
              <use href="img/sprite.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="contacts-info">
              a.dragunov@tdaliance.ru
            </a>
          </div>
          <div class="footer-social">
            <a href="#" class="footer-social-link"
              ><svg class="footer-social-icon" width="36" height="36">
                <use href="img/sprite.svg#vk"></use>
              </svg>
            </a>
            <a href="#" class="footer-social-link">
              <svg class="footer-social-icon" width="36" height="36">
                <use href="img/sprite.svg#inst"></use>
              </svg>
            </a>
          </div>
          <div class="contacts-image">
          </div>
        </div>
      <picture>
        <source srcset="img/map.webp" type="image/webp">
        <source srcset="img/map.jpg" type="image/jpg">
        <img src="img/map.jpg" alt="map" class="contacts-image">
      </picture>
      </div> 
<?php include_once("footer.php"); ?>
