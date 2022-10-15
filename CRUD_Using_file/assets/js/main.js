
document.addEventListener('DOMContentLoaded', function (){
    let links = document.querySelectorAll(".delete");
    for (let i =0; i <links.length; i++){
        links[i].addEventListener('click', function (e){
            if(!confirm("Are you Sure?")){
                e.preventDefault();
            }
        })
    }
})

