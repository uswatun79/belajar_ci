<script src="<?= BASEURL; ?>/asset/js/jquery-3.3.1.min.js"></script>
<script src="<?= BASEURL; ?>/asset/js/popper.min.js"></script>
<script src="<?= BASEURL; ?>/asset/js/bootstrap.js"></script>
<script src="<?= BASEURL; ?>/asset/js/sweetalert.min.js"></script>
<?php
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
if($uriSegments[2] == 'mahasiswa'){ ?>
    <script src="<?= BASEURL; ?>/asset/js/script.js"></script> <?php
}else{ ?>
    <script src="<?= BASEURL; ?>/asset/js/makul.js"></script> <?php
} ?>
</body>
</html>