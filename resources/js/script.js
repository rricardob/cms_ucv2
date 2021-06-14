//$(document).ready(menu);

var contador = 1;
let rootbase = new app();

$(document).ready(function () {

    menu();
    //Hacer funcionar menu dropwdown
    $('.ui.dropdown').dropdown();
    login()
    logout()

});

function menu() {
    $(".sub-menu").on("click", function () {
        if (contador == 1) {
            $('.responsive').animate({
                left: '0'
            });
            $('.sub-menu > i').removeClass('icon-bar');
            $('.sub-menu > i').addClass('icon-close');
            contador = 0;
        } else {
            contador = 1;
            $('.responsive').animate({
                left: '-100%'
            });
            $('.sub-menu > i').removeClass('icon-close');
            $('.sub-menu > i').addClass('icon-bar');
        }
    });
}

let login = () => {
    $(".btnAdminLogin").on("click", function () {
        console.log("click login")
        let email = $(".txtEmailLogin").val().trim(),
            pass = $(".txtPassLogin").val().trim();
        //console.log(`Ruta -> ${root}public/controller/admin_actions/login.php`);
        //$.post(); //como post	//$.get(); //con la url
        $.ajax({
            type: "POST",
            url: rootbase.baseUrl()+"src/Controller/admin/login.php",
            data: {
                email: email,
                pass: pass
            },
            beforeSend: function (data) {
                //console.warn("Data-> ",data);
            },
            success: function (data) {
                console.log("data -> ", data);
                if (data === "true") {
                    console.log("pasaste")
                    setTimeout(function () {
                        window.location.href = rootbase.baseUrl()+"public/";
                    }, 3000)
                } else {
                    $('.txtEmailLogin,.txtPassLogin').val("");
                    swal("Sus credenciales no coinciden", "Por favor intente de nuevo", "error");
                }
            },
            error: function (xhr, status) {
                console.error(`Status Error ->${status} Error ->${xhr}`)
            }
        });
    });
}

let logout = () => {
    $("#btnlogout").on("click", function () {

        $.ajax({
            type: "POST",
            url: rootbase.baseUrl() + "src/Controller/admin/logout.php",
            beforeSend: function (data) {
                //console.warn("Data-> ",data);
            },
            success: function (data) {
                console.log("cerrando session")
                setTimeout(function () {
                    window.location.href = rootbase.baseUrl()+"public/admin/";
                }, 4000)
            },
            error: function (xhr, status) {
                console.error(`Status Error ->${status} Error ->${xhr}`)
            }
        });
    });
}