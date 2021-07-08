<?php
    require_once __DIR__ . '/../classes/Movie.php';
    require_once __DIR__ . '/../data/movies_db.php';    
?>

<main>
    <div class="wrapper">

        <!-- movie card  -->
        <?php foreach ($movies as $index => $movie) { 
            $movieString = "movie_" . $index;        
        ?>
        <div class="movie">

            <!-- movie instance -->
            <?php 
                ${$movieString} = new Movie(
                    $movies[$index]["posterPath"],
                    $movies[$index]["originalTitle"],
                    $movies[$index]["director"], 
                    $movies[$index]["language"],
                    $movies[$index]["country"],
                    $movies[$index]["genres"], 
                    $movies[$index]["cast"], 
                    $movies[$index]["overview"], 
                    $movies[$index]["avgRating"], 
                    $movies[$index]["ratings"]
                );
                ${$movieString} -> setAvgRating(${$movieString} -> ratings);     
            ?>
            <!-- /movie instance -->

            <!-- movie card details-->
            <img src="<?= ${$movieString}->posterPath ?>" alt="<?= ${$movieString}->originalTitle ?>">
            <h2><?= ${$movieString}->originalTitle ?></h2>
            <h3><?= 'Director: ' . ${$movieString}->director ?></h3>
            <h4><?= 'Language: ' . ${$movieString}->language ?></h4>
            <h4><?= 'Country: ' . ${$movieString}->country ?></h4>
            <div>
                
            </div>
            <div>
                
            </div>
            <p><?= ${$movieString}->overview ?></p>
            <h5><?= 'Average rating: ' . ${$movieString}->avgRating ?></h5>
            <h5><?= 'Total votes: ' . count(${$movieString}->ratings) ?></h5>
            <!-- /movie card details -->
        </div>
        <?php } ?>
        <!-- /movie card  -->
    </div>
</main>