@extends('layouts.home')

@section('pagetitle')
    Login
@stop

@section('css')

{{ HTML::script('ajax/bootstrap-ajax.js') }}

<script language="Javascript">
    var Numero = new Array();
    Numero[0] = '1';
    Numero[1] = '2';
    Numero[2] = '3';
</script>  

<script src="js/storage.js"></script>

@stop

@section('contents')

<div class="imageHolder">
    <center><h1><p id="image">Image Here</p></h1><center>
    <p id="myQuery">query string here</p>

</div>

<section class="container" style="width:100%;">
    <div class="advanceSearch" style="width:80%">
      <h1><!-- iQuery Advance Search --></h1>
      <form method="post" action="" id="myForm">
        <table class="tbl_search table" id="myTable">
            <tr>
                <th>Table Name</th> 
                <th>Field Name</th> 
                <th>Sort</th> 
                <th>Show</th> 
                <th>Unique</th> 
                <th>Criteria Operator</th> 
                <th>Criteria Literal</th> 
                <th>Condition</th>
            </tr>
        
            <script language="Javascript">
              for (counter in Numero) {

                document.write("<tr>");
                document.write("<td style=\"width:100px;\"><p><input class=\"form-control\" list=\"tableName\" onchange=\"changeTable(this.value)\"><datalist id=\"tableName\"><option value=\"Award\"><option value=\"Bid\"></datalist></p></td>");
                document.write("<td style=\"width:100px;\"><p><input class=\"form-control\" list=\"fieldName\"><datalist id=\"fieldName\"><option value=\"AwardNo\"><option value=\"Ko\"></datalist></p></td>");
                document.write("<td style=\"width:100px;\"><p><input type=\"radio\" name=\"sort\" value=\"ascending\" checked> Ascending &nbsp;<br> <input type=\"radio\" name=\"sort\" value=\"descending\" > Descending");
                document.write("<td style=\"width:100px;\"><p><input type=\"checkbox\" name=\"show\">");
                document.write("<td style=\"width:100px;\"><p><input type=\"checkbox\" name=\"unique\">");          
                document.write("<td style=\"width:100px;\"><p><input class=\"form-control\" list=\"operator\"><datalist id=\"operator\"><option value=\">\"><option value=\"<\"></datalist></p></td>");
                document.write("<td style=\"width:100px;\"><p><input class=\"form-control\" type=\"text\" name=\"literal\">");
                document.write("<td style=\"width:100px;\"><p><input type=\"radio\" name=\"sort\" value=\"not\" checked>NOT &nbsp;<br> <input type=\"radio\" name=\"sort\" value=\"and\">AND &nbsp;<br> <input type=\"radio\" name=\"sort\" value=\"or\">OR");
                document.write("</tr>");
              }
            </script>    

   
        </table>

        <p class="submit">
          <input type="button"  name="btnSave" id="btnSave" value="Save" onclick="SaveLocalStorage">&nbsp;
          <input type="submit"  name="btnSearch" id="btnSearch" value="Search">&nbsp;
          <input type="reset"   name="btnClear" value="Clear">
          <input type="reset"   name="btnClear" value="Add Row" style="float:right;" onclick="addRow()">
        </p>

      </form>
    </div>

  </section>
  
  <section id="displayArea">
    Data goes here!
  </section>
    
    <!-- Scripts Here -->

    <script>
        function addRow() 
        {
            var table = document.getElementById("myTable");
            var rows = document.getElementById("myTable").getElementsByTagName("tr").length;

            var row = table.insertRow(rows);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6= row.insertCell(5);
            var cell7 = row.insertCell(6);
            var cell8 = row.insertCell(7);

            cell1.innerHTML = "<td style=\"width:100px;\"><p><input class=\"form-control\" list=\"tableName\"><datalist><option value=\"Award\"><option value=\"Bid\"></datalist></p></td>";
            cell2.innerHTML = "<td style=\"width:100px;\"><p><input class=\"form-control\" list=\"fieldName\"><datalist><option value=\"AwardNo\"><option value=\"Ko\"></datalist></p></td>";
            cell3.innerHTML = "<td style=\"width:100px;\"><p><input type=\"radio\" name=\"sort\" value=\"ascending\" checked> Ascending &nbsp;<br> <input type=\"radio\" name=\"sort\" value=\"descending\" > Descending";
            cell4.innerHTML = "<td style=\"width:100px;\"><p><input type=\"checkbox\" name=\"show\">";
            cell5.innerHTML = "<td style=\"width:100px;\"><p><input type=\"checkbox\" name=\"unique\">";
            cell6.innerHTML = "<td style=\"width:100px;\"><p><input class=\"form-control\" list=\"operator\"><datalist><option value=\">\"><option value=\"<\"></datalist></p></td>";
            cell7.innerHTML = "<td style=\"width:100px;\"><p><input class=\"form-control\" type=\"text\" name=\"literal\">";
            cell8.innerHTML = "<td style=\"width:100px;\"><p><input type=\"radio\" name=\"sort\" value=\"not\" checked>NOT &nbsp;<br> <input type=\"radio\" name=\"sort\" value=\"and\">AND &nbsp;<br> <input type=\"radio\" name=\"sort\" value=\"or\">OR";
        }

        function reset()
        {
            document.getElementById("myForm").reset();
        }

        function changeTable(value)
        {
            window.base = 'SELECT * FROM';
            window.tableName = value;
            document.getElementById('myQuery').innerHTML = window.tableName;
            changeString();
        }

        function changeString()
        { 
            document.getElementById('myQuery').innerHTML = window.tableName;
        }
    </script>
@stop
