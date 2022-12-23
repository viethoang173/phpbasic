$(document).ready(function(){
    if(window.location.pathname.match("/admin/")){
        const path = window.location.pathname.replace("/admin/","").replace(".html","");
        $(`.${path}`).addClass("active");
        return;
    } else {
        const path = window.location.pathname.replace("/users/","").replace(".html","");
        $(`.${path}`).addClass("active");
        return;
    }
});