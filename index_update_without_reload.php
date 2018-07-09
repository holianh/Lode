<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale =1, maximum-scale=1, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<script src="js/jquery-1.12.0.min.js"></script>
<link rel="stylesheet" href="CSS/taCSS.css">
<script type="text/javascript">
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	   function FnUpdate(id) {
	   		var e = document.getElementById(id); //console.log(id);
	   		var txt="textarea"+id; //console.log(txt);	      	
	      	var txtArea = document.getElementById(txt).value;
 	        $.ajax({
	        type : 'POST', //kiểu post
	        url  : 'xuly.php', //gửi dữ liệu sang trang xuly.php
	        data :  {	loai:'UPDATE',
	        			stt:id,
	        			sms: txtArea	        			
	        		}, 
	        success :  function(data)
	               {                        
	                    if(data == 'false'){
	                        alert('sai sai cai gi do');
	                    }else{
	                       document.getElementById(id).innerHTML="";
	                       document.getElementById(id).innerHTML=data;
	                       //console.log(data);
	                    }
	               }
	        }); 
	   }
	   function toggle_visibility(id) {
	       var e = document.getElementById(id); //console.log(id);
	       if(e.style.display == 'none')
	          e.style.display = 'block';
	       else
	          e.style.display = 'none';

	        $.ajax({
	        type : 'POST', 		//kiểu post
	        url  : 'xuly.php', 	//gửi dữ liệu sang trang xuly.php
	        data :  {	loai:'visible',
	        			stt: id,
	        			sms: e.style.display
	        		}, 
	        success :  function(data)
	               {                        
	                    // if(data == 'false')
	                    // {
	                    //     alert('sai sai cai gi do');
	                    // }else{
	                    //    document.getElementById(id).innerHTML="";
	                    //    document.getElementById(id).innerHTML=data;
	                    // }
	               }
	        }); 	      	
	   }

//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

</script>
</head>	
<body>
Monday 9th of July 2018 01:07:43 PM<br/><br/><input type='button' class='btn' name='sms01' value='sms01' onclick=toggle_visibility('sms01');><div id='sms01' style={width:95%}>
			 	 			<form type='submit' style='width: 95%'> <textarea class='form-control' id='textareasms01' rows='4' style='min-width: 90%'>DE :17.11.15.18.19.37.35.31.38.39.77.71.75.78.79.27.21.25.28.29.97.95.91.98.99x500N.DE 97X8TR.DE 11.77.99.17.37X700n DE 31.15.18.25.75.87.202.070.36.00.72.92.X500N.</textarea><br/><input type='button' class='btn' name='Cap nhat sms01' value='Cap nhat sms01' onclick=FnUpdate('sms01');><br/><span class="xanh">de: 17. 11. 15. 18. 19. 37. 35. 31. 38. 39. 77. 71. 75. 78. 79. 27. 21. 25. 28. 29. 97. 95. 91. 98. 99x500n.</span> <span class="vang">de 97x8tr.</span> <span class="xanh">de 11. 77. 99. 17. 37x700n </span><span class="vang">de 31. 15. 18. 25. 75. 87. 202. 070. 36. 00. 72. 92. x500n.</span> <br/>(311:ký tự)<table style="width:95%"><tr class="rowEven"><td>1</td><td>de: 17. 11. 15. 18. 19. 37. 35. 31. 38. 39. 77. 71. 75. 78. 79. 27. 21. 25. 28. 29. 97. 95. 91. 98. 99x500n.<br/>(de.25so:17, 11, 15, 18, 19, 37, 35, 31, 38, 39, 77, 71, 75, 78, 79, 27, 21, 25, 28, 29, 97, 95, 91, 98, 99, *500n)</td></tr><tr class="rowOdd"><td>2</td><td>de 97x8tr.<br/>(de.1so:97, *8000n)</td></tr><tr class="rowEven"><td>3</td><td>de 11. 77. 99. 17. 37x700n <br/>(de.5so:11, 77, 99, 17, 37, *700n)</td></tr><tr class="rowOdd"><td>4</td><td>de 31. 15. 18. 25. 75. 87. 202. 070. 36. 00. 72. 92. x500n.<br/>(de.14so:31, 15, 18, 25, 75, 87, 20, 02,07, 70,36, 00, 72, 92, *500n)</td></tr></table>(204:ký tự, còn thừa:   )<br/><br/><center><input type='button' class='btn' name='btnsms01' value='Hide sms01' onclick=toggle_visibility('sms01');></center></form>							
						</div>
				
<input type='button' class='btn' name='sms02' value='sms02' onclick=toggle_visibility('sms02');><div id='sms02' style={width:95%}>
			 	 			<form type='submit' style='width: 95%'> <textarea class='form-control' id='textareasms02' rows='4' style='min-width: 90%'>DE 17.11.15.18.19.37.35.31.38.39.77.71.75.78.79.27.21.25.28.29.97.95.91.98.99.x300 đê00 36x500</textarea><br/><input type='button' class='btn' name='Cap nhat sms02' value='Cap nhat sms02' onclick=FnUpdate('sms02');><br/><span class="xanh">de 17. 11. 15. 18. 19. 37. 35. 31. 38. 39. 77. 71. 75. 78. 79. 27. 21. 25. 28. 29. 97. 95. 91. 98. 99. x300 </span><span class="vang">de00 36x500.</span> <br/>(173:ký tự)<table style="width:95%"><tr class="rowEven"><td>1</td><td>de 17. 11. 15. 18. 19. 37. 35. 31. 38. 39. 77. 71. 75. 78. 79. 27. 21. 25. 28. 29. 97. 95. 91. 98. 99. x300 <br/>(de.25so:17, 11, 15, 18, 19, 37, 35, 31, 38, 39, 77, 71, 75, 78, 79, 27, 21, 25, 28, 29, 97, 95, 91, 98, 99, *300n)</td></tr><tr class="rowOdd"><td>2</td><td>de00 36x500.<br/>(de.2so:00, 36, *500n)</td></tr></table>(120:ký tự, còn thừa: )<br/><br/><center><input type='button' class='btn' name='btnsms02' value='Hide sms02' onclick=toggle_visibility('sms02');></center></form>							
						</div>
</body>
</html>						
