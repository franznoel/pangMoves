function userpro_delete_files(file_name,user_id,file_id){
	str = 'action=userpro_media_delete&file_name='+file_name+'&user_id'+user_id;
	jQuery.ajax({
		url: userpro_ajax_media_url,
		data: str,
		dataType: 'JSON',
		type: 'POST',
		success:function(data){
			alert("File has been removed successfully");
			var deletedMedia=document.getElementById(file_id);
			deletedMedia.style.display='none';
			deletedMedia.parentNode.removeChild(deletedMedia);
		},
		error:function(data){
			alert(data);
		}		
	});
}

function userpro_media_manager(){
jQuery(".userpro-media-upload").each(function(){
	var allowed = jQuery(this).data('allowed_extensions');
	var filetype = jQuery(this).data('filetype');
	var media_type = jQuery(this).data('media_type');
	var form = jQuery(this).parents('.userpro').find('form');
	var upload_limit=jQuery(this).data('upload_limit');
	
	jQuery(this).uploadFile({
		url: userpro_media_upload_url+"?upload_limit="+upload_limit,
		allowedTypes: allowed,
		multiple:true,
		onSubmit:function(files){
			var statusbar = jQuery('.ajax-file-upload-statusbar:visible');
			statusbar.parents('.userpro-input').find('.red').hide();
			if (statusbar.parents('.userpro-input').find('img.default').length){
				statusbar.parents('.userpro-input').find('img.default').show();
				statusbar.parents('.userpro-input').find('img.modified').remove();
			}
		},
		onSuccess:function(files,data,xhr){
			try{
			data= jQuery.parseJSON(data);
			}
			catch(e){
				alert("Upload Limit Exceeded.");
				var statusbar = jQuery('.ajax-file-upload-statusbar:visible');
				statusbar.hide();	
			}
			if(data.limit_exceed=="1")
			{
				alert("You can only upload "+upload_limit+" files");
				var statusbar = jQuery('.ajax-file-upload-statusbar:visible');
				statusbar.hide();
			}
			else
			{
				try{
			var statusbar = jQuery('.ajax-file-upload-statusbar:visible');
			var src="",srcname="",medianame="",thumbnail_path="";
					var media_count=data.length;
			for(count=0;count<data.length;count++)
			{
					src += data[count].target_file_uri+'------';
					srcname += data[count].target_file_name+'------';
					medianame +=data[count].media_name+'------';
					thumbnail_path +=data[count].thumbnail_path+'------';
			}
			}
			catch(e){
				alert("Upload Limit Exceeded.");
				var statusbar = jQuery('.ajax-file-upload-statusbar:visible');
				statusbar.hide();
				
			}
			str = 'action=userpro_media_upload&filetype='+filetype+'&src='+src+'&media_type='+media_type+'&srcname='+srcname+'&media_name='+medianame+'&thumbnail_path='+thumbnail_path;
			jQuery.ajax({
				url: userpro_ajax_media_url,
				data: str,
				dataType: 'JSON',
				type: 'POST',
				success:function(data){
					statusbar.prev().fadeIn( function() {
						if (filetype == 'media'){
							
							statusbar.parents('.userpro-input').prepend( data.response );
						
						} else if (filetype == 'photo'){
							
							statusbar.parents('.userpro-input').prepend( data.response );
						
						} else if (filetype == 'video'){
							
							statusbar.parents('.userpro-input').prepend( data.response );
						
						} else if (filetype == 'music'){
							
							statusbar.parents('.userpro-input').prepend( data.response );
						
						}
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
		}
	});
});

}

function get_previous_page_media(){
	document.getElementById("count").value--;
	if(document.getElementById("count").value<=1)
	{
		document.getElementById("previous_page").style.display="none";
	}
	if(document.getElementById("total_page_count").value != document.getElementById("count").value)
	{
		document.getElementById("next_page").style.display="block";
	}
	for(i=0;i<parseInt(document.getElementById("total_media_count").value,10);i++)
	{
		if(document.getElementById(i)!=null)
		{
		if(Math.floor(i/parseInt(document.getElementById("media_per_page").value,10))==(parseInt(document.getElementById("count").value)-1))
		{
			document.getElementById(i).style.display="block";
		}
		else
		{
			document.getElementById(i).style.display="none";
		}
	}
	}
}

function get_next_page_media(){
	document.getElementById("count").value++;
	if(document.getElementById("count").value>=2)
	{
		document.getElementById("previous_page").style.display="block";
	}
	if(document.getElementById("total_page_count").value == document.getElementById("count").value)
	{
		document.getElementById("next_page").style.display="none";
	}
	for(i=0;i<parseInt(document.getElementById("total_media_count").value,10);i++)
	{
		if(document.getElementById(i)!=null)
		{
		if(Math.floor(i/parseInt(document.getElementById("media_per_page").value,10))==(parseInt(document.getElementById("count").value)-1))
		{
			document.getElementById(i).style.display="block";
		}
		else
		{
			document.getElementById(i).style.display="none";
		}	
	}
	}
}


function get_previous_page_media_video(){
	document.getElementById("count_video").value--;
	if(document.getElementById("count_video").value<=1)
	{
		document.getElementById("previous_page_video").style.display="none";
	}
	if(document.getElementById("total_page_count_video").value != document.getElementById("count").value)
	{
		document.getElementById("next_page_video").style.display="block";
	}
	for(i=0;i<parseInt(document.getElementById("total_media_count_video").value,10);i++)
	{
		if(document.getElementById(i+"_video")!=null)
		{
		if(Math.floor(i/parseInt(document.getElementById("media_per_page_video").value,10))==(parseInt(document.getElementById("count_video").value)-1))
		{
			document.getElementById(i+"_video").style.display="block";
		}
		else
		{
			document.getElementById(i+"_video").style.display="none";
		}
	}
	}
}

function get_next_page_media_video(){
	document.getElementById("count_video").value++;
	if(document.getElementById("count_video").value>=2)
	{
		document.getElementById("previous_page_video").style.display="block";
	}
	if(document.getElementById("total_page_count_video").value == document.getElementById("count_video").value)
	{
		document.getElementById("next_page_video").style.display="none";
	}
	for(i=0;i<parseInt(document.getElementById("total_media_count_video").value,10);i++)
	{
		if(document.getElementById(i+"_video")!=null)
		{
		if(Math.floor(i/parseInt(document.getElementById("media_per_page_video").value,10))==(parseInt(document.getElementById("count_video").value)-1))
		{
			document.getElementById(i+"_video").style.display="block";
		}
		else
		{
			document.getElementById(i+"_video").style.display="none";
		}	
	}
	}
}

function get_previous_page_media_music(){
	document.getElementById("count_music").value--;
	if(document.getElementById("count_music").value<=1)
	{
		document.getElementById("previous_page_music").style.display="none";
	}
	if(document.getElementById("total_page_count_music").value != document.getElementById("count").value)
	{
		document.getElementById("next_page_music").style.display="block";
	}
	for(i=0;i<parseInt(document.getElementById("total_media_count_music").value,10);i++)
	{
		if(document.getElementById(i+"_music")!=null)
		{
		if(Math.floor(i/parseInt(document.getElementById("media_per_page_music").value,10))==(parseInt(document.getElementById("count_music").value)-1))
		{
			document.getElementById(i+"_music").style.display="block";
		}
		else
		{
			document.getElementById(i+"_music").style.display="none";
		}
	}
	}
}

function get_next_page_media_music(){
	document.getElementById("count_music").value++;
	if(document.getElementById("count_music").value>=2)
	{
		document.getElementById("previous_page_music").style.display="block";
	}
	if(document.getElementById("total_page_count_music").value == document.getElementById("count_music").value)
	{
		document.getElementById("next_page_music").style.display="none";
	}
	for(i=0;i<parseInt(document.getElementById("total_media_count_music").value,10);i++)
	{
		if(document.getElementById(i+"_music")!=null)
		{
		if(Math.floor(i/parseInt(document.getElementById("media_per_page_music").value,10))==(parseInt(document.getElementById("count_music").value)-1))
		{
			document.getElementById(i+"_music").style.display="block";
		}
		else
		{
			document.getElementById(i+"_music").style.display="none";
		}	
	}
	}
}

function change_media_tab(i,user_id){
	if(i==user_id+'1')
	{
		document.getElementById("photo_tab_data"+user_id).style.display="block";
		document.getElementById("video_tab_data"+user_id).style.display="none";
		document.getElementById("music_tab_data"+user_id).style.display="none";
		document.getElementById("photo_tab"+user_id).style.backgroundColor="#fff";
		document.getElementById("photo_tab"+user_id).style.color="#000";
		document.getElementById("video_tab"+user_id).style.backgroundColor="#555";
		document.getElementById("video_tab"+user_id).style.color="#fff";
		document.getElementById("music_tab"+user_id).style.backgroundColor="#555";
		document.getElementById("music_tab"+user_id).style.color="#fff";
	}
	if(i==user_id+'2')
	{
		document.getElementById("photo_tab_data"+user_id).style.display="none";
		document.getElementById("video_tab_data"+user_id).style.display="block";
		document.getElementById("music_tab_data"+user_id).style.display="none";
		document.getElementById("photo_tab"+user_id).style.backgroundColor="#555";
		document.getElementById("photo_tab"+user_id).style.color="#fff";
		document.getElementById("video_tab"+user_id).style.backgroundColor="#fff";
		document.getElementById("video_tab"+user_id).style.color="#000";
		document.getElementById("music_tab"+user_id).style.backgroundColor="#555";
		document.getElementById("music_tab"+user_id).style.color="#fff";
	}
	if(i==user_id+'3')
	{
		document.getElementById("photo_tab_data"+user_id).style.display="none";
		document.getElementById("video_tab_data"+user_id).style.display="none";
		document.getElementById("music_tab_data"+user_id).style.display="block";
		document.getElementById("photo_tab"+user_id).style.backgroundColor="#555";
		document.getElementById("photo_tab"+user_id).style.color="#fff";
		document.getElementById("video_tab"+user_id).style.backgroundColor="#555";
		document.getElementById("video_tab"+user_id).style.color="#fff";
		document.getElementById("music_tab"+user_id).style.backgroundColor="#fff";
		document.getElementById("music_tab"+user_id).style.color="#000";
	}
}

function delete_temp_media(id){
	str = 'action=userpro_temp_media_delete&file_name='+id;
	jQuery.ajax({
		url: userpro_ajax_media_url,
		data: str,
		dataType: 'JSON',
		type: 'POST',
		success:function(data){
			alert("File has been removed successfully");
			var deletedMedia=document.getElementById(id);
			deletedMedia.style.display='none';
		},
		error:function(data){
			alert("Error in deleting file");
		}		
	});
}
