function getPhoneCode(th){
    var myID = th.value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("register-phonecountrycode").value = this.responseText;
        }
    };
    xmlhttp.open("GET", "<?=\yii\helpers\Url::base(true)?>/country/get-phone-code?id=" + myID, true);
    xmlhttp.send();
}