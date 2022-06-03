<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/General/general_js.js"></script>
</head>

<body>
  <div class="v108_22">
    <div class="v108_23"></div><span class="v108_24">CO-OPERATIVE BANK</span>
    <div class="v108_25"><span class="v108_26">
      <a href="<?= base_url("signInPage/") ?>" style="text-decoration: none; color:white;"> Sign In </a>
    </span></div>
    <div class="v115_2">
      <div class="container">
        <div class="row" style="text-align: center; margin-left:10%; margin-right:10%;">
          <h1 style="text-align: center; color:white; margin-top:5%; margin-bottom:5%;"> Sign Up </h1>
          <form action="<?= base_url("signUserUp/") ?>" method="POST">
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control" name="FirstName" id="Label" placeholder="Enter your first name ">
              <label for="floatingLabel"> First Name </label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control" name="LastName" id="Label" placeholder="Enter your first name ">
              <label for="floatingLabel"> Last Name </label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control" name="EmailAddress" id="Label" placeholder="Enter your first name ">
              <label for="floatingLabel"> Email Address </label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="password"
                class="form-control" name="Password" id="Label" placeholder="Enter your first name ">
              <label for="floatingLabel"> Password </label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="password"
                class="form-control" name="ConfirmPassword" id="Label" placeholder="Enter your first name ">
              <label for="floatingLabel"> Confirm Password </label>
            </div>
            <div class="mb-3">
              <label for="" class="form-label"> Gender </label>
              <select class="form-control" name="Gender" id="">
                <option value="Gender"> -- Select your gender -- </option>
                <option value="Male"> Male </option>
                <option value="Female"> Female </option>
                <option value="Prefer Not To Say"> Prefer Not To Say</option>
              </select>
            </div>
            <button type="submit" class="btn btn-success" style="padding:1%;"> Sign Up</button>
          </form>
        </div>
      </div>
    </div>
    <div class="v121_4">
      <div class="v110_47">
        <div class="v110_48"><span class="v110_49">About Us</span>
          <div class="v110_50"></div>
        </div>
        <div class="v110_51"><span class="v110_52">Learn more -></span></div><span class="v110_53">Banking for All</span>
      </div>
      <div class="v110_54">
        <div class="v110_55"><span class="v110_56">About Us</span>
          <div class="v110_57"></div>
        </div>
        <div class="v110_58"><span class="v110_59">Learn more -></span></div><span class="v110_60">Banking for Us</span>
      </div>
      <div class="v110_61">
        <div class="v110_62"><span class="v110_63">About Us</span>
          <div class="v110_64"></div><span class="v110_65">Banking for me</span>
        </div>
        <div class="v110_66"><span class="v110_67">Learn more -></span></div>
      </div>
    </div>
  </div>
</body>

