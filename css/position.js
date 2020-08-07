window.onload = function(){
	var images = document.
	querySelectorAll('#slider .images img');
	var i = 0;
	
	document.getElementById('btn-prev').onclick = function(){
		images[i].className = '';
		i--;
		
		if(i < 0){
			i = images.length - 1;
		}
		
		images[i].className = 'active';
	}
	
	document.getElementById('btn-next') .onclick = function(){
		images[i].className = '';
		i++;
		
		if(i >= images.length){
			i=0;
		}
	    images[i].className = 'active';	
	}
}