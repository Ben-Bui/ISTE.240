<?php 

$path = "./";
$curPage = "Basic Commands";

include($path . "assets/inc/header.php");
?>

<div class="letter">
	<h2>Basic Commands List:</h2>
	<p>Click the drop downs for more information!</p>
	<p class="command" id="com1"><b><u>ls</u></b>&nbsp;&nbsp;
    <button onclick="commandDropDown('com1drop','comTab1')" class="drop" id="com1drop">&nbsp;V&nbsp;</button></p>
	<table class="commandTable" id="comTab1">
		<tr>
			<th class="tableHead">Command</th>
			<th class="tableHead">Flags</th>
			<th class="tableHead">Syntax</th>
			<th class="tableHead">Example</th>
		</tr>
		<tr>
			<td class="tableBody">ls: lists directory contents</td>
			<td class="tableBody">-a, -d, -l, -R, -X, etc.</td>
			<td class="tableBody">ls [flags] [directory]</td>
			<td class="tableBody">ls -la /testDirectory/ test </td>
		</tr>
	</table>
	<p class="command" id="com2"><b><u>cd</u></b>&nbsp;&nbsp;
    <button onclick="commandDropDown('com2drop','comTab2')" class="drop" id="com2drop">&nbsp;V&nbsp;</button></p>
	<table class="commandTable" id="comTab2">
		<tr>
			<th class="tableHead">Command</th>
			<th class="tableHead">Flags</th>
			<th class="tableHead">Syntax</th>
			<th class="tableHead">Example</th>
		</tr>
		<tr>
			<td class="tableBody">cd: changes current directory</td>
			<td class="tableBody">No Flags</td>
			<td class="tableBody">cd [directory]</td>
			<td class="tableBody">cd /home/student /Downloads</td>
		</tr>
	</table>
	<p class="command" id="com3"><b><u>cat</u></b>&nbsp;&nbsp;
    <button onclick="commandDropDown('com3drop','comTab3')" class="drop" id="com3drop">&nbsp;V&nbsp;</button></p>
	<table class="commandTable" id="comTab3">
		<tr>
			<th class="tableHead">Command</th>
			<th class="tableHead">Flags</th>
			<th class="tableHead">Syntax</th>
			<th class="tableHead">Example</th>
		</tr>
		<tr>
			<td class="tableBody">cat: shows contents of file</td>
			<td class="tableBody">-A, -n, etc.</td>
			<td class="tableBody">cat [flags] [file_path]</td>
			<td class="tableBody">cat test.txt</td>
		</tr>
	</table>
	<p class="command" id="com4"><b><u>mv</u></b>&nbsp;&nbsp;
    <button onclick="commandDropDown('com4drop','comTab4')" class="drop" id="com4drop">&nbsp;V&nbsp;</button></p>
	<table class="commandTable" id="comTab4">
		<tr>
			<th class="tableHead">Command</th>
			<th class="tableHead">Flags</th>
			<th class="tableHead">Syntax</th>
			<th class="tableHead">Example</th>
		</tr>
		<tr>
			<td class="tableBody">mv: moves a file</td>
			<td class="tableBody">-f, -u, -v, etc.</td>
			<td class="tableBody">mv [flags] [start_file_path] [end_file_path]</td>
			<td class="tableBody">mv test.txt /home/ student /Documents /Test/</td>
		</tr>
	</table>
	<p class="command" id="com5"><b><u>cp</u></b>&nbsp;&nbsp;
    <button onclick="commandDropDown('com5drop','comTab5')" class="drop" id="com5drop">&nbsp;V&nbsp;</button></p>
	<table class="commandTable" id="comTab5">
		<tr>
			<th class="tableHead">Command</th>
			<th class="tableHead">Flags</th>
			<th class="tableHead">Syntax</th>
			<th class="tableHead">Example</th>
		</tr>
		<tr>
			<td class="tableBody">cp: copies file</td>
			<td class="tableBody">-r, -p, -i, -b, etc.</td>
			<td class="tableBody">cp [start_file_path] [new_file_path]</td>
			<td class="tableBody">cp test.txt student/ Documents /test/ copy_of_test.txt</td>
		</tr>
	</table>
	<p class="command" id="com6"><b><u>touch</u></b>&nbsp;&nbsp;
    <button onclick="commandDropDown('com6drop','comTab6')" class="drop" id="com6drop">&nbsp;V&nbsp;</button></p>
	<table class="commandTable" id="comTab6">
		<tr>
			<th class="tableHead">Command</th>
			<th class="tableHead">Flags</th>
			<th class="tableHead">Syntax</th>
			<th class="tableHead">Example</th>
		</tr>
		<tr>
			<td class="tableBody">touch: creates or edits a file</td>
			<td class="tableBody">-r, -m, -d, -c, etc.</td>
			<td class="tableBody">touch [flags] [file_path]</td>
			<td class="tableBody">touch new_test.txt</td>
		</tr>
	</table>
	<p class="command" id="com7"><b><u>sudo</u></b>&nbsp;&nbsp;
    <button onclick="commandDropDown('com7drop','comTab7')" class="drop" id="com7drop">&nbsp;V&nbsp;</button></p>
	<table class="commandTable" id="comTab7">
		<tr>
			<th class="tableHead">Command</th>
			<th class="tableHead">Flags</th>
			<th class="tableHead">Syntax</th>
			<th class="tableHead">Example</th>
		</tr>
		<tr>
			<td class="tableBody">sudo: runs a command in superuser</td>
			<td class="tableBody">-V, -h, -l, -k, -s, etc.</td>
			<td class="tableBody">sudo [flags] [command]</td>
			<td class="tableBody">sudo rm test.txt</td>
		</tr>
	</table>
	<p class="command" id="com8"><b><u>rm</u></b>&nbsp;&nbsp;
    <button onclick="commandDropDown('com8drop','comTab8')" class="drop" id="com8drop">&nbsp;V&nbsp;</button></p>
	<table class="commandTable" id="comTab8">
		<tr>
			<th class="tableHead">Command</th>
			<th class="tableHead">Flags</th>
			<th class="tableHead">Syntax</th>
			<th class="tableHead">Example</th>
		</tr>
		<tr>
			<td class="tableBody">rm: removes file</td>
			<td class="tableBody">-i, -f, -r, etc.</td>
			<td class="tableBody">rm [flags] [file]</td>
			<td class="tableBody">rm test.txt</td>
		</tr>
	</table>
	<p class="command" id="com9"><b><u>clear</u></b>&nbsp;&nbsp;
    <button onclick="commandDropDown('com9drop','comTab9')" class="drop" id="com9drop">&nbsp;V&nbsp;</button></p>
	<table class="commandTable" id="comTab9">
		<tr>
			<th class="tableHead">Command</th>
			<th class="tableHead">Flags</th>
			<th class="tableHead">Syntax</th>
			<th class="tableHead">Example</th>
		</tr>
		<tr>
			<td class="tableBody">clear: clears the terminal window</td>
			<td class="tableBody">-x</td>
			<td class="tableBody">clear [options]</td>
			<td class="tableBody">clear</td>
		</tr>
	</table>
	<p class="command" id="com10"><b><u>man</u></b>&nbsp;&nbsp;
    <button onclick="commandDropDown('com10drop','comTab10')" class="drop" id="com10drop">&nbsp;V&nbsp;</button></p>
	<table class="commandTable" id="comTab10">
		<tr>
			<th class="tableHead">Command</th>
			<th class="tableHead">Flags</th>
			<th class="tableHead">Syntax</th>
			<th class="tableHead">Example</th>
		</tr>
		<tr>
			<td class="tableBody">man: opens up the manual page for a command</td>
			<td class="tableBody">-k, -f, -S, etc.</td>
			<td class="tableBody">man [options] [command]</td>
			<td class="tableBody">man cat</td>
		</tr>
	</table>
</div>
<br/>

<script>
	function commandDropDown(ele1, ele2){
		if(document.getElementById(ele1).innerHTML == "&nbsp;V&nbsp;"){
			document.getElementById(ele1).innerHTML = "&nbsp;^&nbsp;";
			document.getElementById(ele2).style.display = "block";
		} else {
			document.getElementById(ele1).innerHTML = "&nbsp;V&nbsp;";
			document.getElementById(ele2).style.display = "none";
		}
	}
</script>
<?php
    include($path . "assets/inc/footer.php");
?>