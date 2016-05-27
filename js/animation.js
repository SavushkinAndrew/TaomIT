(function () {
	var buttons = document.getElementByTagName('button');
	for (var i = 0, len = buttons.length; i < len; i++) {
		buttons[i].onClick = function () {
			if (this.className === 'login__btn') {
				document.body.button.className = 'login__animation';
			}
		}
	}
})();