<?php
  $name = $_POST["name"];
  $date= $_POST["date"];
  $a = $_POST["pid"];

  echo$name;

  if( !empty($_POST['test']) ) { 
    $tAmt = "5030";
    global $wpdb;
?>
    <!DOCTYPE html>
    <html>
      <head>
        <style>
          table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
          }

          td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
          }

          tr:nth-child(even) {
            background-color: #dddddd;
          }
        </style>
      </head>
      <body>
        <table>
            <tr>
            <th>Name</th>
            <th> <?php echo $name; ?></th>
          </tr>
          <tr>
            <td>Total Amount</td>
            <td>5030</td>
          </tr>
        </table>
    </body>
    </html>
<?php
  }
?>