// Call the dataTables jQuery plugin
$(document).ready(function() {
    $.fn.dataTable.ext.errMode = 'none';

    $('#business_table').DataTable({
        order: [[5, 'desc']],
        // paging: true
    });
    $('#feedbackTable').DataTable({
        order: [[4, 'desc']],
    });

    $('#managementTable').DataTable();
    $('#blog_table').DataTable();
    $('#milestoneTable').DataTable();
});

