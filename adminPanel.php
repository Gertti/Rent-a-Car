<?php 
    include "inc/header.php";
    
?>







    <!-- <form action="upload.php" method="POST" enctype="multipart/form-data"class="my-5 w-25 d-flex flex-column"  >
        <input type="text" name="emri" placeholder="Emri" class="my-1 border-primary rounded">
       
        <label class="my-1 border border-primary rounded">Kategoria: </label>
        <label class="radio-inline"><input type="radio" name="kategoria" value="Sportive">Sportive</label>
        <label class="radio-inline"><input type="radio" name="kategoria" value="Familjare">Familjare</label>
        <label class="radio-inline"><input type="radio" name="kategoria" value="Coupe">Coupe</label>
        <label class="radio-inline"><input type="radio" name="kategoria" value="Cabriolet">Cabriolet</label>
        <label class="radio-inline"><input type="radio" name="kategoria" value="Van">Van</label>
       
        <input type="text" name="nrRegjistrimit" placeholder="Nr Regjistrimit" class="my-1 border-primary rounded">
        <input type="text" name="pershkrimi" placeholder="Pershkrimi" class="my-1 border-primary rounded">
        <input type="text" name="cmimi" placeholder="Cmimi" class="my-1 border-primary rounded">
        <input type="file" name="file" class="my-1 border-primary rounded">
        <input type="submit" name="submit" value="Shto" class="my-1">
    </form> -->
<div class="container-fluid p-4">
<form  action="upload.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
    <fieldset>

    <!-- Form Name -->
    <legend>Add a Car</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="emri">Emri</label>  
                <div class="col-md-5">
                    <input id="emri" name="emri" type="text" placeholder="Emri" class="form-control input-md" required="">                    
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="kategoria">Kategoria</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="kategoria-0">
                        <input type="radio" name="kategoria" id="kategoria-0" value="Sportive" checked="checked">
                            Sportive
                </label>
            </div>
            <div class="radio">
                <label for="kategoria-1">
                <input type="radio" name="kategoria" id="kategoria-1" value="Familjare">
                Familjare
                </label>
                </div>
            <div class="radio">
                <label for="kategoria-2">
                <input type="radio" name="kategoria" id="kategoria-2" value="Coupe">
                Coupe
                </label>
                </div>
            <div class="radio">
                <label for="kategoria-3">
                <input type="radio" name="kategoria" id="kategoria-3" value="Cabriolet">
                Cabriolet
                </label>
                </div>
            <div class="radio">
                <label for="kategoria-4">
                <input type="radio" name="kategoria" id="kategoria-4" value="Van">
                Van
                </label>
                </div>
            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="nrRegjistrimit">Nr Regjistrimit</label>  
            <div class="col-md-5">
            <input id="nrRegjistrimit" name="nrRegjistrimit" type="text" placeholder="Nr Regjistrimit" class="form-control input-md" required="">
                
            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="pershkrimi">Pershkrimi</label>  
            <div class="col-md-5">
            <input id="pershkrimi" name="pershkrimi" type="text" placeholder="Pershkrimi" class="form-control input-md" required="">
                
            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="cmimi">Cmimi</label>  
            <div class="col-md-5">
            <input id="cmimi" name="cmimi" type="text" placeholder="Cmimi" class="form-control input-md" required="">
                
            </div>
            </div>

            <!-- File Button --> 
            <div class="form-group">
            <label class="col-md-4 control-label" for="file">Car Photo</label>
            <div class="col-md-4">
                <input id="file" name="file" class="input-file" type="file">
            </div>
            </div>

            <!-- Button -->
            <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-primary btn-lg">ADD</button>
            </div>
            </div>

    </fieldset>
</form>
</div>





<?php 

    include "inc/footer.php";
?>