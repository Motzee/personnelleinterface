//quand le document a fini de charger
window.addEventListener('load', function() {

    rechercheQwant() ;
    
    
    
}) ;



/* ---------------------------BIBLIOTHEQUE de fonctions--------------------------- */

function rechercheQwant() {
    
    let btnSearch = document.getElementById('btnSearch') ;
    
    btnSearch.addEventListener('click', function(e) {
        e.preventDefault() ;
        
        let champSearch = document.getElementById('champSearch') ;
        
        let txtSearch = champSearch.value ;
        
        window.location="https://www.qwant.com/?q="+txtSearch;
        
        /*

 */
    }) ;
}