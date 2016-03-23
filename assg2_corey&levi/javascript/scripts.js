$('#submit').click(function()
{
	$.ajax({
		url: ''../send_data.php',
		type:'POST',
		data:
		{
			name: '$_POST[name]',
			level: '$_POST[level]',
			race: '$_POST[race]',
			class: '$_POST[class]',
			background: '$_POST[background];'
		},
		success: function(msg)
		{
			alert('Character submitted!');
		}
	});
});
