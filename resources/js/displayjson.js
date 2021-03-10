// playground requires you to assign document definition to a variable called dd

var dd = {
    content: [
        {text: 'TAsk Madera', style: 'header'},
        {
            style: 'tableExample',
            table: {
                body: [
                    ['Account', 'Tests'],
                    ['','']
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
        // alignment: 'justify'
    }

}
