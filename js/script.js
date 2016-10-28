$(function(){

    $.get( "php/getDistricts.php", function( data ) {
        var json = jQuery.parseJSON(data);
        $.each(json, function(i, val){
            $('#district').append('<option value="' + i + '">' + val + '</option>');
        });
    });

    $('#district').on('change', function () {
        var districtId = $('#district').val();
        if(districtId === 0){
            return;
        }
        $.ajax({
            url: 'php/getBlocksByDistrict.php',
            data:{district_id: districtId}
        }).done(function (data) {
            var json = jQuery.parseJSON(data);
            $('#block').html('');
            $.each(json, function(i, val){
                $('#block').append('<option value="' + i + '">' + val + '</option>');
            });
        });
    });


    $('#submit').on('click', function (e) {
        e.preventDefault();
        var travel_style = [];
        $('input:checkbox:checked').each(function () {
            travel_style.push($(this).val());
        });

        var params = {
            district: $('#district option:selected').text(),
            block: $('#block option:selected').text(),
            street: $('#street').val(),
            building: $('#building').val(),
            travel_type: travel_style
        };
        $.ajax({
            url:'php/submitHandler.php',
            method:'POST',
            data:{data: params},
            beforeSend:function () {
                $('#submit').css('display', 'none');
                $('#loading').css('display', 'block');
            },
            success: function (data) {
                $('#loading').css('display', 'none')
                $('#submit').css('display', 'block');
                setTimeout(function(){
                    alert(data);
                }, 500);
            }
        });
    });
});

