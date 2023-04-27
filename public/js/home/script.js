//quantdo a pagina inicia
$(window).on("load", function(){
    $("#telefone").mask('(99) 99999-9999')
    $("#slide-container").css("opacity", 1);
    setInterval(change_banner, 7000);
})
//formulario da home
$("form").on("submit", function (e) {
    e.preventDefault();
    if(!$("#nome").val() || !$("#email").val() || !$("#telefone").val() || !$("#mensagem").val()){
        Swal.fire({
            position: 'center',
            icon: 'question',
            title: 'Formulario incompleto',
            html:`<p>Preencha todos os campos para enviarmos sua mensagem.</p>`,
            showConfirmButton: true,
            confirmButtonColor: '#3D8B5B',
        })
        return;
    }
    let form = $("form").serialize();
    let url = $("form").attr("action");
    $.ajax({
        method:"post",
        url:url,
        data:form,
        dataType:"json"
    });
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Sua mensagem foi enviada',
        html:`<p>um representante entrará em contato com você em breve.</p>`,
        showConfirmButton: true,
        confirmButtonColor: '#3D8B5B',
    }).then((result)=>{
        if(result.isConfirmed){
            window.location.replace('/');
        }
    })
});

// eventos click
$("#close").on('click', function(){
    $(".side-bar").css('display', 'none');
    $("#open").css('display', 'block');
})
$("#open").on('click', function(){
    $(".side-bar").css('display', 'block');
    $("#open").css('display', 'none');
})
$("#logo-mali-brasil").on('click', function(){
    window.location.replace('/')
})

//Funcoes
function change_banner(){
    $("#slide-container").css("transition", "background-image 0.4s ease-in-out");
    let ban1 = $(location).attr('host')+'/img/banners/home-banner-01.jpg';
    let ban2 = $(location).attr('host')+'/img/banners/home-banner-04.jpg';
    let ban3 = $(location).attr('host')+'/img/banners/home-banner-data-destruction.jpg';
    let ban4 = $(location).attr('host')+'/img/banners/page-banner-recycling-kits.jpg';
    let ban5 = $(location).attr('host')+'/img/banners/home-banner-itad.jpg';
    let ban6 = $(location).attr('host')+'/img/banners/home-banner-06.jpg';

    let openBan = $("#slide-container").css("background-image");
    openBan = replaceUrl(openBan);
    switch(true){
        case openBan == ban1:
            $("#slide-container").css("background-image", "url('/img/banners/home-banner-04.jpg')");
            $("#titulo-reserva").text('Mali Brasil Reserva');
            $("#texto-reserva").text('Lixo eletrônico é tudo aquilo e você vê, lê e acha que não serve para nada, então outros reciclam, selecionam e constroi o seu pensamento');
            break;
        case openBan == ban2:
            $("#slide-container").css("background-image", "url('/img/banners/home-banner-data-destruction.jpg')");
            $("#titulo-reserva").text('Mali Brasil Reserva');
            $("#texto-reserva").text('A Logística Reversa é um instrumento de desenvolvimento econômico e social caracterizado por um conjunto de ações');
            break;
        case openBan == ban3:
            $("#slide-container").css("background-image", "url('/img/banners/page-banner-recycling-kits.jpg')");
            $("#titulo-reserva").text('Mali Brasil Reserva');
            $("#texto-reserva").text('processos podem ser caracterizados como cada atividade realizada com o intuito de transformar uma entrada em saída. Isso significa que uma sequência lógica de tarefas que busquem um objetivo pode ser considerada um processo');
            break;
        case openBan == ban4:
            $("#slide-container").css("background-image", "url('/img/banners/home-banner-itad.jpg')");
            $("#titulo-reserva").text('Mali Brasil Produtos');
            $("#texto-reserva").text('');            
            break;
        case openBan == ban5:
            $("#slide-container").css("background-image", "url('/img/banners/home-banner-06.jpg')");
            $("#titulo-reserva").text('Mali Brasil Reserva');
            $("#texto-reserva").text('Mali vem salvando o planeta fazendo sua parte, Transformando eletrônicos obsoletos em matéria-prima para construção de novos computadores');           
            break;
        case openBan == ban6:
            $("#slide-container").css("background-image", "url('/img/banners/home-banner-01.jpg')");
            $("#titulo-reserva").text("Mali Brasil Reserva");
            $("#texto-reserva").text("Mali vem salvando o planeta fazendo sua parte, Transformando eletrônicos obsoletos em matéria-prima para construção de novos computadores");
            break;
        default:
            $("#slide-container").css("background-image", "url('/img/banners/home-banner-01.jpg')");
            $("#titulo-reserva").text("Mali Brasil Reserva");
            $("#texto-reserva").text("Mali vem salvando o planeta fazendo sua parte, Transformando eletrônicos obsoletos em matéria-prima para construção de novos computadores");
    }
}

function banner(id){
    $("#slide-container").css("transition", "background-image 0.4s ease-in-out");
    let banner = id;
    switch(banner){
        case "banner-1":
            $("#slide-container").css("background-image", "url('/img/banners/home-banner-01.jpg')");
            $("#titulo-reserva").text("Mali Brasil Reserva");
            $("#texto-reserva").text("Mali vem salvando o planeta fazendo sua parte, Transformando eletrônicos obsoletos em matéria-prima para construção de novos computadores");
            break;
        case "banner-2":  
            $("#slide-container").css("background-image", "url('/img/banners/home-banner-04.jpg')");
            $("#titulo-reserva").text('Mali Brasil Reserva');
            $("#texto-reserva").text('Lixo eletrônico é tudo aquilo e você vê, lê e acha que não serve para nada, então outros reciclam, selecionam e constroi o seu pensamento');
            break;
        case "banner-3": 
            $("#slide-container").css("background-image", "url('/img/banners/home-banner-data-destruction.jpg')");
            $("#titulo-reserva").text('Mali Brasil Reserva');
            $("#texto-reserva").text('A Logística Reversa é um instrumento de desenvolvimento econômico e social caracterizado por um conjunto de ações');
            break;
        case "banner-4": 
            $("#slide-container").css("background-image", "url('/img/banners/page-banner-recycling-kits.jpg')");
            $("#titulo-reserva").text('Mali Brasil Reserva');
            $("#texto-reserva").text('processos podem ser caracterizados como cada atividade realizada com o intuito de transformar uma entrada em saída. Isso significa que uma sequência lógica de tarefas que busquem um objetivo pode ser considerada um processo');
            break;
        case "banner-5": 
            $("#slide-container").css("background-image", "url('/img/banners/home-banner-itad.jpg')");
            $("#titulo-reserva").text('Mali Brasil Produtos');
            $("#texto-reserva").text('');
            break;
        case "banner-6": 
            $("#slide-container").css("background-image", "url('/img/banners/home-banner-06.jpg')");
            $("#titulo-reserva").text('Mali Brasil Reserva');
            $("#texto-reserva").text('Mali vem salvando o planeta fazendo sua parte, Transformando eletrônicos obsoletos em matéria-prima para construção de novos computadores');
            break;
    }
}

function replaceUrl(string){
    var url = string.replace(`url("`, ``);
    var url = url.replace(`")`, ``);
    var url = url.replace(`http://`, ``);
    return url;
}

