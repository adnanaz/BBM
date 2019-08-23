function myFunction() {
  var input, filter, div, h2, tr, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  div = document.getElementById("myMenu");
  tr = div.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    h2 = tr[i].getElementsByTagName("h2")[0];
    if (h2.innerHTML.toUpperCase().indexOf(filter) > -1) {
      tr[i].style.display = "";
      
    }else{
        tr[i].style.display = "none";
    }
  }
}