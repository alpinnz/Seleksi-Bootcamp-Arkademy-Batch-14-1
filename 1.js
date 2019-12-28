const biodata = (setName, setAge) => {
  return JSON.stringify({
    name: setName,
    age: setAge,
    address: "Jl. Raya Losawi No 15 RT 03 RW 08 Kec.Singosari Kab.Malang 65153",
    hobbies: ["basket ball", "playing dota 2", "coding"],
    is_married: false,
    list_school: [
      {
        name: "SDN Ampeldento 2 Malang",
        year_in: 2004,
        year_out: 2010,
        major: null
      },
      {
        name: "Paket B PKBM Kartini Malang",
        year_in: 2011,
        year_out: 2014,
        major: null
      },
      {
        name: "Paket C PKBM Kartini Malang",
        year_in: 2014,
        year_out: 2017,
        major: null
      },
      {
        name: "Institut Asia Malang",
        year_in: 2017,
        year_out: 0,
        major: "Teknik Informatika"
      }
    ],
    skills: [
      {
        skill_name: "javascripts",
        level: "advanced"
      },
      {
        skill_name: "php",
        level: "beginner"
      },
      {
        skill_name: "bootsrap",
        level: "advanced"
      },
      {
        skill_name: "react.js",
        level: "advanced"
      },
      {
        skill_name: "node.js",
        level: "advanced"
      }
    ],
    interest_in_coding: true
  })

};

const MyBiodata = biodata("Alfin NoviAji", 23);
console.log(MyBiodata);

