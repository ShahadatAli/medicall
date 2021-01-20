<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8">
        <title>Add Product</title>
    </head>
    
    <body>
       <h1>Add product</h1>
        <form action="addcode.php" method="get">
            id: <input type="text" name="uid" id="uid" >
            <br/>
            <br/>
            name: <input type="text" name="uname" id="uname" >
            <br/>
            <br/>
            image: <input type="file" name="ufile" id="ufile" >
            <br/>
            <br/>
            price: <input type="number" name="uprice" id="uprice">
            <br/>
            <br/>
            <label>Hospital:</label>
            <input type="radio" name="hospital" id="hospital" value="United Hospital"> United Hospital
            <input type="radio" name="hospital" id="hospital" value="Popular Diagnostics"> Popular Diagnostics 
             <input type="radio" name="hospital" id="hospital" value="IBN SINA"> IBN SINA
             <input type="radio" name="hospital" id="hospital" value="Labaid"> Labaid
            
            <br>
            <br>
            <br>
            <input type="submit" value="add">
        </form>
    </body>
</html>