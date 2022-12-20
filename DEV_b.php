<?php
require_once "header.php";
include "public/logic.php";
$city = getCity();
$enrollment = getEnrollment();
$edu_level = getEduLevel();
$major = getMajor();
$experience = getExperience();
$company_t = getCompanyT();
$company_s = getCompanyS();
$last_job = getLastJob();
?>
<div class="container-fluid header-space">
    <div class="row">
        <div class="col-md-4 left-text">
            <h1 class="sh2">Please enter your contact details for analysis. This data will help determine whether you are
                suitable for a particular position.</h1>
            <div>
                    <img src="images/2.png" class="img-hr">
            </div>
        </div>
        <div class="col-md-4 right-text">
            <form id="dataForm" method="post" action="DEV.php" class="ajax">
                <div class="block-right">
                        <div class="label label-color">Select a city from the list</div>
                        <i class="list"></i>
                        <select name="city" id="city" class="val select select-border">
                            <option disabled selected><img src="images/list.png">Select from list</option>
                            <?php foreach($city as $City) : ?>
                                <option value="<?php echo $City; ?>"><?php echo $City; ?></option>
                            <?php endforeach; ?>
                        </select>
                    <div class="label label-color">Select a enrollment from the list</div>
                    <i class="list"></i>
                    <select name="enrollment" id="enrollment" class="val select select-border">
                        <option disabled selected>Select from list</option>
                        <?php foreach($enrollment as $Enrlmnt) : ?>
                            <option value="<?php echo $Enrlmnt; ?>"><?php echo $Enrlmnt; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="label label-color">Select a edu_level from the list</div>
                    <i class="list"></i>
                    <select name="edu_level" id="edu_level" class="val select select-border">
                        <option disabled selected>Select from list</option>
                        <?php foreach($edu_level as $edu_lvl) : ?>
                            <option value="<?php echo $edu_lvl; ?>"><?php echo $edu_lvl; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="label label-color">Select a major from the list</div>
                    <i class="list"></i>
                    <select name="major" id="major" class="val select select-border">
                        <option disabled selected>Select from list</option>
                        <?php foreach($major as $mjr) : ?>
                            <option value="<?php echo $mjr; ?>"><?php echo $mjr; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="label label-color">Select a experience from the list</div>
                    <i class="list"></i>
                    <select name="experience" id="experience" class="val select select-border">
                        <option disabled selected>Select from list</option>
                        <?php foreach($experience as $exp) : ?>
                            <option value="<?php echo $exp; ?>"><?php echo $exp; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="label label-color">Select a company_t from the list</div>
                    <i class="list"></i>
                    <select name="company_t" id="company_t" class="val select select-border">
                        <option disabled selected>Select from list</option>
                        <?php foreach($company_t as $c_t) : ?>
                            <option value="<?php echo $c_t; ?>"><?php echo $c_t; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="label label-color">Select a company_s from the list</div>
                    <i class="list"></i>
                    <select name="company_s" id="company_s" class="val select select-border">
                        <option disabled selected>Select from list</option>
                        <?php foreach($company_s as $c_s) : ?>
                            <option value="<?php echo $c_s; ?>"><?php echo $c_s; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="label label-color">Select a last_job from the list</div>
                    <i class="list"></i>
                    <select name="last_job" class="val select select-border" id="last_job">
                        <option disabled selected>Select from list</option>
                        <?php foreach($last_job as $l_job) : ?>
                            <option value="<?php echo $l_job; ?>"><?php echo $l_job; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="label label-color">Select a gender</div>
                    <div class="check" style="margin-left: 300px;">
                        <input name="checkbox" id="gender" type="checkbox" value="Female">
                        <label>Female</label>
                        <input name="checkbox" id="gender" type="checkbox" value="Male">
                        <label>Male</label>
                        <input name="checkbox" id="gender" type="checkbox" value="Other">
                        <label>Other</label>
                    </div>
                    <div class="label label-color">Select a rel_experience</div>
                    <div class="check" style="margin-left: 300px;">
                        <input name="checkbox" id="rel_experience" type="checkbox" value="Has relevent experience">
                        <label>Has relevent experience</label>
                        <input name="checkbox" id="rel_experience" type="checkbox" value="No relevent experience">
                        <label>No relevent experience</label>
                    </div>
                    <div>
                        <button class="but btn" style="margin-left: 300px;" type="button" id="submit_btn" name="submit_btn">Send
                            <img src="images/Vector.png"></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>

    $(document).ready(function () {
        $('button').click(function (e) {
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
            let url = 'https://e25f-94-233-88-155.eu.ngrok.io?city=' + city +'&enrollment=' + enrollment + '&major=' + major + '&experience=' + experience + '&company_t=' + company_t + '&company_s=' + company_s +
                '&last_job=' + last_job + '&gender=' + gender + '&rel_experience=' + rel_experience + '&edu_level=' + edu_level;
            $.ajax({
                url: url,
                type:"GET",
                headers: {
                    'Access-Control-Allow-Origin': 'https://e25f-94-233-88-155.eu.ngrok.io',
                },
                dataType: 'jsonp',
                contentType:'application/json',
                CORS: true ,
                crossDomain: true,
                /* Параметры передаваемые в запросе. */
                success: function (data) {   /* функция которая будет выполнена после успешного запроса.  */
                    console.log(data);/* В переменной data содержится ответ от index.php. */
                },
                error: function (data) {
                    alert("error");
                }
            });
        })
    });



</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

