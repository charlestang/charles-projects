function linenumber(o){
	if(o.className=="hl-main ln-hide"){
		o.title="Double click to hide line number.";
		o.className="hl-main ln-show";
	}else{
		o.title="Double click to show line number.";
		o.className="hl-main ln-hide";
	}
}