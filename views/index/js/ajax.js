function loadControl(filePath) {
    let xhttpRequest = new XMLHttpRequest();
    xhttpRequest.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("controlArea").innerHTML =
                this.responseText;
        }
    };
    xhttpRequest.open("GET", filePath, true);
    xhttpRequest.send();
}

function loadAjax(filePath, targetElementId) {
    $.ajax({
        type: "POST",
        url: filePath,
        timeout: 2000,
        beforeSend: function () {
            $(targetElementId).after('<img id="loading" src="../libraries/assets/loading.gif" alt="Loading" height="50" width="50"/>');
        },
        complete: function () {
            $('#loading').remove();
        },
        success: function (data) {
            $(targetElementId).html(data);
        },
        fail: function () {
            $(targetElementId).html('<div class="loading">Please try again soon.</div>');
        }
    });
}
