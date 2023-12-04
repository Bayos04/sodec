
<!--  Import Js Files -->
<script src="src/public/libs/jquery/dist/jquery.min.js"></script>
<script src="src/public/libs/simplebar/dist/simplebar.min.js"></script>
<script src="src/public/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--  core files -->
<script src="src/public/js/app.min.js"></script>
<script src="src/public/js/app.init.js"></script>
<script src="src/public/js/app-style-switcher.js"></script>
<script src="src/public/js/sidebarmenu.js"></script>
<script src="src/public/js/custom.js"></script>
<!--  current page js files -->

<script src="src/public/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="src/public/js/datatable/datatable-basic.init.js"></script>
<?php
if ($_SERVER["REQUEST_URI"] == "/home"):
?>
<script src="src/public/libs/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="src/public/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="src/public/js/dashboard2.js"></script>
<?php
elseif ($_SERVER["REQUEST_URI"] == "/collections"):
?>
<script src="src/public/js/apps/notes.js"></script>
<?php
elseif ($_SERVER["REQUEST_URI"] == "/agents"):
?>
<script src="src/public/js/apps/contact.js"></script>
<?php
elseif ($_SERVER["REQUEST_URI"] == "/tontine"):
?>
    <script src="src/public/js/apps/contact.js"></script>
<?php
elseif ($_SERVER["REQUEST_URI"] == "/clients"):
?>
<script src="src/public/dist/js/apps/chat.js"></script>
<?php
endif;
?>
</body>
</html>