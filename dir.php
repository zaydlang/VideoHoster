var files = <?php $out = array();
foreach (glob('uploads/*') as $filename) {
    $p = pathinfo($filename);
    $out[] = $p['filename'];
}
echo json_encode($out); ?>;
