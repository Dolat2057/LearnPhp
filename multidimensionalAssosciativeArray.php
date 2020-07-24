<?php
$marks =[
    "krishna"=>[
        "physics"=> 85,
        "maths"=>68,
        "chemistry"=>98
    ],
    "salman"=>[
        "physics"=>45,
        "maths"=>89,
        "chemistry"=>68
    ],
    "mohan"=>[
        "physics"=>58,
        "maths"=>89,
        "chemistry"=> 87
    ]
    ];
    echo "<table border='2px' cellpadding='5px' cellspacing='0'>
    <tr>
    <th> Student name</th>
    <th> Physics</th>
    <th> Maths</th>
    <th> Chemistry</th>
    </tr>";
foreach($marks as $key=>$v1){
    echo"<tr>
    <td> $key</td>";
    foreach($v1 as $v2){
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<pre>";
    print_r($marks);
echo "</pre>";
?>