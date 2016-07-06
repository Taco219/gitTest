$('input#name-submit').on('click', function(){
	var name = $('input#name').val();
	if($.trim(name) != ''){
		$.post('ajax/name.php', {postName: name}, function(data){
			$('div#name-data').html(data);
		});
	}
});