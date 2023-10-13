function showPassword() {
	let typeText = $('#password').attr('type');
	let newType = '';
	if (typeText == 'password') {
		newType = 'text';
		$('#textPass').text('Hide Password');

	} else if (typeText == 'text') {
		newType = 'password';
		$('#textPass').text('Show Password');
	}
	$('#password').attr('type', newType);
}
