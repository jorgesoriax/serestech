/**
 * MENU
 */
menuCollapse();
 
function menuCollapse(){
    const menuBtn = document.querySelector('.menu'),
          menuContainer = document.querySelector('.menu--container'),
          menuShadow = menuContainer.nextElementSibling;
    let menuOpen = 0;

    menuBtn.addEventListener('click', () => {
        document.querySelector('body').style.overflow = 'hidden';
        
        if(menuOpen == 0){
            menuContainer.style.transform = 'translateX(0)';
            menuShadow.style.display = 'block';

            menuOpen = 1;
        }
    });

    menuContainer.addEventListener('click', e => {
        if(e.target.classList.contains('menu--container')){ // Evitamos el event bubbling
            document.querySelector('body').style.overflow = 'scroll';
            
            if(menuOpen == 1){
                menuContainer.style.transform = 'translateX(100%)';
                menuShadow.style.display = 'none';
    
                menuOpen = 0;
            }
        }
    })
}