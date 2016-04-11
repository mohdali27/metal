jQuery("#event-banner").fileinput({
		showUpload: false,
		showCaption: false,
		allowedFileExtensions : ['jpg', 'png','gif','jpeg'],
		browseClass: "btn btn-primary btn-lg",
		fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
});


/* Date picker */
$('#date-range').datepicker({
	format: 'yyyy-mm-dd',
});

$('#end_date').on('changeDate', function(ev) {
   $('#end_date-error').remove();
   $(this).removeClass('error');
});
$('#start_date').on('changeDate', function(ev) {
   $('#start_date-error').remove();
   $(this).removeClass('error');
});
$('#date-end').datepicker({
	format: 'yyyy-mm-dd',
});
$('#date-start').datepicker({
	format: 'yyyy-mm-dd',
});
/* Timepicker */
$('#start_time').timepicker().on('show.timepicker', function(e) {
	var widget = $('.bootstrap-timepicker-widget');
	widget.find('.glyphicon-chevron-up').removeClass().addClass('pg-arrow_maximize');
	widget.find('.glyphicon-chevron-down').removeClass().addClass('pg-arrow_minimize');
});
$('#end_time').timepicker().on('show.timepicker', function(e) {
	var widget = $('.bootstrap-timepicker-widget');
	widget.find('.glyphicon-chevron-up').removeClass().addClass('pg-arrow_maximize');
	widget.find('.glyphicon-chevron-down').removeClass().addClass('pg-arrow_minimize');
});

$(document).on('change', '#searchtype', function(e) {
	if($(this).val()=='date'){
		$("#search-text").hide();
		$("#search-text").val("");
		$("#date-start").show();
		$("#date-end").show();
	}
	if($(this).val()=='name'){
		$("#date-start").hide();
		$("#date-end").hide();
		$("#date-start").val("");
		$("#date-end").val("");
		$("#search-text").show();
	}
});
$(document).on('click','.thcheckbox',function(){
	if($(this).is(":checked")){
		$('td .tdcheckbox').each(function(){
			$(this).prop("checked","checked");
		  });
	}else{
		$('td .tdcheckbox').each(function(){
			$(this).prop("checked",false);
		  });
	}
});
$(document).on('click','.tdcheckbox',function(){
 
        if($(".tdcheckbox").length == $(".tdcheckbox:checked").length) {
            $(".thcheckbox").prop("checked", "checked");
        } else {
            $(".thcheckbox").prop("checked",false);
        }
 
});
$('.action select').on('change',function()
	   {
		   val = $(this).val()
		   if(val == '')
		   	return false;
		   if($('td .tdcheckbox').is(':checked'))
		   {
			   switch(val)
			   {
				   case '1':				  
				   	if(confirm('Are you sure to delete the selected records ?'))
					{
						$('#mainform').submit();
					}
					else
					{
					   $(this).val('');
					}
				   break;
				   default:
				   $('#mainform').submit();
			   }			   
		   }
		   else
		   {
			   alert('Please select atleast one record...!');
			   $(this).val('');
		   }
})


/*  */
