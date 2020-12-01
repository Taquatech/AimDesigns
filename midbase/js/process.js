var Process = (page)=>{
  //console.log("Processing =>"+page.id);
    var x, i, j, selElmnt, a, b, c;
    /* Look for any elements with the class "custom-select": */
    x = page.getElementsByClassName("custom-select");
    
    for (i = 0; i < x.length; i++) {
      //remove all formed element if exist
      sel = x[i].getElementsByClassName("select-selected");
      
      if(sel != null && typeof sel[0] != "undefined"){
         sela = sel[0].getElementsByClassName("select-items");
      if(sela != null && typeof sela[0] != "undefined"){
        sel[0].removeChild(sela[0]);
      }
        x[i].removeChild(sel[0]);
      }
      //get the user defined style
      /* var ustyle = x[i].Data("style");
      if(ustyle == null)ustyle="";
      //alert(ustyle);
       x[i].style.cssText += ustyle; */

      /*  var dstyle = x[i].Data("dropdown-style");
      if(dstyle == null)dstyle=""; */

      selElmnt = x[i].getElementsByTagName("select")[0];
      /* For each element, create a new DIV that will act as the selected item: */
      a = document.createElement("DIV");
      a.setAttribute("class", "select-selected");
      var selectop = selElmnt.options[selElmnt.selectedIndex];
      a.innerHTML = typeof selectop != "undefined"?selectop.innerHTML:"";
      x[i].appendChild(a);
      //x[i].insertAdjacentElement('afterbegin',a);
      /* For each element, create a new DIV that will contain the option list: */
      b = document.createElement("DIV");
      b.setAttribute("class", "select-items select-hide");
      //b.style.cssText = dstyle;
      for (j = 1; j < selElmnt.length; j++) {
        /* For each option in the original select element,
        create a new DIV that will act as an option item: */
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            /* When an item is clicked, update the original select box,
            and the selected item: */
            var y, i, k, s, h;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            
            h = this.parentNode.previousSibling;
            for (i = 0; i < s.length; i++) {
              if (s.options[i].innerHTML == this.innerHTML) {
                s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                y = this.parentNode.getElementsByClassName("same-as-selected");
                for (k = 0; k < y.length; k++) {
                  y[k].removeAttribute("class");
                }
                this.setAttribute("class", "same-as-selected");
                break;
              }
            }
            h.click();
            if( typeof s.getAttribute("onchange") != "undefined" && s.getAttribute("onchange")  != ""){
              eval(s.getAttribute("onchange"));
            }
        });
        b.appendChild(c);
      }
      x[i].appendChild(b);
      a.addEventListener("click", function(e) {
        /* When the select box is clicked, close any other select boxes,
        and open/close the current select box: */
        if(!this.parentElement.classList.contains('focused'))this.parentElement.className += ' focused';
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
      });

      
    }
}
var closeAllSelect = (elmnt)=> {
    /* A function that will close all select boxes in the document,
    except the current select box: */
    var x, y, i, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    for (i = 0; i < y.length; i++) {
      if (elmnt == y[i]) {
        arrNo.push(i)
      } else {
        y[i].classList.remove("select-arrow-active");
      }
    }
    for (i = 0; i < x.length; i++) {
        
      if (arrNo.indexOf(i)) {
          //alert(x[i].className);
        x[i].parentElement.className = x[i].parentElement.className.replace(' focused','');
        x[i].classList.add("select-hide");
      }
    }
  }

document.addEventListener('DOMContentLoaded', function() {
    Process(document);
    document.addEventListener("click", closeAllSelect);
    });