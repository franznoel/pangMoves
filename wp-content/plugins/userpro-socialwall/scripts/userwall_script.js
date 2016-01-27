jQuery(function(){
	jQuery('.socialwall-datepicker').datepicker({
		
		dateFormat: 'yy-mm-dd',
		changeMonth: true,
		changeYear: true,
		showOtherMonths: true,
		selectOtherMonths: true,
		dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
		yearRange: 'c-65:c+0'
   
 });
 });
jQuery(function(){
	jQuery('#post-loader').hide();
	jQuery('#loademore-loader').hide();
});
jQuery( document ).on('click','.socialwall-load-more span:not(.loaded)',function() { //Added By Yogesh  on 3 Dec 2014
		
		var count=jQuery('.socialwall-load-more').data('max-pages');
	
         total = +Number(count) + +total;
			
		socialwall_load_more( total );
	});

function sw_delete_post_by_date(formdate,todate)
{
	var formdate=jQuery('#'+formdate).val();
	var todate=jQuery('#'+todate).val();
		
   str = 'action=countpost&formdate='+formdate+'&todate='+todate;
	jQuery.ajax({
	url: ajaxurl,
	data: str,
	type: 'POST',
	success:function(data){
		
		
	str = 'action=socialwall_delete_post_by_date&formdate='+formdate+'&todate='+todate;
	var retVal = confirm(""+data+" post(s) and all comment(s) for those posts will be deleted. This action is irreversible. Please click on 'Delete' if you are sure you want to proceed.");
   	if( retVal == true ){
	jQuery.ajax({
	url: ajaxurl,
	data: str,
	type: 'POST',
	success:function(data){
		if(data!='notfound')
		{
		alert(""+data+" post(s) and all comment(s) for those posts has been deleted Successfully.");
		}
		else
		{
			alert("No Results Found");
		}
	},
	error:function(data){
		
		alert(data.error);
	}		
		});
   	}
		},
	error:function(data){
		
		alert(data.error);
	}		
		});
		
	
}


function userwall_ignore_post(post_id)
{
	
	str = 'action=socialwall_ignore_post&post_id='+post_id;
	var retVal = confirm("Are you sure you want to ignore the reported post?");
   	if( retVal == true ){
	jQuery.ajax({
	url: ajaxurl,
	data: str,
	type: 'POST',
	success:function(data){
		
		jQuery('#'+post_id).hide();
	},
	error:function(data){alert(data);
		
		alert(data.error);
	}		
		});
   	}
}

function userwall_report_post(post_id,userid)
{

		str = 'action=socialwall_report_post&post_id='+post_id+'&userid='+userid;
	var retVal = confirm("Are you sure you want to report a post to Admin?");
   	if( retVal == true ){
		
		
		jQuery.ajax({
		url: ajaxurl,
		data: str,
		type: 'POST',
		success:function(data){
		
			
			
		},
		error:function(data){alert(data);
			
			alert(data.error);
		}		
	});}
}

function userwall_postdislikecount_post(post_id,userid,totaldislikes,totalliks) {
	
	str = 'action=socialwall_dislikecount_post&post_id='+post_id+'&userid='+userid;
	
		jQuery.ajax({
		url: ajaxurl,
		data: str,
		type: 'POST',
		success:function(data){
			
			jQuery('#countlike'+post_id).html(totaldislikes+1);

                     var total=totaldislikes+1;
                     jQuery('#userwall_postlikecount_post'+post_id).show();
            jQuery('#userwall_postlikecount_post'+post_id).html('<i style="color:black;opacity: 0.5;" class="socialwall_postlikecount_post fa fa-thumbs-up"></i><i class="socialwall_postlikecount_post ">'+totalliks+'&nbsp</i><i style="color:black;opacity: 0.5;" class="socialwall_postlikecount_post fa fa-thumbs-down"></i><i class="socialwall_postlikecount_post ">'+total+'</i>');
         			
		},
		error:function(data){alert(data);
			
			alert(data.error);
		}		
	});
}			

function userwall_postlikecount_post(post_id,userid,totallikes,totaldislike) {
	
	
	str = 'action=socialwall_count_posts_like&post_id='+post_id+'&userid='+userid;;
	
		jQuery.ajax({
		url: ajaxurl,
		data: str,
		type: 'POST',
		success:function(data){
			document.getElementById('userwall_postlikecount_post'+post_id).style.display="none";
	
			jQuery('#userwall_postlikecount_post'+post_id).show();
                        var total=totallikes+1;
			jQuery('#userwall_postlikecount_post'+post_id).html('<i style="color:black;opacity: 0.5;" class="socialwall_postlikecount_post fa fa-thumbs-up"></i><i class="socialwall_postlikecount_post ">'+total+'&nbsp</i><i style="color:black;opacity: 0.5;" class="socialwall_postlikecount_post fa fa-thumbs-down"></i><i class="socialwall_postlikecount_post ">'+totaldislike+'</i>');
			
		},
		error:function(data){alert(data);
			
			alert(data.error);
		}		
	});
}			
	



function socialwall_load_more( total) {

	jQuery('#loademore-loader').show();
	str = 'action=socialwall_load_posts&count='+total;
	
		jQuery.ajax({
		url: ajaxurl,
		data: str,
		type: 'POST',
		success:function(data){

			jQuery('#loademore-loader').hide();
			if(data!='hide')
			{
				jQuery('#userwalldata').append(stripslashes(data));
			}
			else
			{
				document.getElementById('socialwall-load-more').style.display="none";

			}
		
			
		},
		error:function(data){alert(data);
			
			alert(data.error);
		}		
	});
}			
	



