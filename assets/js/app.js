$(document).ready(function(){



    function init()
    {
        // Populate the users dropdown(s)
        var method="scheme_get_items";
        var params = new Object();
        params.type = "users";

        ajax_call(method, params, null, function(data){
            var obj = $.parseJSON(data);
            $.each( obj, function( key, value ) {
                $('.user_list_select')
                    .append($("<option></option>")
                        .attr("value",obj[key].user_id)
                        .text(obj[key].user_id));
            });
        }, '0');

    }

    $('.call').click(function(){

        var params = $(this).data();
        params.user_id = $("#user_selection").val();

        ajax_call($(this).data('method'), params);

    });


    function ajax_call(method, params, message, callback, visibility)
    {

        $.ajax({
            url     : 'ajax.php',
            type    : "post",
            data    : {
                method : method,
                params : params
            },
            success : function(data){
                if(visibility != "0") // 0 turns it off, visible by default
                {
                    $("#ajax_reply").html(data);
                }
                if(message)
                {
                    alert(message);
                }

                if(typeof(callback)==='function'){
                    callback.call(this, data);
                }

            }
        });
    }

    function sayhi()
    {
        alert('hi there!')
    }

    // Init
    init();
});