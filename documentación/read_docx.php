<?php
$zip = new ZipArchive();
$filename = __DIR__ . '/SRS_Sistema_Inventario_y_Ventas_Agricolas.docx';
if ($zip->open($filename) === TRUE) {
    $xml = $zip->getFromName('word/document.xml');
    if ($xml) {
        // Simple regex/XML extraction of paragraphs and text
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $paragraphs = $dom->getElementsByTagNameNS('http://schemas.openxmlformats.org/wordprocessingml/2006/main', 'p');
        $output = "";
        foreach ($paragraphs as $p) {
            $texts = $p->getElementsByTagNameNS('http://schemas.openxmlformats.org/wordprocessingml/2006/main', 't');
            $pText = "";
            foreach ($texts as $t) {
                $pText .= $t->nodeValue;
            }
            $output .= $pText . "\n";
        }
        file_put_contents(__DIR__ . '/SRS_Sistema_Inventario_y_Ventas_Agricolas.md', $output);
        echo "Successfully extracted DOCX contents to SRS_Sistema_Inventario_y_Ventas_Agricolas.md\n";
    } else {
        echo "Could not find word/document.xml in the DOCX\n";
    }
    $zip->close();
} else {
    echo "Failed to open DOCX file\n";
}
