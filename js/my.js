window.addEventListener('DOMContentLoaded', (event) => {
   let breadScrumb = document.querySelector(".breadscrumbs ")
   console.log('ehf')
   if(window.innerWidth < 601){
    breadScrumb.innerHTML = 'Назад';
    breadScrumb.style.cursor = 'pointer'
   
   }
});