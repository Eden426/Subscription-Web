<?php
require_once'vendor/autoload.php';
use Dompdf\Dompdf;
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name, $port);

$sql ='SELECT * FROM items';
$in = $conn->query($sql);
if($in->num_rows>0){
    $getting = $in->fetch_all(MYSQLI_ASSOC);

$Tt=0;
$incr = 1;
$html = '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>invoice</title>
    <style>
        table {
            font-family: Georgia,  Times, serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #444;
            padding: 10px;
            text-align: right;
        }

        .invoice {
            text-align: left;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Customer Id</th>
                <th>Subscription type</th>
                <th>price</th>
                <th>Total</th>
            </tr>
        </thead>
      ';
        foreach($getting as $row){
            $total = $row['price']*$row['type'];
            $Tt += $total;
            $html .='<tr>
            <td>'.$incr++.'</td>
            <td>'.$row['name'].'</td>
             <td>'.number_format($row['price'], 2).'</td>
                    <td>'.number_format($total,2).'</td>
                    </tr>';
                    $VAT = $Tt*0.15;
                    $Total = $Tt + $VAT;

        }

        $html .= '
           <tbody>
        <tfoot>
            <tr>
                <th colspan="3" class="invoice">price</th>
                <th>'.number_format($Tt,2). '</th>
            </tr>
            <tr>
                <td colspan="3" class="invoice">VAT(15%)</td>
                <td>' . number_format($VAT, 2) . '</td>
            </tr>
            <tr>
                <td colspan="3" class="invoice">Total</td>
                <td>' . number_format($Total, 2) . '</td>
            </tr>


            </tr>
        </tfoot>
       </tbody>
    </table>
</body>

</html>';
$dompdf = new Dompdf;
$dompdf->loadHtml($html);
$dompdf->setPaper('A4','portrait');
$dompdf->render();
$dompdf->stream('invoice.php',['Attachment'=>0]);
    } else{
        echo "error";
    }

?>