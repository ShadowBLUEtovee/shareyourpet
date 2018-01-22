<?php
/**
 * Template name: User Profile
 */
?>
<?php get_header() ?>
<div class="container-small left">
    <div class="profile profile-name">
        <h1>profile</h1>
    </div>
    
    <div class="profile profile-image">
        <?php if(!empty($image) ): ?>
            <?php echo $image ?>
        <?php else: ?>
            <img src="<?php echo get_template_directory_uri() . '/img/default.png' ?>">
        <?php endif ?>
    </div>
    <div class="profile profile-details">
        <ul>
            <li>name:test</li>
            <li>age:test</li>      
            <li>email:test</li> 
            <li>phone number:test</li>
        </ul>
    </div>
</div>
<div class="container-medium right">
    <?php //Här ska vi placera ut våra jobb som vår användare har gjort ?>
    <div class="job-article">
        <div class="content">
            <h3 class="title">jack russel</h3>
            <p class="history">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet mauris nunc. Vestibulum libero sem, cursus nec elit non, tempus viverra sapien. Morbi facilisis vestibulum tellus, a posuere nisl faucibus non. Nunc pharetra vel quam vel cursus. Fusce eu interdum ligula, sed iaculis turpis. Donec sit amet venenatis metus. In nec velit iaculis, aliquam felis quis, rutrum mauris. Fusce diam massa, facilisis et eros ac, consectetur lobortis tortor. Cras hendrerit aliquet dignissim. Sed sit amet felis dapibus sem mattis tincidunt. Mauris ac est eu tortor porta porta vel ut neque.
            </p>
        </div>
    </div> 
    <div class="job-article">
        <div class="content">
        <h3 class="title">papillion</h3>
        <p class="history">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet mauris nunc. Vestibulum libero sem, cursus nec elit non, tempus viverra sapien. Morbi facilisis vestibulum tellus, a posuere nisl faucibus non. Nunc pharetra vel quam vel cursus. Fusce eu interdum ligula, sed iaculis turpis. Donec sit amet venenatis metus. In nec velit iaculis, aliquam felis quis, rutrum mauris. Fusce diam massa, facilisis et eros ac, consectetur lobortis tortor. Cras hendrerit aliquet dignissim. Sed sit amet felis dapibus sem mattis tincidunt. Mauris ac est eu tortor porta porta vel ut neque. 
        </p>
            
        </div>
    </div>
    <div class="job-article">
        <div class="content">
        <h3 class="title">huski</h3>
        <p class="history">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet mauris nunc. Vestibulum libero sem, cursus nec elit non, tempus viverra sapien. Morbi facilisis vestibulum tellus, a posuere nisl faucibus non. Nunc pharetra vel quam vel cursus. Fusce eu interdum ligula, sed iaculis turpis. Donec sit amet venenatis metus. In nec velit iaculis, aliquam felis quis, rutrum mauris. Fusce diam massa, facilisis et eros ac, consectetur lobortis tortor. Cras hendrerit aliquet dignissim. Sed sit amet felis dapibus sem mattis tincidunt. Mauris ac est eu tortor porta porta vel ut neque. 
        </p>
            
        </div>
    </div>
    <div class="job-article">
        <div class="content">
        <h3 class="title">labrador</h3>
        <p class="history">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet mauris nunc. Vestibulum libero sem, cursus nec elit non, tempus viverra sapien. Morbi facilisis vestibulum tellus, a posuere nisl faucibus non. Nunc pharetra vel quam vel cursus. Fusce eu interdum ligula, sed iaculis turpis. Donec sit amet venenatis metus. In nec velit iaculis, aliquam felis quis, rutrum mauris. Fusce diam massa, facilisis et eros ac, consectetur lobortis tortor. Cras hendrerit aliquet dignissim. Sed sit amet felis dapibus sem mattis tincidunt. Mauris ac est eu tortor porta porta vel ut neque. 
        </p>
            
        </div>
    </div>
</div>
<?php get_footer() ?> 