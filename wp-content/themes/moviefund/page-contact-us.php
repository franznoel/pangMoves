<?php get_header("none");?>
<div class="container">
<div class="row contact-us-container">
<?php if(have_posts()):?>
<?php while ( have_posts() ) : the_post(); ?>
<h1><?php the_title();?></h1>

<style type="text/css">
label { display:block;}
.form-control { width:100%;}
.contact-us-container {margin:20px 0 20px 0;}
.btn.btn-primary {background-color:#286090;}
</style>
<div class="col-sm-5">
    <div class="contact-form-container">
        <form id="contact-form" action="/mailer/" method="POST">
            <label for="contactName">
                Your Name (required)
                <input id="contactName" name="contactName" class="form-control" size="40" type="text" value="" />
            </label>
            <label for="contactEmail">
                Your Email (required)
                <input id="contactEmail" name="contactEmail" class="form-control" size="40" type="email" value="" />
            </label>
            <label for="contactSubject">
                Subject<span class="contactSubject">
                <input id="contactSubject" name="contactSubject" class="form-control" size="40" type="text" value="" />
            </label>
            <label for="contactMessage">
                Your Message
                <textarea id="contactMessage" name="contactMessage" class="form-control" rows="10" cols="40"></textarea>
            </label>
            <?php wp_nonce_field(); ?>
            <input class="btn btn-primary" type="submit" value="Send" /><img class="ajax-loader" style="visibility: hidden;" src="http://moviefund.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Sending ..." />
            <div class="wpcf7-response-output wpcf7-display-none" style="display: none;"></div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $("#contact-form").validate({
      errorLabelContainer: "#alert-messages",
      // wrapper: "li",
      rules: {
        contactName: { required: true, minlength : 2 },
        contactEmail: { required: true , email : true },
        contactSubject: { required : true },
        contactMessage: { required: true, minlength : 3 },
      },
      messages: {
        contactName: {
            required: '<div style="font-style:italic;font-weight:normal;color:red;">Full name is a required information</div>',
            minlength : '<div style="font-style:italic;font-weight:normal;color:red;">Minimum of 2 letters required</div>',
        },
        contactEmail: {
            required: '<div style="font-style:italic;font-weight:normal;color:red;">Email name must be filled out.</div>',
            email : '<div style="font-style:italic;font-weight:normal;color:red;">Email should be in the correct format</div>',
        },
        contactSubject: { 
          required: '<div style="font-style:italic;font-weight:normal;color:red;">Subject must be filled out.<div>',
        },
        contactMessage: {
            required: '<div style="font-style:italic;font-weight:normal;color:red;">This is a required field.</div>',
            minlength: '<div style="font-style:italic;font-weight:normal;color:red;">Please write a message.</div>',
        },
      }
      // submitHandler: function(form) {
      //   form.submit();
      // }
    });
</script>

<?php the_content(); ?>
<?php endwhile; endif;?>
</div>
</div>
<?php get_footer();?>