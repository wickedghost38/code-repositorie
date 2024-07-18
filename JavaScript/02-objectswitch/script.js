let dag1 = { 
    borden: 42, 
    glazen: 57, 
    messen: 85, 
    vorken: 96, 
    lepels: 103
};

let verkocht = [
"lepel", 
"vork",
"vork",
"bord", 
"lepel", 
"mes", 
"glas", 
"glas", 
"bord", 
"lepel", 
"lepel",
"bord", 
"glas", 
"bord", 
"mes", 
"bord", 
"lepel", 
"vork", 
"glas", 
"bord", 
"vork", 
"vork" 
]

for(let [key, value] of Object.entries(dag1)) {
    //console.log(`\n dag 1 key => ${key} | value => ${value}`)

    let dag2_value = dag2[key]
    //console.log(`dag 2 key => ${key} | value => ${dag2_value}`)

    let verkocht = value - dag2_value
    console.log(`er zijn ${verkocht} ${key} verkocht`)
}