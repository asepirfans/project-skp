//Navbar Fixed
window.onscroll = function(){
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if(window.pageYOffset > fixedNav){
        header.classList.add('navbar-fixed');
    }else{
        header.classList.remove('navbar-fixed');
    }
}


//Hambuerger
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function(){
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden')
});
// function myFunction(){
//     var input = document.getElementById('input');
//     var filter = input.value.toUpperCase();
//     var table = document.getElementById('tabel');
//     var tr = table.getElementsByTagName('tr');
//     for(i = 0; i<tr.length;i++){
//         var td = tr[i].getElementsByTagName("td")[0];
//         if(td){
//             var textValue = td.textContent || td.innerText;
//         if(textValue.toUpperCase().indexOf(filter)>-1){
//             tr[i].style.display ="";
//         } else{
//             tr[i].style.display ="none";
//         }

//         }
//     }
    
// }

// Search
