<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums I Like</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E3651D;
        }
        table {
            width: 70%;
            margin: 50px auto;
            border-collapse: collapse;
            border: 2px solid #000;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
    <style>
      .Center {
            border: 5px outset #f5bd1f;
            text-align: center;
        }
        </style>
</head>
  <div class="Center">
    <h1><?php echo "Albums that I like!"; ?></h1>

<body>
    <table>
        <thead>
            <tr>
                <th>Album</th>
                <th>Artist</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $albums = array(
                "Invader(Reckless Love)",
                "One Thing at a Time(Morgan Wallen)",
                "Night Visions(Imagine Dragons)",
                "Imaginary Appalachia(Colter Wall)",
                "Doo-wops&Hooligans(Bruno Mars)",
                "Austin(Post Malone)",
                "Gathered By the Lantern(Powfu)",
                "Montero(Lil Nas X)",
                "Legends Never Die(Juice WRLD)",
                "Scarlet(Doja Cat)"
            );

            // Shuffle the array to display albums in random order
            shuffle($albums);
            
            // Loop through the shuffled array to generate table rows
            foreach ($albums as $album) {
                // Split the album name and artist name using the '(' delimiter
                list($albumName, $artistName) = explode('(', $album, 2);
                // Remove ')' from the artist name
                $artistName = rtrim($artistName, ')');
                
                // If the artist name is "Reckless Love", make it a clickable link
                if ($artistName == 'Reckless Love') {
                    $artistName = '<a href="https://www.youtube.com/channel/UC5yDo26IN54MMpMyY9kdTTA">' . $artistName . '</a>';
                }
                elseif ($artistName == 'Morgan Wallen') {
    $artistName = '<a href="https://www.youtube.com/@morganwallen">' . $artistName . '</a>';
}
elseif ($artistName == 'Post Malone') {
    $artistName = '<a href="https://www.youtube.com/@postmalone">' . $artistName . '</a>';
}
elseif ($artistName == 'Imagine Dragons') {
    $artistName = '<a href="https://www.youtube.com/@ImagineDragons">' . $artistName . '</a>';
}
elseif ($artistName == 'Powfu') {
    $artistName = '<a href="https://www.youtube.com/@PowfuOfficial">' . $artistName . '</a>';
}
elseif ($artistName == 'Lil Nas X') {
    $artistName = '<a href="https://www.instagram.com/lilnasx/?hl=en">' . $artistName . '</a>';
}
elseif ($artistName == 'Juice WRLD') {
    $artistName = '<a href="https://www.youtube.com/@JuiceWRLD">' . $artistName . '</a>';
}
elseif ($artistName == 'Bruno Mars') {
    $artistName = '<a href="https://www.youtube.com/@brunomars">' . $artistName . '</a>';
}
elseif ($artistName == 'Doja Cat') {
    $artistName = '<a href=https://www.youtube.com/@dojacat">' . $artistName . '</a>';
}
elseif ($artistName == 'Colter Wall') {
    $artistName = '<a href="https://www.youtube.com/@colterwall">' . $artistName . '</a>';
}


                
                // Output table row with album name and artist name
                echo "<tr><td>$albumName</td><td>$artistName</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</div>
</html>
