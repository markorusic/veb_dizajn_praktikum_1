<?php

include('content.php');

$page_title = "Filmovi";

$genres = getGenres($movies);

include('partials/header.php'); ?>
    <!-- main container -->
    <main id="movies">
        <div class="container py-5">
        	<div class="row">
        		<div class="col-12 px-3">
        			<h2 class="nice-font">Šta ti se gleda?</h2>
    				<ul class="list-reset genre-list-2">
    					<li class="active">Sve</li>
        				<?php foreach($genres as $genre): ?>
							<li><?= $genre ?></li>
        				<?php endforeach; ?>
    				</ul>
        		</div>
        		<div class="col-12">
        			<div class="row pt-5 px-3 moives-list">
        				<?php foreach($movies as $movie): ?>
        					<div class="col-12 col-md-4 col-lg-3 moive-item"
        						 data-genres="<?=$movie['genres']?>"
        					>
        						<a href="movie.php?id=<?= $movie['id'] ?>">
        							<article style="background-image: url('<?= $movie['portrait_img'] ?>')">
        								<div class="movie-overlay"></div>
        								<div class="movie-content flex-center-both">
        									<h4 class="text-center"><?= $movie['title'] ?></h4>
        								</div>
        							</article>
        						</a>
        					</div>
    					<?php endforeach; ?>
        			</div>
        		</div>
        	</div>
        </div>
    </main>
    <!-- main container ends -->

<?php include('partials/footer.php'); ?>