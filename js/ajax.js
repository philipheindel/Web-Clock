function loadControl(filePath) {
    let xhttpRequest = new XMLHttpRequest();
    xhttpRequest.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("controlArea").innerHTML =
                this.responseText;
        }
    };
    xhttpRequest.open("GET", filePath, true);
    xhttpRequest.send();
}
