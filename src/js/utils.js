let elem = {
	videos: `<div id="content" class="row">
    <form class="col-12" action="./services/save_video.php" method="POST">
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>Título</label>
                <input
                    type="text"
                    class="form-control"
                    name="title"
                    placeholder="Título"
                    required
                />
                <div class="valid-feedback"></div>
            </div>
            <div class="col-md-6 mb-3">
                <label>Código</label>
                <input
                    type="text"
                    class="form-control"
                    name="token"
                    placeholder="Código"
                    required
                />
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="validationServer02">Descripción</label>
                <textarea class="form-control" name="description">
                </textarea>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Añadir</button>
    </form>
</div>`,
	encuestas: `<div id="content" class="row">
                    <form id="render-form" class="col-12" action="./services/save_encuesta.php" method="POST">
                    <button class="btn btn-success" type="submit">Guardar</button>
                    <button class="btn btn-primary add" type="button">Añadir</button>
                    </form>
                </div>`,
	analisis: ``,
	opcion: ``,
	field: function(id) {
		const component = `
        <div class="form-row" id="row-${id}">
            <div class="col-md-9 mb-3">
                <label>Pregunta</label>
                <input
                    type="text"
                    class="form-control"
                    name="query-${id}"
                    placeholder="Pregunta"
                    required
                />
            </div>
            <div class="col-md-3 mb-3">
                <label>Tipo</label>
                <select id="1" name="type-${id}" class="form-control selection-type">
                    <option value="1">Abierta</option>
                    <option value="2">Selección multiple</option>
                    <option value="3">Rango</option>
                </select>
            </div>
        </div>`;
		return component;
	}
};

let id = 0;

function deployOptions() {
	console.log("options");
}

function startListen() {
	$(".add").on("click", function() {
		$("#render-form").prepend(elem["field"](id++));
		$(".selection-type").on("change", function() {
			if (this.value == 2) deployOptions();
		});
	});
}

$(".nav-item.option-menu").on("click", function() {
	$(".nav-item.option-menu.activate").removeClass("activate");
	$(this).addClass("activate");
	$("#content").remove();
	$("#render").append(elem[$(this).attr("id")]);
	startListen();
});
