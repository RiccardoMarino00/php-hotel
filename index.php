<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    for($i = 0; $i < count($hotels); $i++){
        $hotel = $hotels[$i];
        $name = $hotel['name'];
        $description = $hotel['description'];
        $parking = $hotel['parking'];
        $vote = $hotel['vote'];
        $center_distance = $hotel['distance_to_center'];
        $text = "-Nome: $name -Descrizione: $description  -Parcheggio: $parking  -Voto: $vote  -Distanza dal centro: $center_distance";
        // var_dump($hotel);
        ?>
          <table class="table table-primary">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row"> <?php echo $name; ?></td>
                <td> <?php echo $description; ?> </td>
                <td> <?php echo $parking; ?> </td>
                <td> <?php echo $vote; ?> </td>
                <td> <?php echo $center_distance; ?> Km </td>
              </tr>
            </tbody>
        </table>
    <?php
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- <table class="table table-primary">
       <thead>
         <tr>
           <th scope="col">Nome</th>
           <th scope="col">Descrizione</th>
           <th scope="col">Parcheggio</th>
           <th scope="col">Voto</th>
           <th scope="col">Distanza dal centro</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <th scope="row">1</th>
           <td>Mark</td>
           <td>Otto</td>
           <td>@mdo</td>
         </tr>
         <tr>
           <th scope="row">2</th>
           <td>Jacob</td>
           <td>Thornton</td>
           <td>@fat</td>
         </tr>
         <tr>
           <th scope="row">3</th>
           <td colspan="2">Larry the Bird</td>
           <td>@twitter</td>
         </tr>
       </tbody>
    </table> -->
    
    
 
    
</body>
</html>


  