function myFunction(){
    const filter = document.querySelector('#myInput').value.toUpperCase();
    const trs = document.querySelectorAll('#myTable tr:not(.header)');
    trs.forEach(tr => tr.style.display = [...tr.children].find(td => td.innerHTML.toUpperCase().includes(filter)) ? '' : 'none');

  }