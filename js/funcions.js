function confirmaRegistre(){
    alert("registrant estudiant");
    document.getElementById("formDiv").innerHTML = "<p class='important'>T'has registrat amb èxit!</p>";
    console.log("registrant estudiant");
    return false;
}

async function carregaMencions(){
    //step 0
    let grau =document.getElementById("graus").value

    //step 1
    let response =await fetch('mencions.php?grau='+grau)

    //step 2
    let options =await response.text()

    //step 3
    document.getElementById("mencions").innerHTML = options

}