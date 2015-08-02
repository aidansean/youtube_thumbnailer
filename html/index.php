<?php
$title = 'Youtube thumbnailer' ;
$js_scripts  = array('functions.js') ;
$stylesheets = array('style.css') ;
include_once($_SERVER['FILE_PREFIX'] . '/_core/preamble.php') ;
?>
  <div class="right">
    <h3>Youtube thumbnail service</h3>
    <div class="blurb">
      <p class="center">Type in the url of the youtube video:
      <input name="" id="youtube_url" value="" />
      <input type="submit" id="submit_change" value="Get images" />
      </p>
    </div>
  </div>
  
  <div class="right">
    <h3>The images</h3>
    <div class="blurb">
      <table id="image_table">
        <tbody>
          <tr>
            <td class="small_thumbnail"><img id="img_1" src="http://img.youtube.com/vi/paQ10POrZh8/1.jpg" width="120" height="90" alt="1"></td>
            <td class="small_thumbnail"><img id="img_2" src="http://img.youtube.com/vi/paQ10POrZh8/2.jpg" width="120" height="90" alt="2"></td>
            <td class="small_thumbnail"><img id="img_3" src="http://img.youtube.com/vi/paQ10POrZh8/3.jpg" width="120" height="90" alt="3"></td>
          </tr>
          <tr>
            <td class="large_thumbnail" colspan="3"><img id="img_0" src="http://img.youtube.com/vi/paQ10POrZh8/0.jpg" width="480" height="360" alt="0"></td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
<?php foot() ; ?>