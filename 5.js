const createMatrix = (ordo) => {
    let arr = new Array(ordo);
    let left = [];
    let right = [];

    let rowRight = 0;
    let colRight = arr.length;

    let no = 1;
    for (let row = 0; row < arr.length; row++) {

        arr[row] = new Array(ordo);

        for (let col = 0; col < arr[row].length; col++) {
            arr[row][col] = no++;

            if (col == row) {
                left.push(arr[row][col]);
            }

            if (row == rowRight && col == colRight) {
                right.push(arr[row][col]);
                rowRight++;
                colRight--;
            }
        }
    }

    arr.forEach(res => {
        console.log(res);
    });

    console.log('left -> ' + left)
    console.log('right -> ' + right)
}

createMatrix(4)