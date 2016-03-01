<!DOCTYPE html>
<html>
<head>
    <title>Order Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>
<body>

    <center>
        <h1 style="font-family:Monotype Corsiva; color:red">Select The Item What You Want</h1>
        <table>
            <tr>
                <td><img src="images/medicines.jpg" width="250" height="200"></td>
                <td><img src="images/medicines-01.jpeg" width="250" height="200"></td>
                <td><img src="images/Drugs+pills+medicine+XXX+high+res.jpg" width="250" height="200"></td>
                <td><img src="images/cheaper_medicines.jpg" width="250" height="200"></td>
            </tr>
        </table>
        <form action="bill.php" method="post">
            <label>Name</label>&nbsp;
            <input type="text" name="med_name"><br /><br />
            <label>Quantity</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="quan"><br /><br />
            <label>Address</label>&nbsp;&nbsp;&nbsp;
            <textarea></textarea><br /><br />
            <label>Area Code</label>&nbsp;
            <input type="text"><br /><br />
            <button type="submit">Click me</button>
        </form>
    </center>
</body>
</html>