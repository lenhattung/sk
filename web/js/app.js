function callAjax(url, method){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            return this.responseText;
        }
    };
    xhttp.open(method, url, false);
    xhttp.send();
    return xhttp.onreadystatechange();
}
function callAjaxPost(url){
   return callAjax(url, "POST")
}
function callAjaxGET(url){
    return callAjax(url, "GET")
}

function getPhoneCode(id){
    var url = "/country/get-phone-code"+"?id="+id;
    return callAjaxPost(url);
}