</html> <br /><br />
<style>
  * {
    box-sizing: border-box;
  }

  body {
    font-size: 14px;
  }

  .v108_22 {
    width: 100%;
    height: 1349px;
    background: rgba(19, 174, 91, 0.6499999761581421);
    opacity: 1;
    position: absolute;
    top: 0px;
    left: 0px;
    overflow: hidden;
  }

  .v108_23 {
    width: 64px;
    height: 67px;
    background: url("Images/Landing/Logo.jpeg");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    opacity: 1;
    position: absolute;
    top: 37px;
    left: 75px;
    overflow: hidden;
  }

  .v108_24 {
    width: 423px;
    color: rgba(18, 75, 68, 1);
    position: absolute;
    top: 59px;
    left: 174px;
    font-family: Inter;
    font-weight: Bold;
    font-size: 40px;
    opacity: 1;
    text-align: center;
  }

  .v108_25 {
    width: 272px;
    height: 63px;
    background: rgba(18, 76, 69, 1);
    opacity: 1;
    position: absolute;
    top: 33px;
    left: 925px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    overflow: hidden;
  }

  .v108_26 {
    width: 242px;
    color: rgba(255, 255, 255, 1);
    position: absolute;
    top: 16px;
    left: 15px;
    font-family: Inter;
    font-weight: Bold;
    font-size: 16px;
    opacity: 1;
    text-align: center;
  }

  .v108_34 {
    width: 242px;
    color: rgba(255, 255, 255, 1);
    position: absolute;
    top: 16px;
    left: 15px;
    font-family: Inter;
    font-weight: Bold;
    font-size: 16px;
    opacity: 1;
    text-align: center;
  }

  .v115_2 {
    width: 100%;
    height: 662px;
    background: url("Images/Landing/Nairobi_City.jpg");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    opacity: 1;
    position: absolute;
    top: 150px;
    left: 0px;
    overflow: hidden;
  }

  .v108_27 {
    width: 100%;
    height: 662px;
    background: url("../images/v108_27.png");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    opacity: 1;
    position: absolute;
    top: 0px;
    left: 0px;
    border: 0px solid rgba(18, 75, 68, 1);
    overflow: hidden;
  }

  .v113_3 {
    width: 100%;
    height: 152px;
    background: url("../images/v113_3.png");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    opacity: 1;
    position: absolute;
    top: 63px;
    left: 75px;
    overflow: hidden;
  }

  .v93_17 {
    width: 500px;
    color: rgba(255, 255, 255, 1);
    position: absolute;
    top: 0px;
    left: 314px;
    font-family: Inter;
    font-weight: Extra Bold;
    font-size: 50px;
    opacity: 1;
    text-align: center;
  }

  .v93_18 {
    width: 100%;
    color: rgba(255, 255, 255, 1);
    position: absolute;
    top: 60px;
    left: 47px;
    font-family: Inter;
    font-weight: Extra Bold;
    font-size: 50px;
    opacity: 1;
    text-align: center;
  }

  .v110_42 {
    width: 100%;
    height: 35px;
    background: url("../images/v110_42.png");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    opacity: 1;
    position: absolute;
    top: 117px;
    left: 0px;
    overflow: hidden;
  }

  .v108_35 {
    width: 100%;
    color: rgba(255, 255, 255, 1);
    position: absolute;
    top: 0px;
    left: 0px;
    font-family: Inter;
    font-weight: Regular;
    font-size: 30px;
    opacity: 1;
    text-align: center;
  }

  .v121_4 {
    width: 100%;
    height: 411px;
    background: url("../images/v121_4.png");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    opacity: 1;
    position: absolute;
    top: 879px;
    left: 67px;
    overflow: hidden;
  }

  .v110_47 {
    width: 298px;
    height: 411px;
    background: url("../images/v110_47.png");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    opacity: 1;
    position: absolute;
    top: 0px;
    left: 0px;
    overflow: hidden;
  }

  .v110_48 {
    width: 297px;
    height: 411px;
    background: rgba(255, 255, 255, 1);
    opacity: 1;
    position: absolute;
    top: 0px;
    left: 0px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    overflow: hidden;
  }

  .v110_49 {
    width: 211px;
    color: rgba(255, 255, 255, 1);
    position: absolute;
    top: 21px;
    left: 21px;
    font-family: Inter;
    font-weight: Bold;
    font-size: 30px;
    opacity: 1;
    text-align: center;
  }

  .v110_50 {
    width: 80px;
    height: 80px;
    background: url("../images/v110_50.png");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    opacity: 1;
    position: absolute;
    top: 44px;
    left: 108px;
    overflow: hidden;
  }

  .v110_51 {
    width: 298px;
    height: 159px;
    background: rgba(18, 75, 68, 1);
    opacity: 1;
    position: absolute;
    top: 251px;
    left: 0px;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    overflow: hidden;
  }

  .v110_52 {
    width: 260px;
    color: rgba(255, 255, 255, 1);
    position: absolute;
    top: 31px;
    left: 22px;
    font-family: Inter;
    font-weight: Regular;
    font-size: 30px;
    opacity: 1;
    text-align: left;
  }

  .v110_53 {
    width: 206px;
    color: rgba(8, 82, 43, 0.9399999976158142);
    position: absolute;
    top: 166px;
    left: 42px;
    font-family: Inter;
    font-weight: Medium;
    font-size: 30px;
    opacity: 1;
    text-align: center;
  }

  .v110_54 {
    width: 297px;
    height: 411px;
    background: url("../images/v110_54.png");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    opacity: 1;
    position: absolute;
    top: 0px;
    left: 413px;
    overflow: hidden;
  }

  .v110_55 {
    width: 296px;
    height: 411px;
    background: rgba(255, 255, 255, 1);
    opacity: 1;
    position: absolute;
    top: 0px;
    left: 0px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    overflow: hidden;
  }

  .v110_56 {
    width: 211px;
    color: rgba(255, 255, 255, 1);
    position: absolute;
    top: 21px;
    left: 21px;
    font-family: Inter;
    font-weight: Bold;
    font-size: 30px;
    opacity: 1;
    text-align: center;
  }

  .v110_57 {
    width: 104px;
    height: 80px;
    background: url("../images/v110_57.png");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    opacity: 1;
    position: absolute;
    top: 44px;
    left: 96px;
    overflow: hidden;
  }

  .v110_58 {
    width: 297px;
    height: 159px;
    background: rgba(18, 75, 68, 1);
    opacity: 1;
    position: absolute;
    top: 251px;
    left: 0px;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    overflow: hidden;
  }

  .v110_59 {
    width: 260px;
    color: rgba(255, 255, 255, 1);
    position: absolute;
    top: 30px;
    left: 23px;
    font-family: Inter;
    font-weight: Regular;
    font-size: 30px;
    opacity: 1;
    text-align: left;
  }

  .v110_60 {
    width: 206px;
    color: rgba(8, 82, 43, 0.9399999976158142);
    position: absolute;
    top: 166px;
    left: 46px;
    font-family: Inter;
    font-weight: Medium;
    font-size: 30px;
    opacity: 1;
    text-align: left;
  }

  .v110_61 {
    width: 305px;
    height: 411px;
    background: url("../images/v110_61.png");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    opacity: 1;
    position: absolute;
    top: 0px;
    left: 825px;
    overflow: hidden;
  }

  .v110_62 {
    width: 304px;
    height: 411px;
    background: rgba(255, 255, 255, 1);
    opacity: 1;
    position: absolute;
    top: 0px;
    left: 0px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    overflow: hidden;
  }

  .v110_63 {
    width: 211px;
    color: rgba(255, 255, 255, 1);
    position: absolute;
    top: 21px;
    left: 21px;
    font-family: Inter;
    font-weight: Bold;
    font-size: 30px;
    opacity: 1;
    text-align: center;
  }

  .v110_64 {
    width: 80px;
    height: 80px;
    background: url("../images/v110_64.png");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    opacity: 1;
    position: absolute;
    top: 44px;
    left: 112px;
    overflow: hidden;
  }

  .v110_65 {
    width: 234px;
    color: rgba(8, 82, 43, 0.9399999976158142);
    position: absolute;
    top: 161px;
    left: 35px;
    font-family: Inter;
    font-weight: Medium;
    font-size: 30px;
    opacity: 1;
    text-align: center;
  }

  .v110_66 {
    width: 305px;
    height: 159px;
    background: rgba(18, 75, 68, 1);
    opacity: 1;
    position: absolute;
    top: 251px;
    left: 0px;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    overflow: hidden;
  }

  .v110_67 {
    width: 260px;
    color: rgba(255, 255, 255, 1);
    position: absolute;
    top: 29px;
    left: 14px;
    font-family: Inter;
    font-weight: Regular;
    font-size: 30px;
    opacity: 1;
    text-align: left;
  }
</style>