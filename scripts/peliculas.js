$(document).ready(function () {

    $("#taulaPelis").fancyTable({
        sortColumn: 0,
        pagination: true,
        perPage: 3,
        globalSearch: true,
        inputStyle: "",
        inputPlaceholder: "Busqueda..."
    });

    $('#masPeli').click(function () {
        location.href = '../';
    })


});