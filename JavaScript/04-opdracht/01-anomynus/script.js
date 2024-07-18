let yay = document.getElementById('accept-knop').addEventListener('click', function(){
    document.querySelector('p').textContent = 'yay ';
   bye()
});
let knop = document.getElementById('reject-knop').addEventListener('click', function(){
    document.querySelector('p').textContent = 'helaas ';
    bye()
});

function bye(){
    document.getElementById('accept-knop').style.display = 'none';
    document.getElementById('reject-knop').style.display = 'none';
}