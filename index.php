    
    <?php $title = 'Index';
     require_once 'includes/header.php'; 
     require_once 'db/conn.php';

     $results = $crud->getSpecialities();
    
    ?>
    
        <!--
            - First Name   
            - Last Name
            - Date of Birthe (Use DatePicker)
            - Speciality (Database Admin, Software Developer, Web Administrator)
            - Email Address
            - Contact Number 
        -->
   
        <h1 class="text-center">Registration for IT Conference</h1>

    <form method="post" action="success.php">
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date Of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
        </div>
        <div class="mb-3">
            <label for="speciality" class="form-label">Area of Expertise</label>
        <select class="form-select" id="speciality" name="speciality">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                    <option value="<?php echo $r['speciality_id'] ?>"><?php echo $r['name']; ?></option> 
                <?php }?>
        </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input required type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone">
            <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
        </div>
    <br>
        <div class="d-grid gap-2">
            <button type="submit" name="submit" button class="btn btn-primary" >Submit Form</button>
            
        </div>

    </form>
    <br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>