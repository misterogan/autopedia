$("#filter1, #filter2, #filter3").on("change",(function(){var e=$("#segment_url").val(),t=$("#segment_url_cat").val(),a=$("#segment_url_2").val(),n=$("#filter1").val(),o=$("#filter2").val(),r=$("#filter3").val(),s=$('meta[name="csrf-token"]').attr("content");$.ajax({headers:{"X-CSRF-TOKEN":s},type:"POST",url:"/get/transparansi/file/filter",dataType:"json",data:{url_segment:e,segment_url_cat:t,segment_second_url:a,filter1:n,filter2:o,filter3:r},beforeSend:function(e){$(".box").removeClass("box-list"),$(".box-list").remove(),$(".box").empty()},success:function(e){$(".box").addClass("box-list"),$(".box").append(e.result)}})})),$("#wbs_form").on("submit",(function(e){e.preventDefault();var t=$('meta[name="csrf-token"]').attr("content"),a=new FormData(this);a.append("g_recaptcha_response",t),$.ajax({headers:{"X-CSRF-TOKEN":t},type:"POST",data:a,url:"/transparansi/tata-kelola-perusahaan/whistle-blowing-system",dataType:"JSON",cache:!1,contentType:!1,processData:!1,beforeSend:function(){swal.showLoading()},success:function(e){if(!0===e.status)location.href="/wbs/thank-you";else{var t="";jQuery.each(e.message,(function(e,a){t+=a+"<br>"})),grecaptcha.reset(),swal.fire({html:t,icon:"error",title:"Oops...",showConfirmButton:!0,confirmButtonColor:"#0086FF",confirmButtonText:"OK, Close"}).then((function(){}))}}})})),$("#contact_us_form").on("submit",(function(e){e.preventDefault();var t=$('meta[name="csrf-token"]').attr("content"),a=new FormData(this);a.append("g_recaptcha_response",t),$.ajax({headers:{"X-CSRF-TOKEN":t},type:"POST",data:a,url:"/hubungi-kami",dataType:"JSON",cache:!1,contentType:!1,processData:!1,beforeSend:function(){swal.showLoading()},success:function(e){!0===e.status?location.href="/hubungi-kami/thank-you":(jQuery.each(e.message,(function(e,t){})),swal.fire({html:"Silahkan mengisi semua field yang bertanda merah",icon:"error",title:"Oops...",showConfirmButton:!0,confirmButtonColor:"#0086FF",confirmButtonText:"OK, Close"}).then((function(){})))}})})),$("#career_form").on("submit",(function(e){e.preventDefault();var t=$('meta[name="csrf-token"]').attr("content"),a=new FormData(this);$.ajax({headers:{"X-CSRF-TOKEN":t},type:"POST",data:a,url:"/career/apply",dataType:"JSON",cache:!1,contentType:!1,processData:!1,beforeSend:function(){swal.showLoading()},success:function(e){if(!0===e.status)location.href="/karir/thank-you";else{var t="";jQuery.each(e.message,(function(e,a){t+=a+"<br>"})),swal.fire({html:t,icon:"error",title:"Oops...",showConfirmButton:!0,confirmButtonColor:"#0086FF",confirmButtonText:"OK, Close"}).then((function(){}))}}})})),$("#masih-bekerja-1").click((function(){$("#keluar-1").toggle(),$("#label-keluar-1").toggle()})),$("#masih-bekerja-2").click((function(){$("#keluar-2").toggle(),$("#label-keluar-2").toggle()})),$("#masih-bekerja-3").click((function(){$("#keluar-3").toggle(),$("#label-keluar-3").toggle()}));