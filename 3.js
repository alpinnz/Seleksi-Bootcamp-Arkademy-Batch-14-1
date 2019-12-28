


const printWords = (text) => {
    let vocal = /[aeiouAEIOU]/;
    let konsonan1 = /[bcdfghiklmnpqrstvwxyz]/;
    let konsonan2 = /[BCDFGHIKLMNPQRSTVWXYZ]/;

    let tempVocal = [];
    let tempKonsonan = [];

    for (let i = 0; i < text.length; i++) {
        if (vocal.test(text[i])) {
            tempVocal.push(text[i]);
        } else if (konsonan1.test(text[i]) || konsonan2.test(text[i])) {
            tempKonsonan.push(text[i]);
        } else {
            console.error('bukan alfabet ->' + text[i])
        }
    }

    let tempAll = tempVocal.concat(tempKonsonan);

    tempAll.forEach(res => {
        console.log(res);
    });
}

printWords('ARKADEMY');

printWords('ARKADEMY11232');

// A
// A
// E
// R
// K
// D
// M
// Y
