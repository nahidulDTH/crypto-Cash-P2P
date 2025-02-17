<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <link rel="stylesheet" href="buy.css">
  <link rel="manifest" href="/manifest.json">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="/img/lite.jpg">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Crypto Cash P2P sell </title>
  <link rel="stylesheet" href="userstyle.css">
</head>

<body>

  <section class="nav">


    <span class="title mar">Crypto Cash P2P </span>


    </span>
  </section><br>
  <br<br><br><br><br><br><br><br>
    <center>
      <section class="lock-box">
        <div id="set1" class="numberlock n-no_active">1</div>
        <div id="set2" class="numberlock n-no_active">2</div>
        <div id="set3" class="numberlock n-no_active">3</div>
        <div id="set4" class="numberlock n-no_active">4</div>
      </section>
      <br /><br />
      <section class="topstar">

        <form action="sell.php" method="POST">
          <div id="number1">

            <h1>Basic Method</h1>
            <label class="label" for="pyment">Option: <n>*</n></label><br>
            <select class="input" name="pyment" id="pyment" required>
              <option value="sell">Sell</option>
            </select><br>
            <label class="label" for="userid">UserID: <n>*</n></label><br>
            <input class="input" type="text" name="userid" id="useriddata" required><br>

            <label class="label" for="email">Email: <n>*</n></label><br>
            <input class="input" type="email" name="email" id="emaildatashow" required><br>

            <label class="label" for="phone"> Phone Number: <n>*</n></label><br>
            <input oninput="mobiledatatest()" class="input" type="text" name="phone" id="phonedatashow" required><br>

            <div onclick="number1()" class="nextbtn">Next >></div>

          </div>



          <div class="vcc" id="number2">
            <h1>Pyment Method</h1>
            <label class="label" for="method">Method: <n>*</n></label><br>
            <select onchange="addmethod()" class="input" name="method" id="method" required>
              <option value="none" selected disabled>---- select methoad ----</option>
              <option value="bkash">Bkash</option>
              <option value="nagad">Nagad</option>
              <option value="rocket">Rocket</option>
              <option value="upay">Upay</option>
            </select><br>
            <label class="label" for="account">Account Number: <n>*</n></label><br>
            <input oninput="addaccount()" class="input" type="text" name="account" id="account" required><br>
            <div onclick="number2()" class="nextbtn">Next >></div>
          </div>



          <div class="vcc" id="number3">
            <h1>Accounting calculation</h1>
            <fieldset>
              <legend>USD-Ammount</legend>
              <label for="USD-Ammount" class="label">USD-Ammount <n>*</n></label><br>
              <input oninput="usdok()" id="usdamount" placeholder="5.00" type="text" name="USD-Ammount"
                class="input" required><br>
            </fieldset><br>

            <fieldset>
              <legend>BDT-Ammount</legend>
              <label for="BDT-Ammount" class="label">BDT-Ammount <n>*</n></label>
              <input oninput="bdtok()" placeholder="00.00" id="bdtamount" type="text" name="BDT-Ammount" class="input" required>
            </fieldset><br>
            <fieldset>
              <legend>Fees</legend>
              <label for="fee" class="label">Fees <n>*</n></label>
              <input placeholder="00.00" id="fee" type="text" name="fee" class="input" required>
            </fieldset><br>

            <fieldset>
              <legend>You Have Receve BDT</legend>
              <label for="rbdt" class="label">Receve BDT<n>*</n></label>
              <input placeholder="00.00" id="rbdt" type="text" name="rbdt" class="input" required>
            </fieldset>

            <br><br>
            <div onclick="number3()" class="nextbtn">Next >></div>
          </div>
          <div class="vcc" id="number4">
            <h1>Pay NOW</h1>
            <p>You need to pay $<span style="color: #4680ff;" id="usd"></span> USD</p>
            <br>
            <label for="tokenname" class="lebel">Address Token: <n>*</n></label>
            <select onchange="tokenchk()" name="tokenname" id="tokenopstion" class="input" required>
              <option disabled selected>---- select -----</option>
              <option value="bpi">Binance Pay ID</option>
              <option value="bep20">(BEP 20) USDT</option>
              <option value="trc20">(TRC 20) USDT</option>

            </select>
            <label for="address" class="label"></label>
            <input name="address" type="text" id="copy" class="input">
            <div id="vic" class="vcc"
              style="background-color: rgb(225, 225, 225);width: 100px;border-radius: 10px;padding: 10px;cursor: pointer;"
              onclick="copytext()">copy</div>
<br>
            <label for="transaction" class="label">Transaction ID: <n>*</n></label>
            <input placeholder="Paste your Transaction" oninput="trans()" name="transaction" type="text" id="transaction" class="input" required>


            <input id="er" style="background-color: #4680ff;" type="submit" onclick="number4()" value="Conforim >>"
              class="input vcc">
          </div>



        </form>
      </section>



      <br><br><br><br><br>&copy;Crypto Cash P2P - <span id="name"></span> , <span id="jela"></span> <br><br>
    </center>
    <script src="buysell.js"></script>
    <script src="manuser.js"></script>
    <script src="myscript.js"></script>
    <script src="login.js"></script>
    <script src="ipdata.js"></script>
</body>

</html>