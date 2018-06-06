var $_GET = {};
if(document.location.toString().indexOf('?') !== -1) {
	var query = document.location
					.toString()
					// get the query string
					.replace(/^.*?\?/, '')
					// and remove any existing hash string (thanks, @vrijdenker)
					.replace(/#.*$/, '')
					.split('&');

	for(var i=0, l=query.length; i<l; i++) {
	   var aux = decodeURIComponent(query[i]).split('=');
	   $_GET[aux[0]] = aux[1];
	}
}

$(document).ready(function(){
	log();

	$('#input').submit(function(e){
		e.preventDefault();
		if($('#message').val().length!=0){
			$.ajax({
				type: "POST",
				url: 'chat.php',
				data: $(this).serialize()+"&chat_id="+$_GET['chat_id'],
				success: function(data)
				{
					if(data != "query success"){
						console.log("insert failed")
					}
					else{
						$('#message').val('');
						log()
					}
				}
			});
		}
		
	});

	setInterval(log, 1000);
});

function log(){
		$.ajax({
			type: "POST",
			url: 'log.php',
			data: "chat_id="+$_GET['chat_id'],
			dataType: "JSON",
			success: function(data)
			{
				var output = '';
				for(var i in data){
					output +=data[i].user_name+":<br>"+data[i].message+"<br>";	
				}
				$('#log').html(output);
			}
		});
	}