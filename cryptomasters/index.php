<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crypto Masters</title>
</head>
<body>
  <h1>Crypto on the way</h1>

  <p>Enter your amount of crypto</p>

  <form action="convert.php" method="post">
  <!-- <form action="convert.php" method="get"> -->
    <label for="amount">Amount</label>
    <input type="text" id="amount" name="money_amount">
    <label for="crypto">Cryptocurrency</label>
    <select name="cryptocurrency" id="crypto">
      <option value="bitcoin(s)">BTC</option>
      <option value="ether(s)">ETH</option>
    </select>
    <button type="submit">Convert</button>
  </form>

</body>
</html>
