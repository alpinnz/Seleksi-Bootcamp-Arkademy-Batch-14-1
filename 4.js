const sortNumber = (input) => {
    // valid number
    let Regex = /[0-9]/;

    // jika tidak ada number makan return console.log('No number found in parameter!');
    // jika ada number lanjut ke step selanjutnya
    if (!Regex.test(input)) {
        return console.log('No number found in parameter!');
    }

    let temp = [];
    // perulangan untuk mengambil angka di dalam string lalu di push ke array
    for (let i = 0; i < input.length; i++) {
        if (Regex.test(input[i])) {
            temp.push(input[i]);
        }
    }

    // temp di sort lalu di jadikan string dengan mengunakan join('')
    let result = (temp.sort()).join('');

    // tampilakn data
    console.log(result);
}
sortNumber('48172a94')
sortNumber('94a')
sortNumber('abc')
sortNumber('aduwhgidahudawjd123123131asdajkdh1213');
sortNumber('awdwadawdwdwdw');