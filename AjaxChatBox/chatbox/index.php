<?php include "inc/header.php"; ?>

<div class="container">
    <?php include "inc/navbar.php"; ?>

    <div class="card-panel teal lighten-2 center white-text"><h5>Chat Box</h5><a id="open" class="btn">open</a></div>
    <!-- Element Showed -->
    <div class="fixed-action-btn"><a id="menu" class="waves-effect waves-light btn btn-floating btn-large" ><i  class="material-icons">menu</i></a></div>

    <!-- Tap Target Structure -->
    <div class="tap-target teal white-text" data-activates="menu">
        <div class="tap-target-content">
            <h5>Welcome to my page</h5>
            <p>I hope you like it</p>
            <p>Please login to use chat box</p>
        </div>
    </div>

    <div class="carousel">
        <a class="carousel-item" href="#one!"><img src="img/untitled1.png"></a>
        <a class="carousel-item" href="#two!"><img src="img/untitled2.png"></a>
        <a class="carousel-item" href="#three!"><img src="img/untitled3.png"></a>
        <a class="carousel-item" href="#four!"><img src="img/untitled4.png"></a>
        <a class="carousel-item" href="#five!"><img src="img/untitled5.png"></a>
        <a class="carousel-item" href="#six!"><img src="img/untitled6.png"></a>
        <a class="carousel-item" href="#seven!"><img src="img/untitled8.png"></a>
        <a class="carousel-item" href="#eight!"><img src="img/untitled9.png"></a>
    </div>
</div>

<?php include "inc/footer.php"; ?>