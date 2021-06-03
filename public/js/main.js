


let list_of_product = document.getElementsByTagName("li");

let checkbox_keuken = document.getElementById("keuken");
let checkbox_gereedschap = document.getElementById("gereedschap");
let checkbox_kantoor = document.getElementById("kantoor");
let checkbox_elektronica = document.getElementById("elektronica");
let checkbox_hobby = document.getElementById("hobby");
let checkbox_reizen = document.getElementById("reizen");
let checkbox_sport = document.getElementById("sport");
let checkbox_overig = document.getElementById("overig");


checkbox_keuken.checked = true;
checkbox_gereedschap.checked = true;
checkbox_kantoor.checked = true;
checkbox_elektronica.checked = true;
checkbox_hobby.checked = true;
checkbox_reizen.checked = true;
checkbox_sport.checked = true;
checkbox_overig.checked = true;


for(let i = 0; i < list_of_product.length; i++){
    list_of_product[i].style.display = "block";
}

// console.log(list_of_product[0].dataset);

checkbox_keuken.addEventListener('change', function(){
    if(checkbox_keuken.checked){
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Keuken'){
                list_of_product[i].style.display = 'block';
            }
        }
    }
    else{
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Keuken'){
                list_of_product[i].style.display = 'none';
            }
        }
    }
});


checkbox_gereedschap.addEventListener('change', function(){
    if(checkbox_gereedschap.checked){
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Gereedschap'){
                list_of_product[i].style.display = 'block';
            }
        }
    }
    else{
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Gereedschap'){
                list_of_product[i].style.display = 'none';
            }
        }
    }
});


checkbox_kantoor.addEventListener('change', function(){
    if(checkbox_kantoor.checked){
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Kantoor'){
                list_of_product[i].style.display = 'block';
            }
        }
    }
    else{
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Kantoor'){
                list_of_product[i].style.display = 'none';
            }
        }
    }
});


checkbox_elektronica.addEventListener('change', function(){
    if(checkbox_elektronica.checked){
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Elektronica'){
                list_of_product[i].style.display = 'block';
            }
        }
    }
    else{
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Elektronica'){
                list_of_product[i].style.display = 'none';
            }
        }
    }
});

checkbox_hobby.addEventListener('change', function(){
    if(checkbox_hobby.checked){
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Hobby'){
                list_of_product[i].style.display = 'block';
            }
        }
    }
    else{
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Hobby'){
                list_of_product[i].style.display = 'none';
            }
        }
    }
});

checkbox_reizen.addEventListener('change', function(){
    if(checkbox_reizen.checked){
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Reizen'){
                list_of_product[i].style.display = 'block';
            }
        }
    }
    else{
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Reizen'){
                list_of_product[i].style.display = 'none';
            }
        }
    }
});

checkbox_sport.addEventListener('change', function(){
    if(checkbox_sport.checked){
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Sport'){
                list_of_product[i].style.display = 'block';
            }
        }
    }
    else{
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Sport'){
                list_of_product[i].style.display = 'none';
            }
        }
    }
});

checkbox_overig.addEventListener('change', function(){
    if(checkbox_overig.checked){
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Overig'){
                list_of_product[i].style.display = 'block';
            }
        }
    }
    else{
        for(let i = 0; i < list_of_product.length; i++){
            if (list_of_product[i].dataset.kindOfProduct == 'Overig'){
                list_of_product[i].style.display = 'none';
            }
        }
    }
});
