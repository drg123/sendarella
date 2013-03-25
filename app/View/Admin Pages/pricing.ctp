<?

	try {
		$db = new PDO('mysql:host=localhost;dbname=drgranat_sendarella', 'drgranat_send', '5MGHcTr3BHc[');
	}
	catch(PDOException $e) {
    	echo('ERROR: ' . $e->getMessage());
    }
    
if (isset($_POST['submit'])) {
	$sql = $db->prepare("UPDATE pricing SET monthly = :monthly1, emailoverage = :email1, textoverage = :text1, keywordoverage = :keyword1, listsize = :list1, listoverage = :listover1, printcost = :print1 WHERE level = 1");
	$sql->execute(array('monthly1' => $_POST['monthly1'], 'email1' => $_POST['email1'], 'text1' => $_POST['text1'], 'keyword1' => $_POST['keyword1'], 'list1' => $_POST['list1'], 'listover1' => $_POST['listover1'], 'print1' => $_POST['print1']));

	$sql = $db->prepare("UPDATE pricing SET monthly = :monthly2, emailoverage = :email2, textoverage = :text2, keywordoverage = :keyword2, listsize = :list2, listoverage = :listover2, printcost = :print2 WHERE level = 2");
	$sql->execute(array('monthly2' => $_POST['monthly2'], 'email2' => $_POST['email2'], 'text2' => $_POST['text2'], 'keyword2' => $_POST['keyword2'], 'list2' => $_POST['list2'], 'listover2' => $_POST['listover2'], 'print2' => $_POST['print2']));

	$sql = $db->prepare("UPDATE pricing SET monthly = :monthly3, emailoverage = :email3, textoverage = :text3, keywordoverage = :keyword3, listsize = :list3, listoverage = :listover3, printcost = :print3 WHERE level = 3");
	$sql->execute(array('monthly3' => $_POST['monthly3'], 'email3' => $_POST['email3'], 'text3' => $_POST['text3'], 'keyword3' => $_POST['keyword3'], 'list3' => $_POST['list3'], 'listover3' => $_POST['listover3'], 'print3' => $_POST['print3']));

	$sql = $db->prepare("UPDATE pricing SET monthly = :monthly4, emailoverage = :email4, textoverage = :text4, keywordoverage = :keyword4, listsize = :list4, listoverage = :listover4, printcost = :print4 WHERE level = 4");
	$sql->execute(array('monthly4' => $_POST['monthly4'], 'email4' => $_POST['email4'], 'text4' => $_POST['text4'], 'keyword4' => $_POST['keyword4'], 'list4' => $_POST['list4'], 'listover4' => $_POST['listover4'], 'print4' => $_POST['print4']));

} 
    
    

		$sql = $db->prepare("SELECT * FROM pricing ORDER BY level");
		$sql->execute();
		$result = $sql->fetchAll();


?>
<center><h1>Pricing Controls</h1></center>

<form method="post" action="/admin/pricing">
<table>
<tr>
	<td>Level</td>
	<td>Monthly</td>	
	<td>Email Overage</td>
	<td>Text Overage</td>	
	<td>Keyword</td>
	<td>List Size</td>	
	<td>List Overage</td>
	<td>Print</td>	
</tr>
<tr>
	<td>1</td>
	<td><input style="width:150px;" type="text" value="<?=$result[0]['monthly'];?>" name="monthly1"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[0]['emailoverage'];?>" name="email1"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[0]['textoverage'];?>" name="text1"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[0]['keywordoverage'];?>" name="keyword1"></td>	
	<td><input style="width:150px;" type="text" value="<?=$result[0]['listsize'];?>" name="list1"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[0]['listoverage'];?>" name="listover1"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[0]['printcost'];?>" name="print1"></td>	
</tr>

<tr>
	<td>2</td>
	<td><input style="width:150px;" type="text" value="<?=$result[1]['monthly'];?>" name="monthly2"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[1]['emailoverage'];?>" name="email2"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[1]['textoverage'];?>" name="text2"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[1]['keywordoverage'];?>" name="keyword2"></td>	
	<td><input style="width:150px;" type="text" value="<?=$result[1]['listsize'];?>" name="list2"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[1]['listoverage'];?>" name="listover2"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[1]['printcost'];?>" name="print2"></td>	
</tr>

<tr>
	<td>3</td>
	<td><input style="width:150px;" type="text" value="<?=$result[2]['monthly'];?>" name="monthly3"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[2]['emailoverage'];?>" name="email3"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[2]['textoverage'];?>" name="text3"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[2]['keywordoverage'];?>" name="keyword3"></td>	
	<td><input style="width:150px;" type="text" value="<?=$result[2]['listsize'];?>" name="list3"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[2]['listoverage'];?>" name="listover3"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[2]['printcost'];?>" name="print3"></td>	
</tr>

<tr>
	<td>4</td>
	<td><input style="width:150px;" type="text" value="<?=$result[3]['monthly'];?>" name="monthly4"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[3]['emailoverage'];?>" name="email4"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[3]['textoverage'];?>" name="text4"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[3]['keywordoverage'];?>" name="keyword4"></td>	
	<td><input style="width:150px;" type="text" value="<?=$result[3]['listsize'];?>" name="list4"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[3]['listoverage'];?>" name="listover4"></td>	
	<td><input style="width:50px;" type="text" value="<?=$result[3]['printcost'];?>" name="print4"></td>	
</tr>
</table>

<input name="submit" type="submit" value="Update Pricing">


</form>