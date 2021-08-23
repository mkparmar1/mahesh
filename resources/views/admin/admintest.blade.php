<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>MkParmar</h1>
<center>
<table border="1">
<tr>
<td>Id</td>
<td>Fname</td>
<td>Lname</td>
<td>Email</td>
<td>Subject</td>
<td>Message</td>
</tr>
@foreach($data as $i)
<tr>
<td>{{$i->id}}</td>
<td>{{$i->firstname}}</td>
<td>{{$i->lastname}}</td>
<td>{{$i->email}}</td>
<td>{{$i->subject}}</td>
<td>{{$i->message}}</td>
</tr>
<br>
@endforeach
</table>
</body>
</html>