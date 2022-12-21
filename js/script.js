$(document).ready(function () {
    $('#submit_btn').click(function (e) {
        e.preventDefault();
        let city = $('#city').val();
        let enrollment = $('#enrollment').val();
        let major = $('#major').val();
        let experience = $('#experience').val();
        let company_t = $('#company_t').val();
        let company_s = $('#company_s').val();
        let last_job = $('#last_job').val();
        let gender = $('#gender').val();
        let rel_experience = $('#rel_experience').val();
        let edu_level = $('#edu_level').val();
        let training_hours = $('#training_hours').val();
        let city_development_index = $('#city_index').val();
        let url_params ='?city=' + city +'&enrollment=' + enrollment + '&major=' + major + '&experience=' + experience + '&company_t=' + company_t + '&company_s=' + company_s +
            '&last_job=' + last_job + '&gender=' + gender + '&rel_experience=' + rel_experience + '&edu_level=' + edu_level + '&city_development_index=' + city_development_index +
            '&training_hours=' + training_hours;
        $.ajax({
            url: '../logic/request.php' + url_params,
            type:"GET",
            dataType: "json",
            success: function (data) {   /* функция которая будет выполнена после успешного запроса.  */
                window.location.href = '../projectHR/result.php?result='+data.result;
            },
            error: function (data) {
                alert("error");
            }
        });

    })
});