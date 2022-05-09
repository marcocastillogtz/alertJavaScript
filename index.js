const hello=function(content) {

    var alerta = document.createElement("div");
    alerta.className="modal"
    document.body.appendChild(alerta);

    var content1 = document.createElement("div");
    content1.id="content";
    content1.className="content"
    alerta.appendChild(content1);

    var content1=content;
    document.getElementById("content").innerHTML = content1;

    
}