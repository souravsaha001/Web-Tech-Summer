<!DOCTYPE html>
<html>
<head>
    <title> Customer Registration Form</title>
</head>
<style>
    body { background-color: tan;}
    h1{color:firebrick;}
    h2{color:royalblue;}
    h3{color:maroon;}

    table { background-color:green;
    border: 3px solid blue;
      margin:auto;
      padding:20px;}
      
input[type="submit"], input[type="register"]
{
    cursor: pointer;
    padding: 5px;
    background-color:honeydew;
    position: relative;
    left: 200px;
}
</style>
<body>
    <center>
        <img src="depositphotos_474002650-stock-illustration-bank-building-facade-with-columns.jpg" width="150" height="150">
        <h1> Bank Management System </h1>
        <h2> Your Trusted Financial Partner </h2>
        <h3> Customer Registration Form </h3>
</center>
<form>
    <table>
        <tr>
            <td> FULL NAME: </td>
            <td> <input type="text"> </td>
        </tr>
        <tr>
            <td> DATE OF BIRTH: </td>
            <td> <input type="date"> </td>
        </tr>
        <tr>
             <td> GENDER: </td>
             <td>
             <input type="radio" name="des"> MALE
              <input type="radio" name="des"> FEMALE
               <input type="radio" name="des"> OTHER
</td>
<tr>
    <td> MARITAL STATUS: </td>
    <td> <select name="MARITAL STATUS">
    <option value="">SELECT</option>
    <option value="single">SINGLE</option>
    <option value="married">MARRIED</option>
    <option value="divorsed">DIVORSED</option>
</select>
</tr>

<tr>
    <td> ACCOUNT TYPE: </td>
    <td> <select name="ACCOUNT TYPE">
    <option value="">SELECT</option>
    <option value="savings">SAVINGS</option>
    <option value="current">CURRENT</option>
    <option value="fixed deposits">FIXED DEPOSITS</option>
    <option value="joint account">JOINT ACCOUNT</option>
</select>
</tr>
<tr>
    <td> INITIAL DEPOSITE AMOUNT: </td>
    <td> <input type="number"> </td>
</tr>
<tr>
    <td> MOBILE NUMBER: </td>
    <td> <input type="number"> </td>
</tr>
<tr>
    <td> EMAIL ADDRESS: </td>
    <td> <input type="email"> </td>
</tr>
<tr> 
    <td> ADDRESS: </td>
<td> <textarea rows="3" cols="40" placeholder="ENTER YOUR ADDRESS"></textarea></td>
</tr> 
<tr>
    <td> OCCUPATION:</td>
    <td> <input type="text"></td>
</tr>
<tr>
    <td> NATIONAL ID: </td>
    <td> <input type="text"></td>
</tr>
<tr>
    <td>SET PASSWORD: </td>
    <td> <input type="password"></td>
</tr>
<tr>
    <td> UPLOAD PICTURE: </td>
    <td> <input type="file"> </td>

<tr>
    <td> <input type="checkbox"> I AGREE TERMS AND CONDITIONS </td>
</tr>
<tr>
    <td>
    <input type="submit" value="SUBMIT">
    <input type="reset" value="RESET">
   </td>
</tr>


     
</table>
</body>
</html>


        