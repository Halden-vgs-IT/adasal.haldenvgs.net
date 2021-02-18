function runCS(){
	userScript = document.getElementById("javascriptInput");

	var script = document.createElement("script");
    script.type = "text/javascript";

	document.write.to = {filename: script.src};
	script.innerHTML = 'function runMe(){' +  userScript.value.replace("'", "'") + '}';

    document.getElementById('results').appendChild(script);
	runMe();
	script.parentNode.removeChild(script);
}
