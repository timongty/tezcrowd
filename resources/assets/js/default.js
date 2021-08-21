
window.dropdown = function(){
    return {
        open:false,
        sidebarOpen: false,
        mobile:false,
    }
}

window.modals = function(){

    return {
        deleteModal: false,
        bindDeleteForm(e, $dispatch){
            var delete_modal = $('.delete_modal');
            var route        = e.target.attributes.route.nodeValue;
            var title        = e.target.attributes.title.nodeValue;
            var desc         = e.target.attributes.desc.nodeValue;
            delete_modal.find('.delete_form').attr('action', route);
            delete_modal.find('.title').text(title);
            delete_modal.find('.desc').text(desc);
        },
        submitDeleteForm(e, $dispatch){
            var title = 'Delete';
            var desc  = 'Are you sure you want to delete this?';
            var delete_modal = $('.delete_modal');
            var delete_form = delete_modal.find('.delete_form');
            delete_modal.find('.title').text(title);
            delete_modal.find('.desc').text(desc);
            delete_form.submit();
        },
        imageModal: false
    }
}

$(document).ready(function(){


    $('.left_sidebar .menu-list-item').on('click', function(){

        $('.left_sidebar .menu-list-item a').removeClass('is_active');
        $(this).find('a').addClass('is_active');
    });

    // $("img").on("error", function () {
    //     $(this).attr("src", "https://cdn1.mockupgen.com/assets/images/default-mockupgen.jpg");
    // });

    // delay notification after 5 secs
    setTimeout(function(){
       $('.notification_container').find('.notification_content').fadeOut(500);
    }, 5000);

    // click x to dismiss notification
    $(document).on('click', '.dismiss', closeNotification);
    function closeNotification(){
        $('.notification_container').find('.notification_content').fadeOut(500);
    };

});
