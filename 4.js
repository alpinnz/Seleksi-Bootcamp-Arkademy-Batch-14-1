const sortNumber = (input) => {
    let Regex = /[0-9]/;

    if (!Regex.test(input)) {
        return console.log('No number found in parameter!');
    }

    let temp = [];
    for (let i = 0; i < input.length; i++) {
        if (Regex.test(input[i])) {
            temp.push(input[i]);
        }
    }

    let result = (temp.sort()).join('');

    console.log(result);
}
sortNumber('48172a94')
sortNumber('94a')
sortNumber('abc')
sortNumber('aduwhgidahudawjd123123131asdajkdh1213');
sortNumber('awdwadawdwdwdw');