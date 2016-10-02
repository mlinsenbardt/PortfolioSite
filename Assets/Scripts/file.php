<?php
  $file = '/Assets/Scripts/resume_2015.pdf';
  $filename = 'resume_2015.pdf';
  header('Content-type: application/pdf');
  header('Content-Disposition: inline; filename="' . $filename . '"');
  header('Content-Transfer-Encoding: binary');
  header('Accept-Ranges: bytes');
  @readfile($file);
?>