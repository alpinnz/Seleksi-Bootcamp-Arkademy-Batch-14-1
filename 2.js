
const is_name_valid = (name) => {
    let Regex = /^[A-Z]{3,}$/;
    return Regex.test(name);
}

const is_age_valid = (age) => {
    let Regex = /^[0-9]{2,2}$/;
    return Regex.test(age);
}
const is_username_valid = (username) => {
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