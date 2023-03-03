<!DOCTYPE html>
<html>
    <head>


        <title>Database Reflex</title>
    </head>
    <body>
        <form action="Testing.php" method="post">
            <fieldset>
                <legend>Insert Your information</legend><br>
                <label for="Email">Email</label><br>
                <input type="email" id="email" name="email"><br>
                <label for="Name">Enter name</label><br>
                <input type="text" id="name" name="name"><br>
                <label for="DOB">Enter your adte of birth</label><br>
                <input type="date" id="dob" name="dob"><br>
                <label for="country">Selet your country</label>
                <select id="country" name="country">
                    <optgroup label="East Africa">
                    <option value="Kenya">Kenya</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Tanzania">Tanzania</option>
                    </optgroup>
                    <optgroup label="Asia">
                    <option value="Kenya">Israel</option>
                    <option value="Uganda">Pakistan</option>
                    <option value="Tanzania">Qatar</option>
                    </optgroup>

                </select><br>
            </fieldset>
            <input type="submit" name="submit">
        </form>


    </body>
</html>
            

        