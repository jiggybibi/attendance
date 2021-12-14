    
    <?php
        $title = 'Edit Record';
        require_once 'includes/header.php'; 
        require_once 'db/conn.php';

        $results = $crud->getSpecialities();

        if(!isset($_GET['id']))
        {
            //echo 'error';
            include 'includes/errormessage.php';
            header("Location: viewrecords.php");
        }
        else{
            $id = $_GET['id'];
            $attendee = $crud->getAttendeeDetails($id);
                
    ?>
    
         
        <h1 class="text-center">Edit Record</h1>

    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?>" />
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="lastname" name="lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date Of Birth</label>
            <input type="text" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="dob" name="dob">
        </div>
        <div class="mb-3">
            <label for="speciality" class="form-label">Area of Expertise</label>
        <select class="form-select" value="<?php echo $attendee['speciality'] ?>"="speciality" name="speciality">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                    <option value="<?php echo $r['speciality_id'] ?>" <?php if($r['speciality_id']==
                    $attendee['speciality_id']) echo 'selected' ?>>
                    <?php echo $r['name']; ?>
                </option> 
                <?php }?> 
        </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" value="<?php echo $attendee['emailaddress'] ?> "id="email" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" class="form-control" value="<?php echo $attendee['contactnumber'] ?>" id="phone" aria-describedby="phoneHelp" name="phone">
            <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
        </div>
    <br>
        <div class="d-grid gap-2">
            <button type="submit" name="submit" button class="btn btn-success" >Save Changes</button>
        </div>    
    </form>   

    <?php } ?>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>