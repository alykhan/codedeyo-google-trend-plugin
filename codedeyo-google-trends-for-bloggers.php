<?php
/*
Plugin Name: CodeDeyo Google Trends for bloggers
Plugin URI: https://wordpress.org/plugins/codedeyo-google-trends-for-bloggers/
Version: 1.52
Description: A cool plugin that shows trending searches below your editor.
Author: Adeleye Ayodeji
Author URI: http://adeleyeayodeji.com/
Text Domain: codedeyo-google-trends-for-bloggers
Domain Path: /languages
*/

/*  Copyright (c) 2019 by Adeleye Ayodeji (https://adeleyeayodeji.com/)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/


// Should come after the visual editor
add_action( 'edit_form_after_editor', 'codedeyo_google_trends_for_bloggers' );

  //Loading custom script for the plugin
  function load_custom_wp_admin_style(){
    //Loading my personal styles
      wp_enqueue_style( 'style', plugin_dir_url( __DIR__ ).'codedeyo-google-trends-for-bloggers/css/style.css' );
       wp_enqueue_style( 'style-new', plugin_dir_url( __DIR__ ).'codedeyo-google-trends-for-bloggers/css/style_new.css' );
      //Loading google trends result js
      wp_enqueue_script( 'google-trends-js', 'https://ssl.gstatic.com/trends_nrtr/1754_RC01/embed_loader.js' );
      wp_enqueue_script( 'google-trends-js-2', plugin_dir_url( __DIR__ ).'codedeyo-google-trends-for-bloggers/js/google-trends.js' );
  
  }
  // Action for the above functions
  add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');


//The function that excute the query
function codedeyo_google_trends_for_bloggers() {
  ?>
  <!-- The Plusgin container start here -->
  <div class="holder">
     <!-- The Title container start here -->
    <div class="holder2" style="">CodeDeyo Google Trends for bloggers | Daily Searches</div>
     <!-- The Title container ends here -->
      <div class="selectpart">
        <select class="selectparttwo">
        	<option>Choose Country</option>
          <option onclick="US()">United State</option>
          <option onclick="NG()">Nigeria</option>
          <option onclick="AU()">Australia</option>
          <option onclick="AR()">Argentina</option>
          <option onclick="CA()">Canada</option>
          <option onclick="GB()">United kingdom</option>
          <option onclick="ZA()">South Africa</option>
        </select>
      </div>
      <!-- The Trends result generated by google container start here -->
    <script type="text/javascript"> trends.embed.renderWidget("dailytrends", "", {"geo":"NG","guestPath":"https://trends.google.com:443/trends/embed/"}); </script> 
     <!-- The Trends result generated by google container start here -->
  </div>
   <!-- The Plusgin container ends here -->
   
    <!-- Thanks guys for using my plugin. Happy Coding@! -->
  <?php
}

