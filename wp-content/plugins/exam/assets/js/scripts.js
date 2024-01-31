console.log('check');

jQuery(document).ready(function($) {
    $('.dishes-favorite').on('click', function(e){
        e.preventDefault();

        let post_id = jQuery(this).attr('data-post-id'); // we'll need this later

        jQuery.ajax({
            type: 'post',
            dataType: 'json',
            url: my_ajax_object.ajax_url,
            data: {
                action:'dishes_favorites', // PHP function
                post_id: post_id, // we need to make this dynamic
            },
            success: function(msg){
                console.log(msg);
            }
        });
    });
});
