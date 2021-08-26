$("#changeLanguage").on('change',function(e){
    var language = $(this).val();

    if(window.location.pathname == '/ru/login' || window.location.pathname == '/en/login' || window.location.pathname == '/tm/login'){
        if(language == 'ru') {
            window.location.pathname = '/ru/login';
        }
        else if(language == 'en') {
            window.location.pathname = '/en/login';
        }
        else {
            window.location.pathname = '/tm/login';
        }
    }

    else if(window.location.pathname == '/ru/admin/login' || window.location.pathname == '/en/admin/login' || window.location.pathname == '/tm/admin/login'){
        if(language == 'ru') {
            window.location.pathname = '/ru/admin/login';
        }
        else if(language == 'en') {
            window.location.pathname = '/en/admin/login';
        }
        else {
            window.location.pathname = '/tm/admin/login';
        }
    }

    
    else if(window.location.pathname == '/ru/register' || window.location.pathname == '/en/register' || window.location.pathname == '/tm/register'){
        if(language == 'ru') {
            window.location.pathname = '/ru/register';
        }
        else if(language == 'en') {
            window.location.pathname = '/en/register';
        }
        else {
            window.location.pathname = '/tm/register';
        }
    }

});

$("#changeLang").on('change',function(e){
    var language = $(this).val();

    if(language == 'ru') {
        window.location.pathname = '/ru/page-not-found/404';
    }
    else if(language == 'en') {
        window.location.pathname = '/en/page-not-found/404';
    }
    else {
        window.location.pathname = '/tm/page-not-found/404';
    }
});
