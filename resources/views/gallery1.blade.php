<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js"></script>

 
<style type="text/css">
.lead {
  padding: 40px 0;
}
/* Grid */

.thumbnail {
    padding:0px;
}
.panel {
  position:relative;
}
.panel>.panel-heading:after,.panel>.panel-heading:before{
  position:absolute;
  top:11px;left:-16px;
  right:100%;
  width:0;
  height:0;
  display:block;
  content:" ";
  border-color:transparent;
  border-style:solid solid outset;
  pointer-events:none;
}
.panel>.panel-heading:after{
  border-width:7px;
  border-right-color:#f7f7f7;
  margin-top:1px;
  margin-left:2px;
}
.panel>.panel-heading:before{
  border-right-color:#ddd;
  border-width:8px;
}
.content-header{
  font-family: 'Oleo Script', cursive;
  color:#fcc500;
  font-size: 45px;
}

.section-content{
  text-align: center; 

}
#contact{
    
    font-family: 'Teko', sans-serif;
  padding-top: 60px;
  width: 100%;
  width: 100vw;
  height: 550px;
  background: #3a6186; /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color : #fff;    
}
.contact-section{
  padding-top: 40px;
}
.contact-section .col-md-6{
  width: 50%;
}

.form-line{
  border-right: 1px solid #B29999;
}

.form-group{
  margin-top: 10px;

#posts {
  margin: 30px auto 0;
}

.post {
  margin: 0 0 20px;
  text-align: center;
  width: 100%;
}

.post img {
  padding: 0 15px;
  width: 100%;
}

#grid.container .post img {
  padding: 0;
}
/* Medium devices */

@media (min-width: 768px) {
  #grid > #posts .post {
    width: 335px;
  }
  #grid > #posts .post.cs2 {
    width: 100%;
  }
  .post img {
    padding: 0;
  }
}
/* Medium devices */

@media (min-width: 992px) {
  #grid > #posts .post {
    width: 445px;
  }
  #grid > #posts .post.cs2 {
    width: 100%;
  }
}
/* Large devices */

@media (min-width: 1200px) {
  #grid > #posts .post {
    width: 346px;
  }
  #grid > #posts .post.cs2 {
    width: 742px;
  }
}
/* Large devices min-width (1200px) + a .post margin (50px) * 2 (100px) = 1300px */
/* 1300px gives me the clearance I need to keep the margins of the entire #grid (the
bleed if you will) the same width as the .post margins posts (50px). Basically I'm
being really picky about whitespace. If you don't care, no problem, just delete this.
Can this be done with Masonry options? */

@media (min-width: 1300px) {
  #grid {
    left: -50px;
    padding-left: 50px;
    padding-right: 50px;
    position: relative;
  }
  #grid.container {
    left: auto;
    padding-left: 15px;
    padding-right: 15px;
  }
}
</style>


@if(count($images))
<!-- <div id="grid" class="container"> -->
  <div class="container" id="grid">
    <br>
    <div id="posts">
     @foreach($images as $image)
     @if(file_exists($image['url']))
     <div class="post">
      <img src="{{$image['url']}}">
      <br>
      <br>
      <strong>{{$image['caption']}}</strong>
      
    </div>
    @endif
    @endforeach
  </div>
  <br>
</div>
<div  class="modal fade" id="enlargeImageModal" tabindex="-1" role="dialog" aria-labelledby="enlargeImageModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col" style="width: 800px; height: 500px;">
            <img src="" class="enlargeImageModalSource" style="height: 100%;width: 100%; object-fit: contain;">
          </div>
          <div class="col" style="margin-right: 11px ; border: 1px solid;">

<form action="/action_page.php">
  <div class="form-group">
    <label for="name">COMMENT</label>
    <input type="name" class="form-control" id="name">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




<div class="container">
<div class="row">
<div class="col-sm-12">
<h3>User Comment Example</h3>
</div><!-- /col-sm-12 -->
</div><!-- /row -->
<div class="row">
<div class="col-sm-1">
<div class="thumbnail">
<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
</div><!-- /thumbnail -->
</div><!-- /col-sm-1 -->

<div class="col-sm-5">
<div class="panel panel-default">
<div class="panel-heading">
<strong>myusername</strong> <span class="text-muted">commented 5 days ago</span>
</div>
<div class="panel-body">
Panel content
</div><!-- /panel-body -->
</div><!-- /panel panel-default -->
</div><!-- /col-sm-5 -->

<div class="col-sm-1">
<div class="thumbnail">
<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
</div><!-- /thumbnail -->
</div><!-- /col-sm-1 -->

<div class="col-sm-5">
<div class="panel panel-default">
<div class="panel-heading">
<strong>myusername</strong> <span class="text-muted">commented 5 days ago</span>
</div>
<div class="panel-body">
Panel content
</div><!-- /panel-body -->
</div><!-- /panel panel-default -->
</div><!-- /col-sm-5 -->
</div><!-- /row -->

</div><!-- /container -->













          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
@endif
<script type="text/javascript">
	 // Takes the gutter width from the bottom margin of .post

	 var gutter = parseInt($('.post').css('marginBottom'));
	 var container = $('#posts');

 // Creates an instance of Masonry on #posts

 container.masonry({
   gutter: gutter,
   itemSelector: '.post',
   columnWidth: '.post'
 });

 // This code fires every time a user resizes the screen and only affects .post elements
 // whose parent class isn't .container. Triggers resize first so nothing looks weird.

 $(window).bind('resize', function() {
 	if (!$('#posts').parent().hasClass('container')) {

     // Resets all widths to 'auto' to sterilize calculations

     post_width = $('.post').width() + gutter;
     $('#posts, body > #grid').css('width', 'auto');

     // Calculates how many .post elements will actually fit per row. Could this code be cleaner?

     posts_per_row = $('#posts').innerWidth() / post_width;
     floor_posts_width = (Math.floor(posts_per_row) * post_width) - gutter;
     ceil_posts_width = (Math.ceil(posts_per_row) * post_width) - gutter;
     posts_width = (ceil_posts_width > $('#posts').innerWidth()) ? floor_posts_width : ceil_posts_width;
     if (posts_width == $('.post').width()) {
       posts_width = '100%';
     }

     // Ensures that all top-level elements have equal width and stay centered

     $('#posts, #grid').css('width', posts_width);
     $('#grid').css({
       'margin': '0 auto'
     });

   }
 }).trigger('resize');

 $(function() {
  $('img').on('click', function() {
    $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
    $('#enlargeImageModal').modal('show');
  });
});
</script>

