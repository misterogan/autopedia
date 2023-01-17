//
// $("#wbs_form").on("submit", function (event) {
//     grecaptcha.ready(function () {
//         grecaptcha.execute('6LeSzzIiAAAAAPgX_df58To54I4TnRYSmMXLb7To', {action: 'submit'}).then(function (token) {
//             $('#g-recaptcha-response').val(token);
//         });
//     });
// });


function set_subvalue(id_sub){
    $("#id_sub").val(id_sub);
    var url = $("#segment_url").val();
    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        headers: { 'X-CSRF-TOKEN': token },
        type: "POST",
        url: "/get/transparansi/file/choosing",
        dataType: 'json',
        data:{
            'url_segment':url,
            'id_sub':id_sub,
        },
        success: function (data) {
            $(".box-list").append(data.result);
        },
    });
}


$('#filter1, #filter2, #filter3').on('change', function() {
    // $('#filter1').val('');
    // $('#filter2').val('');
    // $('#filter3').val('');
    var url = $("#segment_url").val();
    var url_cat = $("#segment_url_cat").val();
    var url_2 = $("#segment_url_2").val();
    var val1 = $('#filter1').val();
    var val2 = $('#filter2').val();
    var val3 = $('#filter3').val();
    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        headers: { 'X-CSRF-TOKEN': token },
        type: "POST",
        url: "/get/transparansi/file/filter",
        dataType: 'json',
        data:{
            'url_segment':url,
            'segment_url_cat':url_cat,
            'segment_second_url':url_2,
            'filter1':val1,
            'filter2':val2,
            'filter3':val3,
        },
        beforeSend:function(data){
            $(".box").removeClass("box-list");
            $(".box-list").remove();
            $('.box').empty();

        },
        success: function (data) {
            // $(".box").append(data.result);

            // $(".box").children('div').addClass("box-list");
            $(".box").addClass("box-list");
            $(".box").append(data.result);

            // console.log(data.result);

        },
    });

});

$("#wbs_form").on("submit", function (event) {
        event.preventDefault();
        var token = $('meta[name="csrf-token"]').attr('content');
        var formData = new FormData(this);
        // var captcha = grecaptcha.getResponse();
        formData.append('g_recaptcha_response', token);

        $.ajax({
            headers: { "X-CSRF-TOKEN": token },
            type: "POST",
            data: formData,
            url: "/transparansi/tata-kelola-perusahaan/whistle-blowing-system",
            dataType: "JSON",
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {
                swal.showLoading();
            },
            success: function (data) {
                if (data.status === true) {
                    location.href = "/wbs/thank-you";
                } else {
                    var values = "";
                    jQuery.each(data.message, function (key, value) {
                        values += value + "<br>";
                    });
                    grecaptcha.reset();
                    swal.fire({
                        html: values,
                        icon: "error",
                        title: "Oops...",
                        showConfirmButton: true,
                        confirmButtonColor: "#0086FF",
                        confirmButtonText: "OK, Close",
                    }).then(function () {});
                }
            },
        });
});

$("#contact_us_form").on("submit", function (event) {
    event.preventDefault();
    var token = $('meta[name="csrf-token"]').attr('content');
    var formData = new FormData(this);
    formData.append('g_recaptcha_response', token);
    $.ajax({
        headers: { 'X-CSRF-TOKEN': token },
        type : 'POST',
        data: formData,
        url  : '/hubungi-kami',
        dataType: 'JSON',
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
            swal.showLoading();
        },
        success: function(data){
            if(data.status === true) {
                location.href = "/hubungi-kami/thank-you";
            }else {
                var values = '';
                jQuery.each(data.message, function (key, value) {
                    values += value+"<br>";
                });

                swal.fire({
                    html: "Silahkan mengisi semua field yang bertanda merah",
                    icon: "error",
                    title: "Oops...",
                    showConfirmButton: true,
                    confirmButtonColor: "#0086FF",
                    confirmButtonText: "OK, Close",
                }).then(function () {});
            }
        }
    });
});

$("#career_form").on("submit", function (event) {
    event.preventDefault();
    var token = $('meta[name="csrf-token"]').attr('content');
    var formData = new FormData(this);
    $.ajax({
        headers: { 'X-CSRF-TOKEN': token },
        type : 'POST',
        data: formData,
        url  : '/career/apply',
        dataType: 'JSON',
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
            swal.showLoading();
        },
        success: function(data){
            if(data.status === true) {
                location.href = "/karir/thank-you";
            }else {
                var values = '';
                jQuery.each(data.message, function (key, value) {
                    values += value+"<br>";
                });

                swal.fire({
                    html: values,
                    icon: "error",
                    title: "Oops...",
                    showConfirmButton: true,
                    confirmButtonColor: "#0086FF",
                    confirmButtonText: "OK, Close",
                }).then(function () {});
            }

        }
    });
});

$('#masih-bekerja-1').click(function(){
    $('#keluar-1').toggle();
    $('#label-keluar-1').toggle();
});

$('#masih-bekerja-2').click(function(){
    $('#keluar-2').toggle();
    $('#label-keluar-2').toggle();
});

$('#masih-bekerja-3').click(function(){
    $('#keluar-3').toggle();
    $('#label-keluar-3').toggle();
});
