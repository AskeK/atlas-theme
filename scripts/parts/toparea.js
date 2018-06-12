import { domainToASCII } from "url";


// Exports the init functions
export default (( ) => {

  // Extracts data
  let toparea    = document.getElementById ( 'toparea' );
  let upperbar   = document.querySelectorAll ( '#toparea .std-menus .top-menu' ) [0];
  let mobilemenu = document.querySelectorAll ( '#toparea .mobile-menus' ) [0];
  let hamburger  = document.querySelectorAll ( '#toparea .hamburger' ) [0];
  let menuelems  = document.querySelectorAll ( '#toparea .types-menu .menu-element' );

  // 768px

  // Event listeners
  // On Scroll
  let last = window.scrollY;
  window.addEventListener ( 'scroll', e => {

    // Gets the computed style (top n' height) 
    // of the toparea (t) n' the upperbar (u)
    let t_top    = parseInt ( window.getComputedStyle ( toparea ) .top );
    let u_height = parseInt ( window.getComputedStyle ( upperbar ) .height );

    // Extracts data
    let delta = window.scrollY - last;
    let total = t_top - delta;

    // Caps the total
    if ( total < -u_height ) { total = -u_height; }
    if ( total > 0 ) { total = 0; }

    // Sets the top of the toparea n' last
    toparea.style.top = total + 'px';
    last = window.scrollY;

  });

  // On hamburger click n' on resize
  hamburger.addEventListener ( 'click', e => {
    if ( mobilemenu.classList.contains ( 'active' ) ) {
    
      hamburger.classList.remove ( 'active' );
      mobilemenu.classList.remove ( 'active' );
    
    } else {
      
      hamburger.classList.add ( 'active' );
      mobilemenu.classList.add ( 'active' );

    }
  });

  // On (mobile) menu elem click
  for ( let i = 0; i < menuelems.length; i ++ ) {
    menuelems [i] .addEventListener ( 'click', e => {
      if ( window.innerWidth <= 768 ) {

        // Loops through children
        let children = menuelems [i] .children;
        for ( let j = 0; j < children.length; j ++ ) {

          // Closes all expanded menu elements
          let exp = document.querySelectorAll ( '.children.expanded, .menu-element.expanded' );
          for ( let n = 0; n < exp.length; n ++ ) {
            exp [n] .style.height = '0px';
            exp [n] .classList.remove ( 'expanded' );
          }

          // If the children is actually the 'children' elem.
          if ( children [j] .classList.contains ( 'children' ) ) {

            // Extracts data
            let outer   = children [j];
            let inner   = children [j] .children [0];
            let oheight = window.getComputedStyle ( outer ) .height;
            let iheight = window.getComputedStyle ( inner ) .height;

            // Sets height
            if ( parseInt ( oheight ) !== 0 ) {
            
              outer.style.height = '0px'; 
              outer.classList.remove ( 'expanded' );
              menuelems [i] .classList.remove ( 'expanded' );
            
            } else { 
            
              outer.style.height = iheight; 
              outer.classList.add ( 'expanded' );
              menuelems [i] .classList.add ( 'expanded' );
            
            }

          }
        }

      }
    });
  }

});