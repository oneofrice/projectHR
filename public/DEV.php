<?php

?>
<!DOCTYPE html>
<html lang="ru">
<!-- добавляем русский язык -->
<meta charset="utf-8">
<head>
    <link rel="stylesheet" href="../styles.css">
<!--    <script src="script.js"></script>-->
    <title>HR PROJECT</title>
    <!-- подключаем фреймворк -->

<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
<!--    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
<!-- создаём блок, к которому будет привязано приложение -->
<div class="btn-group" style="width:100%">
    <button onclick="location.href='HR.html';" style="width:25%">HOME</button>
    <button style="width:25%">COLLECTION</button>
    <button style="width:25%">ABOUT</button>
    <button style="width:25%">CONTACT</button>
</div>
<div>
    <div class="perenos  block-left">
        <h1 class="sh2">Please enter your contact details for analysis. This data will help determine whether you are
            suitable for a particular position.</h1>
        <div class="im2">
            <center>
                <img src="../images/2.png">
            </center>
        </div>
    </div>

    <form id="dataForm" method="post" action="DEV.php" class="ajax">
        <div class="block-right fo1 signupform">
            <div class="label">Select a city from the list</div>
            <i class="list"></i>
            <select name="city" id="city" class="val select">
                <option disabled selected>Select from list</option>
                <option>city_103</option>
                <option>city_40</option>
                <option>city_21</option>
                <option>city_115</option>
                <option>city_162</option>
                <option>city_176</option>
                <option>city_160</option>
                <option>city_46</option>
                <option>city_61</option>
                <option>city_114</option>
                <option>city_13</option>
                <option>city_159</option>
                <option>city_102</option>
                <option>city_67</option>
                <option>city_100</option>
                <option>city_16</option>
                <option>city_71</option>
                <option>city_104</option>
                <option>city_64</option>
                <option>city_101</option>
                <option>city_83</option>
                <option>city_105</option>
                <option>city_73</option>
                <option>city_75</option>
                <option>city_41</option>
                <option>city_11</option>
                <option>city_93</option>
                <option>city_90</option>
                <option>city_36</option>
                <option>city_20</option>
                <option>city_57</option>
                <option>city_152</option>
                <option>city_19</option>
                <option>city_65</option>
                <option>city_74</option>
                <option>city_173</option>
                <option>city_136</option>
                <option>city_98</option>
                <option>city_97</option>
                <option>city_50</option>
                <option>city_138</option>
                <option>city_82</option>
                <option>city_157</option>
                <option>city_89</option>
                <option>city_150</option>
                <option>city_70</option>
                <option>city_175</option>
                <option>city_94</option>
                <option>city_28</option>
                <option>city_59</option>
                <option>city_165</option>
                <option>city_145</option>
                <option>city_142</option>
                <option>city_26</option>
                <option>city_12</option>
                <option>city_37</option>
                <option>city_43</option>
                <option>city_116</option>
                <option>city_23</option>
                <option>city_99</option>
                <option>city_149</option>
                <option>city_10</option>
                <option>city_45</option>
                <option>city_80</option>
                <option>city_128</option>
                <option>city_158</option>
                <option>city_123</option>
                <option>city_7</option>
                <option>city_72</option>
                <option>city_106</option>
                <option>city_143</option>
                <option>city_78</option>
                <option>city_109</option>
                <option>city_24</option>
                <option>city_134</option>
                <option>city_48</option>
                <option>city_144</option>
                <option>city_91</option>
                <option>city_146</option>
                <option>city_133</option>
                <option>city_126</option>
                <option>city_118</option>
                <option>city_9</option>
                <option>city_167</option>
                <option>city_27</option>
                <option>city_84</option>
                <option>city_54</option>
                <option>city_39</option>
                <option>city_79</option>
                <option>city_76</option>
                <option>city_77</option>
                <option>city_81</option>
                <option>city_131</option>
                <option>city_44</option>
                <option>city_117</option>
                <option>city_155</option>
                <option>city_33</option>
                <option>city_141</option>
                <option>city_127</option>
                <option>city_62</option>
                <option>city_53</option>
                <option>city_25</option>
                <option>city_2</option>
                <option>city_69</option>
                <option>city_120</option>
                <option>city_111</option>
                <option>city_30</option>
                <option>city_1</option>
                <option>city_140</option>
                <option>city_179</option>
                <option>city_55</option>
                <option>city_14</option>
                <option>city_42</option>
                <option>city_107</option>
                <option>city_18</option>
                <option>city_139</option>
                <option>city_180</option>
                <option>city_166</option>
                <option>city_121</option>
                <option>city_129</option>
                <option>city_8</option>
                <option>city_31</option>
                <option>city_171</option>
            </select>
                <div class="label">Select a enrollment from the list</div>
                <i class="list"></i>
                <select name="enrollment" id="enrollment" class="val select">
                    <option disabled selected>Select from list</option>
                    <option>no_enrollment</option>
                    <option>Full time course</option>
                    <option>Part time course</option>
                </select>
                <div class="label">Select a edu_level from the list</div>
                <i class="list"></i>
                <select name="edu_level" id="edu_level" class="val select">
                    <option disabled selected>Select from list</option>
                    <option>Graduate</option>
                    <option>Masters</option>
                    <option>High School</option>
                    <option>Phd</option>
                    <option>Primary School</option>
                </select>
                <div class="label">Select a major from the list</div>
                <i class="list"></i>
                <select name="major" id="major" class="val select">
                    <option disabled selected>Select from list</option>
                    <option>STEM</option>
                    <option>Business Degree</option>
                    <option>Arts</option>
                    <option>Humanities</option>
                    <option>No Major</option>
                    <option>Other</option>
                </select>
                <div class="label">Select a experience from the list</div>
                <i class="list"></i>
                <select name="experience" id="experience" class="val select">
                    <option disabled selected>Select from list</option>
                    <option><1</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>>20</option>
                </select>
                <div class="label">Select a company_t from the list</div>
                <i class="list"></i>
                <select name="company_t" id="company_t" class="val select">
                    <option disabled selected>Select from list</option>
                    <option>Pvt Ltd</option>
                    <option>Funded Startup</option>
                    <option>Early Stage Startup</option>
                    <option>NGO</option>
                    <option>Public Sector</option>
                    <option>Other</option>
                </select>
                <div class="label">Select a company_s from the list</div>
                <i class="list"></i>
                <select name="company_s" id="company_s" class="val select">
                    <option disabled selected>Select from list</option>
                    <option><10</option>
                    <option>10-49</option>
                    <option>50-99</option>
                    <option>100-500</option>
                    <option>500-999</option>
                    <option>1000-4999</option>
                    <option>5000-9999</option>
                    <option>10000+</option>
                </select>
                <div class="label">Select a last_job from the list</div>
                <i class="list"></i>
                <select name="last_job" class="val select" id="last_job">
                    <option disabled selected>Select from list</option>
                    <option>never</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>>4</option>
                </select>
            <div class="label">Select a gender</div>
            <div class="check">
                <input name="checkbox" id="gender" type="checkbox" value="Female">
                <label>Female</label>
                <input name="checkbox" id="gender" type="checkbox" value="Male">
                <label>Male</label>
                <input name="checkbox" id="gender" type="checkbox" value="Other">
                <label>Other</label>
            </div>
            <div class="label">Select a rel_experience</div>
            <div class="check">
                <input name="checkbox" id="rel_experience" type="checkbox" value="Has relevent experience">
                <label>Has relevent experience</label>
                <input name="checkbox" id="rel_experience" type="checkbox" value="No relevent experience">
                <label>No relevent experience</label>
            </div>
            <div>
                <button class="but btn" type="button" id="submit_btn" name="submit_btn">Send
                    <img src="../images/Vector.png"></button>
            </div>
        </div>
    </form>
</div>
<!-- начинаем писать на Vue.js -->

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

</body>
</html>