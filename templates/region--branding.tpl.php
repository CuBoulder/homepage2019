<?php
  global $base_url;
  $color = isset($logo_color) ? $logo_color : 'white';
  $logo = $base_url . '/' . drupal_get_path('theme', 'ucb') . '/images/cu-boulder-logo-text-' . $color . '.svg';
  $beboulder = $base_url . '/' . drupal_get_path('theme', 'ucb') . '/images/beboulder/be-boulder-' . $color . '.svg';

?>
<div class="background-color-black no-underline">
  <div class="container">
    <div class="homepage-brand-bar-container">
      <div class="homepage-logo">
        <a href="http://www.colorado.edu"><img  src="<?php print $logo; ?>" alt="University of Colorado Boulder" /></a>
      </div>




      <div class="mobile-menu-toggle menu-toggle">
        <button id="toggle" aria-haspopup="true" aria-expanded="false" aria-controls="mobile-menu" aria-label="Navigation"><i class="fa fa-reorder fa-fw" aria-hidden="true"></i><span class=" element-invisible">Menu </span></button>
      </div>

      <a href="https://www.colorado.edu/search" id="search-toggle" class="search-toggle" aria-haspopup="true" aria-expanded="false" aria-controls="search" aria-label="Search"><i class="fa fa-search fa-fw"></i><span class="element-invisible">Search </span></a>


    </div>
  </div>
</div>
