document.getElementById("export-data").addEventListener("click", function(){

    var table2excel = new Table2Excel();
    table2excel.export(document.querySelectorAll("#myTable"));
    

});
