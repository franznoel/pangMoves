<?php 
/**
 * Template Name: Add Projects
 *
 */
get_header();?>
<section class="form-sec">
	<div class = "container">
	    <div class = "row">
	        <div class = "col-md-6">
				<form id="myform" action="<?php echo get_home_url(); ?>/formaction" method="post" enctype="multipart/form-data">
				<input type="hidden" name="user" value="<?php echo get_current_user_id(); ?>" />
				<div class="form-group">
				<label>Project Name</label>
				<input type="text" class="form-control" maxlength="150" value="" placeholder="Enter the project name"  name="title_name" class="imgdis" id="title_name" onkeyup="document.getElementById('prevCom').innerHTML = this.value">
				</div>
				<div class="form-group">
				<label>Add Image</label>
				<input type="file" class="form-control" name="myfile" id="myfile" >
				</div>
				<?php echo do_shortcode('[vidrack]'); ?>
				<div class="form-group">
				<label>Synopsis</label>
				<input type="text" class="form-control" maxlength="2500" name="short_synopsis" id="short_synopsis" value=""  class="imgdis" onkeyup="document.getElementById('Com1').innerHTML = document.getElementById('Com').innerHTML = this.value" onblur="document.getElementById('Com1').innerHTML = document.getElementById('Com').innerHTML = this.value">
				</div>
				<div class="form-group">
				<label>Budget</label>
				<input type="text" class="form-control" name="budget" id="budget" maxlength="150" value=""  class="imgdis" onkeyup="document.getElementById('bud').innerHTML = this.value">
				</div>
				<div class="form-group">
				<label>Genre</label>
				<input type="text" class="form-control" name="genre" id="genre" maxlength="150" value=""  class="imgdis" onkeyup="document.getElementById('gen').innerHTML = this.value">
				</div>
				<div class="form-group">
				<label>Production Stage</label>
				<input type="text" class="form-control" name="production_stage" id="prod_stage" maxlength="150" value=""  class="imgdis" onkeyup="document.getElementById('prod').innerHTML = this.value">
				</div>
				<div class="form-group">
				<label>Compares</label>
				<input type="text" class="form-control" name="compares" id="compares" maxlength="150" value=""  class="imgdis" onblur="document.getElementById('comp').innerHTML = this.value" onkeyup="document.getElementById('comp').innerHTML = this.value">
				</div>
				<div class="form-group">
				<label>Cast</label>
				<input type="text" class="form-control" name="cast" id="cast" maxlength="150" value=""  class="imgdis" onkeyup="document.getElementById('cas').innerHTML = this.value">
				</div>
				<div class="form-group">
				<label>Investor Info</label>
				<input type="text" class="form-control" name="investor_info" id="investor_info" maxlength="150" value=""  class="imgdis" onkeyup="document.getElementById('invest').innerHTML = this.value">
				</div>
				<div class="form-group">
				<label>Target</label>
				<input type="text" class="form-control" name="target" id="target" maxlength="150" value=""  class="imgdis" onkeyup="document.getElementById('tar').innerHTML = this.value">
				</div>
				<div class="form-group">
				<label>Invested</label>
				<input type="text" class="form-control" name="invested" id="invested" maxlength="150" value=""  class="imgdis" onkeyup="document.getElementById('inves').innerHTML = this.value">
				</div>
				<div class="form-group">
				<label>Soft</label>
				<input type="text" class="form-control" name="soft" id="soft" maxlength="150" value=""  class="imgdis" onkeyup="document.getElementById('sof').innerHTML = this.value">
				</div>
				<div class="form-group">
				<label>Investers</label>
				<input type="text" class="form-control" name="investers" id="investers" maxlength="150" value=""  class="imgdis" onkeyup="document.getElementById('inv').innerHTML = this.value">
				</div>
				<div class="form-group">
				<label>Tax Break</label>
				<input type="text" class="form-control" name="tax_breaks" id="tax_breaks" maxlength="150" value=""  class="imgdis" onkeyup="document.getElementById('tax').innerHTML = this.value">
				</div>
				<div class="form-group">
				<label>Production Team</label>
				<input type="text" class="form-control" name="team" id="team" maxlength="150" value=""  class="imgdis" onkeyup="document.getElementById('tea').innerHTML = this.value">
				</div>
				<div class="form-group text-right">
				<input type="submit" id="uploadButton" name="submit" value="Submit">
				</div>
				</form>
	        </div>
			<div class = "col-sm-6 col-md-3">
			<div class="projectpreview1">
		            <div class="pro-box">
		                <div class="img-thumb">
		                    <h4><div id="prevCom"></div></h4><br />
		                     <a target="_blank" href="<?php print_r($meta[link][0]);?>"><img id="blah" src="#" alt="your image" /></a>
	                    </div>
						<div class="pro-content">					    
						    <div class="scrollbars" id="Com1"> </div> 
							<p class="readmore">read more</p>
							 <div class="scrollbars excrt-cont re-<?php echo get_the_ID();?>"><?php the_content(); ?> </div>  
						</div>
							<div class="Com"></div>
						<div class="pro-table margin-t">
							<div class="scrollbars ">
								<div class="table">
								<div class="latst-filds">
								    <div class="orange">Budget</div>
								    <div class="fild-st"><div id="bud"></div></div>
								</div>
								<div class="latst-filds">
								    <div class="orange">Genre</div>
								    <div class="fild-st"><div id="gen"></div></div>
								</div>
								<div class="latst-filds">
									<div class="orange">Compares</div>
									<div class="fild-st"><div id="comp"></div></div>
								</div>
								<div class="latst-filds">
									<div class="orange">Tax Break</div>
									<div class="fild-st"><div id="tax"></div></div>
								</div>
								<div class="latst-filds">
									<div class="orange">Production Team</div>
									<div class="fild-st"><div id="tea"></div></div>
								</div>
								<div class="latst-filds">
									<div class="orange">Cast</div>
									<div class="fild-st"><div id="cas"></div></div>
								</div>
								<div class="latst-filds">
									<div class="orange">Investor Info</div>
									<div class="fild-st"><div id="invest"></div></div>
								</div>
								</div>
							</div>
						</div>

	<div class="pro-bottom">
	<ul class="list-inline">
	<li>
	<a class="latest-loa" data-mode="hide" data-id="gh-<?php echo get_the_ID();?>"><img src="<?php echo get_home_url();?>/wp-content/uploads/2015/09/pro-load-3.png" /></a>
	</li>
	<li><a href="#"><span><div id="tar"></div></span><br/>Target</a></li>
	<li><a href="#"><span> <div id="inves"></div></span><br/>Invested</a></li>
	<li><a href="#"><span><div id="sof"></div></span> <br/>Soft</a></li>
	<li><a href="#"><span><div id="inv"></div></span> <br/>Investers</a></li>
	</ul>
	</div>

		</div>
		</div>
	    </div>
			
		</div>	
	</div>
