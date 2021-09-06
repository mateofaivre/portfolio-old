<div class="flex__container <?php  if($key % 2 == 0) echo '-light'; else echo '-dark'; if ($key !== 0) echo " animate--start"; else echo " flex--active" ?>" data-slide="<?php echo $key+1 ?>">
  <div class="flex__item -left">
    <div class="flex__content">
      <div class="text--sub"><?php echo $slide['type-projet'] ?></div>
      <div class="date-projet"><?php echo $slide['date-projet'] ?></div>
      <h1 class="text--big"><?php echo $slide['title'] ?></h1>
      <p class="text--normal"><?php echo $slide['subtitle'] ?></p>
      <?php if ($slide['savoir-plus'] == true) { ?>
        <a class='savoir-plus'>En savoir plus</a>
      <?php } ?>
    </div>
    <p class="text__background"><?php echo explode(' ',trim($slide['title']))[0] ?></p>
  </div>
  <div class="overlayy">
  <?php if($slide['overlay'] == true) { ?>
      <i class="fal fa-times"></i>
      <?php if ($slide['overlay-slider'] == true) { ?>
        <!-- Swiper -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <?php for ($i=0; $i < count($slide['overlay-text']); $i++) { ?>
              <div class="swiper-slide">
              <?php if ($slide['overlay-media-type'][$i] == 'video') { ?>
                <video class="overlay-video" controls src="css/video/<?php echo $slide['overlay-media-name'][$i] ?>" preload="auto" alt="Fullscreen"></video>
              <?php }
              else { ?>
                <img class="overlay-img" src="css/img/<?php echo $slide['overlay-media-name'][$i] ?>" alt="">
              <?php } ?>                          
              <div class="overlay-text"><?php echo $slide['overlay-text'][$i]?></div>
            </div>
            <?php } ?>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <!-- <div class="swiper-pagination"></div> -->
        </div>
      <?php }
      else { ?>
        <div class="overlay-content">
          <?php if ($slide['overlay-media-type'] == 'video') { ?>
            <video class="overlay-video" controls src="css/video/<?php echo $slide['overlay-media-name'] ?>" preload="auto" alt="Fullscreen"></video>
          <?php }
          else { ?>
            <img class="overlay-img" src="css/img/<?php echo $slide['overlay-media-name'] ?>" alt="">
          <?php } ?>
            <div class="overlay-text"><?php echo $slide['overlay-text'] ?></div>
        </div>
      <?php } ?>
  <?php } ?>
  </div>
  <div class="flex__item -right"><img class="pokemon__img" src="css/img/<?php echo $slide['img-right'] ?>"/></div>  
</div>