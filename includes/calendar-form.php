<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <form method="post">
            Date: <input type="date" name="date" required>
            Occasion: <input type="text" name="occassion" required>
            Post Title: <input type="text" name="post_title" required>
            Author: 
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
            Reviewer: 
            <select name="reviewer">
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
            </select>
            <div class="btn">
                <?php submit_button( 'Schedule Post' ); ?>
            </div>
        </form>
    </section>    
</body>
</html>