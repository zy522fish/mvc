window.onload = function () {
	//alert(123);
	var trs = document.getElementsByTagName('tr');
	for(var i=1;i<trs.length;i++){
		if (i%2 ==1 ) {
			trs[i].style.backgroundColor = '#ccffcc';
		}else{
			trs[i].style.backgroundColor = '#ffccff';
		}
	}
}