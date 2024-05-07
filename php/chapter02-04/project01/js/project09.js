/*    JavaScript 7th Edition
      Chapter 3
      Project 03-02

      Application to generate a slide gallery
      Author: Chamille Relford
      Date:   4/25/2024

      Filename: project03-02.js
*/
let caps = new Array();
let imgs = new Array();

function insert_HTML(caps, imgs) {
    
let htmlCode = "";
for (let i = 0; i < caps.length; i++) {
    htmlCode += "<figure>";
    htmlCode += "<img alt='' " + "src='" + imgs[i] + "'" + "/>";
    htmlCode += "<figcaption>" + caps[i] + "</figcaption>";
    htmlCode += "</figure>";
}

document.getElementById("gallery").innerHTML = htmlCode;
}


