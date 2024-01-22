<html>
    <head>
        <style type="text/css">
            table
            {
                border-collapse: collapse;
                width: 100%;
                text-align: center;
            }

            
            th
            {
                background-color:gray;
                color: black;
                font-size: 30px;
                font-family: 'Franklin Gothic Medium';
                border: 1px solid;
                border-color:darkgreen;
            }
            tr,td
            {
                font-family:Arial, Helvetica, sans-serif;
                font-size: 25px;
                color:salmon;
            }

            tr,td
            {
                border: 1px solid;
                border-color:darkgreen;

            }

        </style>
    </head>
    <body >
        <table>
            <tr class="font">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone No.</th>
                <th>Appointment Date & Time</th>
            </tr>
            <?php
                $conn=mysqli_connect("localhost","root","","appointment");
                $sql="SELECT * FROM contact_form";
                $result=$conn->query($sql);

                if($result->num_rows > 0)
                {
                    while($row=$result-> fetch_assoc())
                    {
                        echo "<tr><td>" . $row["id"] ."</td><td>" . $row["name"] .
                         "</td><td>" . $row["email"] . "</td><td>" . $row["number"] .
                          "</td><td>" . $row["date"] . "</td></tr>"; 
                    }
                }
                else
                {
                    echo "NO RESULTS";
                }

                $conn-> close();

            ?>
        </table>
    </body>
</html>