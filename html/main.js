function UpdateColors() {
	var bodyStyle = document.documentElement.style;
	var bg = document.getElementById('Bg1').value;
	var bg2 = document.getElementById('Bg2').value;
	var bg3 = document.getElementById('Bg3').value;
	var bg4 = document.getElementById('Bg4').value;
	var bg5 = document.getElementById('Bg5').value;
	var text = document.getElementById('text').value;
	var Ac1 = document.getElementById('Ac1').value;
	var Ac2 = document.getElementById('Ac2').value;
	var Ac3 = document.getElementById('Ac3').value;
	bodyStyle.setProperty('--bg', bg);
	bodyStyle.setProperty('--bg2', bg2);
	bodyStyle.setProperty('--bg3', bg3);
	bodyStyle.setProperty('--bg4', bg4);
	bodyStyle.setProperty('--bg5', bg5);
	bodyStyle.setProperty('--font', text);
	bodyStyle.setProperty('--accent', Ac1);
	bodyStyle.setProperty('--accent2', Ac2);
	bodyStyle.setProperty('--accent3', Ac3);
}
