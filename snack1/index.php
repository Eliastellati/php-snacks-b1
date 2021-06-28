<?php
 $matches = [
     [
         "casa"=> "Genova",
         "ospiti"=> "Pisa",
         "punti_casa"=> 78,
         "punti_ospiti"=> 56
     ],
     [
        "casa"=> "Milano",
        "ospiti"=> "Torino",
        "punti_casa"=> 68,
        "punti_ospiti"=> 67
     ],
     [
        "casa"=>"Roma",
        "ospiti"=> "Napoli",
        "punti_casa"=> 47,
        "punti_ospiti"=> 59
    ]
];
var_dump($matches);
?>
<body>
    <h3>Risultati dei math di oggi</h3>
    <?php for ($i=0; $i < count($matches); $i++){?>
             <?php $match = $matches[$i];?>
             <h6><?php echo $match['casa'] . ' - ' . $match['ospiti'] . ' | ' . $match['punti_casa'] . ' - ' . $match['punti_ospiti'];?></h6>
    <?php }?>
</body>
