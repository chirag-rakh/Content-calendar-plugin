<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form-header"><p>Enter Event Details</p></div>
    
    <div class="form-box">
        <form method="post">
            <div class="row">
                
			    <span id=1>
                    <input type="text" name="occassion" placeholder="Enter Occasion" required>
                </span>

                <span id=1>
                    <input type="text" name="post_title" placeholder="Enter Post Title" required>
                </span>

			</div>

            <div class="row">
                <span id=1>
                    <input type="date" name="date" required>
                </span>

                <span id=1>
                    <select name="author" id="author" required>
                        <option value="">Select User</option>
                                <?php
                                    $users = get_users( array(
                                        'fields' =>array( 'ID', 'display_name' )
                                    ) );
                                    foreach ($users as $user) {
                                        echo '<option value="' . $user->ID . '">'. $user->display_name . '</option>';
                                    }
                                ?>
                    </select>
                </span> 
                
                <span id="1">
                <select name="reviewer" id="reviewer">
            <option value="">Select Reviewer</option>
                    <?php
                        $users = get_users( array(
                            'fields' =>array( 'ID', 'display_name' )
                        ) );
                        foreach ($users as $user) {
                            echo '<option value="' . $user->ID . '">'. $user->display_name . '</option>';
                        }
                    ?>
                </select>
                </span>
			</div>
            <div class="btn">
                <?php submit_button( 'Schedule Post' ); ?>
            </div>
        </form>
    </div>    
</body>
</html>