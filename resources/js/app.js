class app {
    constructor() {}

    baseUrl() {
        return "http://localhost/cms_ucv2/"; // ? conexion local
    }

    formatearFecha(texto) {
        return texto.replace(/^(\d{4})-(\d{2})-(\d{2})$/g, "$3/$2/$1");
    }

}
