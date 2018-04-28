<?php
/**
 * Created by IntelliJ IDEA.
 * User: The Emperor
 * Date: 3/31/2018
 * Time: 5:00 PM
 */

require_once('../../private/initialize.php');
require_login();

if (is_post_request()) {
    $args = $_POST['project'];
    $project = new Project($args);
    $result = $project->save();

    if ($result === true) {
        $session->message('The project was created successfully.');
        redirect_to(url_for('/index.php'));
    } else {

    }
} else {
    $project = new Project();
}
?>

<?php $page_title = 'Create Project'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<header>
    <a href="<?php echo url_for('/index.php'); ?>">Back to the list</a>
</header>

<div id="new project">
    <h1>Create Project</h1>

    <form action="<?php echo url_for('/projects/new.php'); ?>" method="post">
        <dl>
            <dt>Project Name</dt>
            <dd><input type="text" name="project[project]" value="<?php echo h($project->project); ?>"/></dd>
        </dl>
        <dl>
            <dt>Date (MONTH / YEAR ex: FEB/2008)</dt>
            <dd><input type="text" name="project[date]" value="<?php echo h($project->date); ?>"/></dd>
        </dl>
        <dl>
            <dt>Programmer Name</dt>
            <dd><input type="text" name="project[programmer]" value="<?php echo h($project->programmer); ?>"/></dd>
        </dl>

        <div><input type="submit" value="Create Project"></div>
    </form>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
