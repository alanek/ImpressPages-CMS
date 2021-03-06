<script>
var ip = {
    baseUrl : <?php echo json_encode($ipBaseUrl) ?>,
    libraryDir : <?php echo json_encode($ipLibraryDir) ?>,
    themeDir : <?php echo json_encode($ipThemeDir) ?>,
    moduleDir : <?php echo json_encode($ipModuleDir) ?>,
    theme : <?php echo json_encode($ipTheme) ?>,
    zoneName : <?php echo json_encode($ipZoneName) ?>,
    pageId : <?php echo json_encode($ipPageId) ?>,
    revisionId : <?php echo json_encode($ipRevisionId) ?>
};
</script>
<?php foreach ($javascript as $levelKey => $level) { ?>
    <?php foreach ($level as $fileKey => $record) { ?>
        <?php if ($record['type'] == 'file') { ?>
            <script type="text/javascript" src="<?php echo $record['value'] ?>"></script>
        <?php } ?>
        <?php if ($record['type'] == 'content') { ?>
            <script type="text/javascript">
        <?php echo $record['value']; ?>
            </script>
        <?php } ?>
    <?php } ?>
<?php } ?>
