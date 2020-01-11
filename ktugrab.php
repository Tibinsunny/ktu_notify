<?php
$sample = file_get_contents('https://ktu.edu.in/home.htm');

function getContents($str, $startDelimiter, $endDelimiter) {
  $contents = array();
  $startDelimiterLength = strlen($startDelimiter);
  $endDelimiterLength = strlen($endDelimiter);
  $startFrom = $contentStart = $contentEnd = 0;
  while (false !== ($contentStart = strpos($str, $startDelimiter, $startFrom))) {
    $contentStart += $startDelimiterLength;
    $contentEnd = strpos($str, $endDelimiter, $contentStart);
    if (false === $contentEnd) {
      break;
    }
    $contents[] = substr($str, $contentStart, $contentEnd - $contentStart);
    $startFrom = $contentEnd + $endDelimiterLength;
  }
  
  return $contents;
}

$asd=getContents($sample, '<a target="_blank" href="/eu/core/announcements.htm">', '</a>');
for($i=1;$i<=5;$i++)
{
echo $asd[$i]."<br>";
}


?>