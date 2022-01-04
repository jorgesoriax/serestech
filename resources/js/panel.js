// function panelCollapse(){
//     const icon = document.querySelector('#panel-collapse'),
//           panel = document.querySelector('#panel');
//     let click = 0;

//     icon.addEventListener('click', () => {

//         // Panel colapsado
//         if(click == 0){
//             panel.style.gridTemplateColumns = '100px auto';
//             icon.classList.remove('bx-chevron-right') 
//             icon.classList.add('bx-chevron-left');

//             click = 1;
//         } 
        
//         // Panel abierto
//         else { 
//             panel.style.gridTemplateColumns = '250px auto';
//             icon.classList.remove('bx-chevron-left') 
//             icon.classList.add('bx-chevron-right');

//             click = 0;
//         }
//     })
// }
// panelCollapse();