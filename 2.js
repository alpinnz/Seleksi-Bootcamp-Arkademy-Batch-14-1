
const is_name_valid = (name) => {
    // valid number lebih 3 digit
    let Regex = /^[A-Z]{3,}$/;
    return Regex.test(name);
}

const is_age_valid = (age) => {
    // valid number lebih 2 digit saja
    let Regex = /^[0-9]{2,2}$/;
    return Regex.test(age);
}
const is_username_valid = (username) => {
    // valid number lebih 4 digit saja _ or . number tripel 3x
    let Regex = /^[a-z]{4,4}(?:_+|.)([0-9])\1\1$/;
    return Regex.test(username);
}
// name
console.log(is_name_valid('aa') ? "benar" : "salah");
console.log(is_name_valid('aasd') ? "benar" : "salah");
console.log(is_name_valid('AS') ? "benar" : "salah");
console.log(is_name_valid('ABS') ? "benar" : "salah");
console.log(is_name_valid('ASDWDW') ? "benar" : "salah");

// age
console.log(is_age_valid('aas') ? "benar" : "salah");
console.log(is_age_valid('1') ? "benar" : "salah");
console.log(is_age_valid('22') ? "benar" : "salah");
console.log(is_age_valid('3123') ? "benar" : "salah");

// username
console.log(is_username_valid('yani_333') ? "benar" : "salah");
console.log(is_username_valid('auto.555') ? "benar" : "salah");
console.log(is_username_valid('yani_233') ? "benar" : "salah");
console.log(is_username_valid('yanA.333') ? "benar" : "salah");