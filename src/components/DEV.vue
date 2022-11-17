<template>
  <body>
  <!-- создаём блок, к которому будет привязано приложение -->
  <div class="btn-group" style="width:100%">
    <button style="width:25%">HOME</button>
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
          <img src="./images/2.png">
        </center>
      </div>
    </div>

    <form>
      <div class="block-right fo1 signupform">
        <div class="label">Select a city from the list</div>
        <i class="list"></i>
        <select class="val select">
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
        <select class="val select">
          <option disabled selected>Select from list</option>
          <option>no_enrollment</option>
          <option>Full time course</option>
          <option>Part time course</option>
        </select>
        <div class="label">Select a edu_level from the list</div>
        <i class="list"></i>
        <select class="val select">
          <option disabled selected>Select from list</option>
          <option>Graduate</option>
          <option>Masters</option>
          <option>High School</option>
          <option>Phd</option>
          <option>Primary School</option>
        </select>
        <div class="label">Select a major from the list</div>
        <i class="list"></i>
        <select class="val select">
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
        <select class="val select">
          <option disabled selected>Select from list</option>
          <option>Less than 1</option>
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
          <option>Over 20</option>
        </select>
        <div class="label">Select a company_t from the list</div>
        <i class="list"></i>
        <select class="val select">
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
        <select class="val select">
          <option disabled selected>Select from list</option>
          <option>Less than 10</option>
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
        <select class="val select">
          <option disabled selected>Select from list</option>
          <option>never</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>Over 4</option>
        </select>
        <div class="label">Select a gender</div>
        <div class="check">
          <input name="checkbox" type="checkbox">
          <label>Has relevent experience</label>
          <input name="checkbox" type="checkbox">
          <label>No relevent experience</label>
        </div>
        <div class="label">Select a rel_experience</div>
        <div class="check">
          <input name="checkbox" type="checkbox">
          <label>Female</label>
          <input name="checkbox" type="checkbox">
          <label>Male</label>
          <input name="checkbox" type="checkbox">
          <label>Other</label>
        </div>
        <div>
          <button class="but" type="button" name="submit_btn">Send
            <img src="./images/Vector.png"></button>
        </div>
      </div>
    </form>
  </div>
  </body>

</template>

<script>
export default {
  name: "DEV"
}
</script>

<style scoped>
.btn-group button {
  border: none;
  background: Snow;

  width: 269px;
  height: 55px;
  left: 564px;
  top: 54px;

  font-family: 'Barlow';
  font-style: italic;
  font-weight: 500;
  font-size: 20px;
  line-height: 24px;

  color: #09418B;
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}


/* Add a background color on hover */
.btn-group button:hover {
  border-bottom: 2px solid #2E5C9A;
}
.sh2{
  position: absolute;
  width: 615.19px;
  height: 196px;
  left: 122px;
  top: 250px;

  font-family: 'Barlow';
  font-style: italic;
  font-weight: 500;
  font-size: 36.2543px;
  line-height: 44px;
  color: #2E5C99;
}
.perenos {
  padding:10px;
  width: 700px;
  float:left;
}

.block-left{width:50%;height:800px;float:left;}
.block-right{width:50%;height:800px;}


.fo1{
  position: absolute;
  width: 800px;
  height: 650px;
  left: 880px;
  top: 100px;
}

.im2{
  position: absolute;
  width: 841px;
  height: 500px;
  left: 79px;
  top: 550.6px;
}
.signupform{
  /* signupForm */


  /* Auto layout */

  display: inline-block;
  flex-direction: column;
  align-items: flex-start;
  padding-left: 180px;
  gap: 24.59px;

  width: 580px;
  height: 680.65px;

  background: #FFFFFF;
  border-radius: 5.12284px;

  /* Inside auto layout */

  flex: none;
  order: 0;
  flex-grow: 1;
}

.label{
  /* label */


  width: 531.66px;
  height: 23px;
  padding-top: 25px;
  padding-left: 10px;
  /* Source/14 */

  font-family: 'Source Code Pro';
  font-style: normal;
  font-weight: 500;
  font-size: 14px;
  line-height: 16px;
  /* or 114% */


  /* Text/Grey */

  color: #878787;


  /* Inside auto layout */

  flex: none;
  order: 0;
  flex-grow: 1;
}

input {
  height: 20px;
}

i.list {
  width: 50px;
  height: 55px;
  line-height: 26px;
  text-align: center;
  margin-right: -56px;
  position: relative;
  z-index: 1;
  float: left;
  border-radius: 6.89px 0 0 6.89px;
  border-right: 2px solid #0F4287;
  background: #bdddfc;
  background-image: url(images/list.png);
  background-repeat: no-repeat; /*Убираем повтор изображения*/
  background-position: center; /*Позиционируем*/
}
i.list + select {
  padding-left: 55px;
}
.val{
  /* label */


  width: 477.41px;
  height: 22px;
  /* Source/14 */

  font-family: 'Source Code Pro';
  font-style: normal;
  font-weight: 500;
  font-size: 14px;
  line-height: 16px;
  /* or 114% */

  color: #09418B;


  /* Inside auto layout */

  flex: none;
  order: 1;
  flex-grow: 1;
}
.check{
  /* Checkbox option select */

  width: 836.05px;
  height: 18px;
  padding-top: 20px;
  padding-bottom: 25px;
  /* Source/14 */

  font-family: 'Source Code Pro';
  font-style: normal;
  font-weight: 500;
  font-size: 14px;
  line-height: 16px;
  /* or 114% */

  color: #09418B;


  /* Inside auto layout */

  flex: none;
  order: 0;
  align-self: stretch;
  flex-grow: 0;
}

.but{
  /* button */


  /* Auto layout */
  cursor: pointer;
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 9.22px;
  padding: 10.19655px 24.5896px;

  width: 100px;
  height: 40px;

  background: #A5D2FF;
  border: none;
  border-radius: 6.89px; /*Закругляем уголки*/
  /* Inside auto layout */

  flex: none;
  order: 2;
  flex-grow: 0;
}
.but:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.24), 0 13px 26px 0 rgba(0,0,0,0.19);
  border: 1px solid #0F4287;
}
.select{
  /* input */


  /* Auto layout */

  display: flex;
  flex-direction: row;
  align-items: center;
  padding: 2.19655px 50.5896px;

  width: 562.7px;
  height: 55.09px;

  background: #CBE5FF;
  border: none;
  font-size: 14.5282px;
  /* Inside auto layout */
  border-radius: 6.89px;
  flex: none;
  order: 1;
  align-self: stretch;
  flex-grow: 0;
}
</style>