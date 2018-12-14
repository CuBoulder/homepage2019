<?php

/**
 * @file
 * Template for mobile search block.
 */

global $base_path;
$active = TRUE;
$options = $block->options;
$configs = $block->configs;
$active_option = key($options);
$active_configs = $configs[$active_option];
?>
  <div class="cu-search-box cu-search-box-small animated">
    <h2 class="element-invisible"><?php print t('Search'); ?></h2>
    <form class="cu-search-form" action="/search" method="get">
      <div class="search-form-wrapper">
        <div class="search-fields">
          <div class="cu-search clearfix">
            <div class="form-item form-type-textfield form-item-search-keys">
              <label class="element-invisible" for="edit-search-keys-mobile">Enter the terms you wish to search for. </label>
              <input placeholder="Search CU Boulder" type="search" id="edit-search-keys-mobile" name="cse" value="" size="15" maxlength="128" class="form-text">
            </div>
            <div class="form-actions form-wrapper" id="edit-actions-mobile"><input type="submit" id="edit-submit-mobile" name="op" value="Search" class="form-submit"></div>
          </div>
        </div>
        <div class="campus-links text-minify">
          <h3 class="display-inline h5">Other ways to search: </h3>
          <ul class="inline inline-menu">
            <li><a href="https://calendar.colorado.edu">Events Calendar</a></li>
            <li><a href="https://www.colorado.edu/map">Campus Map</a></li>
          </ul>
        </div>
      </div>
    </form>
  </div>
