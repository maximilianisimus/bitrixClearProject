$(document).ready(function () {
    var load_more = false;

    $(document).on("click", ".ajax_next_page", function(e) {
        let link = $('.ajax_next_page');
        e.preventDefault();
        if(load_more)
            return false;
        var ajax_url = link.attr("data-href");
        load_more = true;
        $.ajax({
            url: ajax_url,
            type: "POST",
            data: {IS_AJAX: 'Y'},
            success: function(data) {
                link.after(data);
                link.remove();
                load_more = false;
            }
        });
    });
});
