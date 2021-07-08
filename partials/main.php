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
            <h2><?= strtoupper(${$movieString}->originalTitle) ?></h2>
            <h3><?= 'Director: ' . ${$movieString}->director ?></h3>
            <span><?= 'Language: ' . ${$movieString}->language ?></span><br>
            <span><?= 'Country: ' . ${$movieString}->country ?></span><br>           
            <div>
                <?php foreach (${$movieString}->genres as $genre) {?>
                    <h5><?= strtoupper($genre) ?></h5>
                <?php } ?>
            </div>
            <p class="overview"><?= ${$movieString}->overview ?></p>
            <h4>Cast:</h4>
            <div class="cast">
                <?php foreach (${$movieString}->cast as $actor) {?>
                    <span><?= $actor?></span><br>
                <?php } ?>
            </div>
            <h5><?= 'Average rating: ' . ${$movieString}->avgRating ?></h5>
            <h5><?= 'Total votes: ' . count(${$movieString}->ratings) ?></h5>
            <!-- /movie card details -->
        </div>
        <?php } ?>
        <!-- /movie card  -->
    </div>
</main>