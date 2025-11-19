<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optimized To-Do Item UI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Custom CSS for modern design and states */
        body {
            background-color: #f0f2f5;
            padding-top: 60px;
        }

        .todo-card {
            max-width: 100%;
            height: 100vh;
            margin: auto;
            border: none;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .list-group-item-optimized {
            transition: all 0.3s ease;
            cursor: pointer;
            border-left: 5px solid #0d6efd;
            margin-bottom: 8px;
            border-radius: 8px;
            padding: 15px 20px;
            /* Increased padding */
        }

        .list-group-item-optimized:hover {
            background-color: #e9ecef;
        }

        /* Styling for the COMPLETED state */
        .completed {
            border-left-color: #198754 !important;
            /* Green accent bar for done */
            opacity: 0.7;
            background-color: #e6f3ec !important;
            /* Lighter green background */
        }

        .completed .task-text {
            text-decoration: line-through;
            color: #6c757d !important;
            font-weight: 400;
            /* Less emphasis when done */
        }

        .task-text {
            font-size: 1.1em;
            font-weight: 600;
            /* Stronger font weight for clarity */
            color: #212529;
            transition: color 0.3s, text-decoration 0.3s;
        }

        #addTask {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card todo-card">
            <div class="card-header bg-primary text-white" style="border-radius: 12px 12px 0 0;">
                <h4 class="mb-0"> <i id="addTask" class="bi bi-plus-lg me-4" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i> TO Do List</h4>

            </div>
            <div class="card-body">
                @csrf
                <form method="POST" action="{{ route('task.submit') }}" enctype="multipart/form-data">
                    @csrf
                               
                                    
                            <div class="mb-3">
                                <label for="task_name" class="form-label">Task Name</label>
                                <input name="task_name" type="text" class="form-control" id="task_name" >

                                @error('task_name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                                        
                        <button type="submit" class="btn btn-primary">Add</button>
            </form>
                
            </div>
            
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

    <script>
        // Simple JavaScript function to demonstrate the 'better' completed state
        function toggleCompletion() {
            const item = document.getElementById('taskItem');
            const checkbox = document.getElementById('todo1');

            if (checkbox.checked) {
                item.classList.add('completed');
            } else {
                item.classList.remove('completed');
            }
        }
    </script>
</body>

</html>

