<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="POST" name="ic-reg-form" action="ins-reg.php">
        <input type="text" name="un">
        <input type="password" name="pwd">
        
        <input name="em" type="email" required>
        <select name="cat" class="p_inputvalues" id="category" required>
            <option value="">Select Insurance Company</option>
            <option value="Kotak">Kotak Mahindra</option>	
            <option value="Icici">ICICI Lombard</option>
            <option value="United">United India Insurance Company Limited</option>
            <option value="Bharati">Bharati AXA General Insurance</option>
            <option value="Hdfc">HDFC General Insurance</option>
        </select>
        <input name="ph" type="text" required>
        <input name="sub" type="submit" value="Submit"/>

    </form>
</body>
</html>