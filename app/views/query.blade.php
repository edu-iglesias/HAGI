@extends('layouts.home')

@section('pagetitle')
    Login
@stop

@section('css')

<script language="Javascript">
    var Numero = new Array();
    Numero[0] = '1';
    Numero[1] = '2';
    Numero[2] = '3';
</script>  

<script src="js/storage.js"></script>


@stop

@section('contents')

@if(Session::get('sql'))
<input type="text" name="catch" value='{{Session::get("sql")}}' id="catch">
<input type="text" name="tcatch" value='{{Session::get("sqltitle")}}' id="tcatch">
<script>
var sql = document.getElementById('catch').value;
var title = document.getElementById('tcatch').value;
 localStorage.setItem(title, sql);

{{Session::forget('sql');}}
</script>
@endif

<?php $loop = 3 ?>

<div class="imageHolder">
    <center><h1><p id="image">Image Here</p></h1><center>
    <p id="myQuery">query string here</p>

</div>

<section class="container" style="width:100%;">
    <div class="advanceSearch" style="width:80%">
      <h1><!-- iQuery Advance Search --></h1>
      <form method="post" action="/query" id="myForm">
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
            
            @for ($i = 0; $i < 3; $i++)
            <tr>
               
                 
           
                <td style="width:100px;">
                    <p><input class="form-control" list="tableName"  name="tableName{{$i}}" onchange="changeTable(this.value)"  >
                        <datalist id="tableName">
                            <option value="Awarding">
                            <option value="Bidders">
                            <option value= "Bid Line Item">
                            <option value="Bid Information">
                            <option value="Award">
                            <option value="Project Location">
                            <option value="Organization Business Category">
                        </datalist>
                    </p>
                </td>

                <td id="tb0" style="width:100px;">
                    <p><input class="form-control" list="fieldName" name="fieldName{{$i}}" >
                        <datalist id="fieldName" >
                            <option value="AwardNo">
                            <option value="Ko">
                        </datalist></p>
                </td>

                <td id="tb1"  style="display:none;">
                    <p><input class="haha form-control" list="fieldName1" name="fieldName1{{$i}}" >
                        <datalist id="fieldName1">
                            @foreach($tb1 as $key)
                                <option value="{{ $key }}">
                            @endforeach
                        </datalist></p>
                </td>

                <td id="tb2" style="display:none;">
                    <p><input class="form-control" list="fieldName2" name="fieldName2{{$i}}">
                        <datalist id="fieldName2">
                            @foreach($tb2 as $key)
                                <option value="{{ $key }}">
                            @endforeach
                        </datalist></p>
                </td>

                <td id="tb3" style="display:none;">
                    <p><input class="form-control" list="fieldName3" name="fieldName3{{$i}}">
                        <datalist id="fieldName3">
                            @foreach($tb3 as $key)
                                <option value="{{ $key }}">
                            @endforeach
                        </datalist></p>
                </td>

                <td id="tb4" style="display:none;">
                    <p><input class="form-control" list="fieldName4" name="fieldName4{{$i}}">
                        <datalist id="fieldName4">
                            @foreach($tb4 as $key)
                                <option value="{{ $key }}">
                            @endforeach
                        </datalist></p>
                </td>

                <td id="tb5" style="display:none;">
                    <p><input class="form-control" list="fieldName5" name="fieldName5{{$i}}">
                        <datalist id="fieldName5">
                            @foreach($tb5 as $key)
                                <option value="{{ $key }}">
                            @endforeach
                        </datalist></p>
                </td>

                <td id="tb6" style="display:none;">
                    <p><input class="form-control" list="fieldName6" name="fieldName6{{$i}}">
                        <datalist id="fieldName6">
                            @foreach($tb6 as $key)
                                <option value="{{ $key }}">
                            @endforeach
                        </datalist></p>
                </td>
                <td id="tb7" style="display:none;">
                    <p><input class="form-control" list="fieldName7" name="fieldName7{{$i}}">
                        <datalist id="fieldName7">
                            @foreach($tb7 as $key)
                                <option value="{{ $key }}">
                            @endforeach
                        </datalist></p>
                </td>


                <td >
                    <p><input type="radio" name="sort{{$i}}" value="ASC" checked> Ascending &nbsp;<br> 
                        <input type="radio" name="sort{{$i}}" value="DESC" > Descending
                </td>

                <td >
                    <p><input type="checkbox" name="show{{$i}}">
                </td>

                <td >
                    <p><input type="checkbox" name="unique{{$i}}"> 
                </td>

                <td>
                    <p><input class="form-control" list="operator" name="operator{{$i}}">
                        <datalist id="operator">
                            <option value=">">
                            <option value="<">
                            <option value=">=">
                            <option value ="<=">
                            <option value = "=">
                            <option value = "!=">
                        </datalist></p>
                </td>

                <td style="width:100px;">
                    <p><input class="form-control" type="text" name="literal{{$i}}">
                </td>

                <td style="width:100px;">
                    <p><input type="radio" name="extender{{$i}}" value="not" checked>NOT &nbsp;<br> 
                        <input type="radio" name="extender{{$i}}" value="and">AND &nbsp;<br> 
                        <input type="radio" name="extender{{$i}}" value="or">OR
                </td>
            </tr>    
            @endfor
        </table>
        <p><input class="form-control" type="text" name="title" placeholder="Query Title"></p>
        <p class="submit">
          <input type="button"  name="btnSave" id="btnSave" value="Save" onclick="SaveLocalStorage()">&nbsp;
          <input type="submit"  name="btnSearch" id="btnSearch" value="Search">&nbsp;
          <input type="reset"   name="btnClear" value="Clear">
          <input type="reset"   name="btnClear" value="Add Row" style="float:right;" onclick="addRow()">
        </p>
        <input type="hidden" id='hiddenInput' value='0' name='hiddenInput'>
      </form>
    </div>

  </section>
  
  <section id="displayArea">
    Data goes here!
  </section>
    
    <!-- Scripts Here -->

    <script>
    function SaveLocalStorage()
    {
        //alert('haha');
        document.getElementById('hiddenInput').value = 1;
        document.getElementById('myForm').submit();

    }

        function addRow() 
        {
//            var note = localStorage.getItem('sql'); 
  //              alert(localStorage.getItem('sql'));

            var table = document.getElementById("myTable");
            var rows = document.getElementById("myTable").getElementsByTagName("tr").length;

            var row = table.insertRow(rows);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            var cell7 = row.insertCell(6);
            var cell8 = row.insertCell(7);
           

            cell1.innerHTML = "<td style=\"width:100px;\"><p><input disabled class=\"form-control\" list=\"tableName\"><datalist><option value=\"Award\"><option value=\"Bid\"></datalist></p></td>";
            cell2.innerHTML = "<td id=\"fieldName\" style=\"width:100px;\"><p><input class=\"form-control\" list=\"fieldName\"><datalist><option value=\"AwardNo\"><option value=\"Ko\"></datalist></p></td>";
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

            switch(value) 
            {
                case "Awarding":
                    var instance = document.getElementsByClassName('haha form-control');
                    instance[1].style.display = "table-cell";

                    document.getElementById('tb0').style.display = "none";
                    document.getElementById('tb1').style.display = "table-cell";
                    document.getElementById('tb2').style.display = "none";
                    document.getElementById('tb3').style.display = "none";
                    document.getElementById('tb4').style.display = "none";
                    document.getElementById('tb5').style.display = "none";
                    document.getElementById('tb6').style.display = "none";
                    document.getElementById('tb7').style.display = "none";
                    break;
                case "Bidders":
                    document.getElementById('tb0').style.display = "none";
                    document.getElementById('tb1').style.display = "none";
                    document.getElementById('tb2').style.display = "table-cell";
                    document.getElementById('tb3').style.display = "none";
                    document.getElementById('tb4').style.display = "none";
                    document.getElementById('tb5').style.display = "none";
                    document.getElementById('tb6').style.display = "none";
                    document.getElementById('tb7').style.display = "none";
                    break;
                case "Organization":
                    document.getElementById('tb0').style.display = "none";
                    document.getElementById('tb1').style.display = "none";
                    document.getElementById('tb2').style.display = "none";
                    document.getElementById('tb3').style.display = "table-cell";
                    document.getElementById('tb4').style.display = "none";
                    document.getElementById('tb5').style.display = "none";
                    document.getElementById('tb6').style.display = "none";
                    document.getElementById('tb7').style.display = "none";
                    break;
                case "Bid Line Item":
                    document.getElementById('tb0').style.display = "none";
                    document.getElementById('tb1').style.display = "none";
                    document.getElementById('tb2').style.display = "none";
                    document.getElementById('tb3').style.display = "none";
                    document.getElementById('tb4').style.display = "table-cell";
                    document.getElementById('tb5').style.display = "none";
                    document.getElementById('tb6').style.display = "none";
                    document.getElementById('tb7').style.display = "none";
                    break;
                case "Bid Information":
                    document.getElementById('tb0').style.display = "none";
                    document.getElementById('tb1').style.display = "none";
                    document.getElementById('tb2').style.display = "none";
                    document.getElementById('tb3').style.display = "none";
                    document.getElementById('tb4').style.display = "none";
                    document.getElementById('tb5').style.display = "table-cell";
                    document.getElementById('tb6').style.display = "none";
                    document.getElementById('tb7').style.display = "none";
                    break;
                case "Project Location":
                    document.getElementById('tb0').style.display = "none";
                    document.getElementById('tb1').style.display = "none";
                    document.getElementById('tb2').style.display = "none";
                    document.getElementById('tb3').style.display = "none";
                    document.getElementById('tb4').style.display = "none";
                    document.getElementById('tb5').style.display = "none";
                    document.getElementById('tb6').style.display = "table-cell";
                    document.getElementById('tb7').style.display = "none";
                    break;
                case "Organization Business Category":
                    document.getElementById('tb0').style.display = "none";
                    document.getElementById('tb1').style.display = "none";
                    document.getElementById('tb2').style.display = "none";
                    document.getElementById('tb3').style.display = "none";
                    document.getElementById('tb4').style.display = "none";
                    document.getElementById('tb5').style.display = "none";
                    document.getElementById('tb6').style.display = "none";
                    document.getElementById('tb7').style.display = "table-cell";
                    break;

                default:
                    document.getElementById('tb0').style.display = "table-cell";
                    document.getElementById('tb1').style.display = "none";
                    document.getElementById('tb2').style.display = "none";
                    document.getElementById('tb3').style.display = "none";
                    document.getElementById('tb4').style.display = "none";
                    document.getElementById('tb5').style.display = "none";
                    document.getElementById('tb6').style.display = "none";
                    document.getElementById('tb7').style.display = "none";
                    break;


            }


            document.getElementById('myQuery').innerHTML = window.tableName;
            changeString();
        }


        function changeString()
        { 
            document.getElementById('myQuery').innerHTML = window.tableName;
        }
    
    </script>
@stop