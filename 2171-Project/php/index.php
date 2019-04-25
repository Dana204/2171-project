<?php include ('val.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

         <!-- GOOGLE FONTS -->
         <link href="https://fonts.googleapis.com/css?family=Amethysta|Bentham|Cormorant+Upright|Inknut+Antiqua|Mate|Playfair+Display+SC|Asar|IM+Fell+Great+Primer+SC|ZCOOL+XiaoWei|Bangers|Pacifico|Slabo+27px|Tangerine|Arbutus+Slab|Dancing+Script" rel="stylesheet"> 
    
         <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
         <!-- CSS link -->
         <link rel="stylesheet" type="text/css" href="../css/index.css">

         <!-- JSCRIPT/JQUERY -->
         <script src="https://code.jquery.com/jquery-3.1.1.min.js"    type="text/javascript"></script>
         <!-- <script src="../JS/index.js" type="text/javascript"></script> -->

         <!-- Font Awesome -->
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    
        <title>TRIEO</title>
    </head>
    <body>
    <header>

        <main class="">
            <!-- CONTACT SECTION -->
            <section class="p-lg-5 p-md-5 p-4" id="">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col col-lg-5 justify-content-center">     
                            <h1 class="text-center">Employee Submission Form</h1>
                       
                            <form action="<?= $_SERVER['PHP_SELF']; ?>" method= "POST">
                                <fieldset class="mb-4">
                                    <label for="" class="d-block" >Name</label>
                                    <div class="form-row">
                                        <div class="col">
                                            <input type="text" class="form-control form-control-lg d-block" placeholder="First name" value="<?= $fname ?>">
                                            <span class="error"><?= $fname_error ?></span>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control form-control-lg d-block" placeholder="Last name" value="<?= $lname ?>">
                                            <span class="error"><?= $lname_error ?></span>
                                        </div>
                                    </div>
                                    
                                </fieldset>
                                <fieldset class=" mb-3">
                                        <label for="email" class="d-block">Email</label>
                                        <input type="email" name="email" title="example@gmail.com" value="<?= $email ?>" class="d-block form-control form-control-lg">
                                        <span class="error"><?= $email_error ?></span>
                                </fieldset>
                                <fieldset class=" mb-3">
                                        <label for="dep" class="d-block">Department</label>
                                        <input type="text" name="dep" value="<?= $dep ?>" class="d-block form-control form-control-lg">
                                        <span class="error"><?= $dep_error ?></span>
                                </fieldset>
                                <fieldset class=" mb-3">
                                        <label for="location" class="d-block">Location of Incident</label>
                                        <input type="text" name="location" value="<?= $location ?>" class="d-block form-control form-control-lg">
                                        <span class="error"><?= $loc_error ?></span>
                                </fieldset>
                                
                                <fieldset class=" mb-3">
                                        <label for="category" class="d-block">Category</label>
                                        <!-- <select id="category" name="category" class="d-block form-control form-control-lg">
                                            <option value="NULL">Select category</option> 
                                            <option value="Infrastructure">Infrastructure</option>
                                            <option value="Electrical">Electrical</option>
                                            <option value="Plumbling">Plumbling</option>
                                    </select> -->
                                    <input type="text" value="<?= $category ?>" name="category" class="d-block form-control form-control-lg">
                                    <span class="error"><?= $category_error ?></span>
                                </fieldset>
                                <fieldset class=" mb-3">
                                        <label for="description" class="d-block">Description</label>
                                        <textarea name="description" row="5" class="d-block form-control form-control-lg" value="<?= $description ?>"></textarea>
                                        <span class="error"><?= $description_error ?></span>
                                </fieldset>
                                <div class="d-flex justify-content-between">
                                    <input type="submit" name="submit" 
                                class="submit p-2">
                                    <a href="#"
                                    class="submit p-2">View Entries</a>
                                </div>
                            </form>   
                        </div>
                    </div>
                </div>
            </section>
            <!-- END OF CONTACT SECTION -->
        </main>


        <script src="../js/script.js" type="text/javascript"></script>
         <!-- Optional JavaScript -->
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <script src="../js/indext.js"></script>
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          
    </body>
</html>