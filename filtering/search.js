$(document).ready(function(){
	$("#search").click(function() {
		var keywords = $('#keywords').val();
		getData('search', keywords, '');
	});
	$("#sortSearch").change(function() {
		var sortValue = $(this).val();
		var keywords = $('#keywords').val();
		getData('sort', keywords, sortValue);
	});
});
function getData(type, keywords, sortValue) {	
	$.ajax({
		type: 'POST',
		url: 'search_data.php',
		data: 'type='+type+'&keywords='+keywords+'&sortValue='+sortValue,
		beforeSend:function(html){
			$('.loading-overlay').show();
		},
		success:function(html){
			$('.loading-overlay').hide();
			$('#userData').html(html);
		}
	});
}