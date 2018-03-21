<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>
    $(document).ready(function () {
        $(".button-collapse").sideNav();

        $('#open').on('click', function() {
            $('.tap-target').tapTarget('open');

        });
        $('.modal').modal();
        $('.carousel').carousel();
        $('.materialboxed').materialbox();
        $('.chips').material_chip();
    });
    // Materialize.toast('Welcome to my page', 3000);

</script>
</body>
</html>