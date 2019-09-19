function getMediaComponent(token, description, title) {
	const component = `<div class="col-12 col-md-6 col-lg-4">
        <div class="card bg-light mb-3">
            <div class="rounded-top embed-responsive embed-responsive-16by9">
                <iframe
                    class="embed-responsive-item"
                    src="https://www.youtube.com/embed/${token}"
                    allowfullscreen
                ></iframe>
            </div>
            <div class="card-body">
                <h5>${title}</h5>
                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="${description}">
                Descripción
                </button>
            </div>
        </div>
    </div>`;
	return component;
}

function deployMedia() {
	jQuery.ajax({
		url: `${values["urlApi"]}get_videos.php`,
		success: function(result) {
			const response = JSON.parse(result);
			let element = document.getElementById("media-deploy");
			response.forEach(e => {
				element.insertAdjacentHTML(
					"beforeend",
					getMediaComponent(e.token, e.description, e.title)
				);
			});
		}
	});
}

$(function() {
	$('[data-toggle="popover"]').popover();
});
