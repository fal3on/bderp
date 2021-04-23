// function myFunction(){
//     const filter = document.querySelector('#myInput').value.toUpperCase();
//     const trs = document.querySelectorAll('#myTable tr:not(.header)');
//     trs.forEach(tr => tr.style.display = [...tr.children].find(td => td.innerHTML.toUpperCase().includes(filter)) ? '' : 'none');

//   }

function myFunction() {
  var input, filter, table, tr, td, i, ii;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.querySelectorAll("tbody tr:not(.header)");
  for (i = 1; i < tr.length; i++) {
      var tds = tr[i].getElementsByTagName("td");
      var found = false;
      for (ii = 0; ii < tds.length && !found; ii++) {
          if (tds[ii].textContent.toUpperCase().indexOf(filter) > -1) {
              found = true;
              break;
          }
      }
      tr[i].style.display = found?"":"none";
  }
}