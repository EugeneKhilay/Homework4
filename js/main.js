$('document').ready(function(){
	
	$('#foo').click(function(){
		
		var hue = 'rgb(' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ')';
		$('#foo').css('background-color', hue);
	});

});