<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Radiohead - In Rainbows</title>
    <meta name="keywords" content="radiohead, in rainbows, альбом, LP, CD, винил, купить, flac">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>" type="text/css" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
    <script type="text/javascript" src="script.js"></script>
  </head>
  <body>
  <?php get_header(); ?>
    <div class="container">
        <p class="videotitle">Check out official IN RAINBOWS music videos on YouTube:</p>
      <div class="videos">
        <button class="arrow left" onclick="prevSlide()">&#8249;</button>
        <div class="video-slide" id="videoSlide">
          <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/GoLJJRIWCLU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <div class="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/TNRCvG9YtYI?si=jN7P7zeL-940xeef" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
          <div class="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/8nTFjVm9sTQ?si=yLAv3DP1wkhzDK0G" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
          <div class="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/_uofQD-N6UI?si=_kJvjOSfnj9k2MLo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
          <div class="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/DV1hQSt2hSE?si=l-JOK9cBZwyKLYkO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
          <div class="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/5ZT_nrrpe8c?si=1Jv8DiKtJIrFDdlL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
        </div>
        <button class="arrow right" onclick="nextSlide()">&#8250;</button>
      </div>
      <div class="icons">
        <a href="https://store-eu.wasteheadquarters.com/products/in-rainbows?variant=15378641125450" class="icon">
        <img src="<?php echo get_template_directory_uri(); ?>/img/inrainbows.png" alt="IN RAINBOWS CD/LP">
        <span>IN RAINBOWS CD/LP</span>
        </a>
        <a href="https://store-eu.wasteheadquarters.com/products/despot-t-shirt" class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/POD-despot-black.jpg" alt="DESPOT TEE">
            <span>DESPOT T-shirt</span>
            </a>
            <a href="https://store-eu.wasteheadquarters.com/products/in-rainbows-disk-2-mp3" class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/img/disk2.png" alt="IN RAINBOWS disk 2 CD">
                <span>IN RAINBOWS DISK 2 MP3</span>
                </a>
                <a href="https://store-eu.wasteheadquarters.com/products/in-rainbows-songbook" class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/songbook.png" alt="IN RAINBOWS songbook">
                    <span>IN RAINBOWS Songbook</span>
                    </a>
      </div>
      <div class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/img/radiohead-2008-archive.jpg" alt="bandphoto">
          </div>
      <article class="text">
        <p>
            "In Rainbows," the seventh studio album by Radiohead, released in 2007, represents a pivotal moment in the band's discography and in the music industry at large. Known for its innovative release strategy, where fans could choose their own price for the digital download, "In Rainbows" challenged traditional music distribution models and garnered significant media attention. Musically, the album showcases Radiohead's unique ability to blend electronic elements with rock, creating a lush, immersive soundscape. Tracks like "15 Step," "Weird Fishes/Arpeggi," and "Reckoner" highlight the band's experimental nature while maintaining emotional depth and accessibility.
        </p>
        <br>
        <p>
            The album's lyrical themes revolve around existential introspection, love, and vulnerability, delivered through Thom Yorke's haunting vocals. The production, marked by its clarity and richness, allows each instrument to shine, creating a cohesive yet complex auditory experience. "In Rainbows" received widespread critical acclaim for its artistic innovation and emotional resonance, solidifying Radiohead's status as one of the most influential bands of their generation. The album not only left a lasting impact on fans but also set a new standard for how music could be shared and experienced in the digital age.
        </p>
      </article>
    </div>
<?php get_footer(); ?>
  </body>
</html>
