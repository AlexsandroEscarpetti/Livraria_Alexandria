var count = 5;


start();
function start () {

    if ((count - 1) >= 0){
        count = count - 1;
        cont.innerText = count;
        setTimeout('start()',923)
    }
    else {
        window.location.href = "../../index.html";
    }

}