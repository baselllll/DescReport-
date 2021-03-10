<!doctype html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <title>my example</title>
    <!-- pdfmake files: -->
    <script src='https://cdn.jsdelivr.net/npm/pdfmake@latest/build/pdfmake.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/pdfmake@latest/build/vfs_fonts.min.js'></script>
    <!-- html-to-pdfmake file: -->
    <script src="https://cdn.jsdelivr.net/npm/html-to-pdfmake/browser.js"></script>
</head>
<body>
<?php
$str_data = file_get_contents('C:\xampp7.2\htdocs\new_dashboard\public\data.json');
$result = array_values(json_decode($str_data, true));
?>
<script>
    var dd = {
        content: [
            {text: 'TAsk Madera', style: 'header'},
            {
                style: 'tableExample',
                table: {

                    body: [

                        ['Account', 'Tests'],
                        @foreach($result as $res)
                            @foreach ($res as $key=>$value)
                                 ['<?php echo $key; ?>','<?php echo $value; ?>'],
                            @endforeach
                        @endforeach
                    ]

                }
            }],
        styles: {
            header: {
                fontSize: 18,
                bold: true,
                margin: [0, 0, 0, 10]
            },
            subheader: {
                fontSize: 16,
                bold: true,
                margin: [0, 10, 0, 5]
            },
            tableExample: {
                margin: [0, 5, 0, 15]
            },
            tableHeader: {
                bold: true,
                fontSize: 13,
                color: 'black'
            }
        },
        defaultStyle: {
        }
    }
    pdfMake.createPdf(dd).download();
</script>
</body>
</html>