</section>
<script>
var wpcomment = document.getElementById('title_name');
var wpcom = document.getElementById('short_synopsis');
var wpbud = document.getElementById('budget');
var wpgen = document.getElementById('genre');
var wpcomp = document.getElementById('compares');
var wpcas = document.getElementById('cast');
var wpin = document.getElementById('investor_info');
var wptar = document.getElementById('target');
var wpinves = document.getElementById('invested');
var wpsof = document.getElementById('soft');
var wpinvest = document.getElementById('investers');
var wptax = document.getElementById('tax_breaks');
var wptea = document.getElementById('team');
wpcomment.onkeyup = wpcomment.onkeypress = function(){
    document.getElementById('prevCom').innerHTML = this.value;
}​
wpcom.onblur = wpcom.onkeyup = wpcom.onkeypress = function(){
    document.getElementById('Com').innerHTML = this.value;
    document.getElementById('Com1').innerHTML = this.value;
}
wpbud.onkeyup = wpbud.onkeypress = function(){
    document.getElementById('bud').innerHTML = this.value;
}​
wpgen.onkeyup = wpgen.onkeypress = function(){
    document.getElementById('gen').innerHTML = this.value;
}
wpcomp.onblur = wpcomp.onkeyup = wpcomp.onkeypress = function(){
    document.getElementById('comp').innerHTML = this.value;
}
wpcas.onkeyup = wpcas.onkeypress = function(){
    document.getElementById('cas').innerHTML = this.value;
}
wpin.onkeyup = wpin.onkeypress = function(){
    document.getElementById('invest').innerHTML = this.value;
}
wptar.onkeyup = wptar.onkeypress = function(){
    document.getElementById('tar').innerHTML = this.value;
}
wpinves.onkeyup = wpinves.onkeypress = function(){
    document.getElementById('inves').innerHTML = this.value;
}
wpsof.onkeyup = wpsof.onkeypress = function(){
    document.getElementById('sof').innerHTML = this.value;
}
wpinvest.onkeyup = wpinvest.onkeypress = function(){
    document.getElementById('inv').innerHTML = this.value;
}
wptax.onkeyup = wptax.onkeypress = function(){
    document.getElementById('tax').innerHTML = this.value;
}
wptea.onkeyup = wptea.onkeypress = function(){
    document.getElementById('tea').innerHTML = this.value;
}
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#blah')
        .attr('src', e.target.result)
        .width(150)
        .height(200);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
</script>

<!--script>
 jQuery('#uploadButton').click(function () {
var avatar = $("#myfile".val();
var extension = avatar.split('.').pop().toUpperCase();
if(avatar.length < 1) {
avatarok = 0;
}
else if (extension!="PNG" && extension!="BMP" && extension!="JPG" && extension!="GIF" && extension!="JPEG"{
avatarok = 0;
alert("invalid file type"+extension);
}
else {
avatarok = 1;
}
var avatar = $("#myvideo".val();
var extension = avatar.split('.').pop().toUpperCase();
if(avatar.length < 1) {
avatarok = 0;
}
else if (extension!="mp4" && extension!="wmv" && extension!="flv" && extension!="avi"{
avatarok = 0;
alert("invalid file type"+extension);
}
else {
avatarok = 1;
}
var avatar = $("#mypackage".val();
var extension = avatar.split('.').pop().toUpperCase();
if(avatar.length < 1) {
avatarok = 0;
}
else if (extension!="doc" && extension!="pdf"{
avatarok = 0;
alert("invalid file type"+extension);
}
else {
avatarok = 1;
}
if(avatarok == 1) {
//$('.formValidation').addClass("sending";
jQuery("#form".submit();
}
else {
jQuery('.formValidation').addClass("validationError";
}
return false;
});	


</script-->
<?php get_footer();?>