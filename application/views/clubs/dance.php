<?php include(dirname(__FILE__)."/../header.php");?>
<script type="text/javascript">$('#scrollbox3').enscroll({
    showOnHover: true,
    verticalTrackClass: 'track3',
    verticalHandleClass: 'handle3'
});
</script>

<div style= "margin-left:32%" class="page-title  col-xs-6 col-xs-offset-3">
    
  <h1 class="scroll-title">Dance Club</h1>

  <div class="scrollBar scroll-pane  col-xs-8" id = "scrollbox">

        <div class="clubs-trans-div" style="width:100%;opacity:1;margin-bottom: 20px;">
          <ul class="nav nav-tabs" style="margin-bottom: 20px;">
                <li class="active"><a href="#about-dance" data-toggle="tab">ABOUT</a></li>
                <li><a href="#events-dance" data-toggle="tab">EVENTS</a></li>
                <li><a href="#joinus-dance" data-toggle="tab">JOIN US</a></li>
            </ul>
        <!-- </div> -->

        <!-- <div class="clubs-content tab-content"> -->
        <section class="nav-content" style="width:100%; text-align:left;">

            <article id="about-dance" class="tab-pane fade in active">

               
            </article>

            <article  id="events-dance" class="tab-pane fade">
                
            </article>

            <article id="joinus-dance" class="tab-pane fade">
                
            </article>
        </section>
  </div>
</div>

<?php include(dirname(__FILE__)."/../footer.php");?>