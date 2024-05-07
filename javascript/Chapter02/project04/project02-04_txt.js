/*    JavaScript 7th Edition
      Chapter 2
      Project 02-04

      Application to calculate the cost of a restaurant order plus tax
      Author: 
      Date:   

      Filename: project02-04.js
 */
 




// Function to display a numeric value as a text string in the format $##.## 
 function formatCurrency(value) {
    return "$" + value.toFixed(2);
 }
 function calcTotal() {
   var itemTotal = 0;
   var item1 = document.getElementById("item1");
   var item2 = document.getElementById("item2");
   var item3 = document.getElementById("item3");
   var item4 = document.getElementById("item4");
   var item5 = document.getElementById("item5");

   (item1.checked) ? (itemTotal += 10.95) : (itemTotal += 0);
   (item2.checked) ? (itemTotal += $13.95) : (itemTotal += 0);
   (item3.checked) ? (itemTotal += $9.95)  : (itemTotal += 0);
   (item4.checked) ? (itemTotal += $18.95) : (itemTotal += 0);
   (item5.checked) ? (itemTotal += $7.95)  :  (itemTotal += 0);

   var salesTaxRate = 0.07;
   var orderTotal = itemTotal + (itemTotal * salesTaxRate);

   alert("Your order total is $" + orderTotal);
   }
   document.getElementById("submit").addEventListener("click", calcTotal, false);