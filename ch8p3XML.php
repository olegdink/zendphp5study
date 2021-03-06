<?php
include_once('generalIncludes.php');
echo '<input id="chapter" type="hidden" value="8">';

echo '<h2>Chapter 8 Data Formats and Types - Paragraph paragraph Extensible Markup Language</h2>';
echo "NB. the file 'xml\library.xml' is in the root of this project.<br/>";

echo '<h3></h3>';
showXMLdoc(<<<'CODE'
<?xml version="1.0"?>
<message>Hello, World!</message>
CODE
);
echo '<h3></h3>';
showXMLdoc(<<<'CODE'
<?xml version="1.0"?>
<!DOCTYPE message SYSTEM "message.dtd">
<message>Hello, World!</message>
CODE
);
echo '<h3></h3>' ;
echo '';
showcode(<<<'CODE'
<?xml version="1.0"?>
<!DOCTYPE message [
<!ELEMENT message (#PCDATA)>
]>
<message>Hello, World!</message>
CODE
);
echo '<h2></h2>';
echo '';
showcode(<<<'CODE'
CODE
);

