var count = 8;


start();
function start () {

    if ((count - 1) >= 0){
        count = count - 1;
        cont.innerText = count;
        setTimeout('start()',923)
    }
    else {
        window.location.href = "../../pages/intranet.php";
    }

}