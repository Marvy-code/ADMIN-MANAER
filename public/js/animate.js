$(function () {
    $('#dev_web').hide();
    $('#hide_dev_web').hide();

    $('#manager').hide();
    $('#hide_manager').hide();

    $('#sho_dev_web').click(function () {
        $('#sho_dev_web').hide(1000);
        $('#com').hide(1000);
        $('#management').hide(1000);
        $('#dev_web').show(2000);
        $('#hide_dev_web').show(500);
    });

    $('#hide_dev_web').click(function () {
        $('#dev_web').hide(1500);
        $('#sho_dev_web').show(1000);
        $('#hide_dev_web').hide(1000);
        $('#com').show(1000);
        $('#management').show(1000);
    });

    $('#show_manager').click(function () {
        $('#show_manager').hide(1000);
        $('#manager').show(1500);
        $('#hide_manager').show(500);
        $('#dev').hide('1000');
        $('#com').hide('1000');
    });

    $('#hide_manager').click(function () {
        $('#show_manager').show(1000);
        $('#hide_manager').hide(500);
        $('#manager').hide(500);
        $('#dev').show('500');
        $('#com').show('500');
    });

    $('#search-box').on('keyup', function(){
        var query = $(this).val(); 
        
        if(query.length>=2){
            $.ajax({
                type: 'POST',
                url: '@dniControleur/rechercheArticle.php',
                data: {
                    query: query
                },
                success: function(data){
                    $('#display-results').html(data).show();
                }
            })
        }
        
    });
})