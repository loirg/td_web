<?php
$footer=yaml_parse_file('footer.yaml');

?>
<ul class="footer">
<?php

echo '<marquee>'.$footer['copyright'].'</marquee>';
?>