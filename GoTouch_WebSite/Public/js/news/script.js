function truncarParrafo(){
	var len = 80;
	var p = $('#article_noticias a p');//document.getElementsByTagName('p');
	if (p) {
		for(var i = 0 ; i < p.length ; i++){
		  var parrafo = p[i];
		  var trunc = parrafo.innerHTML;
		  if (trunc.length > len) {
	
			trunc = trunc.substring(0, len);
			trunc = trunc.replace(/\w+$/, '');
			trunc += '...';
			
			parrafo.innerHTML = trunc;
		  }
		}
	}
}