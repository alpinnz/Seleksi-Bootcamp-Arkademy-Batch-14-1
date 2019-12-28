const createMatrix = (ordo) => {
    // deklarasi arr dimensi 1
    let arr = new Array(ordo);
    // deklarasi 
    let left = [];
    let right = [];
    // deklarasi untuk mencari diagonal kanan
    let rowRight = 0;
    let colRight = (arr.length - 1);
    // deklarasi angka awal isi array
    let no = 1;
    // create item to array
    for (let row = 0; row < arr.length; row++) {
        // deklarasi value array menjadi 2 dimensi
        arr[row] = new Array(ordo);
        // menrender colom atau dimensi 2
        for (let col = 0; col < arr[row].length; col++) {
            // di isi dengan let no setiap colom lalu menambahkan inchremen ke let no;
            arr[row][col] = no++;
            // fint diagonal kiri
            // digaonal kiri di4 push ke array di tampung 
            if (col == row) {
                left.push(arr[row][col]);
            }
            // fint diagonal kanan di push array di tapung
            if (row == rowRight && col == colRight) {
                right.push(arr[row][col]);
                rowRight++;
                colRight--;
            }
        }
    }
    // tampailkan data array
    arr.forEach(res => {
        console.log(res);
    });
    // tampilkan diagonal
    console.log('left -> ' + left)
    console.log('right -> ' + right)
    // sum dalam array mengunakan reduce
    let sumLeft = left.reduce((total, value) => total + value, 0);
    let sumRight = right.reduce((total, value) => total + value, 0);
    // perkalian dari hasil sum diagonal
    let result = sumLeft * sumRight
    // formula bersifat dinamy di ambil dari arr diagonal kiri kanan yang di pisahkan dengan + mengunakan fungsi join()
    console.log('Formula: (' + left.join(' + ') + ') x (' + right.join(' + ') + ')');
    console.log('Total: ' + result);
}

createMatrix(1)
createMatrix(2)
createMatrix(3)
createMatrix(4)
createMatrix(5)