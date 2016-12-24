<?php include 'header.php';?>
<script type="text/javascript">$('#scrollbox3').enscroll({
    showOnHover: true,
    verticalTrackClass: 'track3',
    verticalHandleClass: 'handle3'
});
</script>

<script src="<?=base_url()?>/js/jquery.swipebox.min.js"></script>

<div style= "margin-left:32%" class="page-title  col-xs-6 col-xs-offset-3">

  <h1 class="scroll-title">Gallery</h1>

  <div class="scrollBar scroll-pane  col-xs-8" id = "scrollbox">

  <ul>
      <li>
      <a href="big/image.jpg" class="swipebox" title="My Caption">
        <img src="<?=base_url()?>/images/8.jpg" alt="image" class="gallery-img left">
    </a>
    </li>
    <li>
    <a href="big/image.jpg" class="swipebox" title="My Caption">
      <img src="<?=base_url()?>/images/8.jpg" alt="image" class="gallery-img right">
  </a>
  </li>
  <li>
  <a href="big/image.jpg" class="swipebox" title="My Caption">
    <img src="<?=base_url()?>/images/8.jpg" alt="image">
</a>
</li>
<li>
<a href="big/image.jpg" class="swipebox" title="My Caption">
  <img src="<?=base_url()?>/images/8.jpg" alt="image" >
</a>
</li>
</ul>
  </div>
</div>


<script type="text/javascript">
    ;( function( $ ) {

    	$( '.swipebox' ).swipebox();

    } )( jQuery );
</script>

<?php include 'footer.php';?>
