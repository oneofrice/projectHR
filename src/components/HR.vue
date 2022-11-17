<template>
  <body>
  <!-- создаём блок, к которому будет привязано приложение -->
  <div class="btn-group" style="width:100%">
    <button style="width:25%" >HOME</button>
    <button style="width:25%">COLLECTION</button>
    <button style="width:25%">ABOUT</button>
    <button style="width:25%">CONTACT</button>
  </div>
  <div class="perenos  block-left">
    <h1 class="sh"><strong>HR PROJECT</strong> </h1>
    <div class="sh1">
      <p>This project was created in order to determine what is the probability of getting into the company</p>
    </div>
    <div>
      <button  class="b2 im"><router-link to="./DEV">START RESEARCH</router-link></button>
    </div>
  </div>
  <div class="block-right fo">
    <center>
      <img src="./images/1.png">
    </center>
  </div>
  </body>
</template>

<script>

export default {
  name: 'HR',
  components: {
  },
  props: {},
  data() {
    return {}
  },
  computed: {},
  methods: {
    },
    watch: {}
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

.b2{
  position: absolute;

  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */

  width: 265px;
  height: 80.52px;
  left: 146px;
  top: 687px;

  font-family: 'Barlow';
  font-style: italic;
  font-weight: 500;
  font-size: 20px;
  line-height: 24px;

  background: #2E5C9A;
  border-radius: 30.7459px;
  border: none;
}
.b2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  border: 2px solid black;
}
.sh{
  position: absolute;
  width: 648px;
  height: 231.98px;
  left: 132px;
  top: 276px;

  font-family: 'Barlow';
  font-style: italic;
  font-weight: 900;
  font-size: 105.048px;
  line-height: 126px;

  color: #2E5C9A;

}
.sh1{
  position: absolute;
  width: 615.19px;
  height: 196px;
  left: 146px;
  top: 445px;

  font-family: 'Barlow';
  font-style: italic;
  font-weight: 500;
  font-size: 36.2543px;
  line-height: 44px;

  color: #2E5C99;
}

.im{
  color: #CBE5FF;
}
.perenos {
  padding:10px;
  width: 700px;
  float:left;
}

.block-left{width:50%;height:800px;float:left;}
.block-right{width:50%;height:800px;}
.fo{
  position: absolute;
  width: 800px;
  height: 650px;
  left: 800px;
  top: 200px;
}
</style>
