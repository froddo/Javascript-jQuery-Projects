<?php include "inc/header.php"; ?>
<div class="container">
    <?php include "inc/navbar.php"; ?>
    <div class="fixed-action-btn horizontal click-to-toggle">
        <a class="btn-floating btn-large red right pulse">
            <i class="waves-effect waves-light material-icons">menu</i></a>

        <ul>
            <li><a href="https://github.com/froddo" target="_blank" class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
            <li><a href="https://www.linkedin.com/in/topalovr/" target="_blank" class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
            <li><a href="http://www.topalovr-portfolio.tk/" target="_blank" class="btn-floating green"><i class="material-icons">publish</i></a></li>
            <li><a href="http://www.topalovr.gq" target="_blank" class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
        </ul>
    </div>
<div class="row">
    <div class="col s12 m12">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <img src="img/Rumen%20Topalov.jpg" alt="" class="materialboxed circle responsive-img" width="20%">
                <span class="card-title">About Me</span>
                <a href="#modal1" class="btn modal-trigger btn-floating halfway-fab waves-effect waves-light red pulse"><i class="material-icons">add</i></a>
                <p>What are the projects have I worked?</p>
            </div>

            <div class="card-action">
                <p class="white-text">For more information, just click on the red pulse buttons</p>
            </div>

        </div>
    </div>
</div>


    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>My Projects</h4>

            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons">filter_drama</i>My Portfolio</div>
                    <div class="collapsible-body"><span><a href="http://www.topalovr-portfolio.tk" target="_blank">http://www.topalovr-portfolio.tk</a></span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">add_circle_outline</i>Healthy Blog</div>
                    <div class="collapsible-body" ><span><a href="http://www.topalovr.gq" target="_blank">http://www.topalovr.gq</a></span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">add_a_photo</i>Photo Album</div>
                    <div class="collapsible-body"><span><a href="http://www.topalovr.ga" target="_blank">http://www.topalovr.ga</a></span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">camera_roll</i>Photo Sell</div>
                    <div class="collapsible-body"><span><a href="http://www.topalovr.cf" target="_blank">http://www.topalovr.cf</a></span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">group</i>It Blog</div>
                    <div class="collapsible-body"><span><a href="http://www.topalovr.ml" target="_blank">http://www.topalovr.ml</a></span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">headset</i>Music Gallery</div>
                    <div class="collapsible-body"><span><a href="http://www.topalovr-music.tk" target="_blank">http://www.topalovr-music.tk</a></span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">message</i>Messages Blog</div>
                    <div class="collapsible-body"><span><a href="http://www.topalovr.tk" target="_blank">http://www.topalovr.tk</a></span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">book</i>Ajax Address Book</div>
                    <div class="collapsible-body"><span><a href="http://www.topalovr-addressbook.tk" target="_blank">http://www.topalovr-addressbook.tk</a></span></div>
                </li>
            </ul>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
    </div>


</div>
<?php include "inc/footer.php"; ?>