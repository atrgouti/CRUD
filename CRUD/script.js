let tr = document.getElementsByTagName("tr")

for(let i = 0; i < tr.length; i++){
    // if(tr[i].td[3] === "male"){
    //     tr[i].classList.add("male")
    // }else{
    //     tr[i].classList.add("famale")
    // }
    let td = tr[i].getElementsByTagName("td")
    let txtValue = td[3].textContent
    if(txtValue === "male"){
        tr[i].classList.add("male")
    }else{
        tr[i].classList.add("famale")
    }
}