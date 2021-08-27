$(document).on('click', '.page-link', function (event) {
    event.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    var pagination = $("#datatable_length").val();

    getMoreData(page, pagination);
});

function getMoreData(page, pagination) {
    var data = 'page=' + page + '&pagination=' + pagination;

    $.ajax({
        type: "GET",
        url: window.location.href,
        data: data,
        success: function (data) {
            $('#datatable').html(data);
        }
    });
}

$("#datatable_length").on('change',function(){
    var pagination = $("#datatable_length").val();

    getPaginationData(pagination);    
});

function getPaginationData(pagination) {
    var data = 'pagination=' + pagination

    $.ajax({
        type: "GET",
        url: window.location.href,
        data: data,
        success: function (data) {
            $('#datatable').html(data);
        }
    });
}

$("#datatable_search").keyup(function () {
    var search = $("#datatable_search").val();
    var pagination = $("#datatable_length").val();
    
    getSearchData(search, pagination);
});

function getSearchData(search, pagination){
    var data = 'search=' + search + '&pagination=' + pagination;
    console.log(data);

    $.ajax({
        type: "GET",
        url: window.location.href,
        data: data,
        success: function (data) {
            $('#datatable').html(data);
        }
    });
}