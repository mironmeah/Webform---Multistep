<?php
// tutoroial reference : https://www.youtube.com/watch?v=6Xj9afJUNFE
if(isset($_POST["Step1"]))
{
    displayStep1();
}
else if(isset($_POST["Step2"]))
{
    displayStep2();
}
else if(isset($_POST["Step3"]))
{
    displayStep3();
}
else if(isset($_POST["Thanks"]))
{
    displayThanks();
}
else
{
    displayStep1();
}
function setValue($fieldName)
{
    if(isset($_POST[$fieldName]))
    {
        echo $_POST[$fieldName];
    }
}
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
        function displayStep1()
        { ?>
        <form method="post">
            <h1>This is Step1</h1>
            <input type="hidden" name="txtm" value="<?php setValue("txtm"); ?>" >
            <input type="hidden" name="txt1" value="<?php setValue("txt1"); ?>" >
            Enter First Name <br>
            <input type="text" name="txtf" value="<?php setValue("txtf");?>" /><br>
            <input type="submit" name="Step2" value="Step2" />
        </form>       
       
        
        <?php }
        function displayStep2()
        { ?>
        <form method="post">
            <h1>This is Step2</h1>
            <input type="hidden" name="txtf" value="<?php setValue("txtf")?>" >
            <input type="hidden" name="txt1" value="<?php setValue("txt1")?>" >
            Enter Middle Name <br>
            <input type="text" name="txtm" value="<?php setValue("txtm")?>" /><br>
            <input type="submit" name="Step1" value="Step1" />
            <input type="submit" name="Step3" value="Step3" />
        </form>
        <?php }
        function displayStep3()
        { ?>
        <form method="post">
            <h1>This is Step3</h1>
            <input type="hidden" name="txtf" value="<?php setValue("txtf")?>" >
            <input type="hidden" name="txtm" value="<?php setValue("txtm")?>" >
            Enter Last Name <br>
            <input type="text" name="txtl" value="<?php setValue("txtl")?>" /><br>
            <input type="submit" name="Step2" value="Step2" />
            <input type="submit" name="Thanks" value="Thanks" />
        </form>
        <?php }         
            function displayThanks()
            { ?>              
            <h1>Thanks for submitting information</h1>
            <?php } ?>            
    </body>
</html>