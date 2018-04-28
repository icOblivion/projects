<?php require_once('../private/initialize.php'); ?>

<?php

$current_page = $_GET['page'] ?? 1;
$per_page = 5;
$total_count = Project::count_all();

$pagination = new Pagination($current_page, $per_page, $total_count);

$sql = "SELECT * FROM projects ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";
$projects = Project::find_by_sql($sql);
?>

<?php $page_title = 'Projects'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

    <div id="list">
        <div id="actions">
            <a href="<?php echo url_for('/projects/new.php'); ?>">Add new project</a>
        </div>

        <table>
            <tr>
                <th>Id</th>
                <th>Project</th>
                <th>Date Created</th>
                <th>Programmer</th>
            </tr>

            <?php foreach ($projects as $project) { ?>
                <tr>
                    <td><?php echo h($project->id); ?></td>
                    <td>
                        <a href="<?php echo url_for('/projects/1calculator/index.php'); ?>"><?php echo h($project->project); ?></a>
                    </td>
                    <td><?php echo h($project->date); ?></td>
                    <td><?php echo h($project->programmer); ?></td>
                </tr>
            <?php } ?>
        </table>

        <?php
            $url = url_for('/index.php');
            echo $pagination->page_links($url)
        ?>

    </div>

<?php include_once(SHARED_PATH . '/footer.php'); ?>