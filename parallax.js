function parallax(element, distance, speed) {
    const item = document.querySelector(element);
    item.style.transform = `translateY(calc(${distance * speed}px))`; //we need to add the actual position to the translate
}


window.addEventListener("scroll", function(){
    parallax("#menu", window.scrollY, 1);
    parallax(".move:nth-child(3)", window.scrollY, 0.1);

});


    /*the idea is to put the rest of the images and the forground 
    element faster than the background one and we need to reboot 
    the position of the images at their first position to make them
    not visible after the menu. 
    */
    /*
    I don't know why it is not working well at the moment. 
    I put it here for you if you want to see my ideas.
    */ 