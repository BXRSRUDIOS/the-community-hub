<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<body>
	<?php include 'includes/navbar.php'; ?>
  <br><br><br><br><br><br><br><br>
	<style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #669999; 
      }
      .banner {
      position: relative;
      height: 300px;
      background-image: url("/uploads/media/default/0001/02/8070c999efd1a155ad843379a5508d16f544aeaf.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.3); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #669999;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #669999;
      color: #669999;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color:  #a3c2c2;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #669999;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #669999;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #669999;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #a3c2c2;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="/">
        <div class="banner">
          <h1>Get involved with The Community Hub</h1>
        </div>
        <br/>
        <h5>We are here to help you get your social and community message across to the local area. By signing up with us, it allows you to reach a wider audience and enables you to participate in the local community. We make it easier for you to connect with the local area. Sign up today.</h5>
        <br/>
        <div class="colums">
          <div class="item">
            <label for="name">Name<span>*</span></label>
            <input id="name" type="text" name="name" required/>
          </div>
          <div class="item">
            <label for="eaddress">Email Address<span>*</span></label>
            <input id="eaddress" type="text"   name="eaddress" required/>
          </div>
          <div class="item">
            <label for="phone">Phone<span>*</span></label>
            <input id="phone" type="tel"   name="phone" required/>
          </div>
          <div class="item">
            <label for="street">Street<span>*</span></label>
            <input id="street" type="text"   name="street" required/>
          </div>
          <div class="item">
            <label for="city">City<span>*</span></label>
            <input id="city" type="text"   name="city" required/>
          </div>
          <div class="item">
            <label for="state">State<span>*</span></label>
            <input id="state" type="text"   name="state" required/>
          </div>
          <div class="item">
            <label for="zip">Zip<span>*</span></label>
            <input id="zip" type="text"   name="zip" required/>
          </div>
        </div>
        <div class="item">
          <h6>How would you rate yourself on how sustainable you are?</h6>
          <select>
            <option selected value="" disabled selected></option>
            <option value="worst" >I am not the best and want to improve</option>
            <option value="ok">I think i am ok and want to be more sustainable</option>
            <option value="good">I am pretty good at being sustainable and want to be even better</option>
            <option value="dontsay">I don't wanna say</option>
          </select>
        </div>
        <div class="week">
          <div class="question">
            <label>What activity are you willing to do you do to stay sustainable?</label>
            <div class="question-answer">
              <div>
                <input type="radio" value="none" id="radio_3" name="activity"/>
                <label for="radio_3" class="radio"><span>Recycle</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_4" name="activity"/>
                <label for="radio_4" class="radio"><span>Play Outside</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_5" name="activity"/>
                <label for="radio_5" class="radio"><span></span>Watch your utility bills</label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_6" name="activity"/>
                <label for="radio_6" class="radio"><span>Purchase Energy Efficient Appliances</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_7" name="activity"/>
                <label for="radio_7" class="radio"><span>Compost Kitchen Waste</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_8" name="activity"/>
                <label for="radio_8" class="radio"><span>Minimise Waste</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_9" name="activity"/>
                <label for="radio_9" class="radio"><span>Other</span></label>
              </div>
            </div>
          </div>
          <div class="question">
            <label><br><br>How would you like to help?</label>
            <div class="question-answer">
              <div>
                <input type="radio" value="none" id="radio_10" name="help"/>
                <label for="radio_10" class="radio"><span>Sponsoring money</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_11" name="help"/>
                <label for="radio_11" class="radio"><span>Promoting what we do</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_12" name="help"/>
                <label for="radio_12" class="radio"><span>Contributing to Sustainablity</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_13" name="help"/>
                <label for="radio_13" class="radio"><span>Working for us</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_14" name="help"/>
                <label for="radio_14" class="radio"><span>I can't help but I would like to support the cause</span></label>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <label for="visit">Say why you would like to work for us (if applicable) otherwise, any feedback or comments?</label>
          <textarea id="visit" rows="3"></textarea>
        </div>
        <div class="question">
          <label>Would you like to receive Newsletter Updates from us?</label>
          <div class="question-answer">
            <div>
              <input type="radio" value="none" id="radio_15" name="contact"/>
              <label for="radio_15" class="radio"><span>Yes</span></label>
            </div>
            <div>
              <input  type="radio" value="none" id="radio_16" name="contact"/>
              <label for="radio_16" class="radio"><span>No</span></label>
            </div>
          </div>
        </div>
        <div class="btn-block">
          <button type="submit" href="/">Submit</button>
        </div>
      </form>
    </div>

	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/scripts.php'; ?>
</body>
</html>