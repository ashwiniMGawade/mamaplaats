
load_video = {
	in_container : function(container_id, embed) {
		$(container_id).attr('src', embed + '?autoplay=1');
		return false;
	}
};


