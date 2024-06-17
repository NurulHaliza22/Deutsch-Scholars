<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query Modal</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Button to Open the Modal -->
<div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#queryModal">
    <button type="button" class="btn btn-primary">Run Query</button>
</div>

<!-- The Modal -->
<div class="modal fade" id="queryModal" tabindex="-1" aria-labelledby="queryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="queryModalLabel">Running Query</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Please wait while your query is being processed...
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Custom JS -->
<script>
    document.querySelector('.portfolio-item button').addEventListener('click', function() {
        // Show the modal
        $('#queryModal').modal('show');
        
        // Simulate a long-running process
        setTimeout(function() {
            // Process is done, hide the modal
            $('#queryModal').modal('hide');
        }, 5000); // 5 seconds for demonstration
    });
</script>

</body>
</html>
