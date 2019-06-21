function cambiar_color_over(celda){
    if (celda.innerHTML > 0 && celda.innerHTML < 4) {
        celda.style.backgroundColor="#FBA0A4";
    }
    if (celda.innerHTML > 3 && celda.innerHTML < 7) {
        celda.style.backgroundColor="#FEF543";
    }
    
    if (celda.innerHTML > 6) {
        celda.style.backgroundColor="#75C236";
    }
}
    
function cambiar_color_out(celda){
   celda.style.backgroundColor= "white";
} 