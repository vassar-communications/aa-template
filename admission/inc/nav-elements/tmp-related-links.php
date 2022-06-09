<?php echo sec_regularContent(
    null,
    'theme-cream pb-1',
    'mw-100'
); ?>
    <h2>Related Topics</h2>




<?php echo end_sec_regularContent(); ?>


<?php echo sec_hasColumns(
    null,
    3,
    null,'theme-cream pt-1',
    'text-left theme-white'
); ?>


<?php echo item_col(); ?>
    <a class="card mb-4" href="#">
        <div class="card-body">
            <h4 class="card-title">Visit Campus</h4>
            <div class="card-text">
                <p>Get to know our vibrant community first-hand and learn more about the Vassar experience.</p>
                <i class="bi bi-plus"></i>


            </div>
        </div>
    </a>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
    <a class="card mb-4" href="#">
        <div class="card-body">
            <h4 class="card-title">Transfer Applicants</h4>
            <div class="card-text">
                <p>Students who have earned a high school diploma or GED and have enrolled at a college or university are welcome to apply as a transfer applicant.</p>
                <i class="bi bi-plus"></i>


            </div>
        </div>
    </a>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
    <a class="card mb-4" href="#">
        <div class="card-body">
            <h4 class="card-title">Applying to Vassar</h4>
            <div class="card-text">
                <p>Learn more about Vassar's application requirements and important deadlines.</p>
                <i class="bi bi-plus"></i>
            </div>
        </div>
    </a>
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>