<?php
if (isset($_GET['email'])) {
  $email = $_GET['email'];
  $jsonFilePath = $email . '.json';

  if (file_exists($jsonFilePath)) {
    $jsonData = file_get_contents($jsonFilePath);

    if ($jsonData !== false) {
      // JSON ডেটা পার্স করুন
      $decodedData = json_decode($jsonData, true);

      if ($decodedData !== null) {
        // JSON ডেটা সঠিকভাবে ডিকোড হয়েছে


?>


<?php
      } else {

        echo "<script>window.location.href='login.html'</script>"; // যদি শর্ত পূর্ণ না হয়, তবে 'not.html' ফাইলটি ইনক্লুড করা হবে

        // যদি শর্ত পূর্ণ না হয়, তবে 'not.html' ফাইলটি ইনক্লুড করা হবে

      }
    } else {
      echo "<script>window.location.href='login.html'</script>"; // যদি শর্ত পূর্ণ না হয়, তবে 'not.html' ফাইলটি ইনক্লুড করা হবে

    }
  } else {


    echo "<script>window.location.href='singup.html'</script>";
  }
} else {

  echo "<script>window.location.href='login.html'</script>";
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="buy.css">
  <link rel="manifest" href="/manifest.json">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="/img/lite.jpg">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Crypto Cash P2P - <?php echo $decodedData['username'] ?></title>
  <link rel="stylesheet" href="userstyle.css">
</head>

<body>
  <section class="nav">

    <span class="title mar">Crypto Cash P2P </span>

    <span onclick="menuicon()" class="usericon">
      <i class="bi bi-person-circle"></i>
    </span>
  </section>
  <br><br><br><br>
  <center>
    <marquee class="marquee">
      <span id="userview"></span>
    </marquee>
  </center>
  <div class="title">
    Hello,<?php echo $decodedData['username'] ?>
  </div>



  <section id="menu" class="munu vcc">
    <blockquote>

      <span class="title">Account </span>
    </blockquote>

    <span onclick="myappclose()" class="usericon">
      <i class="bi bi-x-lg"></i>
    </span>
    <br>
    <center>

      <img height="100" src="/img/user.png" alt="usericon">
      <h1> <?php echo $decodedData['username'] ?></h1>
      <p>Email: <?php echo $decodedData['email'] ?></p>
      <button onclick="logout()" class="lopag">
        singout
      </button>
    </center>
    <p>
    <blockquote style="color:#ff0000;font-size: 24px;">
      <p>User Id : <span id="loc"></span> </p>
      <p>Country : <span id="country"></span></p>
      <p>City : <span id="city"></span> </p>
      <p>post code : <span id="postal"></span></p>
      <p>Divison : <span id="division"> </span></p>
    </blockquote>
    <br><br><br><br>
    <center>
      <p><i>copyright &copy; ip:<span id="ip"> </span></i></p>
    </center>
  </section>

  <br><br>
  <section>
    <center>
      <div class="btn-box">
        <button id="sellbtn" onclick="sell()" class="btnn btn2 active2">Sell</button>
        <button id="buybtn" onclick="buy()" class="btnn btn1">Buy</button>

      </div>

    </center>

  </section>


  <!-- The buy opstion -->
  <section class="vcc" id="buy">
    <blockquote>
      <h2>
        The Crypto Buy
        <hr>
      </h2>

      <center>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla tenetur cumque iste perspiciatis eum quas quisquam, minus voluptates pariatur impedit atque at in deserunt architecto dolores corrupti ex recusandae porro obcaecati dolor eos corporis. Facilis, consequuntur ducimus expedita inventore a asperiores molestias facere, nostrum provident rem veniam accusantium eaque! Quas?
        </p>
        <div class="price-box">
          <span class="contxt">Today Crypto Buy Price </span><br><br>

          <span class="showtxt">1USDT > <span id="buyprice"></span>BDT</span>
          <br><br>
        </div>
        <br><br>
        <p>You have buy munuman 1 USDT </p>
        <button class="btn">Buy Now</button>
        <br><br>
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-infinity" viewBox="0 0 16 16">
          <path d="M5.68 5.792 7.345 7.75 5.681 9.708a2.75 2.75 0 1 1 0-3.916ZM8 6.978 6.416 5.113l-.014-.015a3.75 3.75 0 1 0 0 5.304l.014-.015L8 8.522l1.584 1.865.014.015a3.75 3.75 0 1 0 0-5.304l-.014.015zm.656.772 1.663-1.958a2.75 2.75 0 1 1 0 3.916z" />
        </svg>
        <br>

      </center>
    </blockquote>
  </section>


  <!-- sell crytpo -->

  <section id="sell">
    <blockquote>
      <h2>
        The Crypto sell
        <hr>
      </h2>

      <center>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla tenetur cumque iste perspiciatis eum quas quisquam, minus voluptates pariatur impedit atque at in deserunt architecto dolores corrupti ex recusandae porro obcaecati dolor eos corporis. Facilis, consequuntur ducimus expedita inventore a asperiores molestias facere, nostrum provident rem veniam accusantium eaque! Quas?
        </p>
        <div class="price-box">
          <span class="contxt">Today Crypto sell Price </span><br><br>

          <span class="showtxt">1USDT > <span id="sellprice"></span>BDT</span>
          <br><br>
        </div>
        <br><br>
        <p>You have buy munuman 1 USDT </p>
        <button onclick="sellbtn()" class="btn">sell Now</button>
        <br><br><br>

        <table>
          <tr>
            <th>Sell</th>
            <th>pre $ fees</th>
            <th>fees</th>
            <th>limet</th>
          </tr>
          <tr>
            <td>100$</td>
            <td>0.01$</td>
            <td>1$</td>
            <td>150$</td>
          </tr>
          <tr>
            <td>200$</td>
            <td>0.03$</td>
            <td>6$</td>
            <td>250$</td>
          </tr>
          <tr>
            <td>500$</td>
            <td>0.04$</td>
            <td>20$</td>
            <td>1000$</td>
          </tr>
        </table>
      </center>
    </blockquote>
  </section>

  <!-- the app -->
  <script>
    sessionStorage.setItem("mobile", "<?php echo $decodedData['mobile'] ?>");
    sessionStorage.setItem("username", "<?php echo $decodedData['username'] ?>");
    sessionStorage.setItem("email", "<?php echo $decodedData['email'] ?>");
    sessionStorage.setItem("password", "<?php echo $decodedData['password'] ?>");
  </script>
  <script src="manuser.js"></script>
  <script src="myscript.js"></script>
  <script src="login.js"></script>
  <script src="ipdata.js"></script>
</body>

</html>