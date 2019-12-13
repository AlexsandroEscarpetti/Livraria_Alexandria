
function as() {
    var box_sing = window.document.getElementById('box_sing');

    var new_client = window.document.getElementById('new_account');
    if (new_client.checked){
        box_sing.classList.remove("boxx");

    }
    else {
        box_sing.classList.add("boxx");

    }
}

function add_livros() {
    var menu = window.document.getElementById('menu');
    menu.classList.add("anul")
    var divbook = window.document.getElementById("div_addbook");
    divbook.classList.remove("anul")
}


function r_add_livros() {
    var menu = window.document.getElementById('menu');
    menu.classList.remove("anul")
    var divbook = window.document.getElementById("div_addbook");
    divbook.classList.add("anul")
}


function add_fornecedor() {

    var menu = window.document.getElementById('menu');
    menu.classList.add("anul");
    var divfor = window.document.getElementById("div_fornecedor");
    divfor.classList.remove("anul")
}


function r_fornecedor() {

    var menu = window.document.getElementById('menu');
    menu.classList.remove("anul");
    var divfor = window.document.getElementById("div_fornecedor");
    divfor.classList.add("anul")
}

function vender_livros() {
    var menu = window.document.getElementById('menu');
    menu.classList.add("anul");
    var divvenda = window.document.getElementById("vendas_div");
    divvenda.classList.remove("anul")
}

function r_vender_livros() {
    var menu = window.document.getElementById('menu');
    menu.classList.remove("anul");
    var divvenda = window.document.getElementById("vendas_div");
    divvenda.classList.add("anul")
}



function search_livros() {
    var menu = window.document.getElementById('menu');
    menu.classList.add("anul");
    var divseach_book = window.document.getElementById("div_search_book");
    divseach_book.classList.remove("anul")
}


function r_search_livros() {
    var menu = window.document.getElementById('menu');
    menu.classList.remove("anul");
    var divseach_book = window.document.getElementById("div_search_book");
    divseach_book.classList.add("anul")
}


function estque_div() {
    var menu = window.document.getElementById('menu');
    menu.classList.add("anul");
    var div_estoque = window.document.getElementById("div_estoque");
    div_estoque.classList.remove("anul")
}



function r_estque_div() {
    var menu = window.document.getElementById('menu');
    menu.classList.remove("anul");
    var div_estoque = window.document.getElementById("div_estoque");
    div_estoque.classList.add("anul")
}

function menu_fiscal() {
    var menu = window.document.getElementById('menu');
    menu.classList.add("anul");
    var div_main_fiscal = window.document.getElementById("menu_fiscal");
    div_main_fiscal.classList.remove("anul")
}



function r_menu_fiscal() {
    var menu = window.document.getElementById('menu');
    menu.classList.remove("anul");
    var div_main_fiscal = window.document.getElementById("menu_fiscal");
    div_main_fiscal.classList.add("anul")
}

function messege_erro() {
    window.alert("infelizmente não é possível se cadastrar ou entrar no momento devido ao alto fluxo de clientes nesse processo." +
        "por favor,tente novamente mais tarde")
}

function  redirect_pense_python() {
    window.location.href =   "pages/book_pyt.html";
    
}

function  redirect_xiaomi() {
    window.location.href =   "mi9.html";

}





$(function(){
    $(".carrosel").jCarouselLite({
        btnPrev : '.esq',
        btnNext : '.dir',
        auto    : 2000,
        speed   : 2000,
        visible : 1
    })
});



function menos_() {
    var menu = window.document.getElementById('menu');
    menu.classList.add("anul");
    var div_anul = window.document.getElementById("del_book");
    div_anul.classList.remove("anul")
}

function r_menos() {
    var menu = window.document.getElementById('menu');
    menu.classList.remove("anul");
    var div_anul = window.document.getElementById("del_book");
    div_anul.classList.add("anul")
}



function del_estoque() {
    var menu = window.document.getElementById('menu');
    menu.classList.add("anul");
    var div_anul = window.document.getElementById("del_estoque");
    div_anul.classList.remove("anul")
}

function r_del_estoque() {
    var menu = window.document.getElementById('menu');
    menu.classList.remove("anul");
    var div_anul = window.document.getElementById("del_estoque");
    div_anul.classList.add("anul")
}


function del_func() {
    var menu = window.document.getElementById('menu');
    menu.classList.add("anul");
    var div_anul = window.document.getElementById("del_func");
    div_anul.classList.remove("anul")
}

function r_del_func() {
    var menu = window.document.getElementById('menu');
    menu.classList.remove("anul");
    var div_anul = window.document.getElementById("del_func");
    div_anul.classList.add("anul")
}


function del_fornecedor() {
    var menu = window.document.getElementById('menu');
    menu.classList.add("anul");
    var div_anul = window.document.getElementById("del_fornecedores_id");
    div_anul.classList.remove("anul")
}

function r_del_forneced() {
    var menu = window.document.getElementById('menu');
    menu.classList.remove("anul");
    var div_anul = window.document.getElementById("del_fornecedores_id");
    div_anul.classList.add("anul")
}


function edit_funcionario() {
    var menu = window.document.getElementById('menu');
    menu.classList.add("anul");
    var div_anul = window.document.getElementById("edit_funcionario");
    div_anul.classList.remove("anul")
}

function r_edit_funcionario() {
    var menu = window.document.getElementById('menu');
    menu.classList.remove("anul");
    var div_anul = window.document.getElementById("edit_funcionario");
    div_anul.classList.add("anul")
}





function edit_livros() {
    var menu = window.document.getElementById('menu');
    menu.classList.add("anul");
    var div_anul = window.document.getElementById("edit_livros");
    div_anul.classList.remove("anul")
}

function r_edit_livros() {
    var menu = window.document.getElementById('menu');
    menu.classList.remove("anul");
    var div_anul = window.document.getElementById("edit_livros");
    div_anul.classList.add("anul")
}


function edit_forne() {
    var menu = window.document.getElementById('menu');
    menu.classList.add("anul");
    var div_anul = window.document.getElementById("edit_fornecedoress");
    div_anul.classList.remove("anul")
}

function r_edit_forne() {
    var menu = window.document.getElementById('menu');
    menu.classList.remove("anul");
    var div_anul = window.document.getElementById("edit_fornecedoress");
    div_anul.classList.add("anul")
}



function edit_est() {
    var menu = window.document.getElementById('menu');
    menu.classList.add("anul");
    var div_anul = window.document.getElementById("edit_est");
    div_anul.classList.remove("anul")
}

function r_edit_est() {
    var menu = window.document.getElementById('menu');
    menu.classList.remove("anul");
    var div_anul = window.document.getElementById("edit_est");
    div_anul.classList.add("anul")
}










const nav = document.getElementById("mn_nv");
const Top_menu = nav.offsetTop;
const hamburguer = document.getElementById("label_hamburguer");
const Top_hamburguer = hamburguer.offsetTop;
window.document.onscroll=FixarHamburguerormenu;



function FixarHamburguerormenu() {
    if (window.pageYOffset >= Top_hamburguer){
        hamburguer.classList.add("ZHamb_fixo")
        nav.classList.add("ZHamb_fixod")


    }
    else {
        hamburguer.classList.remove("ZHamb_fixo")
        nav.classList.remove("ZHamb_fixod")



    }


    window.document.onscroll=FixarHamburguerormenu;




}









