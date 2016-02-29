var modalBs = $('#modalBs');
var modalBsContent = $('#modalBs').find(".modal-content");
$(function(){
   
handleAjaxModal();
})




function handleAjaxModal() {

    
    // Limpia los eventos asociados para elementos ya existentes, asi evita duplicación
    $("a[data-modal]").unbind("click");
    // Evita cachear las transaccione Ajax previas
    $.ajaxSetup({ cache: false });

    // Configura evento del link para aquellos para los que desean abrir popups
    $("a[data-modal]").on("click", function (e) {
        var dataModalValue = $(this).data("modal");

        modalBsContent.load(this.href, function (response, status, xhr) {
            switch (status) {
                case "success":
                    modalBs.modal({ backdrop: 'static', keyboard: false }, 'show');

                    if (dataModalValue == "modal-lg") {
                        modalBs.find(".modal-dialog").addClass("modal-lg");
                    } else {
                        modalBs.find(".modal-dialog").removeClass("modal-lg");
                    }

                    
                    break;

                case "error":
                    var message = "Error de ejecución: " + xhr.status + " " + xhr.statusText;
                    if (xhr.status == 403) $.msgbox(response, { type: 'error' });
                    else $.msgbox(message, { type: 'error' });
                    break;
            }

        });
        return false;
    });
}
    