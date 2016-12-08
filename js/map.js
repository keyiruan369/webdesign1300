/*
* INFO/CS 1300
* Fall 2016
Keyi Ruan
*
* A simple JavaScript file to go back and forth in an image gallery slide
*
*/

/* establish global variables */
/*global window, document*/

// functions
function image_slide(prev) {
    // pragma
    "use strict";
    
    //variables
    var pix = ['bus1.jpg','bus4.jpg', 'bus3.jpg', 'bus2.jpg',]; // array of image names
    var main_pic = document.getElementById('default_bus');
    var index = pix.indexOf(main_pic.src.split("/")[main_pic.src.split("/").length-1]); // get the index of the current image source

    //assign the image to be shown 
    if(prev == 1){                   // if press previous button
    	if(index == 0){              // if currently at the first element of image array
    		index = pix.length - 1;  // wrap around to the end 
    	} else {
    		index = index - 1;       // previous image
    	} 
    }else if (prev == 0) {           // if press next button
    	if(index == pix.length - 1){ // if currently at the last element of image array
    		index = 0;               // wrap around to the beginning
    	}else {
    		index = index + 1;       // next image
    	}
    }
    // select image source
    main_pic.src = 'images/' + pix[index];  
}

