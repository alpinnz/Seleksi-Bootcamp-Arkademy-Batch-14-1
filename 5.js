const createMatrix = (ordo) => {
    let arr = new Array(ordo);

    let left = [];
    let right = [];

    let rowRight = 0;
    let colRight = (arr.length - 1);

    let no = 1;
    // create item to array
    for (let row = 0; row < arr.length; row++) {
        arr[row] = new Array(ordo);
        for (let col = 0; col < arr[row].length; col++) {
            arr[row][col] = no++;
            // fint diagonal kiri
            if (col == row) {
                left.push(arr[row][col]);
            }
            // fint diagonal kanan
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