function user_post_data(post_name,user_id){
	jQuery('#post-loader').show();
	var post_content=document.getElementById(post_name).value;
	
	if(post_content!="")
	{	
	var str = 'action=post_userdata&file_name='+post_content+'&user_id='+user_id;
	jQuery.ajax({
		url: ajaxurl,
		data: str,
		dataType:'json',
		type: 'POST',
		success:function(data){
			jQuery('#post-loader').hide();
			document.getElementById(post_name).value="";
			jQuery('#userwalldata').prepend(stripslashes(data.user_profile));
		},
		error:function(data){alert(data);
			alert(data.error);
		}		
	});
}
else
	{
	alert("Please enter some text to add to the wall");
	}
}
function userwall_delete_comment(post_id,comment,event){
	
	
	event.setAttribute('class' , 'fa fa-spinner');
	var str = 'action=delete_comment&post_id='+post_id+'&user_comment='+comment;
	var retVal = confirm("Are you sure you want to delete the comment?");
   	if( retVal == true ){
	jQuery.ajax({
		url: ajaxurl,
		data: str,
		dataType:'json',
		type: 'POST',
		success:function(data){
			
			var parentdiv=event.parentNode;
			 parentdiv.parentNode.setAttribute("style","display:none");
		
			
		},
		error:function(data){alert(data);
			alert(data.error);
		}		
	});
   	}
	
}



function stripslashes (str) {

	  return (str + '').replace(/\\(.?)/g, function (s, n1) {
	    switch (n1) {
	    case '\\':
	      return '\\';
	    case '0':
	      return '\u0000';
	    case '':
	      return '';
	    default:
	      return n1;
	    }
	  });
	}

function user_post_comment(post_comment,user_id,postid,event){

	if(event.keyCode==13)
	{
		if (event.shiftKey === false)
	        {
	var postcomment=jQuery('#'+post_comment+"-"+postid).val();
	var str = 'action=post_usercomment&file_name='+postcomment+'&user_id='+user_id+'&post_id='+postid;
	jQuery.ajax({
		url: ajaxurl,
		data: str,
		dataType:'JSON',
		type: 'POST',
		success:function(data){
			jQuery('#'+post_comment+"-"+postid).val('');
			jQuery('.userwall-comment-data'+"-"+postid).append(stripslashes(data.user_comment));
		},
		error:function(data){
			alert(data.error);
		}		
	});
	        }	
	}

}

function userwall_img_upload(){
	jQuery(".userwall_upload").each(function(){
	    
	    var filetype = jQuery(this).data('filetype');
	    var allowed = jQuery(this).data('allowed_extensions');
	    var media_type = jQuery(this).data('media_type');
	   
	    var form = jQuery(this).parents('.userpro').find('form');
	    jQuery(this).uploadFile({
	        url: userwall_upload_path,
	       allowedTypes: allowed,
	        onSubmit:function(files){
	            var statusbar = jQuery('.ajax-file-upload-statusbar:visible');
	            statusbar.parents('.userpro-input').find('.red').hide();
	            if (statusbar.parents('.userpro-input').find('img.default').length){
	                statusbar.parents('.userpro-input').find('img.default').show();
	                statusbar.parents('.userpro-input').find('img.modified').remove();
	            }
	        },
	        onSuccess:function(files,data,xhr){
	        	
	            data= jQuery.parseJSON(data);
	            try{
	            var statusbar = jQuery('.ajax-file-upload-statusbar:visible');
	            var src = data.target_file_uri;
	            var srcname = data.target_file_name;
	            var medianame=data.media_name;
	            var thumbnail_path=data.thumbnail_path;
	            if (statusbar.parents('.userpro-input').find('img.default').length){
	          
	            } else if (statusbar.parents('.userpro-input').find('img.avatar').length){
	            var width = statusbar.parents('.userpro-input').find('img.avatar').attr('width');
	            var height = statusbar.parents('.userpro-input').find('img.avatar').attr('height');
	            }
	            }
	            catch(e){
	                alert("File Exceeded Upload Limit.");
	                var statusbar = jQuery('.ajax-file-upload-statusbar:visible');
	                statusbar.hide();
	                return;
	            }
	           
	            str = 'action=userwall_upload_img&filetype='+filetype+'&width='+width+'&height='+height+'&src='+src+'&media_type='+media_type+'&srcname='+srcname+'&media_name='+medianame+'&thumbnail_path='+thumbnail_path;
	            jQuery.ajax({
	                url: ajaxurl,
	                data: str,
	                dataType: 'JSON',
	                type: 'POST',
	                success:function(data){
	                	jQuery('#userwalldata').prepend(data.user_profile);
	                    statusbar.prev().fadeIn( function() {
	                       
	                        statusbar.hide();
	                        
	                    });
	                    statusbar.parents('.userpro-input').find('input:hidden').val( src );
	                    statusbar.parents('.userpro-input').find('.userpro-pic-none').hide();
	                   
	                    // re-validate
	                    form.find('input').each(function(){
	                        jQuery(this).trigger('blur');
	                    });
	                   
	                }
	            });

	        }
	    });
	});

}

function userwall_delete_post(postid , event)
{
	event.setAttribute('class' , 'fa fa-spinner');
	var str = 'action=userwall_delete_userpost&postid='+postid;
	var retVal = confirm("Are you sure you want to delete the post?");
   	if( retVal == true ){
	jQuery.ajax({
		url: ajaxurl,
		data: str,
		dataType:'json',
		type: 'POST',
		success:function(data){
			
			jQuery('#'+postid).hide();
		},
		error:function(data){alert(data);
			alert(data.error);
		}		
	});
	}
}

jQuery(document).ready(function() {
setTimeout(function(){
	userwall_img_upload();
	}, 3000);
});
