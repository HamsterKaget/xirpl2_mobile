<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XIRPL2</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table width="60%" align="center" border="0px">
        <tr height="50px" class="tr1" style="background-color: black; color: white;">
            <td align="left" style="border-radius: 10px 0 0 0;">
                <p>Samsung</p>
            </td>
            <td align="right" style="border-radius: 0 10px 0 0;">
                <p>8/9/22</p>
            </td>
        </tr>
        <tr height="500px">
            <td colspan="2" valign="top" align="center">
            <?php 
            if(isset($_GET["menu"])) {
                switch($_GET["menu"]) {
                    case 1:
                        echo "menu1";
                        break;
                    case 2:
                        echo "menu2";
                        break;
                    case 3:
                        echo "menu3";
                        break;
                    case 4:
                        echo "menu4";
                        break;
                    default:
                        echo "";
                        break;
                }
            } else {
                echo "";

            }
            ?>


            </td>
        </tr>
        <tr height="100px" style="background-color: black; color: white;">
            <td colspan="2" align="center" style="border-radius: 0 0 10px 10px;">
                <img src="istrigw.jpg" alt="istrisaya" width="22%">
                <img src="istrigw.jpg" alt="istrisaya" width="22%">
                <img src="istrigw.jpg" alt="istrisaya" width="22%">
                <img src="istrigw.jpg" alt="istrisaya" width="22%">
                <br>
                <a href="index.php?menu=1">Menu 1</a>
                <a href="index.php?menu=2">Menu 2</a>
                <a href="index.php?menu=3">Menu 3</a>
                <a href="index.php?menu=4">Menu 4</a>

            </td>
        </tr>
    </table>
</body>
</html>