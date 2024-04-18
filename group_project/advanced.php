<?php 

$path = "./";
$curPage = "Advanced Commands";

include($path . "assets/inc/header.php");
?>

<div class="letter">
<h2>Advanced Commands List:</h2>
	<p>Click the drop downs for more information!</p>
	<p class="command" id="com1"><b><u>grep</u></b>&nbsp;&nbsp;
    <button onclick="commandDropDown('com1drop','comTab1')" class="drop" id="com1drop">&nbsp;V&nbsp;</button></p>
	<table class="commandTable" id="comTab1">
		<tr>
			<th class="tableHead">Command</th>
			<th class="tableHead">Flags</th>
			<th class="tableHead">Syntax</th>
			<th class="tableHead">Example</th>
		</tr>
		<tr>
			<td class="tableBody">grep: filters data based off pattern</td>
			<td class="tableBody">-c, -h, -i, -l, n, etc.</td>
			<td class="tableBody">grep [options] pattern [files]</td>
			<td class="tableBody">grep -c "test" test.txt</td>
		</tr>
	</table>
	<p class="command" id="com2"><b><u>ssh</u></b>&nbsp;&nbsp;
    <button onclick="commandDropDown('com2drop','comTab2')" class="drop" id="com2drop">&nbsp;V&nbsp;</button></p>
	<table class="commandTable" id="comTab2">
		<tr>
			<th class="tableHead">Command</th>
			<th class="tableHead">Flags</th>
			<th class="tableHead">Syntax</th>
			<th class="tableHead">Example</th>
		</tr>
		<tr>
			<td class="tableBody">ssh: remotely connects to a host</td>
			<td class="tableBody">No Flags</td>
			<td class="tableBody">ssh [username]@ [hostname/IP]</td>
			<td class="tableBody">ssh LinSer01 @lja5415 .com</td>
		</tr>
	</table>
	<p class="command" id="com3"><b><u>awk</u></b>&nbsp;&nbsp;
    <button onclick="commandDropDown('com3drop','comTab3')" class="drop" id="com3drop">&nbsp;V&nbsp;</button></p>
	<table class="commandTable" id="comTab3">
		<tr>
			<th class="tableHead">Command</th>
			<th class="tableHead">Flags</th>
			<th class="tableHead">Syntax</th>
			<th class="tableHead">Example</th>
		</tr>
		<tr>
			<td class="tableBody">awk: Tons of function, primarily file search</td>
			<td class="tableBody">-f, -F</td>
			<td class="tableBody">awk [options] 'selection criteria' input_file > output_file</td>
			<td class="tableBody">awk '{print $1,$4}' test.txt > test_output.txt</td>
		</tr>
	</table>
	<p class="command" id="com4"><b><u>sed</u></b>&nbsp;&nbsp;
    <button onclick="commandDropDown('com4drop','comTab4')" class="drop" id="com4drop">&nbsp;V&nbsp;</button></p>
	<table class="commandTable" id="comTab4">
		<tr>
			<th class="tableHead">Command</th>
			<th class="tableHead">Flags</th>
			<th class="tableHead">Syntax</th>
			<th class="tableHead">Example</th>
		</tr>
		<tr>
			<td class="tableBody">sed: stream editor for a file</td>
			<td class="tableBody">-i, -n, -e, etc.</td>
			<td class="tableBody">sed [options] [script] [inputfile]</td>
			<td class="tableBody">sed '3 s/test/ test_swap/' test.txt</td>
		</tr>
	</table>
	<p class="command" id="com5"><b><u>tcpdump</u></b>&nbsp;&nbsp;
    <button onclick="commandDropDown('com5drop','comTab5')" class="drop" id="com5drop">&nbsp;V&nbsp;</button></p>
	<table class="commandTable" id="comTab5">
		<tr>
			<th class="tableHead">Command</th>
			<th class="tableHead">Flags</th>
			<th class="tableHead">Syntax</th>
			<th class="tableHead">Example</th>
		</tr>
		<tr>
			<td class="tableBody">tcpdump: Packet analyzer in terminal</td>
			<td class="tableBody">-i, -c, -A, -D, etc.</td>
			<td class="tableBody">tcpdump [options]</td>
			<td class="tableBody">tcpdump -w packets.pcap ens192</td>
		</tr>
	</table>
	<p class="command" id="com6"><b><u>netstat</u></b>&nbsp;&nbsp;
    <button onclick="commandDropDown('com6drop','comTab6')" class="drop" id="com6drop">&nbsp;V&nbsp;</button></p>
	<table class="commandTable" id="comTab6">
		<tr>
			<th class="tableHead">Command</th>
			<th class="tableHead">Flags</th>
			<th class="tableHead">Syntax</th>
			<th class="tableHead">Example</th>
		</tr>
		<tr>
			<td class="tableBody">netstat: Troubleshooting and configuring network connections</td>
			<td class="tableBody">-a, -at, -au, -l, etc.</td>
			<td class="tableBody">netstat [options]</td>
			<td class="tableBody">netstat -a</td>
		</tr>
	</table>
	<p class="command" id="com7"><b><u>nslookup</u></b>&nbsp;&nbsp;
    <button onclick="commandDropDown('com7drop','comTab7')" class="drop" id="com7drop">&nbsp;V&nbsp;</button></p>
	<table class="commandTable" id="comTab7">
		<tr>
			<th class="tableHead">Command</th>
			<th class="tableHead">Flags</th>
			<th class="tableHead">Syntax</th>
			<th class="tableHead">Example</th>
		</tr>
		<tr>
			<td class="tableBody">nslookup: Lookup for dns server information</td>
			<td class="tableBody">-domain, -debug, -type, -port, etc.</td>
			<td class="tableBody">nslookup [options] [hosts]</td>
			<td class="tableBody">nslookup google.com</td>
		</tr>
	</table>
	<p class="command" id="com8"><b><u>traceroute</u></b>&nbsp;&nbsp;
    <button onclick="commandDropDown('com8drop','comTab8')" class="drop" id="com8drop">&nbsp;V&nbsp;</button></p>
	<table class="commandTable" id="comTab8">
		<tr>
			<th class="tableHead">Command</th>
			<th class="tableHead">Flags</th>
			<th class="tableHead">Syntax</th>
			<th class="tableHead">Example</th>
		</tr>
		<tr>
			<td class="tableBody">traceroute: Traces route which a packet takes to a destination</td>
			<td class="tableBody">-4, -6, -F, -g, -m, etc.</td>
			<td class="tableBody">traceroute [options] host_address [pathlength]</td>
			<td class="tableBody">traceroute -4 google.com</td>
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