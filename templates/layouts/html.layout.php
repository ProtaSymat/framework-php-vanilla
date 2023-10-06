<?php
include_once './templates/includes/html_header.inc.php';
fromInc("menu");
echo $pageContent['html'];
?>
<ul>
    <?php
    foreach ($pageContent["data"]["contact"] as $key=>$value ){
    print_r($value)
    }
    ?>
</ul>
<?php
include_once './templates/includes/html_footer.inc.php';