<html>

<head>
    <title>Currency converter</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
    <div id="box">
        <h2>Currency Converter</h2>
        <form name="form1" action="" method="POST">
            <p>Please enter an amount to convert: </p>
            <input type="text" name="figure01" placeholder="Enter a number" required>
            <select name="convertfrom">
                <option value="select" selected>Select</option>
                <option value="USD">US Dollar</option>
                <option value="EUR">EURO</option>
                <option value="NGN">Naira</option>
                <option value="GBP">Pound Sterling</option>
            </select></br>

            <p>Convert to?
                <select name="convertinto">
                    <option value="select" selected>Select</option>
                    <option value="USD">US Dollar</option>
                    <option value="EUR">EURO</option>
                    <option value="NGN">Naira</option>
                    <option value="GBP">Pound Sterling</option>
                </select>
            </p>
            <input name="submit" type="submit" value="Submit"></br>
        </form>

</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $amount = $_POST['figure01'];
    $convertfrom = $_POST['convertfrom'];
    $convertinto = $_POST['convertinto'];

    $req_url = 'https://v6.exchangerate-api.com/v6/97318bea3b725a1ddeb6c1cf/latest/' . $convertfrom;
    $response_json = file_get_contents($req_url);

    // Continue if we get a result
    if (false !== $response_json) {
        // Try/catch for json_decode operation
        try {
            //Decode the result
            $response = json_decode($response_json);
            // Check for success
            if ('success' === $response->result) {
                $base_price = $amount;
                $Converted_price = round(($base_price * $response->conversion_rates->$convertinto), 2);
            }
            echo "<strong>$amount</strong>" . " $convertfrom" . ' is equal to ' . "<strong>$Converted_price</strong>" . " $convertinto";
            
        } catch (Exception $e) {
            // Handle JSON parse error...
            echo $e;
        }
    } else {
        echo 'Could not connect to the server';
    }
}
?>