const printWords = (text) => {
    // valid vocal kapotal dan no kapital
    let vocal = /[aeiouAEIOU]/;
    // valid konsonan1 no kapital
    let konsonan1 = /[bcdfghiklmnpqrstvwxyz]/;
    // valid konsonan2 kapital
    let konsonan2 = /[BCDFGHIKLMNPQRSTVWXYZ]/;

    let tempVocal = [];
    let tempKonsonan = [];

    // membaca setiap digit atau huruf untuk di push ke array
    for (let i = 0; i < text.length; i++) {
        if (vocal.test(text[i])) {
            tempVocal.push(text[i]);
        } else if (konsonan1.test(text[i]) || konsonan2.test(text[i])) {
            tempKonsonan.push(text[i]);
        } else {
            console.error('bukan alfabet ->' + text[i])
        }
    }

    // mengabungkan array awal Vocal kedua Konsonan
    let tempAll = tempVocal.concat(tempKonsonan);

    // tampilakn array
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
