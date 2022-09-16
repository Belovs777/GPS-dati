function getLocation(object) {
	if (navigator.geolocation) {
		navigator.geolocation.watchPosition(position => {
			showPositon(position,object);
		});
	} else { 
		document.getElementById(object).innerHTML = "Geolocation is not supported by this browser.";
	}
}

function showPositon(position,object){
  x.innerHTML= position.coords.latitude + "   " 
   + position.coords.longitude;

}
<!DOCTYPE html>
<html>
    <head>
        <title>Add Edit Remove HTML Table Row</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        	<script src="../js/gps.js"></script>
        <style>
            
            .container{overflow: hidden}
            .tab{float: left;}
            .tab-2{margin-left: 50px}
            .tab-2 input{display: block;margin-bottom: 10px}
            tr{transition:all .25s ease-in-out}
            tr:hover{background-color:#EEE;cursor: pointer}
            
        </style>
        
    </head>
    <body>
        	<p>Click the button to get your coordinates.</p>
		<button onclick="getLocation('demo')">Try It</button>

        <div class="container">
            <div class="tab tab-1">
                <table id="table" border="1">
                    <tr>
                         <td>Datums</td>
<td>Kordinātes</td> 
<td>Adrese</td>
<td>Nobraukums pirms</td>
<td>Nobraukums pēc</td>
<td>Komentārs</td>
                    </tr>
                   
                </table>
            </div>
            <div class="tab tab-2">
                Datums :<input type="text" name="date" id="date">
                Kordinātes :<input type="text" name="cord" id="cord">
                <output type="text" id="demo"></output>
                Adrese :<input type="text" name="adres" id="adres">
                 Nobraukums pirms :<input type="number" name="nob" id="nob">
                  Nobraukums pēc :<input type="number" name="nobP" id="nobP">
                Komentārs :<input type="text" name="comment" id="comment">
                
                <button onclick="addHtmlTableRow();">Add</button>
                <button onclick="editHtmlTbleSelectedRow();">Edit</button>
                <button onclick="removeSelectedRow();">Remove</button>
            </div>
        </div>
        <script>var rIndex,
                table = document.getElementById("table");
            
           
            function addHtmlTableRow()
            {
                // get the table by id
                // create a new row and cells
                // get value from input text
                // set the values into row cell's
                //if(!checkEmptyInput()){
                var newRow = table.insertRow(table.length),
                    cell1 = newRow.insertCell(0),
                    cell2 = newRow.insertCell(1),
                    cell3 = newRow.insertCell(2),
                     cell4 = newRow.insertCell(3),
                    cell5 = newRow.insertCell(4),
                    cell6  = newRow.insertCell(5),
                    date = document.getElementById("date").value,
                    cord = document.getElementById("cord").value,
                    cord = document.getElementById("demo").value,
                    adres = document.getElementById("adres").value;
                      nob = document.getElementById("nob").value,
                    nobP = document.getElementById("nobP").value,
                    comment = document.getElementById("comment").value;
            
                cell1.innerHTML = date;
                cell2.innerHTML = cord;
                cell3.innerHTML = adres;
                cell4.innerHTML = nob;
                cell5.innerHTML = nobP;
                cell6.innerHTML = comment;
                // call the function to set the event to the new row
                selectedRowToInput();
            }
            
            
            // display selected row data into input text
            function selectedRowToInput()
            {
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                      // get the seected row index
                      rIndex = this.rowIndex;
                      document.getElementById("date").value = this.cells[0].innerHTML;
                      document.getElementById("cord").value = this.cells[1].innerHTML;
                      document.getElementById("adres").value = this.cells[2].innerHTML;
                      document.getElementById("nob").value = this.cells[3].innerHTML;
                      document.getElementById("nobP").value = this.cells[4].innerHTML;
                      document.getElementById("comment").value = this.cells[5].innerHTML;
                    };
                }
            }
            selectedRowToInput();
            
            function editHtmlTbleSelectedRow()
            {
                 document.getElementById("date").value,
                      document.getElementById("cord").value,
                      document.getElementById("adres").value,
                      document.getElementById("nob").value,
                      document.getElementById("nobP").value,
                      document.getElementById("comment").value;
               //if(!checkEmptyInput()){
                table.rows[rIndex].cells[0].innerHTML = date;
                table.rows[rIndex].cells[1].innerHTML = cord;
                table.rows[rIndex].cells[2].innerHTML = adres;
                  table.rows[rIndex].cells[3].innerHTML = nob;
                table.rows[rIndex].cells[4].innerHTML = nobP;
                table.rows[rIndex].cells[5].innerHTML = comment;
              }
            
            
            function removeSelectedRow()
            {
                table.deleteRow(rIndex);
                // clear input text
                document.getElementById("date").value = "";
                document.getElementById("cord").value = "";
                document.getElementById("adres").value = "";
                 document.getElementById("nob").value = "";
                document.getElementById("nobP").value = "";
                document.getElementById("comment").value = "";
            }</script>
    
        
    </body>
</html>
