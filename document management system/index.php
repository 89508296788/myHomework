<?php

require_once 'DocumentInterface.php';
require_once 'LoggableTrait.php';  
require_once 'AbstractDocument.php';
require_once 'ImageDocument.php';
require_once 'PdfDocument.php';
require_once 'TextDocument.php';

$imageDoc = new ImageDocument("бинарные данные изображения");
$pdfDoc = new PdfDocument("сырое содержимое PDF");
$textDoc = new TextDocument("Это   пример   текста с   лишними пробелами. \n И переносами строк.");

echo "=== Графический Документ ===\n";
echo "Содержимое: " . $imageDoc->getContent() . "\n";
print_r($imageDoc->getMetaData());
print_r($imageDoc->getDimensions());
print_r($imageDoc->getLogs());

echo "\n=== PDF Документ ===\n";
echo "Содержимое: " . $pdfDoc->getContent() . "\n";
print_r($pdfDoc->getMetaData());
echo "Количество страниц: " . $pdfDoc->getPageCount() . "\n";
print_r($pdfDoc->getLogs());

echo "\n=== Текстовый Документ ===\n";
echo "Содержимое: " . $textDoc->getContent() . "\n";
print_r($textDoc->getMetaData());
echo "Количество слов: " . $textDoc->countWords() . "\n";
print_r($textDoc->getLogs());

echo "\n=== Экспорт в JSON ===\n";
echo "Графический JSON:\n" . $imageDoc->exportToJson() . "\n\n";
echo "PDF JSON:\n" . $pdfDoc->exportToJson() . "\n\n";
echo "Текстовый JSON:\n" . $textDoc->exportToJson() . "\n";