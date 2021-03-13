<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="../../assets/js/script.js"></script>

    <script>
        $("#myBtn").click(function(){
            $("#myModal").addClass("is-active");
        });
        $(".delete").click(function(){
            $("#myModal").removeClass("is-active");
        });
    </script>
    <script>
        $("#launchModal-add").click(function(){
            $("#add-modal").addClass("is-active");
        });

        $(".delete").click(function(){
            $("#add-modal").removeClass("is-active");
        });
        $(".cancel-btn").click(function(){
            $("#add-modal").removeClass("is-active");
        });
    </script>
    <script>
        $("#launchModal-del").click(function(){
            $("#del-modal").addClass("is-active");
        });

        $(".delete").click(function(){
            $("#del-modal").removeClass("is-active");
        });
        $(".cancel-btn").click(function(){
            $("#del-modal").removeClass("is-active");
        });
    </script>

    <script>
      $("#launchModal-edit").click(function(){
          $("#edit-modal").addClass("is-active");

          


      });

      $(".delete").click(function(){
          $("#edit-modal").removeClass("is-active");
      });
      $(".cancel-btn").click(function(){
          $("#edit-modal").removeClass("is-active");
      });
    </script>

    <script>
      function myFunction(){
        const filter = document.querySelector('#myInput').value.toUpperCase();
        const trs = document.querySelectorAll('#myTable tr:not(.header)');
        trs.forEach(tr => tr.style.display = [...tr.children].find(td => td.innerHTML.toUpperCase().includes(filter)) ? '' : 'none');

      }
    </script>
    

    
</body>
</html>