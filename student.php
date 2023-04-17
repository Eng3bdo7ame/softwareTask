<?php
$Student = [
    [
        'id' => '1',
        'Name' => 'Abdelrahman_Hamed',
        'phone' => '011279824256',
        'Email' => 'abdalrahaman.hamed59523@ci.menofia.edu.eg',
        'Section' => 'CS'
    ],
    [
        'id' => '2',
        'Name' => 'Ali_mohmed',
        'phone' => '010235486975',
        'Email' => 'ali.mohmed171565@ci.menofia.edu.eg',
        'Section' => 'IT'

    ],
    [
        'id' => '3',
        'Name' => 'Ahmed_Hamdy',
        'phone' => '012591136876',
        'Email' => 'Ahmed.Hamdy7865212@ci.menofia.edu.eg',
        'Section' => 'IS'

    ],
    [
        'id' => '4',
        'Name' => 'Mohmed_Ali',
        'phone' => '01011125951',
        'Email' => 'Mohmed.Ali765425@ci.menofia.edu.eg',
        'Section' => 'IT'


    ],
    [
        'id' => '5',
        'Name' => 'Ebrahem_Amr',
        'phone' => '010235486975',
        'Email' => 'alEbrahem.Amr74245@ci.menofia.edu.eg',
        'Section' => 'IS'


    ],
    [
        'id' => '6',
        'Name' => 'Abdalaa_Hassan',
        'phone' => '010235486975',
        'Email' => 'Abdalaa.Hassan171565@ci.menofia.edu.eg',
        'Section' => 'CS'

    ],
    [
        'id' => '7',
        'Name' => 'Abdelrahman_Hamed',
        'phone' => '011279824256',
        'Email' => 'abdalrahaman.hamed59523@ci.menofia.edu.eg',
        'Section' => 'CS'

    ],
    [
        'id' => '8',
        'Name' => 'Ali_mohmed',
        'phone' => '010235486975',
        'Email' => 'ali.mohmed171565@ci.menofia.edu.eg',
        'Section' => 'IT'

    ],
    [
        'id' => '9',
        'Name' => 'Abdelrahman_Hamed',
        'phone' => '011279824256',
        'Email' => 'abdalrahaman.hamed59523@ci.menofia.edu.eg',
        'Section' => 'CS'

    ],
    [
        'id' => '10',
        'Name' => 'Ali_mohmed',
        'phone' => '010235486975',
        'Email' => 'ali.mohmed171565@ci.menofia.edu.eg',
        'Section' => 'IT'

    ], [
        'id' => '11',
        'Name' => 'Abdelrahman_Hamed',
        'phone' => '011279824256',
        'Email' => 'abdalrahaman.hamed59523@ci.menofia.edu.eg',
        'Section' => 'CS'

    ],
    [
        'id' => '12',
        'Name' => 'Ali_mohmed',
        'phone' => '010235486975',
        'Email' => 'ali.mohmed171565@ci.menofia.edu.eg',
        'Section' => 'IT'

    ], [
        'id' => '13',
        'Name' => 'Abdelrahman_Hamed',
        'phone' => '011279824256',
        'Email' => 'abdalrahaman.hamed59523@ci.menofia.edu.eg',
        'Section' => 'CS'

    ],
    [
        'id' => '14',
        'Name' => 'Ali_mohmed',
        'phone' => '010235486975',
        'Email' => 'ali.mohmed171565@ci.menofia.edu.eg',
        'Section' => 'IT'

    ],
    [
        'id' => '15',
        'Name' => 'Ali_mohmed',
        'phone' => '010235486975',
        'Email' => 'ali.mohmed171565@ci.menofia.edu.eg',
        'Section' => 'IT'

    ], [
        'id' => '16',
        'Name' => 'Ali_mohmed',
        'phone' => '010235486975',
        'Email' => 'ali.mohmed171565@ci.menofia.edu.eg',
        'Section' => 'IT'

    ], [
        'id' => '17',
        'Name' => 'Ali_mohmed',
        'phone' => '010235486975',
        'Email' => 'ali.mohmed171565@ci.menofia.edu.eg',
        'Section' => 'IT'

    ]
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            margin: 0px;
            padding: 0px;
        }

        table,
        th,
        tr,
        td {
            border: solid 2px red;
            color: white;
            padding: 5px;
            margin-bottom: 35px;

        }

        h1 {
            color: aliceblue;
            text-align: center;

        }

        .all_student_list {
            background-color: black;
            width: 100%;
            height: 100vh;
            margin: auto;
            display: flex;
            justify-content: center;
        }

        .all_student_list a {
            font-size: 20px;
            color: black;
            background-color: orangered;
            padding: 8px 35px;
            border-radius: 15px;
            text-decoration: none;
        }
    </style>

</head>

<body>
    <div class="all_student_list">
        <div class="list">

            <h1>List of Student </h1>
            <table>
                <tr>
                    <th>index</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Academic Email</th>
                    <th>Section</th>
                </tr>
                <?php
                foreach ($Student as $data) {
                ?>
                    <tr>
                        <td><?php echo "{$data["id"]}" ?></td>
                        <td><?php echo "{$data["Name"]}" ?></td>
                        <td><?php echo "{$data["phone"]}" ?></td>
                        <td><?php echo "{$data["Email"]}" ?></td>
                        <td><?php echo "{$data["Section"]}" ?></td>
                    </tr>
                <?php } ?>
            </table>
            <a href="./index.html">back To Home Page</a>
        </div>
    </div>
</body>