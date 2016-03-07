<div id="videonest">
<?php if(has_items_for_loop()): ?>
 
   <!-- Loop for items -->
   <?php while(loop_items()): ?>

<div class="video-caption">
<h2>From the <?php echo item('Dublin Core', 'Title'); ?></h2>
<p><?php echo item('Dublin Core', 'Creator'); ?></p>
<p><?php echo item('Dublin Core', 'Description'); ?></p>
</div>

<!-- Begin VideoJS -->
  <div class="video-js-box">
    <!-- Using the Video for Everybody Embed Code http://camendesign.com/code/video_for_everybody -->
    <video class="video-js" width="400" height="303" controls preload poster="/iamaman/themes/mlk/media/<?php echo item('Dublin Core', 'Identifier'); ?>.jpg">
      <source src="/iamaman/themes/mlk/media/<?php echo item('Dublin Core', 'Identifier'); ?>.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
      <!-- Flash Fallback. Use any flash video player here. Make sure to keep the vjs-flash-fallback class. -->
      <object id="flash_fallback_1" class="vjs-flash-fallback" width="400" height="303" type="application/x-shockwave-flash"
        data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
        <param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
        <param name="allowfullscreen" value="true" />
        <param name="flashvars" value='config={"playlist":["http://dlxs.lib.wayne.edu/iamaman/themes/mlk/media/<?php echo item('Dublin Core', 'Identifier'); ?>.jpg", {"url": "http://dlxs.lib.wayne.edu/iamaman/themes/mlk/media/<?php echo item('Dublin Core', 'Identifier'); ?>.mp4","autoPlay":false,"autoBuffering":true}]}' />
        <!-- Image Fallback. Typically the same as the poster image. -->
        <img src="/iamaman/themes/mlk/media/<?php echo item('Dublin Core', 'Identifier'); ?>.jpg" width="400" height="303" alt="Poster Image"
          title="No video playback capabilities." />
      </object>
    </video>
    <!-- Download links provided for devices that can't play video in the browser. -->
    <p class="vjs-no-video"><strong>Download Video:</strong>
      <a href="/iamaman/themes/mlk/media/<?php echo item('Dublin Core', 'Identifier'); ?>.mp4">MP4</a>
      <!-- Support VideoJS by keeping this link. -->
      <a href="http://videojs.com">HTML5 Video Player</a> by VideoJS
    </p>
  </div>
  <!-- End VideoJS -->
</div>
    
   <?php endwhile; ?>

<?php endif; ?>