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
                <h4 class="mb-0"> <a class="text-white" href="{{ route('task.add') }}"><i id="addTask" class="bi bi-plus-lg me-4" ></i></a> TO Do List</h4>

            </div>
            <div class="card-body">

                <ul class="list-group list-group-flush">


                    @forelse ($tasks as $task)
                        <li id="taskItem"
                            class="list-group-item list-group-item-optimized d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">

                                <div class="form-check me-3">
                                    <form method="POST" action="{{ route('task.toggle',$task->id) }}">
                                        @csrf
                                        <input class="form-check-input fs-5" type="checkbox" value="" id="todo1" onchange="this.form.submit" @if ($task->status == "complete")
                                            checked
                                        @endif>

                                    </form>
                                </div>



                                {{-- <div class="form-check me-3">
                                    <form method="POST" action="{{ route('task.toggle', $task->id) }}">
                                        @csrf
                                        @method('PUT') 
                                        <input class="form-check-input fs-5" type="checkbox" value="1" id="todo{{ $task->id }}"
                                            onchange="this.form.submit()"
                                            @if ($task->status == 'complete') checked @endif>
                                    </form>
                                </div> --}}




                                <span class="task-text" id="taskText" onclick="toggleCompletion()">
                                    {{ $task->task_name }}
                                </span>
                            </div>
                            
                            

                            <div class="d-flex align-items-center">
                                {{-- <span class="badge bg-info text-dark rounded-pill me-3" title="Due Date">
                                    <i class="bi bi-clock me-1"></i> Tomorrow
                                </span> --}}
                                
                                <form method="POST" action="{{ route('task.delete', $task->id ) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm text-danger" title="Delete Task">
                                        <i class="bi bi-x-lg fs-5"></i>
                                    </button>
                                </form>
                            </div>
                        </li>
                    @empty
                        <p>No task found</p>
                    @endforelse



                </ul>
            </div>
            <div class="card-footer text-muted text-center bg-white" style="border-radius: 0 0 12px 12px;">
                <small>Click the checkbox to mark as completed.</small>
            </div>
        </div>
    </div>


     <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            
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

